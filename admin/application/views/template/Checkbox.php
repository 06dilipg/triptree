

<form method="post">
<table border="1" align="center">

<tr>
<td>Education</td>
<td><input type="checkbox" name="education[]" value="diploma"

<?php 
if(in_array("diploma",$b))
{
	  echo "checked";
}

?>

>Diploma
<input type="checkbox" name="education[]" value="b.tech" <?php 
if(in_array("b.tech",$b))
{
	  echo "checked";
}

?>>B.tech
<input type="checkbox" name="education[]" value="mba" <?php 
if(in_array("mba",$b))
{
	  echo "checked";
}

?>>MBA
</td>
</tr>

<tr>
<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</form>