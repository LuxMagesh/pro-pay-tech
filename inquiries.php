<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

<?php

$efname_=$_POST['f_name'];
$elname=$_POST['l_name'];
$eidnumber=$_POST['id_num'];
$edate = $_POST['reg_date'];
$enew_date = date("d/m/Y", strtotime($date));
$eemail=$_POST['email'];
$emobile = $_POST['mobile'];


// $to="info@leopardcommunications.com";
$to="luxmotsumi@gmail.com";
$message="
NAME:\t$efname\n
SURNAME:\t$elname\n
ID NUMBER:\t$eidnumber\n
DATE OF BIRTH:\t$enew_date
MOBILE:\t$emobile\n;"



if(mail($to, "On-line Inquiry Contact Us",$message)) {
    echo "The email was sent successfully.";   
// echo file_get_contents('thankyou.html');
} else {
echo "There was a problem sending the mail. Please check that you filled in the form correctly.";
}

<p>&nbsp;</p><p>&nbsp;</p>

?>