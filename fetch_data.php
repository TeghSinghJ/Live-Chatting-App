<?php
	
	// Include Database connection file
	
	include 'connection.php';

	if (isset($_POST['getData']) && !empty($_POST['getData'])) {
	
	    $start = $con->real_escape_string($_POST['start']);
	    $limit = $con->real_escape_string($_POST['limit']);

	    $query = "SELECT * FROM chat LIMIT $start, $limit";

	    $result = $con->query($query);

	if ($result->num_rows > 0) {

	    $output = "";

	    while ($row = $result->fetch_array()) {

	    $output.="<div class='panel panel-default panel-primary'>
	    	        <div class='panel-heading'>
	    	   	  <h4><strong> ".$row['msg']." </strong>
			    <small style='float:right;color:#fff'>".date("d-M-Y", strtotime($row['ch_timestamp']))."</small>
			  </h4>
			</div>
		       <div class='panel-body'><p style='font-size:17px;'> ".$row['incoming_id']." </p></div>
		     </div>";
	     }
	     echo $output;
	    }
	}

?>