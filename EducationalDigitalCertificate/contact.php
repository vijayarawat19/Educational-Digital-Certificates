<!DOCTYPE html>
<html>

    <head>
        <title>SIS - Contact</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div >
                 <h1 id="pagetitle">Contact us</h1>
    
    <div id="note">
      <p>We are here to answer any questions you may have about Digital Educational Certificate
        . Reach out to us and we'll respond as soon as we can.</p>
      <p>Even if there is something you have always wanted to experience and
        can't find it in Student information system , let us know and we promise we'll do our
        best to find it for you and send you there.</p>
    </div>
    
    <div id="container">
  <form action="contactq.php" method="POST" >
    <lable><b>Name</b></lable>
    <input type="text"  name="Name" placeholder="Your name.." id="cntct">

    <lable><b>E-Mail</b> </lable>
    <input type="email"  name="Email" placeholder="Your last name.." id="cntct">

    

    <lable><b>Message</b></lable>
    <textarea id="cntct" name="Message" placeholder="Message for us" style="height:100px"></textarea>

    <input type="submit" value="Submit" id="submit">
  </form>
</div>
       <p id="cntctmail">Mail us:-sissytem1@gmail.com <br> contact us :- +9173513333554</p>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
