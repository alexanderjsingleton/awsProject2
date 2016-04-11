<!---------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
---------------------------------------------------------------------------->

<html>
  <head>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  </head>
  <body>

  <!-------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  -------------------------------------------------------------------------->
  <h2> Client example </h2>
  <h3>Output: </h3>
  <div id="msg">this will be  element will be accessed by jquery and this text replaced</div>

<script type="text/javascript">
 
$(document).ready(function(){
var url="api2.php";
$.getJSON(url,function(json){
// loop through the members here
$.each(json,function(i,dat){
$("#msg").append(
'<div class="mymembers">'+
'<h1>'+dat.id+'</h1>'+
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


  </body>
</html>
