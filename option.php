<html>
    <head>
        <title>
            Contact Management System
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Contact Management System</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li><br>
                <li><a href="add.php">Add Contact</a></li><br>
                <li><a href="view.php">View Contacts</a></li><br>
                <li><a href="edit.php">Edit Contact</a></li>
            </ul>
        </nav>
        <main>
        <center>
        <?php
        // Create connection
        $conn = mysqli_connect("localhost", "user7ash", "ashxch7user", "assignment");
            
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_errno);
        }
        $id = $_GET["id"];

        // View data into your database
        $sql = "SELECT * FROM contact WHERE id = $id";

        // Execute the query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo $row["id"] .  "  " . $row["firstname"] . "  " . $row["lastname"] . "  " . $row["email"] . "  " . $row["phone"] . "  " . $row["notes"] . "<br>";
            }
        } else {
            echo "No records found in the table.";
        }

        $conn->close();
        ?>
        </center>
        <div class="contact">
            <form action="update.php" method="post">
                <?php
                    echo'<input type="hidden" name="id" value=' .$id .'">'
                ?>
                <button type="submit">Update</button>
            </form>
            <form action="delete.php" method="post">
                <?php
                    echo'<input type="hidden" name="id" value=' .$id .'">'
                ?>
                <button type="submit">Delete</button>
            </form>
        </div>
        </main>
        <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
        </footer> 
    </body>
</html>