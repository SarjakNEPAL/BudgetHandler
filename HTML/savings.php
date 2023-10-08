<html>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/savings.css">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <?php
        include("../PHP/globvar.php");
        include("../PHP/seschk.php");
        include("../PHP/conn.php");
    ?>
    <HEAD><TITLE>SBH</TITLE></HEAD>
    <BODY>      
        <div class="banner">
        <span class="topban">
        <div class="navbar">
            <img src="../Pics/logo.png" class="logo" onClick="../HTML/dashboard.php"><h1 class="logotxt">Sarjak Budget Helper</h1>
            <ul>
                <li><a href="../HTML/dashboard.php">dashboard</a></li>
                
                <li><a href="../HTML/Support.html">Support</a></li>
            </ul>
        </div> 
        </span>
        <diV CLASS="content">
          <center>
            <span class="loginbox">
                <form name="savings" method="post" action="../PHP/sav.php">

               <br>Savings to add: <input type="number" id="add" name="add" value="0">
                <br>Amount to be deducted: <input type="number" id="subs" name="subs" value=0><br>
                <input type="Submit" class="butt" value="Proceed" name="submit">
                 </form>  
                </span><br>
                <span class="details">
                    <table border="1" >
                        <th>SAVINGS</th>
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
                    </span>
            </center>
        </div>
            </div>
        </div>
    </BODY>
</html>