<HTML>
<HEAD>
<TITLE>Generated E-mail Form</TITLE>
</HEAD>
<BODY>



	<table border="0" cellpadding="0" style="border-collapse: collapse" width="750" id="table1">
		<tr>
			<td bgcolor="#3D4FA3">
			<p align="center">
			<img border="0" src="image%20AF/anne-french-fine-arts.jpg" width="335" height="61"></td>
		</tr>
	</table>

	<H2><font size="4"><br>
	</span></font><span style="font-weight: 400"><font size="4">Please fill out the following information and press the SUBMIT button.<BR>
	</font></span></H2>
<P>
	<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
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
//--></script><!--webbot BOT="GeneratedScript" endspan --><FORM METHOD="POST" ACTION="/cgi-bin/cgiemail/mailtemp.txt" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<INPUT NAME="success" TYPE="hidden" VALUE="http://www.anne-french.com/Return.htm">
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=5 width="747">
<TR>
<TD><B>Your Name</B></TD>
<TD>
<!--webbot bot="Validation" s-display-name="Name" b-value-required="TRUE" i-minimum-length="1" --><INPUT NAME="name" TYPE="text" SIZE="35"><BR></TD>
</TR>
<TR>
<TD><B>Zip Code</B></TD>
<TD><INPUT NAME="zip" TYPE="text" SIZE="35"><BR></TD>
</TR>

<TR>
<TD><B>Email Address</B></TD>
<TD>
<!--webbot bot="Validation" s-display-name="Email" b-value-required="TRUE" i-minimum-length="6" --><INPUT NAME="email" TYPE="text" SIZE="35"><BR></TD>
</TR>

<TR>
<TD><B>Phone Number </B></TD>
<TD><INPUT NAME="phone" TYPE="text" SIZE="35"><BR></TD>
</TR>
<TR>
<TD><B>Comments<br>
&nbsp;</B></TD>
<TD><textarea rows="7" name="comments" cols="55">I am interested in this painting by -  <?php echo $_GET['paintingid']; ?> </textarea><BR></TD>
</TR>
</TABLE>
<BR>
<BR>
<INPUT TYPE="submit" VALUE="Submit"></FORM>
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="750" id="table3">
		<tr>
			<td width="167" bgcolor="#3D4FA3">
			<p align="center"><a href="g-frenchc.htm">
			<font color="#FFFFFF">French</font></a></td>
			<td width="126" bgcolor="#3D4FA3">
			<p align="center"><a href="g2-le-club.htm">
			<font color="#FFFFFF">Le Club</font></a></td>
			<td width="129" bgcolor="#3D4FA3">
			<p align="center"><a href="g-americanc.htm">
			<font color="#FFFFFF">American</font></a></td>
			<td width="167" bgcolor="#3D4FA3">
			<p align="center"><a href="g-contemporary.htm">
			<font color="#FFFFFF">Contemporary</font></a></td>
			<td width="153" bgcolor="#3D4FA3">
			<p align="center"><a href="private%20collection.htm">
			<font color="#FFFFFF">Private Coll</font></a></td>
			<td width="4" bgcolor="#3D4FA3">
			&nbsp;</td>
			<td width="191" bgcolor="#3D4FA3">
			<p align="center"><a href="index.html">
			<font color="#FFFFFF">Home</font></a><font color="#FFFFFF">//Contact</font></td>
			<td bgcolor="#3D4FA3">
			&nbsp;</td>
		</tr>
	</table>
	</BODY>
</HTML>