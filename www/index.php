<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>TIMEZONE CONVERTER</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>TIMEZONE CONVERTER</h1>

<p>Showing contents of timezones table:</p>

<table border="1">
<tr><th>Country in Time Zone</th><th>Time Zone</th></tr>

<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM timezones ORDER BY name");

while($row = $q->fetch()){
  echo "<tr><td>".$row["code"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</table>

<h2>Enter the timezone number you would like to be converted</h2>
<form method=post action="http://192.168.2.13/conv.php">

<label for = "fvision">Timezone Country:</label>
<select name = "TimezoneCountry">

<option value ="Baker Island, US">Baker Island, US</option>
<option value ="Jarvis Island">Jarvis Island</option>
<option value ="Hawaiian Islands">Hawaiian Islands</option>
<option value ="Alaska, USA">Alaska, USA</option>
<option value ="Los Angeles, USA">Los Angeles, USA</option>
<option value ="Denver, USA">Denver, USA</option>
<option value ="Mexico City, Mexico">Mexico City, Mexico</option>
<option value ="New York, USA">New York, USA</option>
<option value ="Bolivia">Bolivia</option>
<option value ="Rio, Brazil">Rio, Brazil</option>
<option value ="South Georgia">South Georgia</option>
<option value ="Cabo Verde">Cabo Verde</option>
<option value ="Iceland">Iceland</option>
<option value ="Germany">Germany</option>
<option value ="Finland">Finland</option>
<option value ="Turkey">Turkey</option>
<option value ="Oman">Oman</option>
<option value ="Pakistan">Pakistan</option>
<option value ="Kazakhstan">Kazakhstan</option>
<option value ="Vietnam">Vietnam</option>
<option value ="China">China</option>
<option value ="Japan">Japan</option>
<option value ="Sydney, Australia">Sydney, Australia</option>
<option value ="Vanuatu">Vanuatu</option>
<option value ="New Zealand">New Zealand</option>
<option value ="Tonga">Tonga</option>
<option value ="Line Islands">Line Islands</option>
</select>

<input type = "submit">

</form>
    
    
</body>
</html>
