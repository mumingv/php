<?php
// make the DSN
$dsn = 'mysql:host=localhost;dbname=world;';
$user = 'user';
$password = 'secret';
    
// $validCountries array
$validCountries = array ('USA', 'CAN', 'GU', 'ISR');  

// validate country
if (isset($_GET['country']) && in_array($_GET['country'], $validCountries))
{
    $country = $_GET['country'];
}
else
{
    $country = 'USA'; 
}

// Initialize $order
$order = (!isset($_GET['order'])) ? FALSE : $_GET['order'];
try
{
  $dbh = new PDO($dsn, $user, $password);
  // set the error mode to exception 
  $dbh->setAttribute(PDO::ATTR_ERRMODE, 
      PDO::ERRMODE_EXCEPTION);
  // Use a conditional switch to determine the order
  switch ($order) {
    case 'district':
      $orderby = " District";
      break;
    case 'pop':
      $orderby = " Population DESC";
      break;
    default:
      $orderby = " Name";
      break;
  }
  $format = 'SELECT * FROM city WHERE CountryCode = :country ORDER BY %s';
  $sql = sprintf($format, $orderby);
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':country', $country);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print $row['Name'] . "\t";
    print $row['CountryCode'] . "\t";
    print $row['Population'] . "\n";
  }
}
catch (PDOException $e)
{
  echo 'PDO Exception Caught.  ';
  echo 'Error with the database: <br />';
  echo 'SQL Query: ', $sql;
  echo 'Error: ' . $e->getMessage();
}
?>
