<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h1   {color: blue;}
</style>
 <?php
    // Prevent caching of the page
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    ?>
</head>
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "busticket");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['fname'];
        $father_name = $_REQUEST['dname'];
        $mother_name = $_REQUEST['mname'];
        $date_of_birth = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $marital_status = $_REQUEST['mstatus'];
        $nationality = $_REQUEST['nationality'];
        $aadhar_number = $_REQUEST['anumber'];
        $phone_number = $_REQUEST['pnumber'];
        $email = $_REQUEST['eaddress'];
        $address = $_REQUEST['address'];
    
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO wcm_members (name, father_name, mother_name, date_of_birth, gender, marital_status, nationality, aadhar_number, phone_number, email, address) 
                VALUES ('$name', '$father_name', '$mother_name', '$date_of_birth', '$gender', '$marital_status', '$nationality', '$aadhar_number', '$phone_number', '$email', '$address')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h1>Registration successful</h1>";
        } else{
            echo "<h1>ERROR: $sql</h1>" . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
