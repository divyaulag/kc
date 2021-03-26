
<?php include 'navi-page.php'; ?>

<style type="text/css">
.msg{
	margin-top: 15px;
}
body
{
	background-color: #1ABC9C;
}
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:#1ABC9C;
}
.c
{
  margin: 50px;
  background-color:white;

  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
  border-radius: 3px;
  width:600px;
  height:400px;
  padding:50px;
  
}
.file
{
	line-height: 30px;
}
.btn-next {
  border: none;
  padding: 15px 35px;
  background-color:black;
  color: #fff;
  border-radius: 27px;
  transition: 0.4s all;
  color: #1ABC9C;
  box-shadow:  0 0 5px #1ABC9C,
               0 0 10px #1ABC9C;

}

</style>
<div class="wrapper">
	<div class="c">
<div class="msg">
		<?php displayMessage(); ?>
	</div>
<div >
	<div class="file">
	<form action="read_file.php" method="post" enctype="multipart/form-data">
		<label for="fileupload"><strong id="info">Please choose your excel file to export data to Database</strong></label><br>
		<small>(Note: Your excel file should have values in following order emp_no, emp_name, email, csp, certification_level, certification_name, certification_id, date_of_certification, expiry date, validity, certification_link)</small><br><br>
		<input type="file" name="fname" required /><br><br><br>

		<input class="btn-next" type="submit" name="file_submit" value="submit" /><br>
	 	
	</form>
</div>
</div>
</div>

</div>
