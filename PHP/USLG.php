<HTML>
    <body>
        <?php
            if(isset($_SESSION['username']))
            { 
                include('dashboard.php');
                
            }
            else 
            {   include('../PHP/globvar.php');
                include("../PHP/conn.php");
                $Logged=false;
                $existence=false;
                $e= $_POST["User"];
                $s= $_POST["pass"];
                $query="select * from logininfo";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                    $userID= $row['Username'];
                    $userPSS= $row['Password'];
                    if($userID==$e)
                    {
                        if($userPSS==$s)
                        {
                            $Logged=true;
                            $_SESSION['username']=$row['Username'];
                        }
                        else
                        {
                            echo '<script>alert("Wrong Password");</script>';
                            $Logged=False;
                        }
                        $existence=true;
                        }
                }
                if($existence==False)
                {
                    echo '<script>alert("User not found")</script>';
                
                }
                $conn->close();
                if($Logged==false)
                {
                    include("../HTML/HOME.php");
                    echo("not logged in");
                }
                else
                {
                include("../HTML/dashboard.php");
                }
            }
        ?>
    </body>
</HTML>