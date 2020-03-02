<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sugarplumconsignment mailing list</title>
<style type="text/css">
<!--
body {
	background-color: #663366;
}
body,td,th {
	font-family: Comic Sans MS, Corbel, Courier New;
	font-size: 16px;
	color: #8CCD3C;
}
td {
	padding: 0 .5em;
	}
	
.style1 {color: #FF0000}
-->
</style></head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" bgcolor="#FFFFFF"><img src="../png/sugarplum_color_small.png" width="374" height="140"></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF33">
    <td height="21" colspan="5">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="5" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="194" height="201" bgcolor="#3399CC">&nbsp;</td>
    <td height="201" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="394" height="201" bgcolor="#FFFFFF"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="394" height="201">
      <param name="movie" value="../../Announcements.swf">
      <param name=quality value=high>
      <embed src="../../Announcements.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="394" height="201"></embed>
    </object></td>
    <td height="201" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="194" height="201" bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF"><span class="style1">
      <?php
	  /*
if (!isset($_POST['Submit']) || $_SERVER['REQUEST_METHOD'] != "POST") {
    exit("<p>You did not press the submit button; this page should not be accessed directly.</p>");
} else {
    $exploits = "/(content-type|bcc:|cc:|document.cookie|onclick|onload|javascript|alert)/i";
    $profanity = "/(beastial|bestial|blowjob|clit|cock|cum|cunilingus|cunillingus|cunnilingus|cunt|ejaculate|fag|felatio|fellatio|fuck|fuk|fuks|gangbang|gangbanged|gangbangs|hotsex|jism|jiz|kock|kondum|kum|kunilingus|orgasim|orgasims|orgasm|orgasms|phonesex|phuk|phuq|porn|pussies|pussy|spunk|xxx)/i";
    $spamwords = "/(viagra|phentermine|tramadol|adipex|advai|alprazolam|ambien|ambian|amoxicillin|antivert|blackjack|backgammon|texas|holdem|poker|carisoprodol|ciara|ciprofloxacin|debt|dating|porn)/i";
    $bots = "/(Indy|Blaiz|Java|libwww-perl|Python|OutfoxBot|User-Agent|PycURL|AlphaServer)/i";

    if (preg_match($bots, $_SERVER['HTTP_USER_AGENT'])) {
        exit("<p>Known spam bots are not allowed.</p>");
    }
    foreach ($_POST as $key => $value) {
        $value = trim($value);

        if (empty($value)) {
           exit("<p>Empty fields are not allowed. Please go back and fill in the form properly.</p>");
			
        } elseif (preg_match($exploits, $value)) {
            exit("<p>Exploits/malicious scripting attributes aren't allowed.</p>");
        } elseif (preg_match($profanity, $value) || preg_match($spamwords, $value)) {
            exit("<p>That kind of language is not allowed through our form.</p>");
        }

        $_POST[$key] = stripslashes(strip_tags($value));
    }

    if (!ereg("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,6})$",strtolower($_POST['email']))) {
        exit("<p>That e-mail address is not valid, please use another.</p>");
    }
*/
    $recipient = "seanbbyfield@gmail.com";
    $subject = "Someone would like to be added to the mailing list";

    $message = "You've received an e-mail through your website mail form: \n";
    $message .= "Name: {$_POST['name']} \n";
    $message .= "E-mail: {$_POST['email']} \n";
	$message .= "Alternate E-mail: {$_POST['email2']} \n";
    $message .= "Tel: {$_POST['tel']} \n";
	$message .= "Address: {$_POST['address']} \n";
	$message .= "Address2: {$_POST['address2']} \n";
	$message .= "City: {$_POST['city']} \n";
	$message .= "State: {$_POST['state']} \n";
	$message .= "Zip: {$_POST['zip']} \n";
	$message .= "Interests: {$_POST['advertising']},{$_POST['donate']},{$_POST['selling']},  {$_POST['shop']},{$_POST['volunteer']} \n";
    $message .= "Message: {$_POST['message']} \n";
	

    $headers = "From: sugarplumconsignment.com <$recipient> \n";
    $headers .= "Reply-To: <{$_POST['email']}>";

    if (mail($recipient,$subject,$message,$headers)) {
        echo "<p>Thank you! Your mail was successfully sent. Thank you for your time.</p>";
    } else {
        echo "<p>Sorry, there was an error and your mail was not sent. Please find an alternative method of contacting the webmaster.</p>";
    }
//}
?>
    </span>       </td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1">
    </span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#3399CC"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#3399CC">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="5" bgcolor="#FFFF33"><span class="style1"></span></td>
  </tr>
</table>


</body>
</html>


