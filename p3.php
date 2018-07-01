<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
 
</script>
<style>

	
	#form{
		width: 45%;
		height: 80%;
		background-color: white;
		margin-left: 25%;
		
	}
	#h2{
		text-align: center;
		background-color:  #f0800f;
		margin-top: 0px;width: 45%;
		height: 40%;
		margin-left: 25%;
		
	}
	
	
	
</style>
</head>

 
<body  id="body" class="jumbotron" background="../img/download.jpg">

     <div id="h2"> <h2 >Feedback Form</h2></div>
     
     
     
     <form  style="margin-top: 1%;" id="form" >
     <div class="container">
     	<div class="row">
     		<div class="col-sm-6" style="">
     		<img src="../img/AdobeStock_86496748-Converted.jpg" style="width:100%;height:100%; "/>
     			</div>
     		<div  class="col-sm-6">
     		<div class="form-group" >
         <label for="text">Status</label>
         <input type="text" class="form-control" id="t1" required="true" placeholder="Enter status" name="t1">
       </div>
       <br/>
      <div class="form-group">
        <label for="select">Rating </label>
        <select class="form-control" id="sel1" required="true">
         <option>---select---</option> 
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
       </select>
     </div>
    <br/>
    <br/>
    <button type="submit" id="ss1" class="btn btn-info" style="margin-left: 30%" onsubmit="push(ti.value)">Submit</button>
 </div>
 </div>
 </div>
  </form>
     	
     	
     	

</body>
</html>








