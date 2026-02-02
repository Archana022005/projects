<?php 
$conn = new mysqli('localhost', 'root', '', 'hospitaldb'); 
  
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
  
$sql = "SELECT * FROM medical"; 
$result = $conn->query($sql); 
?> 
  
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Patient Information</title> 
    </head> 
<body> 
    <h2>Patient Information</h2> 
    <table border="1"> 
        <tr> 
            <th>Patient Last Name</th> 
            <th>First Name</th> 
            <th>Initial</th> 
            <th>Address</th> 
            <th>City</th> 
            <th>State</th> 
            <th>Zipcode</th> 
            <th>Date Of Birth</th> 
            <th>Age</th> 
            <th>Social Security</th> 
            <th>Cell</th>
            <th>Marital Status</th>
            <th>Occupation</th>
        </tr> 
        <?php 
        while ($row = $result->fetch_assoc()) { 
            echo "<tr> 
                <td>{$row['name']}</td> 
                <td>{$row['fname']}</td> 
                <td>{$row['initial']}</td> 
                <td>{$row['address']}</td> 
                <td>{$row['city']}</td> 
             <td>{$row['state']}</td> 
             <td>{$row['zipcode']}</td> 
             <td>{$row['dob']}</td> 
            <td>{$row['age']}</td> 
             <td>{$row['ss']}</td> 
             <td>{$row['cell']}</td> 
             <td>{$row['ms']}</td> 
             <td>{$row['occupation']}</td> 
             </tr>"; 

        } 
        ?> 
    </table> 
</body> 
</html>


<?php 
$conn = new mysqli('localhost', 'root', '', 'hospitaldb'); 
  
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
  
$sql = "SELECT * FROM patient"; 
$result = $conn->query($sql); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
     "width=device-width, initial-scale=1.0"> 
    <title>Insurance information</title> 
    </head> 
<body> 
    <h2>Insurance Information</h2> 
    <table border="1"> 
        <tr> 
            <th>Insurance Name</th> 
            <th>Insurace Id</th> 
            <th>Act as</th> 
            <th>Status</th> 
            </tr> 
        <?php 
        while ($row = $result->fetch_assoc()) { 
            echo "<tr> 
                <td>{$row['inname']}</td> 
                <td>{$row['id']}</td> 
                <td>{$row['insurance']}</td> 
                <td>{$row['active']}</td> 
                </tr>"; 

            } 
            ?> 
        </table> 
    </body> 
    </html>


    <?php 
$conn = new mysqli('localhost', 'root', '', 'hospitaldb'); 
  
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
  
$sql = "SELECT * FROM payment"; 
$result = $conn->query($sql); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
     "width=device-width, initial-scale=1.0"> 
    <title>Payment Details</title> 
    <style> 
    body { 
        background-color: lightblue; 
        color: black; 
        font-family:"Times New Roman", Serif;
        text-align: center; 
        margin: 0; 
        padding: 20px; 
    } 
    h2{ 
        
            padding: 1%; 
            border-radius: 35px; 
    } 
    table { 
        background-color: black; 
        width: 100%; 
        border-collapse: collapse; 
        margin-top: 20px; 
    } 
    th, td { 
        border: 3px solid black; 
        padding: 10px; 
        color:black; 
    } 
    th { 
        background-color:lightgray ; 
    } 
</style> 
</head> 
<body> 
    <h2>Medical Bill</h2> 
    <table border="1"> 
        <tr> 
            <th>Patient Name</th> 
            <th>Bill Number</th> 
            <th>Amount</th> 
            <th>Date</th> 
            </tr> 
        <?php 
        while ($row = $result->fetch_assoc()) { 
            echo "<tr> 
                <td>{$row['Patient Name']}</td> 
                <td>{$row['Bill Number']}</td> 
                <td>{$row['Amount']}</td> 
                <td>{$row['Date']}</td> 
                </tr>"; 

            } 
            ?> 
        </table> 
    </body> 
    </html>