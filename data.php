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

            // Get data from the form
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $notes = $_POST["notes"];

            // Insert data into your database
            $sql = "INSERT INTO contact (firstname, lastname, email, phone, notes) 
            VALUES ('$firstname', '$lastname', '$email', '$phone', '$notes')";

            
            if($conn->query($sql) === TRUE) {
                echo "<h3>data stored in a database successfully."
                    . " Please browse your Server"
                    . " to view the updated data</h3>";
    
                echo nl2br("\n$firstname\n $lastname\n "
                    . "$email\n $phone\n $notes");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . $conn->connect_errno;
            }
            $conn->close();
		    ?>
        </center>
        </main>
        <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
        </footer> 
    </body>
</html>