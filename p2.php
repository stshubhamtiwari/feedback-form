<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$("ss1").onclick(function push (status){
	jQuery.ajax({
          url: "https://www.naviadoctors.com/visit_feedback/front_end_test" ,
          type: "POST",
          data: {status},
          dataType: "json",
         
          success: function(result) {
 	     alert("hiiiii");
          }
}); 
</script>
<style>
	#div1 {
    
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 4s;
}
@keyframes example {
    from {background-color: red;}
    to {background-color: blue;}
}
	
	#d1{
		width: 35%;
		height: 60%;
		background-color: white;
		margin-left: 27%;
		
	}
	#h2{
		text-align: center;
		background-color: #3d97c2;
		margin-top: 0px;width: 35%;
		height: 40%;
		margin-left: 27%;
		font-style: italic;
	}
	#body{
		width: 100%;
		
	}
	#form{
		
	}
	
</style>
</head>

 
<body  id="body" class="jumbotron" background="../img/download.jpg">

     <div id="h2"> <h2 >Feedback Form</h2></div>
     <div id="d1">
     <form  style="margin-top: 3%;" id="form" >
     <div class="container">
     	<div class="row">
     		<div class="col-sm-6">
     		<img src="../img/AdobeStock_86496748-Converted.jpg" style="width:100%;height:100% "/>
     			</div>
     		<div  class="col-sm-6">
     		<div class="form-group" >
         <label for="text">Status:</label>
         <input type="text" class="form-control" id="t1" placeholder="Enter status" name="t1">
       </div>
       
      <div class="form-group">
        <label for="select">Rating: </label>
        <select class="form-control" id="sel1">
         <option>---select---</option> 
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
       </select>
     </div>
    <br/>
    <button type="submit" id="ss1" class="btn btn-danger" style="margin-left: 40%" onsubmit="push(ti.value)">Submit</button>
 </div>
 </div>
 </div>
  </form>
     	</div>
     	</div>
     	

</body>
</html>








