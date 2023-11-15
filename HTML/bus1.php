<html lang="en">
    <?php 
        include("../PHP/globvar.php");
        include("../PHP/seschk.php");
    ?>

    <head>     
          
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../Pics/logo.png">
        <link rel="stylesheet" href="../CSS/tbl2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Business</title>

    </head>
    <body>
        <div class="canvas">
            <div class="subban">
                <ul>
                    <li><a href="../HTML/bus.php">Add</a></li>
                    <li><a href="../HTML/edibus.php">edit</a></li>
                    <li><a href="../HTML/dashboard.php">Back</a></li>
                </ul>
            </div>
            <div class="Viewing">
                <?php
                    include('../PHP/conn.php');
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT Title, MRP, Discount, Final_price, Sold_to, Paid_status, Date, Remarks, no_itm FROM business WHERE Username='".$_SESSION['username']."'";
                    $result = $conn->query($sql);
                    $i=1;
                    echo "<table><caption>Business - View<caption><tr><th>Sno.</th><th>Sold To</th><th>Title</th><th>MRP</th><th>Number of Items</th><th>Discount</th><th>Final Price</th><th>Paid Status</th><th>Date</th><th>Remarks</th></tr>";
        
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr align='center'><td>".$i."</td><td>".$row["Sold_to"]."</td><td>".$row["Title"]."</td><td>".$_SESSION["curr"].$row["MRP"]."</td><td>".$row["no_itm"]."</td><td>".$row["Discount"]."%</td><td>".$_SESSION["curr"].$row["Final_price"]."</td><td>".$row["Paid_status"]."</td><td>".$row["Date"]."</td><td>".$row["Remarks"]."</td></tr>";
                        $i++;
                    }
                    echo "</table>";
                    } else {
                        echo "<tr><td align='center'>$i</td><td align='center'>No records found</td><td align='center'></td><td align='center'></td><td align='center'></td><td align='center'></td><td align='center'></td><td align='center'></td><td align='center'></td><td align='center'></td></tr>";
                    }
                    $conn->close();
                ?>
            </div>
        </div>  
    </body>
</html>
