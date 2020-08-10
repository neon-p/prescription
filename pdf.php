<?php
    session_start();
    include("dbconnect.php");
    require_once 'dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    if(isset($_POST['save'])){
            $doctor_email=$_SESSION['login_d'];
            $disease_name=$_POST["disease_name"];
            $serial_no=$_POST["serial_no"];
            $patient_name=$_POST["patient_name"];
            $age=$_POST["age"];
            $blood_group=$_POST["blood_group"];
            $blood_pressure=$_POST['blood_pressure'];
            $gender=$_POST["gender"];
            $chief_complaints=$_POST["chief_complaints"];
            $examination_finding=$_POST["examination_finding"];
            $provisonal_diagonsis=$_POST["provisonal_diagonsis"];
            $additional_advice=$_POST["additional_advice"];
            $test=$_POST["test"];

            $input_medicine_name = array_filter($_POST["medicine_name"]);
            $input_morning_number = array_filter($_POST["morning_number"]);
            $input_noon_number = array_filter($_POST["noon_number"]);
            $input_night_number = array_filter($_POST["night_number"]);

            $query="SELECT patient_id FROM `serial` WHERE serial_no='$serial_no'";
            $sql=mysqli_query($con,$query);
            $row=mysqli_fetch_array($sql);
            $patient_id=$row['patient_id'];
            $query2="SELECT patient_email FROM `patient` WHERE patient_id='$patient_id'";
            $sql2=mysqli_query($con, $query2);
            $row2=mysqli_fetch_array($sql2);
            $patient_email=$row2['patient_email'];
            $p="Prescription_";
            $pdf_name=$p.$patient_email;
            // $filename="C:/xampp/htdocs/prescription/patient_pdf/";
            // $path=$filename.$pdf_name;
            $query1="UPDATE patient SET `past_pdf`='$pdf_name' WHERE patient_id='$patient_id'";
            if (mysqli_query($con, $query1)){
                ob_start();
            }
    ?>
<style>
table {
    font-family: arial, sans-serif;
    width: 900px;
    margin-left:40px;
    table-layout:fixed;
    border: 1px black;
}

td, th , td{
    border: 1px #dddddd;
    text-align: left;
    word-wrap:break-word;
    padding-left: 8px;
}

</style>
<center>Prescription</center>
<form>
    <div style="margin-left:800px">
    <?php
        include("dbconnect.php");
        $query="SELECT doctor_name, doctor_specialized FROM `doctor` WHERE doctor_email='$doctor_email'";
        $sql=mysqli_query($con, $query);
        $row=mysqli_fetch_array($sql);
    ?>
        <p>Dr.<?php echo $row['doctor_name']; ?></p>
        <p><?php echo $row['doctor_specialized']; ?></p>
    </div>
    <div>
        <p><strong>Patient Name:</strong> <?php echo $patient_name;?></p>
        <p><strong>Age:</strong> <?php echo $age;?></p>
        <p><strong>Sex:</strong> <?php echo $gender;?></p>
        <p><strong>Blood Group:</strong> <?php echo $blood_group;?></p>
    </div>
    <br>
    <table>
        <tr>
            <th></th>
            <th>Rx</th>
        </tr>
        <tr>
            <td>
                Disease Name: <?php echo $disease_name;?><br><br>
                Chief Complaints: <?php echo $chief_complaints;?><br>
                Examination Finding: <?php echo $examination_finding;?><br>
                Provisonal Diagonsis: <?php echo $provisonal_diagonsis;?><br>
                Test: <?php echo $test; ?>
            </td>
            <td style="padding-left:30px;">
<?php
    for($i=0;$i<count($input_medicine_name);$i++){                   
?>
    <p><?php echo $input_medicine_name[$i];?>;(<?php echo $input_morning_number[$i];?>+<?php echo $input_noon_number[$i];?>+<?php echo $input_night_number[$i];?>)</p>
<?php
    }
?>
            </td>
        </tr>
    </table>
    <div>
        <p><strong>Addional Advice:</strong> <?php echo $additional_advice;?></p>
    </div>
</form>


<?php
    $content=ob_get_clean();
        
    $pdf=new Dompdf();
    $pdf->loadHtml(html_entity_decode($content));
    $pdf->setpaper('letter','landscape');
    $pdf->render();
    $pdf->stream($pdf_name, Array('Attachment'=>0));
}
?>
