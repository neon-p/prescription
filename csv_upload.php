<?php  
include("dbconnect.php");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
			$item1 = mysqli_real_escape_string($con, $data[0]);  
            $item2 = mysqli_real_escape_string($con, $data[1]);
			$item3 = mysqli_real_escape_string($con, $data[2]);  
            $item4 = mysqli_real_escape_string($con, $data[3]);
                $query = "INSERT into medicine(medicine_name, medicine_form,medicine_strangth,medicine_generic) values('$item1','$item2','$item3','$item4')";
                mysqli_query($con, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
  <h3 style="align:center">How to Import Data from CSV File to Mysql using PHP</h3><br />
  <form method="post" action="csv_upload.php" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>