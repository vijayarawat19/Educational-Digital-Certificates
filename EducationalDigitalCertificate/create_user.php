<?php
    require_once './db.inc.php';
    
    $password = sha1('abc#123');
    $query = "insert into users values('ndhagarra@gmail.com','$password','admin','Nagendra Dhagarra','Favourite Movie','PK',1,'sjkdhfasbfjksdhgfksjdfhgsdfsfgja')";
    mysql_query($query);
    $password = sha1('xyz#123');
    $query = "insert into users values('alok@gmail.com','$password','member','Alok Bisht','Favourite Movie','Dangal',1,'hjsdfg8w7654gfcsdtfusodj')";
    mysql_query($query);
?>
