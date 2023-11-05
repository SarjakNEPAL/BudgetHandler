<?php
    include('../PHP/globvar.php');
    include('../PHP/seschk.php');
    include('../PHP/conn.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $isok=true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $old_pass = $_POST['old_pass'];
        $new_pass = $_POST['new_pass'];
        $user = $_SESSION['user'];
        if(empty($old_pass) || empty($new_pass)) {
            echo "<script>alert('Both fields are required.');</script>";
            $isok=false;
        } else if(strlen($old_pass) < 8 || strlen($new_pass) < 8) {
            echo "<script>alert('Both passwords should be longer than 8 characters.');</script>";
            $isok=false;
        } else if($old_pass == $new_pass) {
            echo "<script>alert('Old and new passwords should not be the same.');</script>";
            $isok=false;
        } else {
            // Fetch the old password from the database
            $sql = "SELECT Password FROM logininfo WHERE Username='$user'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row["Password"] != $old_pass) {
                    echo "<script>alert('Old password is incorrect.');</script>";
                    $isok=false;
                } else {
                    // Update the password
                    $sql = "UPDATE logininfo SET Password='$new_pass' WHERE Username='$user'";
                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Password updated successfully.');</script>";
                    } else {
                        echo "<script>alert('Error updating password: " . $conn->error . "');</script>";
                        $isok=false;
                    }
                }
            } else {
                echo "<script>alert('PLEASE LOGIN BEFORE USING');</script>";
                echo "<a href='../index.php'>Click Here</a>";
            }
        }
    }
    $conn->close();
    if($isok =='true'){
        echo "<script>alert('PLEASE LOGIN AGAIN');</script>";
        include("../PHP/logout.php");
        include("../HTML/HOME.php");
    }
    else{
        include('../HTML/settings_2.php');
    }
    
?>
