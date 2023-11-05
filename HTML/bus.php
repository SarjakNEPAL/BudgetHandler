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
        <title>Business</title>
    </head>
    <body>
    <div class="canvas">
            <div class="subban">
                <ul>
                    <li><a href="../HTML/edibus.php">Edit</a></li>
                    <li><a href="../HTML/bus1.php">View</a></li>
                    <li><a href="../HTML/dashboard.php">Back</a></li>
                </ul>
            </div>
            </div>
            <div class="MCanvas"> 
                <div class="Ment">
                    <center>
                    <H1>Business - ADD</H1>
                    <form  name="ent" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="Sold_to">Sold To:</label><br>
                    <input type="text" id="Sold_to" name="Sold_to"><br>
                    <label for="Title">Title:</label><br>
                    <input type="text" id="Title" name="Title"><br>
                    <label for="MRP">MRP:</label><br>
                    <input type="number" id="MRP" name="MRP" step="0.01" value=0><br>
                    <label for="Number_of_items">Number of Items:</label><br>
                    <input type="number" id="Number_of_items" name="Number_of_items"><br>
                    <label for="Discount">Discount in %:</label><br>
                    <input type="number" id="Discount" name="Discount" step="0.01" ><br>
                    <label for="Final_price">Final Price:</label><br>
                    <input type="number" id="Final_price" name="Final_price" step="0.01"><br>
                    <label for="Paid_status">Paid Status:</label><br>
                    <input type="text" id="Paid_status" name="Paid_status"><br>
                    <label for="Date">Date:</label><br>
                    <input type="date" id="Date" name="Date"><br>
                    <label for="Remarks">Remarks:</label><br>
                    <textarea id="Remarks" name="Remarks"></textarea><br>
                    <input type="submit" value="Submit">
                    </form> 
                    <script>
                       window.onload = function() {
                                var MRP = document.getElementById('MRP');
                                var Number_of_items = document.getElementById('Number_of_items');
                                var Discount = document.getElementById('Discount');
                                var Final_price = document.getElementById('Final_price');

                                function calculateFinalPrice() {
                                    var mrp = parseFloat(MRP.value) || 0;
                                    var numberOfItems = parseInt(Number_of_items.value) || 1;
                                    var discount = Discount.value || 0;

                                    var finalPrice = mrp * numberOfItems * (1 - discount / 100);
                                    Final_price.value = finalPrice.toFixed(2);
                                }

                                MRP.addEventListener('input', calculateFinalPrice);
                                Number_of_items.addEventListener('input', calculateFinalPrice);
                                Discount.addEventListener('input', calculateFinalPrice);

                                var form = document.querySelector('form');

                                form.addEventListener('submit', function(event) {
                                    var Title = document.getElementById('Title');
                                    var Sold_to = document.getElementById('Sold_to');
                                    var Paid_status = document.getElementById('Paid_status');
                                    var Date = document.getElementById('Date');

                                    if (!Title.value || !MRP.value || !Number_of_items.value || !Discount.value || !Final_price.value || !Sold_to.value || !Paid_status.value || !Date.value) {
                                        alert('Please fill out all fields.');
                                        event.preventDefault();
                                    }
                                });
                            };
                        </script>    
                </center>
                </div> 
            </div>
        </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once('../PHP/conn.php');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the data from the form
        $Title = $_POST['Title'];
        $MRP = $_POST['MRP'];
        $Discount = $_POST['Discount'];
        $Final_price = $_POST['Final_price'];
        $Sold_to = $_POST['Sold_to'];
        $Paid_status = $_POST['Paid_status'];
        $Date = $_POST['Date'];
        $Remarks = $_POST['Remarks'];
        $Number_of_items = $_POST['Number_of_items'];

        // Insert the data into the table
        $sql = "INSERT INTO business (Username, Title, MRP, Discount, Final_price, Sold_to, Paid_status, Date, Remarks, no_itm) VALUES ('$_SESSION[username]','$Title', '$MRP', '$Discount', '$Final_price', '$Sold_to', '$Paid_status', '$Date', '$Remarks', '$Number_of_items')";

        if ($conn->query($sql) === TRUE) {
            echo "<script><alert>New record created successfully</alert></script>";
        } else {
            echo "<script><alert>New record created successfully</alert></script>";
        }

        // Close the connection
        $conn->close();
    }
    ?>
</body>
</html>
