<?php

include "dbConnect.php";

$deleteID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $deleteID = $_POST["deleteID"];

  $my_query = "DELETE FROM students WHERE id='$deleteID'";
    $result = mysqli_query($con, $my_query);

    if($result)
    {
  
      $message = "Success";
      header("Location:view.php?message=".$message);
        
    }
    
    else
    {
  
         
      $message = "Unsuccess";
      header("Location:view.php?message=".$message);
        
    }
  

}
else{
    echo "error";
}

?>