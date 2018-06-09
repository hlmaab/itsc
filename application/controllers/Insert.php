<? php
$con = mysql_connect("localhost","itsc","password");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("itsc", $con);

$sql="INSERT INTO `s_info` (`id`, `name`, `location`, `category`, `fee`, `img`, `creator`, `created_date`, `last_modifier`, `last_modified_date`) 
VALUES ('$_POST[id]', '$_POST[name]','$_POST[location]', '$_POST[category]', '$_POST[fee]', '$_POST[img]', '$_POST[creator]', '$_POST[created_date]', '$_POST[last_modifier]', '$_POST[last_modified_date]')";

if (!mysql_query($sql,$con))

  {
  die('Error: ' . mysql_error());
  }

echo "1 record added";

mysql_close($con)

?>