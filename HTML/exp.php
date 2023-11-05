
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
        <title>EXP-VIEW</title>

    </head>
    <body>
        <div class="canvas">
            <div class="subban">
                <ul>
                    <li><a href="../HTML/a2234.php">Add</a></li>
                    <li><a href="../HTML/ediexp.php">edit</a></li>
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

                    $sql = "SELECT spnt_name, spnt_amt, category, remarks, date FROM expenditure";
                    $result = $conn->query($sql);

                    echo "<table><caption>Expenditures - View<caption><tr><th>Sno.</th><th>Spent Name</th><th>Spent Amount</th><th>Category</th><th>Remarks</th><th>Date</th></tr>";
                    $id=1;
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr align='center'><td>".$id."</td><td>".$row["spnt_name"]."</td><td>".$_SESSION["curr"].$row["spnt_amt"]."</td><td>".$row["category"]."</td><td>".$row["remarks"]."</td><td>".$row["date"]."</td></tr>";

                    }
                    echo "</table>";
                    } else {
                        echo "<tr><td align='center'>$id</td><td align='center'>Spend Someting!!</td><td align='center'></td><td align='center'>Spend Someting!!</td><td align='center'></td><td></td></tr>";
                    }
                    $conn->close();
                ?>
            </div>
        </div>  
    </body>
</html>