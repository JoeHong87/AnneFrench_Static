 <?php
 		if($_REQUEST['mail']!="") {	
		$Subject="A New User has subscribed";	
		//haeder information**************************
		$headers = "From: webmaster@anne-french.com \r\n" ;
		$headers  .= "MIME-Version: 1.0\n";		
		$headers   .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
 		$msg="'<strong>$Subject</strong>' to the Mailing List ::<br/><br/>
		Name : ".$_REQUEST['name']."<br/>
		Zip : ".$_REQUEST['zip']."<br/>
		Email : ".$_REQUEST['email']."<br/>
		Phone : ".$_REQUEST['phone']."<br/>
		Comments : ".$_REQUEST['comments']."<br/>";
		mail('john@anne-french.com',$Subject,$msg,$headers);
		header('Location: confirm-01.htm');
		}
 ?>
 <html>
<head>
<title>Anne French Fine Arts</title>
<meta name="description" content="Anne French Fine Arts, Join emailing list">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta name="Microsoft Border" content="t">
</head>
<script Language="JavaScript" Type="text/javascript">
function FrontPage_Form1_Validator(theForm)
{
 
  if (theForm.name.value == "")
  {
    alert("Please enter a value for the \"Name\" field.");
    theForm.name.focus();
    return (false);
  }
 
  if (theForm.name.value.length < 1)
  {
    alert("Please enter at least 1 characters in the \"Name\" field.");
    theForm.name.focus();
    return (false);
  }
 
  if (theForm.email.value == "")
  {
    alert("Please enter a value for the \"Email\" field.");
    theForm.email.focus();
    return (false);
  }
 
  if (theForm.email.value.length < 6)
  {
    alert("Please enter at least 6 characters in the \"Email\" field.");
    theForm.email.focus();
    return (false);
  }
  return (true);
}
</script>
<body bgcolor="#3D4FA3" text="#0000FF" link="#004A95" vlink="#808080" alink="#FFFF00"><!--msnavigation--><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td>
<p>&nbsp;</p>

</td></tr><!--msnavigation--></table><!--msnavigation--><table dir="ltr" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><!--msnavigation--><td valign="top">

<div align="center">
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" id="table4">
		<tr>
			<td bgcolor="#3D4FA3">
					<div align="center">

<table border="0" width="927" id="table10" height="613">
	<tr>
		<td valign="top">
		<div align="center">
			<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
				<tr>
					<td width="219" bgcolor="#3D4FA3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<p>&nbsp;<font color="#FFFFFF"> </font><u><b>
					<font color="#FFFFFF">About</font></b></u></p>
					<p><font color="#FFFFFF">&nbsp; <b> <u>Artists<font face="Times New Roman">&#1060;</font></u></b></font></p>
					<p><b><font color="#FFFFFF">&nbsp;<a href="To_Buy_and_Sell.htm">
					<u><font color="#FFFFFF">To Buy Painting</font></u></a></font></b></p>
					<p><b><font color="#FFFFFF">&nbsp; <u>
					<a href="To_Buy_and_Sell.htm"><font color="#FFFFFF">To Sell Painting</font></a></u></font></b></p>
					<p><b><font color="#FFFFFF">&nbsp;<a href="show_my_wall.htm"><font color="#FFFFFF">
					</font> <u><font color="#FFFFFF">Home Viewing (Interio)</font></u></a></font></b></p>
					<p><b><font color="#FFFFFF">&nbsp; <u>Join our email list</u></font></b></p>
					<p><b><font color="#FFFFFF">&nbsp; <u>FAQ</u></font></b></p>
					<p>&nbsp;</p>
					<p><font color="#FFFFFF">&nbsp;&nbsp;&nbsp; tel:&nbsp;&nbsp; <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					(305) 632-2032</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;email:&nbsp;&nbsp; </font>
					<a href="mailto:info@anne-french.com"><font color="#FFFFFF">info@anne-french.com</font></a></p>
					<p>&nbsp;</p>
					<p><font color="#FFFFFF">&nbsp;&nbsp;&nbsp; Anne French Fine 
					Arts<br>
&nbsp;&nbsp;&nbsp;&nbsp;9334 NW 50th Doral Cir. S.<br>
&nbsp;&nbsp;&nbsp;&nbsp;Miami, Florida 33178</font><br>
&nbsp;&nbsp;&nbsp;&nbsp; <font color="#EAEED6"><br>
&nbsp; <br>
					<br>
&nbsp;&nbsp;&nbsp;&nbsp; </font></p>
					<p>&nbsp;</p>
					</td>
					<td valign="top" align="center" bgcolor="#C0C0C0">
					<div align="center">
						<table border="1" width="100%" id="table13" bgcolor="#3D4FA3" cellpadding="0">
							<tr>
								<td valign="top" align="center" width="136">
								<font color="#FFFFFF"><b>
								<a href="g-frenchc.htm"><font color="#FFFFFF">French</font></a></b></font></td>
								<td valign="top" align="center" width="129">
								<font color="#FFFFFF"><b>
								<a href="g-americanc.htm"><font color="#FFFFFF">American</font></a></b></font></td>
								<td valign="top" align="center" width="131">
								<font color="#FFFFFF"><b>
								<a href="g-contemporary.htm">
								<font color="#FFFFFF">Contemporary</font></a></b></font></td>
								<td valign="top" align="center" width="126"><b>
								<font color="#FFFFFF"><a href="g2-le-club.htm">
								<font color="#FFFFFF">Le Club</font></a></font><a href="g2-le-club.htm"><font color="#EAEED6">
								</font>
								<font color="#FF0000" face="Times New Roman">&#9567;</font><font color="#EAEED6">
								</font><font color="#FFFFFF">Sale</font></a></b></td>
								<td valign="top" align="center">
								<font color="#FFFFFF"><b>
								<a href="Artist%20List.htm">
								<font color="#FFFFFF">Search by Artist</font></a></b></font></td>
							</tr>
						</table>
					</div>
					<table border="0" width="100%" id="table14" cellpadding="9" bgcolor="#3D4FA3">
						<tr>
							<td align="center"><b><font color="#FFFFFF">Join our 
							email list</font></b></td>
						</tr>
					</table>
					<table border="0" width="100%" id="table15" bgcolor="#3D4FA3">
						<tr>
							<td align="center">

	<table border="6" cellpadding="6" style="border-collapse: collapse" width="100%" id="table16" bordercolor="#99B6B6">
		<tr>
      <td width="100%" bgcolor="#EAEED6" background="http://www.anne-french.com/2004/BG-118.gif" bordercolor="#E5AD81">
		<div align="center">
		<FORM ACTION="join_email_list.php?mail=1" METHOD="POST" enctype="multipart/form-data">	
	<table border="10" cellpadding="4" style="border-collapse: collapse" width="100%" id="table17" bordercolor="#003399">
		<tr>
      <td width="100%" bgcolor="#E9F3EB" background="BG/BG-120-2.jpg" bordercolor="#E5AD81">

							<p align="center">
							<img border="0" src="2010/1554-3.jpg" width="472" height="208"></p>
							<p align="left"><b><font size="5" color="#000080">&nbsp;&nbsp;
							</font><font color="#000080">Your name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
							<INPUT NAME="name" TYPE="text" SIZE="35">
							<br>
&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp; Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
							<INPUT NAME="email" TYPE="text" SIZE="35">
							<br>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp; Zip Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
							<INPUT NAME="zip" TYPE="text" SIZE="35">
							<br>
							<br>
&nbsp;&nbsp;&nbsp;&nbsp; Telephone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
							<INPUT NAME="phone" TYPE="text" SIZE="35">
							<br>
&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp; Your special interest&nbsp;</font></b><font color="#000080"><b>&amp; Comments&nbsp; 
							&nbsp;&nbsp;&nbsp;:&nbsp; </b></font>
<textarea rows="7" name="comments" cols="35"></textarea>
							</p>
							<p align="left">&nbsp;</p>
							<p align="left"><font color="#000080"><b>&nbsp;&nbsp;&nbsp;&nbsp;
							<span style="background-color: #FFFF00">
							<a href="confirm-01.htm">
							<INPUT name="submit" TYPE="submit" VALUE="Submit">
							</a></span></b></font></p>
							<p align="left">&nbsp;</p>
      </td>
    				</tr>
	</table>
	</FORM>

				</div>
      </td>
    				</tr>
	</table>

							<p>&nbsp;</p>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
</table>

					</div>
					<p>
					</tr>
	</table>
</div>
