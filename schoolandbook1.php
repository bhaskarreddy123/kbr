<!--
   Script name  : Ajax Auto Suggest
   File Name 	: schoolandbooks.php
   Developed By : Malinda Ramadhani (Tanzania)
   Email Id 	: mramadhani@email.com
   last Updated : 4 sep 2011
   This program is freeware.There is no any fucking copyright and bla bla bla.
   You can use it for your personal use.You can also make any changes to this script.
   But before using this script i would appericiate your mail.That will encourage me a lot.
   Any suggestions are always welcome.
   Have a fun with programming.
   comment: progremmer if u are not  understand these code please u should not edit any piece of codes.   
-->
<?php
require('con_db.php');
connect_db();
$sqlcu="select max(rid) from mastertb";
$resultcu =mysql_query($sqlcu);
$rowcu=mysql_fetch_array($resultcu);
include('calculate.php');
//include('formload.php');
include('reffer.php');
include('refferA3.php');
include('refferA4.php');
include('refferA5.php');
include('refferA6.php');
include('refferA7.php');
include('refferA8.php');
include('refferA9.php');
include('refferA10.php');
include('reffersc.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>teaAPPS</TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
  <META http-equiv=Content-Type content="text/html; charset=utf-8"><!-- calendar stylesheet --><LINK 
title=win2k-cold-1 media=all 
href="Simple calendar setups [popup calendar]_files/calendar-win2k-cold-1.css" 
type=text/css rel=stylesheet><!-- main calendar program -->
<SCRIPT src="Simple calendar setups [popup calendar]_files/calendar.js" 
type=text/javascript></SCRIPT>
<!-- language for the calendar -->
<SCRIPT src="Simple calendar setups [popup calendar]_files/calendar-en.js" 
type=text/javascript></SCRIPT>
<!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
<SCRIPT src="Simple calendar setups [popup calendar]_files/calendar-setup.js" 
type=text/javascript></SCRIPT>
 
 
 <script type="text/javascript">
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function getSuggestions(value) {
	if(value != ""){ 
	$.post("users.php", {userPart:value}, function(data) {
		$("#suggestions").html(data);
		runCSS();
	});
	}else{
		removeSuggestions();
	}
}

function removeSuggestions() {
	$("#suggestions").html("");
	stopCSS();	
}

function addText(value) {
	$("#userAi").val(value);	
}

function runCSS() {
	$("#suggestions").css({
		'border' : 'solid',
		'border-width' : '1px'
	});
}

function stopCSS() {
	$("#suggestions").css({
		'border' : '',
		'border-width' : ''
	});
}

</script>
<script type="text/javascript">
function formload()
{
document.form1.cat1.value="";
document.form1.cat2.value="";
document.form1.cat3.value="";
document.form1.cat4.value="";
document.form1.cat5.value="";
document.form1.cat6.value="";
document.form1.cat7.value="";
document.form1.cat8.value="";
document.form1.cat9.value="";
document.form1.cat10.value="";
}
</script>
 <style type="text/css">
<!--
.style1 {font-size: 15px}
body,td,th {
	color: #0000FF;
}
body {
	background-color: #FFFFD9;
}
#Layer1 {
	position:absolute;
	width:118px;
	height:25px;
	z-index:1;
	left: 85px;
	top: 19px;
}
input#userA {	width: 355px;	
}
input#userAi {	width: 355px;	
}
input#userA2 {	width: 355px;	
}
input#userA3 {	width: 355px;	
}
input#userA4 {	width: 355px;	
}
input#userA5 {	width: 355px;	
}
input#userA6 {	width: 355px;	
}
input#userA7 {	width: 355px;	
}
input#userA8 {	width: 355px;	
}
input#userA9 {	width: 355px;	
}
input#userA10 {	width: 355px;
}
#contenta {
	margin-top: 2px;
	width: 355px;	
}
#content {
	margin-top: 2px;
	width: 355px;	
}
#content2 {
	margin-top: 2px;
	width: 355px;	
}
#contentA3 {
	margin-top: 2px;
	width: 355px;	
}
#contentA4 {
	margin-top: 2px;
	width: 355px;	
}
#contentA5 {
	margin-top: 2px;
	width: 355px;	
}
#contentA6 {
	margin-top: 2px;
	width: 355px;	
}
#contentA7 {
	margin-top: 2px;
	width: 355px;	
}
#contentA8 {
	margin-top: 2px;
	width: 355px;	
}
#contentA9 {
	margin-top: 2px;
	width: 355px;	
}
#contentA10 {
	margin-top: 2px;
	width: 355px;	
}
#suggestions {
	text-align: left;
	padding-left: 3px;	
}
#suggestions1 {
	text-align: left;
	padding-left: 3px;	
}
#suggestionsA3 {
	text-align: left;
	padding-left: 3px;	
}
#suggestionsA4 {
	text-align: left;
	padding-left: 3px;	
}
#suggestionsA5 {
	text-align: left;
	padding-left: -3px;	
}
#suggestionsA6 {
	text-align: left;
	padding-left: -3px;	
}
#suggestionsA7 {
	text-align: left;
	padding-left: -3px;	
}
#suggestionsA8 {
	text-align: left;
	padding-left: -3px;	
}
#suggestionsA9 {
	text-align: left;
	padding-left: -3px;	
}
#suggestionsA10 {
	text-align: left;
	padding-left: -3px;	
}
#link:hover {
	background-color: #f0f0f0;
	cursor: pointer;	
}
#link1:hover {
	background-color: #f0f0f0;
	cursor: pointer;	
}
#linkA3:hover {
	background-color: #f0f0f0;
	cursor: pointer;	
}
#linkA4:hover {
	background-color: #f0f0f0;
	cursor: pointer;	
}
#linkA5:hover {
    margin: -1px;
	background-color: #f0f0f0;
	padding: 5px;
	cursor: pointer;
}
#linkA7:hover {
    margin: -1px;
	background-color: #f0f0f0;
	padding: 5px;
	cursor: pointer;
}
#linkA8:hover {
    margin: -1px;
	background-color: #f0f0f0;
	padding: 5px;
	cursor: pointer;
}
#linkA9:hover {
    margin: -1px;
	background-color: #f0f0f0;
	padding: 5px;
	cursor: pointer;
}
#linkA10:hover {
    margin: -1px;
	background-color: #f0f0f0;
	padding: 5px;
	cursor: pointer;
}
input#userA {width: 355px;	
}
.style3 {font-size: 15px}
.style4 {
	font-size: 15px;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
-->
 </style>
<script type="text/javascript">
function add()
{
document.form1.action="addmaster.php";
document.form1.submit();
}
function mimi()
{
document.form1.action="calculate2.php";

}

</script>
</HEAD>
 <BODY onLoad="formload()">
 <center>
   <form name="form1" method="post" action="" onload formload()>
     <div class="main">
       <div id="ajax_response"></div>
       <label for="label"></label>
       <label for="Submit"></label>
       <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#8789E7" bgcolor="#FFFFD9">
         <tr bordercolor="DFEFFF">
           <td width="12%" height="24"><div align="left" class="style1"><font face="Verdana">id </font></div></td>
           <td><font color="#000000">
             <input name="bid" type="text" disabled id="bid" value="<?php echo $rowcu['0']+0;?>" size="10">
           </font></td>
           <td colspan="2">&nbsp;</td>
           <td colspan="2"><a href="main.php" class="style1">Main Menu</a></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td><span class="style1"><font face="Verdana">School</font></span></td>
           <td colspan="5"> 
		  <div id="content">
             <input  type="text" name="userA" id="userA" onBlur="setTimeout('removeSuggestionssc()', 200)" onKeyUp="getSuggestionssc(this.value);" size="35" />
			 <div id="suggestionssc">
          </div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="24"><div align="left" class="style1"><font face="Verdana">Date </font></div></td>
           <td colspan="5"><font color="#000000">
             <input name="datee" type="text" id="f_datee_e" value="<?php echo date("Y/m/d") ?>" size="30" />
           <IMG 
      src="Simple calendar setups [popup calendar]_files/img.gif" alt="date" name="f_trigger_b" width="20" height="14" id=f_trigger_b  
      style="BORDER-RIGHT: red 1px solid; BORDER-TOP: red 1px solid; BORDER-LEFT: red 1px solid; CURSOR: pointer; BORDER-BOTTOM: red 1px solid" onMouseOver="this.style.background='red';" 
      onmouseout="this.style.background=''"></font></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="15" colspan="6"><div align="left">
               <div align="left" class="style1">
                 <p>&nbsp;</p>
               </div>
           </div></td>
         </tr>
         <tr   bgcolor="#0000ad">
           <td height="14"><div align="left">
               <div align="left">
                 <div align="left" class="style1">
                   <div align="left">
                     <div align="left">
                       <div align="left" class="style3">
                         <div align="center" class="style1 style5"><strong><font face="Verdana">Qty  </font></strong></div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
           </div></td>
           <td><div align="left">
               <div align="left">
                 <div align="left" class="style1">
                   <div align="center"><strong><span class="style5"><font face="Verdana">Qty</font> #</span></strong> </div>
                 </div>
               </div>
           </div></td>
           <td><div align="left">
               <div align="left">
                 <div align="left" class="style1">
                   <div align="center" class="style5"><strong><font face="Verdana">Category </font></strong></div>
                 </div>
               </div>
           </div></td>
           <td><div align="left">
             <div align="left">
               <div align="left" class="style4"><font face="Verdana">Select Book Title </font></div>
             </div>
           </div></td>
           <td width="6%"><div align="left">
               <div align="left">
                 <div align="left" class="style1">
                   <div align="left" class="style5"><strong><font face="Verdana">Cost</font></strong></div>
                 </div>
               </div>
           </div></td>
           <td width="12%">             <div align="left" class="style1">
              <div align="center" class="style5"><strong><font face="Verdana">Total  </font></strong></div>
           </div></td></tr>
         <tr bordercolor="DFEFFF">
           <td height="26"><div align="left">
               <div align="left">
                 <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
               </div>
           </div></td>
           <td width="9%"><div align="left"> <font color="#000000"> &nbsp;
                     <input name="qty1" type="text" id="qty1" value="<?php echo $qty1;?>" size="4">
           </font></div></td>
           <td width="13%">
             <select name="cat1"  id="cat1" onload="formload()">
			
               <?php
	  while($rowm=mysql_fetch_array($resultm))
	  {?>
               <option selected><?php echo $rowm['1'];?></option>
               <?php }?>
            </select>
           </label></td>
           <td width="48%">
			<div id="content">
			  <input  type="text" name="userAi" id="userAi" onBlur="setTimeout('removeSuggestions()', 200)" onKeyUp="getSuggestions(this.value);" size="35" />
	       <div id="suggestions"></div></div>		   </td>
           <td><font color="#000000">
             <input name="cost1" type="text" id="date1" value="<?php echo $cost1;?>" size="4" />
           </font></td>
           <td><div align="right"><font color="#000000">
             <input name="tcost1" type="text" id="tcost1" value="<?php echo $tcost1;?>" size="4" />
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="26"><div align="left">
               <div align="left">
                 <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
               </div>
           </div></td>
           <td><div align="left"> <font color="#000000"> &nbsp;
                     <input name="qty2" type="text" id="qty2" value="<?php echo $qty2;?>" size="4">
           </font></div></td>
           <td><select name="cat2" id="cat2">
               <?php
	  while($row1=mysql_fetch_array($result1))
	  {?>
               <option selected><?php echo $row1['1'];?></option>
               <?php }?>
           </select></td>
           <td>
		   <div id="content">
             <input  type="text" name="userA2" id="userA2" onBlur="setTimeout('removeSuggestions1()', 200)" onKeyUp="getSuggestions1(this.value);" size="60" />
			 <div id="suggestions1"></div>
             </div>
           <td><font color="#000000">
             <input name="cost2" type="text" id="date12" value="<?php echo $cost2;?>" size="4" />
           </font></td>
           <td><div align="right"><font color="#000000">
             <input name="tcost2" type="text" id="tcost2" value="<?php echo $tcost2;?>" size="4" />
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="26"><div align="left">
               <div align="left">
                 <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
               </div>
           </div></td>
           <td><div align="left"> <font color="#000000">&nbsp;
                     <input name="qty3" type="text" id="date13" value="<?php echo $qty3;?>" size="4" />
                     <script language="" type="text/javascript">
    Calendar.setup({
        inputField     :    "f_datee_e",           //*
        ifFormat       :    "%Y/%m/%d ",
        showsTime      :    true,
        button         :    "f_trigger_b",        //*this is equal to IMG id 
        step           :    1
    });
                  </script>
           </font></div></td>
           <td><select name="cat3" id="cat3">
               <?php
	  while($row2=mysql_fetch_array($result2))
	  {?>
               <option selected><?php echo $row2['1'];?></option>
               <?php }?>
           </select></td>
           <td><div id="content">
             <input  type="text" name="userA3" id="userA3" onBlur="setTimeout('removeSuggestionsA3()', 200)" onKeyUp="getSuggestionsA3(this.value);" size="60" />
			 <div id="suggestionsA3"></div></div>             </td>
           <td><font color="#000000">
             <input name="cost3" type="text" id="cost3" value="<?php echo $cost3;?>" size="4" />
           </font></td>
           <td><div align="right"><font color="#000000">
             <input name="tcost3" type="text" id="tcost3" value="<?php echo $tcost3;?>" size="4" />
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="26"><div align="left">
               <div align="left">
                 <div align="left" class="style1"><font face="Verdana">Quantity</font></div>
               </div>
           </div></td>
           <td><div align="left"> <font color="#000000">&nbsp;
                     <input name="qty4" type="text" id="date14" value="<?php echo $qty4;?>" size="4" />
                     <script language="" type="text/javascript">
    Calendar.setup({
        inputField     :    "f_datee_e",           //*
        ifFormat       :    "%Y/%m/%d ",
        showsTime      :    true,
        button         :    "f_trigger_b",        //*this is equal to IMG id 
        step           :    1
    });
                  </script>
           </font></div></td>
           <td><select name="cat4" id="cat4">
               <?php
	  while($rowk=mysql_fetch_array($resultk))
	  {?>
               <option selected><?php echo $rowk['1'];?></option>
               <?php }?>
           </select></td>
           <td><div id="content">
             <input  type="text" name="userA4" id="userA4" onBlur="setTimeout('removeSuggestionsA4()', 200)" onKeyUp="getSuggestionsA4(this.value);" size="60" />
             <div id="suggestionsA4"></div></div>          </td>
           <td><font color="#000000">
             <input name="cost4" type="text" id="cost4" value="<?php echo $cost4;?>" size="4" />
           </font></td>
           <td><div align="right"><font color="#000000">
             <input name="tcost4" type="text" id="tcost4" value="<?php echo $tcost4;?>" size="4" />
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="26"><div align="left">
               <div align="left">
                 <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
               </div>
           </div></td>
           <td><div align="left"> <font color="#000000">&nbsp;
                     <input name="qty5" type="text" id="date15" value="<?php echo $qty5;?>" size="4" />
                     <script language="" type="text/javascript">
    Calendar.setup({
        inputField     :    "f_datee_e",           //*
        ifFormat       :    "%Y/%m/%d ",
        showsTime      :    true,
        button         :    "f_trigger_b",        //*this is equal to IMG id 
        step           :    1
    });
                  </script>
           </font></div></td>
           <td><select name="cat5" id="cat5">
               <?php
	  while($rowma=mysql_fetch_array($resultma))
	  {?>
               <option selected><?php echo $rowma['1'];?></option>
               <?php }?>
           </select></td>
           <td><div id="content">
             <input  type="text" name="userA5" id="userA5" onBlur="setTimeout('removeSuggestionsA5()', 200)" onKeyUp="getSuggestionsA5(this.value);" size="60" />
             <div id="suggestionsA5"></div></div>           </td>
           <td><font color="#000000">
             <input name="cost5" type="text" id="cost5" value="<?php echo $cost5;?>" size="4" />
           </font></td>
           <td><div align="right"><font color="#000000">
             <input name="tcost5" type="text" id="tcost5" value="<?php echo $tcost5;?>" size="4" />
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="20"><div align="left">
             <div align="left">
               <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
             </div>
           </div></td>
           <td height="20"><div align="left"> <font color="#000000"> &nbsp;
                   <input name="qty6" type="text" id="qty6" value="<?php echo $qty6;?>" size="4">
           </font></div></td>
           <td height="20"><select name="cat6" id="cat6">
             <?php
	  while($rowcat6=mysql_fetch_array($resultcat6))
	  {?>
             <option selected><?php echo $rowcat6['1'];?></option>
             <?php }?>
           </select></td>
           <td><div id="content">
		   <input  type="text" name="userA6" id="userA6" onBlur="setTimeout('removeSuggestionsA6()', 200)" onKeyUp="getSuggestionsA6(this.value);" size="60" />
		   <div id="suggestionsA6"></div></div></td>
           <td height="20"><font color="#000000">
             <input name="cost6" type="text" id="cost1" value="<?php echo $cost6;?>" size="4" />
           </font></td>
           <td height="20"><div align="right"><font color="#000000">
             <input name="tcost6" type="text" id="tcost6" value="<?php echo $tcost6;?>" size="4"/>
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="23"><div align="left">
             <div align="left">
               <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
             </div>
           </div></td>
           <td height="23"><div align="left"> <font color="#000000"> &nbsp;
                   <input name="qty7" type="text" id="qty7" value="<?php echo $qty1;?>" size="4">
           </font></div></td>
           <td height="23"><select name="cat7" id="cat7">
             <?php
	  while($rowqty7=mysql_fetch_array($resultqty7))
	  {?>
             <option selected><?php echo $rowqty7['1'];?></option>
             <?php }?>
           </select></td>
           <td><div id="content">
		   <input  type="text" name="userA7" id="userA7" onBlur="setTimeout('removeSuggestionsA7()', 200)"onKeyUp="getSuggestionsA7(this.value);"size="60" />
		   <div id="suggestionsA7"></div></div>		   </td>
           <td height="23"><font color="#000000">
             <input name="cost7" type="text" id="cost6" value="<?php echo $cost6;?>" size="4" />
           </font></td>
           <td height="23"><div align="right"><font color="#000000">
             <input name="tcost7" type="text" id="tcost7" value="<?php echo $tcost6;?>" size="4"/>
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="23"><div align="left">
             <div align="left">
               <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
             </div>
           </div></td>
           <td height="23"><div align="left"> <font color="#000000"> &nbsp;
                   <input name="qty8" type="text" id="qty8" value="<?php echo $qty1;?>" size="4">
           </font></div></td>
           <td height="23"><select name="cat8" id="cat8">
             <?php
	  while($rowqty8=mysql_fetch_array($resultqty8))
	  {?>
             <option selected><?php echo $rowqty8['1'];?></option>
             <?php }?>
           </select></td>
           <td><div id="content"><input  type="text" name="userA8" id="userA8" onBlur="setTimeout('removeSuggestionsA8()', 200)" onKeyUp="getSuggestionsA8(this.value);" size="60" />
		   <div id="suggestionsA8"></div></div>		   </td>
           <td height="23"><font color="#000000">
             <input name="cost8" type="text" id="cost62" value="<?php echo $cost6;?>" size="4" />
           </font></td>
           <td height="23"><div align="right"><font color="#000000">
             <input name="tcost8" type="text" id="tcost8" value="<?php echo $tcost6;?>" size="4"/>
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="23"><div align="left">
             <div align="left">
               <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
             </div>
           </div></td>
           <td height="23"><div align="left"> <font color="#000000"> &nbsp;
                   <input name="qty9" type="text" id="qty9" value="<?php echo $qty1;?>" size="4">
           </font></div></td>
           <td height="23"><select name="cat9" id="cat9">
             <?php
	  while($rowqty9=mysql_fetch_array($resultqty9))
	  {?>
             <option selected><?php echo $rowqty9['1'];?></option>
             <?php }?>
           </select></td>
           <td><div id="content"><input  type="text" name="userA9" id="userA9" onBlur="setTimeout('removeSuggestionsA9()', 200)" onKeyUp="getSuggestionsA9(this.value);" size="60" />
		   <div id="suggestionsA9"></div></div>		   </td>
           <td height="23"><font color="#000000">
             <input name="cost9" type="text" id="cost63" value="<?php echo $cost6;?>" size="4" />
           </font></td>
           <td height="23"><div align="right"><font color="#000000">
             <input name="tcost9" type="text" id="tcost9" value="<?php echo $tcost6;?>" size="4"/>
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="23"><div align="left">
             <div align="left">
               <div align="left" class="style1"><font face="Verdana">Quantity </font></div>
             </div>
           </div></td>
           <td height="23"><div align="left"> <font color="#000000"> &nbsp;
                   <input name="qty10" type="text" id="qty10" value="<?php echo $qty1;?>" size="4">
           </font></div></td>
           <td height="23"><select name="cat10" id="cat10">
             <?php
	  while($rowqty10=mysql_fetch_array($resultqty10))
	  {?>
             <option selected><?php echo $rowqty10['1'];?></option>
             <?php }?>
           </select></td>
 <td><div id="content"><input  type="text" name="userA10" id="userA10" onBlur="setTimeout('removeSuggestionsA10()', 200)" onKeyUp="getSuggestionsA10(this.value);" size="60" />
		   <div id="suggestionsA10"></div></div>		   </td>
           <td height="23"><font color="#000000">
             <input name="cost10" type="text" id="cost64" value="<?php echo $cost6;?>" size="4" />
           </font></td>
           <td height="23"><div align="right"><font color="#000000">
             <input name="tcost10" type="text" id="tcost10" value="<?php echo $tcost6;?>" size="4"/>
           </font></div></td>
         </tr>
         <tr bordercolor="DFEFFF">
           <td height="28" colspan="3"><label for="Submit"></label></td>
           <td height="28"><input type="submit" name="Submit" value="Save"  alt="save records?" id="Submit" onClick="add()"></td>
           <td height="28">&nbsp;</td>
           <td height="28"><font color="#000000">
             <label for="Submit"></label>
           </font></td></tr>
       </table>
       <p>
         <?php
	include "footer.html";
	?>
       </p>
     </div>
   </form>
   <p>&nbsp;</p>
 </center>
 </BODY>
</HTML>