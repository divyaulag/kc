<?php include_once 'config/init.php'; ?>

<?php 

  $job = new Job;

  if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){
  	
  		$template = new Template('templates/adminleaderboard-page.php');
	    $template->usersScores = $job->getUsersScores();
	    echo $template;

  	
    

    

  }
  else{
    
    $template = new Template('templates/login-page.php');
    echo $template;

  }





?>