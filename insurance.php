<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
     "width=device-width, initial-scale=1.0"> <br><br>
    <title>Insurance</title> 
    </head> 
<body> 
<figure class="image">
     <img src='uploads/docc.jpg' alt="background">
    <div class="form"><figcaption>
    <form method="post" action="index.html">
    <h2>Insurance Information</h2> <br><br>
     
        
        <label for="inname">Insurance Name:</label> 
        <input type="text" name="inname" required> 

        <label for="id">Insurance id:</label> 
        <input type="text" name="id" required> 
  
        <label for="insurance">Act as:</label> 
        <select name="insurance"> 
            <option value="primary">Primary</option> 
            <option value="secondary">Secondary</option> 
        </select> 

        <label for="active">Status:</label> 
        <select name="active"> 
            <option value="active">Active</option> 
            <option value="unactive">UnActive</option> 
        </select> <br><br>
 <input type="submit" value="submit"> 
    </form> 
 </figcaption>


    <style> 
     .image img{
  height: 90%;
  width: 100%;
   }

   .image{ 
    position: relative;
   }
   .image figcaption{
    position : absolute;
    top: 10%;
    bottom: 10%;
    left: 50%;
   }
        body { 
            background-color: gray; 
            color: black; 
            font-weight: bolder; 
            font-family:"Times New Roman", Serif; 
            text-align: left; 
            margin: 0; 
            padding: 20px; 
        } 
        form { 
            max-width: 600px; 
            margin: 0 auto; 
           width: 150%; 
            padding: 20px; 
            border-radius: 10px; 
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        } 
        h2 {
  color: #333;
  margin: 10px 0; 
            text-align: center; 
            
        }
        label { 
            display: block; 
            margin: 10px 0; 
        } 
       

        input[type="text"], 
        input[type="number"], 
        select, 
        textarea, 
        input[type="date"], 
        input[type="submit"] { 
            width: 100%; 
            margin: 5px 0; 
            padding: 10px; 
            border-radius: 5px; 
            border: 1px solid black; 
            box-sizing: border-box; 
        } 
        input[type="submit"] { 
            background-color: lightgray; 
            color:black; 
            cursor: pointer; 
        } 
        input[type="submit"]:hover { 
            background-color: gray; 
            color: black; 
        } 
    </style> 
</body></html>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $inname = $_POST['inname']; 
    $id = $_POST['id']; 
    $insurance = $_POST['insurance']; 
    $active = $_POST['active']; 
  $conn = new mysqli('localhost', 'root', '', 'hospitaldb'); 
  
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 
  
    $sql = "INSERT INTO patient(inname,id,insurance,active) VALUES ('$inname','$id','$insurance','$active')";
    if ($conn->query($sql) === TRUE) {     
    echo "Insurance details added successfully!"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
  
    $conn->close(); 
} 
?> 

