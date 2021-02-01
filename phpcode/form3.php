<?php

?>
<html>
<head>
<link rel="stylesheet" href="form3.css">
</head>
<table>
<form>

<tr class="color">
<th colspan="2" class="left">Sign Up</th>
</tr>

<tr>
<td class="right">FIRST Name</td>
<td><input type="text" name="fname" id="fname" placeholder="Enter First Name"></td>
</tr>

<tr>
<td class="right">Last Name</td>
<td><input type="text" name="lname" id="lname" placeholder="Enter Last Name"></td>
</tr>

<tr>
<td class="right">Date of Birth</td>
<td>
<select name="date">
<option value="date">Date</option>
<option value="1" >1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
<select name="month">
<option value="month">Month</option>
<option value="January" >January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="September">Sepyember</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select name="year">
<option value="year">Year</option>
<option value="2000" >2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</td>
</tr>

<tr>
<td class="right">Gender</td>
<td><input type="radio" name="gender" id="gender1" value="female">Female
    <input type="radio" name="gender" id="gender2" value="male">Male</td>
</tr>

<tr>
<td class="right">Country</td>
<td><select name="country">
<option value="country">Country</option>
<option value="India" >India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
</select>
</td>
</tr>

<tr>
<td class="right">E-mail:</td>
<td><input type="text" name="email" placeholder="Enter Email"></td>
</tr>

<tr>
<td class="right">Phone</td>
<td><input type="number" name="phone" placeholder="Enter Phone"></td>
</tr>

<tr>
<td class="right">Password</td>
<td><input type="password" name="password" id="password" placeholder="Enter Password"></td>
</tr>

<tr>
<td class="right">Confirm Password</td>
<td><input type="password" name="password" id="password" placeholder="Re-Enter Password"></td>
</tr>

<tr>
<td class="right" colspan="2"><input type="checkbox" name="checkbox" value="1">I Agree to the Terms of use</td>
</tr>

<tr class="color">
<td colspan="2" class="right"><input type="submit" value="Submit">
    <input type="submit" value="Cancel"></td>
</tr>
</form>
</tabel>
</html>