<html>
<body>
<form action="output.php" method="post">
<table align="center" bgcolor="#c9bfe0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="3" align="center"><h1><b>Registration form</h1></b></td>
</tr>
<tr><td>Username:</td><td><input type="text" name="unm"style="border-color:red" required></td></tr><br>
<tr>
<td>Password:</td><td><input type="text" name="pwd"style="border-color:red"></td>
</tr>
<tr>
<td>Name:</td><td><input type="text" name="nm"style="border-color:red" required></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="add"style="border-color:red" required></td>
</tr>
<tr>
<td>Country:</td>
<td>
<select id="cont" name="cout" style="border-color:red" required>
<option value="">(pleses select a country)</option>
<option value="India">India</option>
<option value="USA">USA</option>
<option value="Dubai">Dubai</option>
</select></td>
</tr>
<tr>
<td>ZIP Code:</td><td><input type="text" name="zip"style="border-color:red" required></td>
</tr>
<tr>
<td>Email:</td><td><input type="email" name="eml"style="border-color:red" required></td></tr>
<tr>
<td>Sex:</td><td><input type="radio" name="gen" value="male" checked>male
<input type="radio" name="gen" value="Female">Female</td>
</tr>
<tr>
<td>Language:</td><td><input type="checkbox" name="lng" value="english"style="border-color:red" checked>English
<input type="checkbox" value="gujrati"style="border-color:red">Non-English
</td>
</tr>
<tr>
<td>About:</td>
<td><textarea id="abt" name="abt" rows="3" cols="30" style="border-color:red" required></textarea>
</tr>
<tr>
<td><input type="submit" name="submit" style="border-color:red"></td>
</tr>
</table>
</body>
</html>


