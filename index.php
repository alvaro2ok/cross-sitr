<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
// client-ip.php : Demo script by nixCraft <www.cyberciti.biz>
// get an IP address
$ip = $_SERVER['REMOTE_ADDR'];
// display it back
echo "<h2>Client IP Demo</h2>";
echo "Your IP address : " . $ip;
echo "<br>Your hostname : ". gethostbyaddr($ip) ;
//echo '<img src="images/greenrose.jpg" />';
echo ' <table border=3> <tr><td><h1>its image </h1><img src="greenrose.jpg" alt="loading" /><td><td>hello</td><tr></table>';
?>

 
 </body>
</html>