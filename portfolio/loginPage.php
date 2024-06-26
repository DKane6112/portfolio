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
    <link rel="stylesheet" href="./CSS/reset.css" type="text/css">
    <link rel="stylesheet" href="./CSS/login.css" type="text/css">
    <title>Login Page</title>
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
    
    <div id="login">
        <h1>Member Login</h1>
        <form action="./login.php" method="post">
            <input type="email" id="username" name="username" required placeholder="Email">
            <input type="password" id="password" name="password" required placeholder="Enter Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>