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
    <title>Contact</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/contact.css">
</head>
<body>
    
    <header id="navbar">
        
        <a href=./index.php><img src="./img/logo.png" alt="My Logo" id="logo"></a>
        
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
      </header>
    <div class="grid-container"> 
    <header id="text">
        <h1>Have some questions?</h1>
    </header>

    <div id="pic">
        <img src="./img/mail.png" alt="Picture of envelope">
    </div>

    <form action="#" method="get">
        <fieldset>
            <div>
                <label for="firstname"></label><br>
                <input type="text" id="name" name="name" placeholder="First Name">
            </div>
            
            <div>
                <label for="surname"></label><br>
                <input type="text" id="email" name="email" placeholder="Last Name">
            </div>

            <div>
                <label for="email"></label><br>
                <input type="email" id="email" name="email" placeholder="Email Address">
            </div>

            <div>
                <label for="comments"></label><br>
                <textarea name="comments" id="comments" cols="30" rows="6" placeholder="Leave your questions or comments here..."></textarea>
            </div>            
        </fieldset>
        <button type="submit" value="Submit">Submit</button>
    </form>
    <nav id="social">
        <h1>Connect on Social Media</h1>
        <div id="icons">
            <a href="#"><img src="./img/li.png" alt="Linkedin Icon" class="icon"></a>
            <a href="#"><img src="./img/gh.png" alt="gitHub Icon" class="icon"></a>
            <a href="#"><img src="./img/insta.png" alt="Instagram Icon" class="icon"></a>
            <a href="#"><img src="./img/twit.png" alt="Twitter Icon" class="icon"></a>
            <a href="#"><img src="./img/fbook.png" alt="Facebook Icon" class="icon"></a>
        </div>
    </nav>
</div>    
</body>
</html>