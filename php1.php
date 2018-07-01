<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.get("https://www.naviadoctors.com/visit_feedback/front_end_test", function(data){
            alert("\nStatus: " + data);
            var abc=data;
          var xyz=json_decode(abc,true);
            console.log(abc);
          document.getElementById("p1").innerHTML="shubham"+abc;
          
          alert($var1);
            
        });
    });
});
</script>
</head>
<body>
<p id="p1"></p>
<button>Send an HTTP GET request to a page and get the result back</button>

</body>
</html>
