<?php
/*
 	HTML Email Template
	Code:

*/



$body = <<<HTML
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor='#fff' >

<style>
* {margin: 0;padding: 0;font-family:Verdana, san-serif;}
h1 {font-size:20px;}
h2 {font-size:16px;}
ul {margin-left:20px;}
li {font-size:12px;list-style: none;}
 a { color:#811f09; color:#811f09; color:#811f09; }
</style>

<table width="100%" cellpadding="10" cellspacing="0" bgcolor='#fff' >
<tr>
<td valign="top" align="center">

<table width="600" cellpadding="0" cellspacing="0">

<tr>
<td style="background-color:#FFFFFF;border-top:0px solid #333333;border-bottom:1px solid #FFFFFF;"><center><a href="http://www.alagames.com"><img src="http://www.alagames.net/files/images/email/headers/head_basic_asff_white.jpg" BORDER="0" title="ASF Foundation"  alt="ASF Foundation" align="center"></a></center></td>
</tr>

<tr>
<td align="center">
<h1 style="margin-bottom:10px;">Thank you for registering for the<br><span style="font-size:24px;">ASF Foundation Newsletter!</span></h1>
</td>
</tr>

<tr>
<td align="left">

<p style="font-size:13px;text-align:justify;text-indent:10px;margin-bottom:5px;"><strong>This email confirms we have officially received your registration to receive the ASF Foundation Newsletter. Our newsletter is sent out monthly full of information about all the programs and events of the ASF Foundation.</strong></p>

<p style="font-size:13px;text-align:justify;text-indent:10px;margin-bottom:5px;">If you ever have questions or just want to know more about the ASF Foundation, please don't hesitate to contact us. Please contact Chris Wilkins at <strong>1-800-467-0422</strong> or <a href="mailto:chris.wilkins@alagames.com">chris.wilkins@alagames.com</a>.</p>

</td>
</tr>

<tr>
<td style="background-color:#3d426b;border-top:10px solid #FFFFFF;" height="50" cellpadding="20" valign="center" align="center">

<span style="font-size:16px;font-weight:bold;color:#fff;padding:20px;">Alabama Sports Festival Foundation</span><br>
<span style="font-size:12px;font-weight:bold;color:#fff;padding:20px;">www.asffoundation.org or call 800.467.0422</span>

</td>
</tr>

</table>

</td>
</tr>

</table>

</body>
</html>
HTML;

return $body;

?>