<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
 
	
if(isset($_POST['submit'])) {  

include ("connection2.php");

	
   
   $fnam=$_POST['Fname1'];
	$lnam=$_POST['Lname1'];
	$city=$_POST['city1'];
	$contac=$_POST['contact1'];
	$strNo=$_POST['stno1'];
	$street=$_POST['street1'];
	$distri=$_POST['district1'];
   $email=$_POST['email1'];	
	
   
    
	$sql = "INSERT INTO orders ". "(FName,LName,City,Contact,StreetNo,StrName,District,Email) ". "VALUES('$fnam','$lnam','$city','$contac','$strNo','$street','$distri','$email')";
	
	$results = mysqli_query($connec, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($connec));
            }
			else
			{
            echo "\n";
			}	
     } 
   
else {//if(isset($_POST['submit'])) {  

    echo  " Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>