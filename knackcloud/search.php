<?php include_once 'config/init.php'; ?>
<style>
	.table-container
{
	width: 80%;
    margin-left: 100px;

}
	#trow
	{
		font-size: 14px;
	letter-spacing: 0.35px;
	background-color: #FFFFFF;
    padding:8px;
    color:black;
    border:1px solid #1ABC9C;
    height:50px;
    width:600px;
}
.btn {
  border: none;
  padding: 0px;
  background-color: #E74C3C;
  color:white;
  border-radius: 10px;
  transition: 0.4s all;
  color:white;
 
 width:130px;
 margin-top: 10px;
 height:50px;
 text-align: center;
}
	
</style>
<?php 

	$job = new Job;

	if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){

		if(isset($_POST['emp_no']))
		{
			$res = $job->getCertDetails($_POST['emp_no'],$_SESSION['email']);
			
			if(empty($res))
			{
				$output = '<ul class="list-group">
				<li class="list-group-item"><strong class="strong">Not Found</strong></li> 
				</ul>
				';
				
				echo $output;
			}
			else
			{
				
				
				foreach($res as $certification_details){
					
					$output = '<table class="table-conainer">';

					$output .= '<tr><td id="trow"><strong class="strong">EMPLOYEE NUMBER:</strong>'.$certification_details->emp_no.'</td></tr>';
			    	
			    	$output .= '<tr><td id="trow" ><strong class="strong">EMPLOYEE NAME:</strong>'.$certification_details->employee_name.'</td></tr>';

					$output .= '<tr ><td  id="trow"><strong class="strong">EMAIL:</strong>'.$certification_details->email.'</td></tr>';


					$output .= '<tr ><td id="trow" ><strong class="strong">CERTIFICATION LEVEL:</strong>'.$certification_details->certification_level.'</td><tr>';
					
					$output .= '<tr ><td id="trow"><strong class="strong">CERTIFICATION NAME:</strong>'.$certification_details->certification_name.'</td></tr>';
					$output .= '<tr><td id="trow"><strong class="strong">CERTIFICATION ID:</strong>'.$certification_details->certification_id.'</td></tr>';
					$output .= '<tr ><td id="trow"><strong class="strong">DATE OF CERTIFICATION:</strong>'.date("d-m-Y", strtotime($certification_details->date_of_certification)).'</td></tr>';
					$output .= '<tr ><td id="trow" ><strong class="strong">EXPIRY DATE:</strong>'.date("d-m-Y", strtotime($certification_details->expiry_date)).'</td></tr>';
					$output .= '<tr ><td id="trow"><strong class="strong">VALIDITY:</strong>'.$certification_details->validity.'</td></tr>';
					$output .= '<tr><td  id="trow"><strong class="strong" >Certificate</strong><a style="color:blue" id="link" href="'.$certification_details->certificate_link.'"  target="_blank">Click here to view certificate</a></td></tr>';

					$output .= '<tr ><td id="trow"><a style=" padding:10px;" href="search.php?emp_no='.$certification_details->emp_no.'&cname='.$certification_details->certification_name.'" class="btn">Delete</a></td></tr></table><br>';
					echo $output;
					$output = '';
					
			    }
			    
			}

		}
		else if(isset($_GET['emp_no']) && isset($_GET['cname']))
		{
			$data = Array();
			$data['emp_no'] = $_GET['emp_no'];
			$data['cname'] = $_GET['cname'];
			$data['email'] = $_SESSION['email'];
			
			if($job->deleteRecord($data))
			{
				redirect('search.php','Deleted!','success');
			}
			else
			{
				redirect('search.php','Something went wrong!','error');

			}
			
			
		}
		else
		{
			$template = new Template('templates/search-page.php');
			// $template->csps = $job->get_csps();
			echo $template;
		}

		

	}
	else{
		
		$template = new Template('templates/login-page.php');
		echo $template;

	}





?>