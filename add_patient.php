<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
     "width=device-width, initial-scale=1.0"> <br><br>
    <title>Add Patient</title>
    <style> 
   
        body { 
            background-color: lightblue; 
            color:green; 
            font-weight: bolder; 
            font-family: "Times New Roman", Serif; 
            text-align: center; 
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
        h1{ 
            border-style: dotted;
            margin: 5px 0; 
            padding: 10px; 
            border-radius: 15px; 
            padding: 0%; 
            border-radius: 10px; 
             
        } 
        h2{ 
            margin: 25px 0; 
            text-align: center; 
          
             
        } 
        label {
            display: block; 
            margin: 10px 0; 
            text-align: left; 
        } 
        .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      text-decoration: none;
      margin-left: 30px;
    }
        .image img{
        height: 50%;
         width: 100%;
        }
        .image{
        position: relative;
        }
       .image figcaption{
        position : absolute;
        top: 0%;
        bottom: 15%;
        left: 60%;
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
            border: 1px solid #606060FF; 
            box-sizing: border-box; 
        } 
        input[type="submit"] { 
            background-color: #606060FF; 
            color: #D6ED17FF; 
            cursor: pointer; 
        } 
        input[type="submit"]:hover { 
            background-color: #D6ED17FF; 
            color: #606060FF; 
        } 
    </style>
    <h1>Demographic Form</h1>
    
</head> 
<body> 
<figure class="image">
     <img src='uploads/Ret.webp' alt="background">
   <figure>
   
   <div class="intro"><figcaption>
    <h2>Add Patient Details</h2> 
    <form method="post" action="index.html"> 
        <label for="name">Patient Last Name:</label> 
        <input type="text" name="name" required> 

        <label for="fname">First Name:</label> 
        <input type="text" name="fname" required> 
  
        <label for="inital">Initial:</label> 
        <input type="text" name="initial" required> 

        <label for="address">Address:</label> 
        <textarea name="address"></textarea> 

        <label for="city">City:</label> 
        <textarea name="city"></textarea> 
  
        <label for="state">State:</label> 
        <textarea name="state"></textarea>
        
        <label for="zipcode">Zipcode:</label> 
        <textarea name="zipcode"></textarea> 
        
        <label for="dob">Date Of Birth:</label> 
        <input type="number" name="dob" required> 

        <label for="age">Age:</label> 
        <input type="number" name="age" required> 

        <label for="ss">Social Security:</label> 
        <input type="text" name="ss" required> 

        <label for="cell">Cell:</label> 
        <input type="number" name="cell" required>

        <label for="ms">Marital Status:</label> 
        <select name="ms"> 
            <option value="Married">married</option> 
            <option value="Unmarried">unmarried</option> 
        </select> 
 
        <label for="occupation">Occupation:</label> 
        <input type="text" name="occupation" required>
  
        <input type="submit" value="Add Patient"> </figcaption>
    </form> 
</body> </html>



<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $name = $_POST['name']; 
    $fname = $_POST['fname']; 
    $inital = $_POST['initial']; 
    $address = $_POST['address']; 
    $city = $_POST['city']; 
    $state = $_POST['state']; 
     $zipcode = $_POST['zipcode']; 
    $dob = $_POST['dob'];
     $age = $_POST['age']; 
    $ss = $_POST['ss']; 
    $cell = $_POST['cell'];
    $ms = $_POST['ms'];      
    $occupation = $_POST['occupation']; 
  
    $conn = new mysqli('localhost', 'root', '', 'Hospitaldb'); 
  
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 
  
    $sql = "INSERT INTO Medical (name,fname,initial,address,city,state,zipcode,dob,age,ss,cell,ms,occupation)  
            VALUES ('$name','$fname','$inital','$address','$city','$state','$zipcode','$dob','$age','$ss','$cell','$ms','$occupation')";
    if ($conn->query($sql) === TRUE) { 
        echo "patients added successfully!"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
  
    $conn->close(); 
} 
?> 

