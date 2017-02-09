<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
   $arrest=$_GET['arrest'];
   $mysqli = mysqli_connect('localhost','root','****','simple');

 

   /* check connection */
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$query = "SELECT count(*) AS People,frisked,city AS City FROM main INNER JOIN precinct where main.pct = precinct.pct AND arstmade = '$arrest' group by city,frisked,arstmade";

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
