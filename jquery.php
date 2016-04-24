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
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  <![endif]-->
<body>

  <!-------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  -------------------------------------------------------------------------->
<div class="container">
  <div class="page-header">
    <h1>jQuery</h1>
  </div>
  <p class="lead">HTML content that is accessed via jQuery</h2>
  <h3>Output: </h3>
  <div id="msg">This element will return each iteration through the JSON string via jQuery.</div>


<script type="text/javascript">
 
$(document).ready(function(){
var url="api2.php";
$.getJSON(url,function(json){
// loop through the members here
$.each(json,function(i,dat){
$("#msg").append(
'<div class="mymembers">'+
'<h1>Record  '+dat.id+'</h1>'+
'<p>First Name : <em>'+dat.first_name+'</em>'+
'<p>Last Name : <em>'+dat.last_name+'</em></p>'+
'<p>Email : <em>'+dat.email+'</em></p>'+
'<p>Address: <em>'+dat.address+'</em></p>'+
'<p>City : <em>'+dat.city+'</em></p>'+
'<p>State : <em>'+dat.state+'</em></p>'+
'<p>Zip : <em>'+dat.zip_code+'</em></p>'+
'<p>Wesbite : <em>'+dat.website+'</em></p>'+
'<p>Hosting : <em>'+dat.hosting+'</em></p>'+
'<p>Project : <em>'+dat.project+'</em></p>'+
'<hr>'+
'</div>'
);
});
});
});
 
</script>
  </div>
  



  </body>
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