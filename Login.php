<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	//echo "button clicked";
}

$radio="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["gender"]!="")
		$radio=$_POST["gender"];
	//echo "button clicked";
}
?>
<div >
    <center><img src="Pilot.jpg" height=200 width=1300 style="opacity:0.4" ></center>
    <br>
   <center> <h1 style="color:rgb(70,60,180)">Welcome</center>
   <center><p style="color:rgb(70,60,120)">Farmers are the backbone of a nation</center>
   
</div>
<center>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $radio=="")
 echo "<span style='color:red;'>Select one</span>";
?>
<br><br>
Skills:<input type="checkbox" name="skills[]" value="problem-solving">problem-solving
<input type="checkbox" name="skills[]" value="farm management">farm management
<input type="checkbox" name="skills[]" value="organuzational skills">organuzational skills
<br><br>
Bank:<select name="bnk">
<option value="UCB Bank">UCB Bank</option>
<option value="islami bank">islami bank</option>
<option value="Dhaka bank">Dhaka bank</option>
</select><br><br>
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
<input type="submit" value="Click" name="btnClick">
</form>
</center>