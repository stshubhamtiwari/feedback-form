


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(function(){
	$.ajax({
	    url:"https://www.naviadoctors.com/visit_feedback/front_end_test ",
	    success:function(response){
			$("#p2").html(response.ratings[1]+"," +response.ratings[2]+"," +response.ratings[3]);
			$("#p3").text(response.result);
			$("#t1").text(response.status);	
		}	
	});
});

	

	
</script>
<style>
	
	
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
	
</style>
</head> 
<body class="jumbotron">
<div id="h2"> <h2 >Feedback Form</h2></div>
<div id="d1">
<div class="container" style="margin-top: 3%;border: 1px solid black;">
 
  <form action="" style="margin-top: 3%;">
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
    <button type="submit" class="btn btn-danger" style="margin-left: 40%">Submit</button>
 
  </form>
  <br>
</div>
</div>

</body>
</html>








