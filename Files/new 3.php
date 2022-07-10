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
<?
$textfield=$_POST['txtname'];
$textfield2=$_POST['txtemail'];
$textfield3=$_POST['txtnum'];
$textfield4=$_POST['txtmsg'];

// $to="info@leopardcommunications.com";
$to="luxmotsumi@gmail.com";
$message="
NAME:\t$textfield\n
EMAIL:\t$textfield2\n
CONTACT:\t$textfield3\n
MESSAGE:\t$textfield4";

if(mail($to, "On-line Inquiry Contact Us",$message)) {
// echo file_get_contents('thankyou.html');
} else {
echo "There was a problem sending the mail. Please check that you filled in the form correctly.";
}
?>
<p>&nbsp;</p><p>&nbsp;</p>