
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
        <title>EXP-EDIT</title>

    </head>
    <body>
        <div class="canvas">
            <span class="topban">
                <div class="navbar">
                    <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                    <li><a href="../HTML/dashboard.php">Back</a></li>
                    </ul>
                </div>
                </SPAN>
                <div class="subban">
                    <ul>
                        <li><a href="../HTML/a2234.php">Add</a></li>
                        <li><a href="../HTML/exp.php">View</a></li>
                    </ul>
                </div>
            </script>
            <div class="Viewing">
            <?php
                  include_once("../PHP/conn.php");
    // Check connection
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $username = $_POST['username'];
                    $field = $_POST['field'];
                    $value = $_POST['value'];

                    if (isset($_POST['delete'])) {
                      $sql = "DELETE FROM expenditure WHERE username='$username'";
                    } else {
                      $sql = "UPDATE expenditure SET $field='$value' WHERE username='$username'";
                    }

                    if ($conn->query($sql) === TRUE) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }
                  }

                  $sql = "SELECT username, spnt_name, spnt_amt, category, remarks, date FROM expenditure";
                  $result = $conn->query($sql);
                  echo '<table id="myTable"><caption>Expenditures - Edit<caption><tr><th>Sno.</th><th>Spent Name</th><th>Spent Amount</th><th>Category</th><th>Remarks</th><th>Date</th></tr>';
                  $i=1;
                  if ($result->num_rows > 0) {
    
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      
                      echo '<tr><td>'.$i.'</td><td onclick="editData(this, \'spnt_name\')">'.$row["spnt_name"].'</td><td onclick="editData(this, \'spnt_amt\')">'.$row["spnt_amt"].'</td><td onclick="editData(this, \'category\')">'.$row["category"].'</td><td onclick="editData(this, \'remarks\')">'.$row["remarks"].'</td><td onclick="editData(this, \'date\')">'.$row["date"].'</td><td><button onclick="deleteData(this)">🗑️</button></td></tr>';
                     

                    }
                  } else {
                    echo "<tr><td align='center'>$i</td><td align='center'>Spend Someting!!</td><td align='center'></td><td align='center'>Spend Someting!!</td><td align='center'></td><td></td></tr>";
                  }
                  echo '</table>';
                  $conn->close();
                  ?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
      function editData(td, field) {
        var newValue = prompt("Edit the value:", td.innerHTML);
        if (newValue != null) {
          td.innerHTML = newValue;
          $.post(window.location.href, { username: td.parentNode.firstChild.innerHTML, field: field, value: newValue });
        }
      }

      function deleteData(button) {
        var row = button.parentNode.parentNode;
        var username = row.firstChild.innerHTML;
        $.post(window.location.href, { username: username, delete: true }, function() {
          row.parentNode.removeChild(row);
        });
      }
      </script>
    </body>
</html>