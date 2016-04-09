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
'<div class="albums">'+
'<h1>'+dat.id+'</h1>'+
'<p>First Name : <em>'+dat.first_name+'</em>'+
'<p>Last Name : <em>'+dat.last_name+'</em></p>'+
'<hr>'+
'</div>'
);
});
});
});
 
</script>


  </body>
</html>
