<html>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/savings.css">
    <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <?php
        include("../PHP/globvar.php");
        include("../PHP/seschk.php");
        include("../PHP/conn.php");
    ?>
    <HEAD><TITLE>Savings</TITLE></HEAD>
    <BODY>      
        <div class="banner">
        <span class="topban">
        <div class="navbar">
            <img src="../Pics/logo.png" class="logo" onClick="../HTML/dashboard.php"><h1 class="logotxt">Sarjak Budget Helper</h1>
            <ul>
                <li><a href="../HTML/dashboard.php">Back</a></li>
        
            </ul>
        </div> 
        </span>
        <diV CLASS="content">
          <center>
            
                <span class="details">
                    <table border="1" >
                        <th>Savings</th>
                        <Tr><td align=centre><div id="result">Rs:
                            <?php 


                                    $e=$_SESSION['username'];
                                    $query="SELECT * FROM sav WHERE Username='$e';";  
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {   $savis=$row['savings'];
                                        
                                        if (mysqli_num_rows($result) > 0)
                                         {
                                            $savis=$row['savings'];
                            
                                
                                        } 
                                        else
                                         {$savis=0;
                                            
                                            
                                        }
                               
                                        echo($savis);
                                    }
        
                        ?>
                        </div></td></TR>
                    </table>  
                    </span><br>
            </center>
            <span class="loginbox">
                <form name="savings" method="post" action="../PHP/sav.php">

               <br>Addition: <input type="number" id="add" name="add" value="0">
                <br>Substraction: <input type="number" id="subs" name="subs" value=0><br>
                <input type="Submit" class="butt" value="Proceed" name="submit">
                 </form>  
                </span>
        </div>
            </div>
        </div>
    </BODY>
</html>