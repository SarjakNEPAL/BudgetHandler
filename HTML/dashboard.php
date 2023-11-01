
<html>
    <?php 
        include('../PHP/globvar.php');
        include("../PHP/seschk.php");
    ?>
    <head>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
        <title>Dashboard</title>
    </head>
    <body>
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                    <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../PHP/logout.php">logout</a></li>
                    </ul>
                </div> 
            </span>
            <div class="content">
                <p>Hello <?php echo($_SESSION['username'])?>!! You are logged in to the session. Please select the record from list below</p>
                <div class="buttons">
                    <a href="../HTML/ear.php"><button type="button" ><span class="butt"></span>Earnings</button></a>
                    <a href="../HTML/exp.php"><button type="button"><span class="butt"></span>Expenditures</button></a><br>
                    <a href="../HTML/bus.php"><button type="button"><span class="butt" ></span>Business</button></a>
                    <a href="../HTML/savings.php"><button type="button"><span class="butt"></span>Savings</button></a>
                    <br>
                    <a href="reg.php"><button type="button"disabled><span class="butt"></span>Settings</button></a>
                </div>
            </div>
        </div>
    </body>
</html>