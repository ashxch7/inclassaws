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
        <div class="contact">
            <form action="set.php" method="post">
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname" name="firstname" required><br>
                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname" required><br>
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                <label for="notes">Comments:</label><br>
                <textarea id="notes" name="notes" maxlength="500"></textarea><br>
                <?php
                    echo'<input type="hidden" name="id" value="' . $_POST["id"] . '">'
                ?>
                <button type="submit">Save</button>
                <button type="reset">Cancel</button><br>
            </form>
        </div>
        </main>
        <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
        </footer> 
    </body>
</html>