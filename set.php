<html>
    <head>
        <title>Contact Management System</title>
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create connection
            $conn = mysqli_connect("localhost", "user7ash", "ashxch7user", "assignment");
        
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
        
            // Get the id of the contact to be updated
            $id = $_POST["id"];
        
            // Get the new values
            $newfirstname = $_POST["firstname"];
            $newlastname = $_POST["lastname"];
            $newemail = $_POST["email"];
            $newphone = $_POST["phone"];
            $newnotes = $_POST["notes"];
        
            // Use prepared statements to prevent SQL injection
            $sql = "UPDATE contact SET firstname = ?, lastname = ?, email = ?, phone = ?, notes = ? WHERE id = ?";
        
            // Prepare the statement
            $stmt = $conn->prepare($sql);
        
            // Bind the parameters
            $stmt->bind_param("sssssi", $newfirstname, $newlastname, $newemail, $newphone, $newnotes, $id);
        
            // Execute the query
            if ($stmt->execute()) {
                // Output data for each row    
                echo "Contact Updated Successfully";
            } else {
                echo "Error Updating Contact: " . $conn->error;
            }
        
            $stmt->close();
            $conn->close();
        } else {
            echo "Contact did not updated";
        }
        ?>
        </center>
        </main>
        <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
        </footer> 
    </body>
</html>