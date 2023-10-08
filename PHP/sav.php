    <body>
        <?php
            include('globvar.php');
           include("conn.php");

            $isok=false;
            $existence=false;
            $eaac=$_SESSION['username'];
            echo $eaac;

            echo ('<script>console.log ("connecting to database",$e)</script>');
            if($conn->connect_error)
            {
                echo ('<script>console.log ("database connection failed")</script>');
            }
            else{
                echo ('<script>console.log ("database connection success")</script>');
            }
            
            $query="SELECT * FROM sav WHERE Username='$eaac'";
            echo($eaac);
            $result=mysqli_query($conn,$query);

            while($row=mysqli_fetch_assoc($result))
            {  
                
                if (mysqli_num_rows($result) > 0)
                {
                    $existence=true;
                    $m=$row["savings"];
                    echo ('<script>console.log ("existence of  data in table")</script>');
                    

                } 
                else
                {

                    $existence=false;
                    echo ('<script>console.log ("no existence of  data")</script>');
                    
                }
            }

            if($existence==false){  
            

                $sql="insert into sav(Username,savings) values(?,?)";
                $stmt=$conn->prepare($sql);
                $addi=$_POST['add'];
                $subti=$_POST['subs'];
                
                $tot=$row['savings']-$addi -$subti;
                $stmt->bind_param('ss',$e,$tot);
                
                    
                if ($stmt->execute())
                {   echo ('<script>console.log ("null record creation success")</script>');
                    $isok=true;
                } 
                else 
                {
                    echo ('<script>console.log ("null record creation failure")</script>');
                    $isok=false;
                }
            }
            else
            {
                echo ('<script>console.log ("existence of  data")</script>');
                echo ('<script>console.log ("fetching the data")</script>');  
                $addi=$_POST['add'];
                $subti=$_POST['subs'];
                echo ('<script>console.log ("fetching the data success")</script>'); 
                $tot=$m+ $addi -$subti;
                echo ('<script>console.log ("processing the data complete")</script>');
                echo ('<script>console.log ("deleting the data")</script>'); 
                $d="DELETE FROM sav WHERE Username='$e';";
                $ggu = $conn->query($d);
                if($ggu){
                    
                    echo ('<script>console.log ("Data deletion successful")</script>');

                    $sql="insert into sav(Username,savings) values(?,?)";
                    $stmt=$conn->prepare($sql);
                    $stmt->bind_param('ss',$e,$tot);
                if ($stmt->execute()) {
                    echo ('<script>console.log (" record creation success")</script>');
                    $isok=true;
                }
                    else
                {
                    echo ('<script>console.log ("record creation failure")</script>');
                    $isok=false;
                    }

                $isok=true;
                $isok=true;
                echo ('
                <script>
                location.href = "../HTML/savings.php";
                location.replace("../HTML/savings.php");
                location.assign("../HTML/savings.php");
                </script>
                ');
            }
            }
            $conn->close();
            if($isok==true)
            {
                echo ('
                <script>
                alert("Savings save successful");
                location.href = "../HTML/savings.php";
                location.replace("../HTML/savings.php");
                location.assign("../HTML/savings.php");
                </script>
                
                ');
            }
        ?>

    </body>
</html>