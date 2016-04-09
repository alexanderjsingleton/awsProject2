<?php // sqltest.php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['delete']) && isset($_POST['id']))
  {
    $id   = get_post($conn, 'id');
    $query  = "DELETE FROM mymembers WHERE id='$id'";
    $result = $conn->query($query);
    if (!$result) echo "DELETE failed: $query<br>" .
      $conn->error . "<br><br>";
  }

 if (isset($_POST['first_name'])   &&
      isset($_POST['last_name']))
  {
      $first_name   = get_post($conn, 'first_name');
      $album = get_post($conn, 'last_name');
      $email= get_post($conn, 'email');
      $phone= get_post($conn, 'phone');
      $address= get_post($conn, 'address');
      $city= get_post($conn, 'city');
      $state= get_post($conn, 'state');
      $zip_code= get_post($conn, 'zip_code');
      $website= get_post($conn, 'website');
      $hosting= get_post($conn, 'hosting');
      $project= get_post($conn, 'project');
      $query    = "INSERT INTO mymembers (first_name, last_name, email, phone, address, city, state, zip_code, website, hosting, project)  VALUES" .
        "('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$state', '$zip_code', '$website', '$hosting', '$project')";
      $result   = $conn->query($query);
      if (!$result) echo "INSERT failed: $query<br>" .
        $conn->error . "<br><br>";
  }

   echo <<<_END
  <form action="mysqltest.php" method="post"><pre>
     First_name <input type="text" name="first_name">
     Last_name <input type="text" name="last_name">
     Email <input type="text" name="email">
     Phone <input type="text" name="phone">
     Address <input type="text" name="address">
     City <input type="text" name="city">
     State <input type="text" name="state">
     Zip_code <input type="text" name="zip_code">
     Website <input type="text" name="website">
     Hosting Last_name <input type="text" name="hosting">
     Project <input type="text" name="project">
           <input type="submit" value="ADD RECORD">
  </pre></form>
_END;

  $query  = "SELECT * FROM mymembers";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
  <pre>
    id $row[0]
    First_name $row[1]
    Last_name $row[2]
    Email $row[3]
    Phone $row[4]
    Address $row[5]
    City $row[6]
    State $row[7]
    Zip_code $row[8]
    Website $row[9]
    Hosting $row[10]
    Project $row[11]
  </pre>
  <form action="mysqltest.php" method="post">
  <input type="hidden" name="delete" value="yes">
  <input type="hidden" name="id" value="$row[0]">
  <input type="submit" value="DELETE RECORD"></form>
_END;
  }

  $result->close();
  $conn->close();

  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>
