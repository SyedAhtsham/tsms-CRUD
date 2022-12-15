<?php

include_once "dbConnect.php";

// define variables and set to empty values
$name = $contact = $address = "";

$editID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $editID = $_POST["editID"];
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];

  if(isset($editID) && $editID != ""){

  $my_query =  "UPDATE students SET name='$name', contact='$contact', address ='$address' WHERE id='$editID'";


}
else{

  $my_query = "INSERT INTO students (name, contact, address) VALUES ('$name', '$contact','$address')";
  
}
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

else 

    echo "error";

?>