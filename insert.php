<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {color: blue;}
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
        $conn = mysqli_connect("localhost", "root", "", "busticket");

        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        if(isset($_POST['submit'])) {
            $name = $_POST['fname'];
            $father_name = $_POST['dname'];
            $mother_name = $_POST['mname'];
            $date_of_birth = $_POST['dob'];
            $gender = $_POST['gender'];
            $marital_status = $_POST['mstatus'];
            $nationality = $_POST['nationality'];
            $aadhar_number = $_POST['anumber'];
            $phone_number = $_POST['pnumber'];
            $email = $_POST['eaddress'];
            $address = $_POST['address'];

            $sql = "INSERT INTO wcm_members (name, father_name, mother_name, date_of_birth, gender, marital_status, nationality, aadhar_number, phone_number, email, address) VALUES ('$name', '$father_name', '$mother_name', '$date_of_birth', '$gender', '$marital_status', '$nationality', '$aadhar_number', '$phone_number', '$email', '$address')";

            if(mysqli_query($conn, $sql)){
                echo "<h1>Data Submitted Successfully</h1>";
            } else{
                echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
