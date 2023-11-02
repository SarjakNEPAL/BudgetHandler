<html><head><link rel="icon" href="../Pics/logo.png"></head>
<?php
    include("../PHP/globvar.php");
    include("../PHP/seschk.php");
    include('conn.php');
    $isok=false;
    $ttl= $_POST["Title"];
    $amtt= $_POST["amt"];
    $catt=$_POST["category"];
    $dati=$_POST["dati"];
    $rema=$_POST["remark"];
    echo ('<script>console.log ("connecting to database")</script>');
    if($conn->connect_error)
    {
        echo ('<script>console.log ("database connection failed")</script>');
    }
    else{
        echo ('<script>console.log ("database connection success")</script>');
    }
     
    $sql="insert into expenditure(username,spnt_name,spnt_amt,category,remarks,date) values(?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('ssssss',$_SESSION['username'],$ttl,$amtt,$catt,$rema,$dati);
    if ($stmt->execute()) {
            echo ('<script>console.log ("record creation success")</script>');
            $isok=true;
           } else {
            echo ('<script>console.log ("record creation failure")</script>');
            $isok=false;
    }

$conn->close();
if($isok==true)
{
    include('../HTML/exp.php');    
}
else{
    include('../HTML/a2234.php');
}
?>
</html>
