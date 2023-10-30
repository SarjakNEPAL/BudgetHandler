<html>
<body>
<?php
    include('conn.php');
    $isok=false;
    $existence=false;
    $e= $_POST["User"];
    $s= $_POST["pass"];
    echo ('<script>console.log ("connecting to database")</script>');
    if($conn->connect_error)
    {
        echo ('<script>console.log ("database connection failed")</script>');
    }
    else{
        echo ('<script>console.log ("database connection success")</script>');
    }
    
    $query = "SELECT * FROM logininfo WHERE Username = '$e'";

    $result = $conn->query($query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $existence=true;
        } 
        else {
            $existence=false;
        }
    }

if($existence==false){  
    echo (" Creating New Account"."<br>");
    
    if($stat_chk="Positive")
        $sql="insert into logininfo(Username,Password) values(?,?)";
         $stmt=$conn->prepare($sql);
        $stmt->bind_param('ss',$e,$s);
        
              
        if ($stmt->execute()) {
            echo ('<script>console.log ("record creation success")</script>');
            $isok=true;
           } else {
            echo ('<script>console.log ("record creation failure")</script>');
            $isok=true;
    }
}
else
{   echo ('<script>console.log ("existence of primary keyed data")</script>');
    echo ('<script>alert("Username is already taken. Please use another Username")</script>');
            $isok=true;
    $isok=true;
    header('../HTML/HOME.php');
    die();
}
$conn->close();
if($isok==true)
{
    header('../HTML/dashboard.php');
    die();
}
?>

</body>
</html>
