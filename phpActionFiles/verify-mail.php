
<?php

$to  = $email; // Send email to our user
$subject = 'Admission Approved '; // Give the email a subject 
$message = '

<style>@media screen {


}
/* CLIENT-SPECIFIC STYLES */
body,
table,
td,
a {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
table,
td {
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
}
img {
    -ms-interpolation-mode: bicubic;
}
/* RESET STYLES */
img {
    border: 0;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
}
table {
    border-collapse: collapse !important;
}
body {
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}
/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}
/* MOBILE STYLES */
@media screen and (max-width:600px) {
    h1 {
        font-size: 32px !important;
        line-height: 32px !important;
    }
}
/* ANDROID CENTER FIX */
div[style*="margin: 16px 0;"] {
    margin: 0 !important;
}</style>
<!-- HIDDEN PREHEADER TEXT -->

<table border="0" width="100%" cellspacing="0" cellpadding="0"><!-- LOGO -->
<tbody>
<tr>
<td align="center" bgcolor="#FFA73B">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
    <tr>
    <td style="padding: 40px 10px 40px 10px;" align="center" valign="top">&nbsp;</td>
    </tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#FFA73B">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
    <tr>
    <td style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;" align="center" valign="top" bgcolor="#ffffff">
        <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Hello! '.$name.'</h1>
    </td>
    </tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px; height: 482px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
    <tr style="height: 359px;">
    <td style="padding: 20px 30px 40px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; height: 359px;" align="left" bgcolor="#ffffff">
        <p style="margin: 0;">On behalf of WoodLands University College, I am pleased to offer our congratulations to you on our acceptance of your admission to WoodLands University College.&nbsp; 
        <br>
        <br>
        <br>Your Login email : '.$email.' &nbsp;&nbsp; 
        <br>Your Login Password : '.$password.' &nbsp;&nbsp; 
        <br>
        <br>
        <br>We encourage your prompt attention in this matter so that we can better facilitate your enrollment process for the fall 2014 semester. We hope that you find your experience here at WoodLands University College to be fulfilling, satisfying and all that you hope it will be. We wish you all the best and thank you for applying to WoodLands University College.&nbsp; 
        <br>
        <br>
        <br>Yours sincerely,&nbsp;
        <br>Admissions Department&nbsp; 
        <br>WoodLands University College&nbsp;
        </p>
    </td>
    </tr>
    <tr style="height: 17px;">
    <td style="height: 17px;" align="left" bgcolor="#ffffff">&nbsp;</td>
    </tr>
    <tr style="height: 36px;">
    <td style="padding: 0px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; height: 36px;" align="left" bgcolor="#ffffff">&nbsp;</td>
    </tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>


';





require_once("../smtp/class.phpmailer.php");
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = ""; //here 
$mail->Port = 465; 
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Username = ""; // here
$mail->Password = ""; // here
$mail->SetFrom(""); //here
$mail->Subject = $subject;
$mail->Body =$message;
$mail->AddAddress($to);
$mail->send();

?>                                                                     