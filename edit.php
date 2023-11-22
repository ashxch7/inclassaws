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
                <div class="contact">
                    <form action="option.php" method="get">    
                        <label for="id">ID of Contact</label><br>
                        <input type="text" id="id" name="id" required><br>
                        <button type="submit">Go</button>
                    </form>
                </div>
            </center>
        </main>
        <footer>
            <h3>&copy; 2023 Ashutosh Chaudhary</h3>
        </footer> 
    </body>
</html>