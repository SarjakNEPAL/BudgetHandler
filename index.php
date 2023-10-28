<html>
    <?php
        if(isset($_SESSION['username']))
        {
            include('HTML/dashboard.php');
        }
    ?>
    <head>
        <title>SBH</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="icon" type="image/png" href="Pics/logo.png" sizes="32x32">
    </head>
    <body>
        <div class="banner">
            <span class="topban">
            <div class="navbar">
                <img src="Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="HTML/ABOUT.html">About</a></li>
                    <li><a href="HTML/Support.html">Support</a></li>
                </ul>
            </div> 
            </span>
            <div class="content">
                <H1>Welcome</H1>
                <p> From this website you can easily manage your Accounting and Money related operations details easily. <br>It is free to use</p>
                <div class="buttons">
                    <a href="HTML/HOME.php"><button type="button" ><span class="butt"></span>Login</button></a>
                    <a href="HTML/reg.php"><button type="button"><span class="butt"></span>Register</button></a>
                </div>
            </div>
        </div>
    </body>
</html>


