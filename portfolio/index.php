<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Welcome to My Homepage - Dylan Kane</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    
    <div id="navbar">
        
            <a href=./index.php id="logo"><img src="./img/logo.png" alt="My Logo" id="logo"></a>
        
        <nav>
        <ul>
            <a href="./about.php"class="navButton">About</a>
            <a href="./blog.php"class="navButton">Blog</a>
            <a href="./contact.php"class="navButton">Contact</a>
            <?php
                session_start();
                if (isset($_SESSION['loggedin'])) {
                    echo '<a href="./logout.php"class="navButton">Logout</a>';
                } else {
                    echo '<a href="./loginPage.php"class="navButton">Login</a>';
                }
            ?>
        </ul>
        </nav>
    </div>
    <div class="grid-container">

    <figure>
        <img src="./img/pngwing.com.png" alt="background">
        <div id="welcome">
            <h1>Welcome!</h1>
            <p>Explore more about Dylan Kane.</p><br><br>
            <div>
                <a href="#"><img src="./img/li.png" alt="Linkedin Icon" class="icon"></a>
                <a href="#"><img src="./img/gh.png" alt="gitHub Icon" class="icon"></a>
                <a href="#"><img src="./img/insta.png" alt="Instagram Icon" class="icon"></a>
                <a href="#"><img src="./img/twit.png" alt="Twitter Icon" class="icon"></a>
                <a href="#"><img src="./img/fbook.png" alt="Facebook Icon" class="icon"></a>
            </div>
        </div> 
    </figure>
</div>
</body>
</html>