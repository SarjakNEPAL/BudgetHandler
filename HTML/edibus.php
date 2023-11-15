<!DOCTYPE html>
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
        <script type="text/javascript" src="../JS/pgchsr.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Business-EDIT</title>
    </head>
    <body>
        <div class="canvas">
            <div class="subban">
                <ul>
                    <li><a href="../HTML/bus.php">Add</a></li>
                    <li><a href="../HTML/bus1.php">View</a></li>
                    <li><a href="../HTML/dashboard.php">Back</a></li>
                </ul>
            </div>
            <div class="Viewing">
            <?php
                include_once("../PHP/conn.php");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $Title = $_POST['Title'];
                    $field = $_POST['field'];
                    $value = $_POST['value'];
                
                    if (isset($_POST['delete'])) {
                        $stmt = $conn->prepare("DELETE FROM business WHERE Title=?");
                        $stmt->bind_param("s", $Title);
                    } else {
                        $stmt = $conn->prepare("UPDATE business SET $field=? WHERE Title=?");
                        $stmt->bind_param("ss", $value, $Title);
                    }
                
                    if ($stmt->execute() === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Failed: " . $conn->error;
                    }
                }
                

                $sql = "SELECT Title, MRP, Discount, Final_price,Sold_to,Paid_status,Date,Remarks,no_itm FROM business WHERE Username='".$_SESSION['username']."'";
                $result = $conn->query($sql);
                $serial_number = 1;
                echo '<table id="myTable"><caption>Business - Edit<caption><tr><th>Sno.</th><th>Sold to</th><th>Title</th><th>MRP</th><th>No. of item</th><th>Discount</th><th>Final Price</th><th>Paid Status</th><th>Date</th><th>Remarks</th></tr>';
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        
                        echo '<tr><td>'.$serial_number.'</td><td>'.htmlentities($row["Sold_to"]).'</td><td>'.htmlentities($row["Title"]).'</td><td>'.htmlentities($_SESSION["curr"]).htmlentities($row["MRP"]).'</td><td>'.htmlentities($row["no_itm"]).'</td><td>'.htmlentities($row["Discount"]).'%</td><td>'.htmlentities($_SESSION["curr"]).htmlentities($row["Final_price"]).'</td><td><select onchange="editData(this, \'Paid_status\')"><option '.($row["Paid_status"] == 'Paid' ? 'selected' : '').'>Paid</option><option '.($row["Paid_status"] == 'Unpaid' ? 'selected' : '').'>Unpaid</option></select></td><td>'.htmlentities($row["Date"]).'</td><td>'.htmlentities($row["Remarks"]).'</td><td><button onclick="deleteData(this)">Delete</button></td></tr>';

                        $serial_number++;
                    }
                } else {
                  echo "<tr><td align='center'>$serial_number</td><td align='center'>Spend Someting!!</td><td align='center'></td><td align='center'>Spend Someting!!</td><td align='center'></td><td></td><td></td><td></td><td></td><td></td></tr>";
                }
                echo '</table>';
                $conn->close();
            ?>
            </div>
            
            <script>
    function editData(select, field) {
        var newValue = select.value;
        var Title = select.parentNode.parentNode.children[2].innerHTML;
        $.ajax({
            url: window.location.href,
            type: 'POST',
            data: { Title: Title, field: field, value: newValue },
            success: function() {
                location.reload();
            },
            error: function() {
                alert('Failed to update record');
            }
        });
    }

    function deleteData(button) {
        var row = button.parentNode.parentNode;
        var Title = row.children[2].innerHTML;
        $.ajax({
            url: window.location.href,
            type: 'POST',
            data: { Title: Title, delete: true },
            success: function() {
                location.reload();
            },
            error: function() {
                alert('Failed to delete record');
            }
        });
    }
</script>


        
    </body>
</html>
