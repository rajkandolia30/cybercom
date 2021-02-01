<?php

?>
<html>
    <head>
    <link rel="stylesheet" href="form2.css"></link>
<table>
<form action="form2.php" method="POST">
<tr>
<td colspan="2"><strong><center>User Form</center></strong></td>
</tr>
<tr>
<ul>
<td><li>FIRST NAME</li></td>
<td><input type="text" name="name" id="name"></td>
</tr>

<tr>
<td><li>PASSWORD</li></td>
<td><input type="password" name="password" id="password"></td>
</tr>

<tr>
<td><li>Gender</li></td>
<td><input type="radio" name="gender" id="gender1" value="female">Female
    <input type="radio" name="gender" id="gender2" value="male">Male</td>
</tr>

<tr>
<td><li>ADDRESS</li></td>
<td><textarea name="address" cols="22" rows="4" id="address"></textarea></td>
</tr>

<tr>
<td><li>D.O.B</li></td>
<td><select name="month">
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
<input type="number" min="01" max="31" name="date">
<input type="number" min="1950"name="year" max="2021"></td>
</tr>

<tr>
<td><li>SELECT GAMES</li></td>
<td><input type="checkbox" name="game[]" value="Hockey" multiple>Hockey
    <input type="checkbox" name="game[]" value="Football"multiple>Football
    <input type="checkbox" name="game[]" value="Cricket"multiple>Cricket
    <input type="checkbox" name="game[]" value="Vollyball"multiple>Vollyball</td>
</tr>

<tr>
<td><li>MARITAL STATUS</li></td>
<td><input type="radio" name="status" id="status" value="married">Married
    <input type="radio" name="status" id="status" value="unmarried">Unmarried</td>
</tr>
</ul>
<tr>
<td></td>
<td><input type="reset" value="Reset">
    <input type="submit" value="Submit"></td>
</tr>

<tr>
<td></td>
<td><input type="checkbox" name="agree" value="agree">I accept this agrement</td>
</tr>

</form>
</table>
</html>