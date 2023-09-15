<?php
include("db.inc.php");
$mail=$_POST['EnrollmentNumber'];
$Pass=$_POST['Password'];
$login="select * from student where EnrollmentNumber = '$mail'  and Password='$Pass' " ;
$result=$conn->query($login);

$configs['config'] = 'C:\xampp\apache\conf\openssl.cnf'; 
     $config = array(
      //"digest_alg" => "sha512",
      "private_key_bits" => 512,                     //Bytes    512 1024 2048 4096, etc
      "private_key_type" => OPENSSL_KEYTYPE_RSA,     //Encryption type
  );
     
 //Create public and private key return resources
 $res = openssl_pkey_new($config+$configs);
  
 /*Get the private key from the obtained resource    And assign the private key to $<span style="font-family: Arial, Helvetica, sans-serif;">privKey</span>
 openssl_pkey_export($res, $privKey, null, $config+$configs);
 
// Get public key
$publickey=openssl_pkey_get_details($res);
$publickey=$publickey["key"];

echo "Private Key:<BR>.$privkey<br><br>Public Key:<BR>$publickey<BR><BR>";*/

if ($res === false) die('Failed to generate key pair.'."\n"); 

    if (!openssl_pkey_export($res, $privKey, "phrase", $config+$configs)) die('Failed to retrieve private key.'."\n"); 

    // Extract the private key from $res to $privKey
    openssl_pkey_export($res, $privKey, "phrase", $config);
/*
    echo "<br/>";
    echo "Private Key = ".$privKey;
    echo "<br/>";
*/
    // Extract the public key from $res to $pubKey
    $pubKey = openssl_pkey_get_details($res);
    $pubKey = $pubKey["key"];

    echo "<br/>";
    echo "Public Key = ".$pubKey;
    echo "<br/>";

    
$data = $_POST['EnrollmentNumber'];
echo "Clear text:<br><br>$data<BR><BR>";

//openssl_public_encrypt($cleartext, $crypttext, $pubkey);
openssl_public_encrypt($data, $encrypted, $pubKey);
    
echo "Crypt text:<br>".$encrypted;"<BR><BR>";

//openssl_private_decrypt($crypttext, $decrypted, $privkey);
openssl_private_decrypt($encrypted, $decrypted, openssl_pkey_get_private($privKey, "phrase"));


echo "Decrypted text:<BR>$decrypted<br><br>";
$insert ="UPDATE `student` SET `hashcode`='.$encrypted' WHERE EnrollmentNumber=$mail";
if($conn->query($insert)==true)
        {
	      echo"Registration successfull";  
		  //header("location:fetch_student.php");
        }
		

		else
		{
		 echo $conn->error;								
		}
	
?>
