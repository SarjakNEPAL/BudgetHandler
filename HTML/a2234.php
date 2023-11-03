
<html lang="en">
    <?php 
        include("../PHP/globvar.php");
        include("../PHP/seschk.php");
    ?>

    <head>     
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../Pics/logo.png">
        <script src="../JS/Vldexp.js"></script>
        <link rel="stylesheet" href="../CSS/tbl2.css">
        <title>EXP-ADD</title>
    </head>
    <body>
        <div class="canvas">
            <span class="topban">
                <div class="navbar">
                    <img src="../Pics/logo.png" class="logo">
                    <h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../HTML/dashboard.php">Back</a></li>
                    </ul>
                </div>
            </SPAN>
             <div class="subban">
                    <ul>
                        <li><a href="../HTML/exp.php">View</a></li>
                        <li><a href="../HTML/edt2234.php">Edit</a></li>
                    </ul>
            </div>
            <div class="MCanvas"> 
                <div class="Ment">
                <center>   
                    <H1>Expenditure - ADD</H1>
                    <tr><form name="ent" onsubmit="return validateForm()" method="post" action="../PHP/adexp.php">
                    <br>Title :<input type="text" name="Title" placeholder="REQUIRED">
                    <br>Amount :<input type="Number" id="amt" name="amt" placeholder="REQUIRED" ><br>
                    <br><div class="catedrop">
                            <label for="category">Category:</label>
                                <select name="category" id="category">
                                    <option value="Household">Household</option>
                                    <option value="Education">Education</option>
                                    <option value="Health">Health</option>
                                    <option value="Other">Other</option>
                                </select>
                        </div>
                        <br>Date:<input type="date" name="dati" id="dati">
                        <br>Remarks:<input type="text" name="remark" id="remark" placeholder="OPTIONAL"><br>
                        <input type="Submit" class="butt" value="Add" name="submit">
                        </form>
    
                    </center>  
                </div>
                
            </div>
        </div>  
</body>
</html>