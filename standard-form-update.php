<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="BucephalusDev-Favicon.png">
  <title>Sticky Footer Navbar Template for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bootstrap-3.3.6/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="sticky-footer-navbar.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logo" rel="home" href="#" title="The George Washington University">
          <img src="http://i.imgur.com/jTkgE1J.png">
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/project2/standard-form.php">Home</a></li>
          <li><a href="/project2/standard-form.php">Register</a></li>
          <li><a href="/project2/jquery.php">Members</a></li>
          <li><a href="/project2/standard-form-update.php">Revise</a></li>
          <li><a href="/project2/dox.php">Dox</a></li>       
          
          
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">
  <div class="page-header">
  
  </div>
  <h1>Update Contact Information</h1>
  
</div>
<div class="container">
  <div class="container">
    <p><span class="error">* required field.</span></p>


    <?php
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




      if (isset($_POST['first_name']) && isset($_POST['create'])&& isset($_POST['last_name']) && $isValid == true)

      {
        $first_name   = get_post($conn, 'first_name');
        $last_name = get_post($conn, 'last_name');
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
    ?>


    <?php
      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);

      if (isset($_POST['update']) && isset($_POST['id']))

      {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip_code = $_POST['zip_code'];
        $website = $_POST['website'];
        $hosting = $_POST['hosting'];
        $project = $_POST['project'];
        $query  = "UPDATE mymembers SET first_name='$first_name', 
        last_name='$last_name', 
        email='$email', 
        phone='$phone', 
        address='$address',
        city='$city',
        state='$state',
        zip_code='$zip_code',
        website='$website', 
        hosting='$hosting',
        project='$project'          
        WHERE id='$id'";
        $result = $conn->query($query);
        if (!$result) echo "UPDATE failed: $query<br>" .
          $conn->error . "<br><br>";
      }
    ?>

    <?php
    $query  = "SELECT * FROM mymembers";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

    $rows = $result->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
      $result->data_seek($j);
      $row = $result->fetch_array(MYSQLI_NUM);

      echo <<<_END
     
      <form action="standard-form.php" method="POST">
       <fieldset>
        <legend>Required Information:</legend>
        <div class="form-group">
          <label for= "first_name" class="control-label col-sm-4">First Name:</label>
          <input name="first_name"  id="first_name" type="text" value="$row[1]" size="30" class="required">
        </div>
        <div class="form-group">
          <label for= "last_name" class="control-label col-sm-4">Last Name:</label>
          <input name="last_name"  id="last_name" type="text" size="30" class="required" value="$row[2]">
          
        </div>
        <div class="form-group">
          <label for= "email" class="control-label col-sm-4">E-mail:</label>
          <input name="email" id="email" type="text" size="30" class="required" value="$row[3]">
          
        </div>
        <div class="form-group">
          <label for= "phone" class="control-label col-sm-4">Phone #:</label>
          <input name="phone" id="phone" type="text" size="30" class="required" value="$row[4]">
          
        </div>
        <div class="form-group">
          <label for= "address" class="control-label col-sm-4">Address:</label>
          <input name="address" id="address" type="text" size="30" class="required" value="$row[5]">
        
        </div>
        <div class="form-group">
          <label for= "city" class="control-label col-sm-4">City:</label>
          <input name="city" id="city" type="text" size="30" class="required" value="$row[6]">
          
        </div>
        <div class="form-group">
          <label for= "state" class="control-label col-sm-4">State:</label>
          <input name="state" id="state" type="text" size="30" class="required" value="$row[7]">
          
        </div>
        <div class="form-group">
          <label for= "zip_code" class="control-label col-sm-4">Zip Code:</label>
          <input name="zip_code" id="zip_code" type="text" size="30" class="required" value="$row[8]">
         
        </div>
        <div class="form-group">
          <label for= "website" class="control-label col-sm-4">Website or Domain:</label>
          <input name="website" id="website" type="text" size="30" class="required" value="$row[9]">
          
        </div>
        <div class="form-group">
          <label for= "hosting" class="control-label col-sm-4">Do you have hosting?</label>
          <input name="hosting" id="hosting" type="text" size="30" class="required" value="$row[10]">
          
        </div>
        <div class="form-group">
          <label for= "project" class="control-label col-sm-4">Project Description:</label>
          <input name="project" id="project" type="text" size="30" class="required" value="$row[11]">
          
        </div>
      </fieldset>
      <fieldset>
        <legend>Optional Information:</legend>
        <div class='movingDiv'>
          <label for="how" class="col-md-4 control-label">How did you hear about us?</label>
          <input name="how" id="how" type="text" size="30">
        </div>
      </fieldset><br>
    
      <input type="hidden" name="id" value="$row[0]">
      <input type="submit" name="update" value="UPDATE RECORD"></form>
      <form action="standard-form-nick.php" method="POST">
      <input type="hidden" name="delete" value="yes">
      <input type="hidden" name="id" value="$row[0]">
      <input type="submit" value="DELETE RECORD"></form>

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
_END;

      }

      $result->close();
      $conn->close();

      function get_post($conn, $var)
      {
        return $conn->real_escape_string($_POST[$var]);
      }
    ?>







  </div>



<?php
$first_nameErr = $last_nameErr = $emailErr = $phoneErr = $addressErr = $cityErr = $stateErr = $zip_codeErr = $websiteErr = $hostingErr = $projectErr = "";
$first_name = $last_name = $email = $phone = $address = $city = $state = $zip_code = $website = $hosting = $project =  "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["first_name"])) {
     $first_nameErr = "first_name is required";
     $isValid = false;
   } else {
     $first_name = test_input($_POST["first_name"]);
     // check if first_name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
       $first_nameErr = "Only letters and white space allowed"; 
       $isValid = false;
     }
   }

   if (empty($_POST["last_name"])) {
     $last_nameErr = "last_name is required";
     $isValid = false;
   } else {
     $last_name = test_input($_POST["last_name"]);
     // check if last_name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
       $last_nameErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
     $isValid = false;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       $isValid = false; 
     }
   }

   if (empty($_POST["phone"])) {
     $phoneErr = "phone is required";
     $isValid = false;
   } else {
     $phone = test_input($_POST["phone"]);
     // check if phone only contains letters and whitespace
     if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
       $phoneErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }

   // if (empty($_POST["address"])) {
   //   $addressErr = "address is required";
   // } else {
   //   $address = test_input($_POST["address"]);
   //   // check if address only contains letters and whitespace
   //   if (!preg_match("/^[a-zA-Z]([a-zA-Z-]+\s)+\d{1,4}$/",$address)) {
   //     $addressErr = "Only letters and white space allowed"; 
   //   }
   // }

   if (empty($_POST["city"])) {
     $cityErr = "city is required";
     $isValid = false;
   } else {
     $city = test_input($_POST["city"]);
     // check if city only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
       $cityErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }

   // if (empty($_POST["state"])) {
   //   $stateErr = "state is required";
   // } else {
   //   $state = test_input($_POST["state"]);
   //   // check if state only contains letters and whitespace
   //   if (!preg_match("/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/",$state)) {
   //     $stateErr = "Only letters and white space allowed"; 
   //   }
   // }

   if (empty($_POST["zip_code"])) {
     $zip_codeErr = "zip_code is required";
     $isValid = false;
   } else {
     $zip_code = test_input($_POST["zip_code"]);
     // check if zip_code only contains letters and whitespace
     if (!preg_match("/^[0-9]{5}([- ]?[0-9]{4})?$/",$zip_code)) {
       $zip_codeErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
     $isValid = false;
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL";
       $isValid = false; 
     }
   }

   if (empty($_POST["hosting"])) {
     $hostingErr = "hosting is required";
     $isValid = false;
   } else {
     $hosting = test_input($_POST["hosting"]);
     // check if hosting only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$hosting)) {
       $hostingErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }

   if (empty($_POST["project"])) {
     $projectErr = "project is required";
     $isValid = false;
   } else {
     $project = test_input($_POST["project"]);
     // check if project only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$project)) {
       $projectErr = "Only letters and white space allowed";
       $isValid = false; 
     }
   }

  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



?>
<!-- Begin page content -->

 
</div>
<footer class="footer">
  <div class="container">
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact_us.html">Contact</a></li>
      </li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</nav>
</footer>
<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
