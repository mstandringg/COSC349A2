<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>CONVERSION</title>



</head>
<body>

<h1>Conversion Results</h1>
<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM timezones ORDER BY name");


    
    if(isset($_POST['TimezoneCountry'])){
        $timezone = $_POST['TimezoneCountry'];
     
        date_default_timezone_set('Etc/GMT+0');
           $time = date("g:i a");
        while($row = $q->fetch()){
           
    
            if($timezone == $row["code"]){
                $str = strtotime($time) + 13*60*60;
                $timenz = date("g: i a", $str);
                echo "Time in New Zealand is ".$timenz."<br>";
                
               
                $str2 = strtotime($time) + (((int)$row["name"])*60*60);
                $timechng = date("g: i a", $str2);
                
                echo "Time in ".$row["code"]." is ".$timechng."<br> ";
                echo "The UTC offset for ".$row["code"]." is ".$row["name"];
            }
               
            
            
        
          
        }
        
    }
        //switch($timezone){
        //   case 'Baker Island, US':
        //       echo "FUCK YOU CUNT";
        //       echo $timezone;
        //        break;
        
    

  

?>

</body>
</html>
