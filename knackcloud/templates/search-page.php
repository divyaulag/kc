<?php include 'navi-page.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<style type="text/css">
 .wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:#1ABC9C;
}
body
{
  background-color: #1ABC9C;
}
.c
{
  margin: 40px;
  background-color:white;

  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
  border-radius: 3px;
  width:800px;
  padding:200px;
  line-height: 50px;
  align-items: center;
  line-height: 50px;
  margin-bottom: 20px;
  
}
.btn-next {
  border: none;
  padding: 0px;
  background-color:black;
  color:white;
  border-radius: 10px;
  transition: 0.4s all;
  color: #1ABC9C;
  box-shadow:  0 0 5px #1ABC9C,
               0 0 10px #1ABC9C;
 width:100px;
 margin-top: 10px;
 height:50px;
 text-align: center;
}
	.strong {
		font-weight: 900;
		display:inline-block;
		text-align: left;
		width: 200px;
	}
	#emp_no{
		/*border: 1px solid black;*/
		text-align: center;
		padding-left: 0px;
	}
	#link{
		display: inline;
	  color: black;
	  text-align: center;
	  padding: 0px;
	  text-decoration: none;
	}
	#link:hover{
		
  background-color: white;

	}
	#msg{
	margin-top: 15px;
	text-align: center;
}

	


</style>

<div id="msg">
		<?php displayMessage(); ?>
</div>
<div class="wrapper">
<div class="c">
        <h1 style="text-align: center; font-size: 23px;font-family: 'Lato';color:#1ABC9C;margin-top: -100px;">Search your certification details!</h1>
        <form id="search">

        	
    		<div style="text-align: center;">
    			<label for="employeenumber"><b>Enter Employee Number</b></label>
    			<div id="emp_no">
	    			
	   				<input type="number" style="width:300px;height:40px;border: 1px solid green;border-color:#1ABC9C;font-size: 20px;padding:10px;"    id="empn" name="emp_no" required /><br>
	            </div><br>

	          <input style="padding: 20px; background-color: black;color:white" id="submit" type="submit" class="btn-next" value="Search">
	        </div><br>
	       
        </form>


<div id="output" style="width:800px; margin-left:-100px;">
	
</div>
</div>
</div>	
<br>

<script>
    
    $(document).ready(function(){


       

      $('form').submit(function(){
        var temp = $('#empn').val();

        // $( "#sample" ).text(name);
	        $.ajax({
	          url: "search.php",
	          method: "POST",
	          data: {
	            emp_no: temp
	            },
	          success: function( result ) {

	            $( "#output" ).html(result);
	            console.log(result);
	           
	          }
	        });
	       
	       return false;
        }); 

    });


</script>

<?php include 'includes/footer.php'; ?>