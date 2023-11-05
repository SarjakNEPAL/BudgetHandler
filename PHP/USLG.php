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
                
                if($Logged==false)
                {
                    include("../HTML/HOME.php");
                }
                else
                {
                    $query="select Currency from settings where username='$e'";   
                    $result = $conn->query($query);
                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc()) {
                             $r= $row['Currency'];
                        }
                    }
                    else{
                        $r='रू';
                    }
                    $_SESSION['curr']=$r;
                    include("../HTML/dashboard.php");
                }
            }
            $conn->close();
        ?>
    </body>
</HTML>