<html>
    <?php 
        include('../PHP/globvar.php');
        include("../PHP/seschk.php");
    ?>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
        <title>Settings</title>
    </head>
    <body>
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                    <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../HTML/settings.php">back</a></li>
                    </ul>
                </div> 
            </span>
            <div class="content">
                        <form action="../PHP/change_currency.php" method="post">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for countries..">
                        <br>
                        <select id="myDropdown" name="currency" multiple style="width:200px; height:100px; overflow:auto;">
                            <option value="usd">United States - United States Dollar (USD) - $</option>
                            <option value="eur">Germany - Euro (EUR) - €</option>
                            <option value="jpy">Japan - Japanese Yen (JPY) - ¥</option>
                            <option value="gbp">United Kingdom - British Pound (GBP) - £</option>
                            <option value="inr">India - Indian Rupee (INR) - ₹</option>
                            <option value="npr">Nepal - Nepalese Rupee (NPR) - रू</option>
                            <!-- Add more options here -->
                        </select>
                        <br>
                        <input type="submit" value="Change currency" class="butt">
                        </form>
            </div>
            <script>
                function myFunction() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    div = document.getElementById("myDropdown");
                    a = div.getElementsByTagName("option");
                    for (i = 0; i < a.length; i++) {
                        txtValue = a[i].textContent || a[i].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                         } else {
                            a[i].style.display = "none";
                        }
                    }
                }
            </script>
                        
        </body>
 </html>