<?php
// session_start();
include('dbconnect.php');

	if(isset($_POST["serial_no"])){
		$serial_no = $_POST["serial_no"];
				
        $query="SELECT patient_id FROM `serial` WHERE serial_no='$serial_no'";
        $sql=mysqli_query($con,$query);
        $row=mysqli_fetch_array($sql);
        $patient_id=$row['patient_id'];
        $query2="SELECT past_pdf FROM `patient` WHERE patient_id='$patient_id'";
        $sql2=mysqli_query($con, $query2);
        $row2=mysqli_fetch_array($sql2);
        $string='empty';
        if($row2['past_pdf']==$string){
            echo "<h4>None</h4>";
        }else{
            $p='.pdf';
            $q=$row2['past_pdf'].$p;
            echo"<h4>Available <button type='button' class='btn btn-primary' id='showBtn' data-toggle='modal' data-target='#showModal'>Show</button></h4>";
            echo '<div class="modal fade" id="showModal" role="dialog">';
            echo '<div class="modal-dialog">';
            
            echo '<div class="modal-content" >';
            echo    '<div class="modal-header">';
            echo        '<button type="button" class="close" data-dismiss="modal">&times </button>';
            echo    '</div>';
            echo '<div class="modal-body">';
            echo     '<embed src="patient_pdf/'.$q.'" type="application/pdf"   height="500px" width="450px">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
	}
?>
