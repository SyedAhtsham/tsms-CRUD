<?php


// define variables and set to empty values
$editID = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $editID = $_POST["editID"];

  if($result)
  {
    
    $message = "Success";
    header("Location:index.php?message=".$message);
      
  }
  
  else
  {

       
    $message = "Unsuccess";
    header("Location:index.php?message=".$message);
      
  }

}

else 

    echo "error";

?>