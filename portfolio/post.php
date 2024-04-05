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
    <title>Add Post</title>
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
              <!-- <a href="./login.html"class="navButton">Login</a> -->
          </ul>
          </nav>
        </header>
    <div class="grid-container"> 
    <div id="login">
        <h1>New Post</h1>
        <form action="updateBlog.php" method="post" enctype="multipart/form-data">
            
            <input type="text" id="title" name="title"  placeholder="Title" class="formText">
            <textarea name="content" id="content" cols="30" rows="6" placeholder="Add content"  class="formText"></textarea>
            <label for="image">Upload Image (optional)</label>
            <input type="file" id="imgUpload" name="image">
            <div id="postClear">
                <button type="submit" id="post">Post</button>
                <button type="reset" id="reset">Clear</button>
            </div>
        </form>
    </div>
    </div>

    <script src="./JS/post.js"></script>
</body>
</html>