<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
   $gender=$_GET['gender'];
   $mysqli = mysqli_connect('localhost','root','*****','simple');

 

   /* check connection */
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$query = "SELECT count(*) AS Arrests,city FROM features INNER JOIN precinct where features.pct = precinct.pct AND arstmade = 'Y' AND sex ='$gender' group by city";

if ($result = mysqli_query($mysqli, $query)) {
  $out = array();

  while ($row = $result->fetch_assoc()) {
    $out[] = $row;
  }

  /* encode array as json and output it for the ajax script*/
  echo json_encode($out);

  /* free result set */
  mysqli_free_result($result);

  /* close connection*/
  $mysqli->close();
}

/* close connection*/
$mysqli->close();

    
?>

			  