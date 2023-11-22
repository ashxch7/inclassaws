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
    <?php
      // Create connection
      $conn = mysqli_connect("localhost", "user7ash", "ashxch7user", "assignment");
            
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      //get the id of contact to be updated
      $id = $_POST["id"];

      // Verify that $id is valid
      if (!is_numeric($id) && $id > 0) {
        // Prepare the DELETE query using a prepared statement
        $sql = "DELETE FROM contact WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); // "i" for integer, assuming ID is an integer

        // Execute the query
        if ($stmt->execute()) {
          echo "Contact Deleted Successfully";
        } else {
          echo "Error Deleting Contact: " . $conn->error;
        }
      } else {
        echo "Invalid ID " .$id;
      }
      $conn->close();
    ?>
    </main>
    <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
    </footer>
  </body>
</html>

