<?php
include("database.php"); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($name)) {
        echo "Please enter the username";
    } elseif (empty($password)) {
        echo "Please enter the password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, phone) VALUES ('$name', '$email', '$hash', '$phone')";

        if (mysqli_query($conn, $sql)) {
            echo "You are now registered!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE HTML>
<html> 
<head>
    <title>AnimeWorld</title>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="a108c3bc43ff4a8d3d8721cbade24148.jpg" alt="Anime Logo">
                <div class="logo-text">Anime<span>World</span></div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                        <button type="submit">Search</button>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <link rel="icon" href="Catch 'Em All in Style_ Official Ash Ketchum Costume with Jacket and Hat.jpeg" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr><th>Hentai</th><th>Anime</th><th>Manga</th></tr>
        <tr><td>Ane wa yanmama</td><td>One Piece</td><td>Naruto</td></tr>
    </table>
    <h2><div class="box"><b>Recently updated</b></div></h2>
    <img src="Naruto.jpeg" width="200" height="300" title="Naruto">
    <img src="Ash Ketchum and Pikachu.jpeg" width="200" height="300" title="Pokemon">
    <img src="294d7b26-97f1-4f56-9eb4-2c7c744cabec.jpeg" width="200" height="300" title="Bleach">
    <img src="Luffy.jpeg" width="200" height="300" title="One Piece">
    <br><br><br><br><br><br>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-box">
            <h3>Enter the AnimeWorld</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            <input type="submit" value="Sign up">
            <u>Already have an account?</u><input type="submit" value="Login">
        </form>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <img src="a108c3bc43ff4a8d3d8721cbade24148.jpg" alt="Your Logo" style="width: 100px; height: auto;" target="_self" title="AnimeWorld">
            </div>
            <div class="footer-section">
                <h3>About Us</h3>
                <p>AnimeWorld is your ultimate destination for all things anime. Watch your favorite shows, read reviews, and stay updated with the latest news.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="https://web.facebook.com/"><i class="fa fa-facebook"><img src="db7d8693-553d-4572-96e0-66d65ec65c99.jpg" class="social-icon" alt="Facebook"></i></a>
                <a href="https://web.facebook.com/"><i class="fa fa-twitter"><img src="2010fa30-6db2-4510-92b6-be33b7a61bd9.jpg" class="social-icon" alt="Twitter"></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><i class="fa fa-instagram"><img src="Anime App Icons.jpg" class="social-icon" alt="Instagram"></i></a>
            </div>
        </div>
        <div class="copyright">
            &copy; 2024 AnimeWorld. All rights reserved.
        </div>
    </footer>
</body>
</html>
