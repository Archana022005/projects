<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Medical Payment Bill</title>
</head>
<body>
<figure class="image">
     <img src='uploads/hoss.jpg' alt="background">
    <div class="form"><figcaption>
<form action="index.php" method="post">
  <h2>Medical Payment Bill</h2><br><br>
  <label for="patname">Patient Name:</label>
  <input type="text" name="patientName" required>

  <label for="billnum">Bill Number:</label>
  <input type="text" name="billnum" required>

  <label for="amount">Amount:</label>
  <input type="number" name="amount" required>

  <label for="date">Date:</label>
  <input type="date" name="date" required><br><br>

  <input type="submit" value="Submit Payment">
</form></figcaption>


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
  font-family: "Times New Roman", Serif; 
  background-color: #f4f4f4;
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
  margin-top: 10px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
  width: 90%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid #ddd;
}

input[type="submit"] {
  background-color: #5cb85c;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #4cae4c;
}
</style>
</body>
</html>



<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $patname = $_POST['patname']; 
    $billnum = $_POST['billnum']; 
    $amount = $_POST['amount']; 
    $date = $_POST['date']; 
  $conn = new mysqli('localhost', 'root', '', 'hospitaldb'); 
  
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 
  
    $sql = "INSERT INTO payment(patname,billnum,amount,date) VALUES ('$patname','$billnum','$amount','$date')";
    if ($conn->query($sql) === TRUE) {     
    echo "Insurance details added successfully!"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
  
    $conn->close(); 
} 
?> 

