<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Blog</title>
    <link rel="stylesheet" href="./CSS/reset.css" type="text/css"/>
    <link rel="stylesheet" href="./CSS/about.css" type="text/css"/>
    <link rel="stylesheet" href="./CSS/blog.css" type="text/css">
    <script src="./JS/months.js" defer></script>
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

    <figure id="blogstart">
      <img src="./img/blogs.jpg" alt="Blog Image" id="blogImage">
      <figcaption id="blogwelcome">
        <h1>Welcome to my Blog!</h1> 
        <div><h2>Stay up to date with tech news around the world</h2>
        <div id="figbuttons">
          <button class="blogbutton">Sign up</button>
          <button class="blogbutton">Login</button>
        </div>
        </div>
      </figcaption>
      
    </figure>
  
    <section id="blog">
      <?php
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "portfolio";
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 5";
      $result = $conn->query($sql);
      
      echo "<div id='posts'>";
      while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h4>" . $row['title'] . "</h4>";
        if ($row['image'] != "" || $row['image'] != null) {
        echo "<img src=" . $row['image'] . " alt='Blog Image' class='logo'>";
        }
        echo "<p>" . $row['textBody'] . "</p>";
        echo "<p>" . $row['date_time'] . "</p>";
        echo "</div>";
      }
      echo "</div>";
      ?>
  

    <section id="search">
      
      <div id="searchwrapper">
      <input type="text" id="searchBar" placeholder="Search" >
      <button type="submit" id="searchButton" value="Search">
        <img src="./img/search.png" alt="Search Icon">
      </button>
    </div>

    <div id="months">
    <form action="blog.php" method="post" id="monthForm">  
    <select name="month" id="monthselector">
      <option value="january">January</option>
      <option value="february">February</option>
      <option value="march">March</option>
      <option value="april">April</option>
      <option value="may">May</option>
      <option value="june">June</option>
      <option value="july">July</option>
      <option value="august">August</option>
      <option value="september">September</option>
      <option value="october">October</option>
      <option value="november">November</option>
      <option value="december">December</option>
    </select>
    </form>
    
      <?php
      if (isset($_POST['month'])) {
        $currentMonth = $_POST['month'];
        $date = DateTime::createFromFormat('F', $currentMonth);
    
        if ($date) {
            $firstDayOfMonth = $date->format('Y-m-01');
            $lastDayOfMonth = $date->format('Y-m-t');
    
            $sql = "SELECT * FROM posts WHERE date_time BETWEEN '$firstDayOfMonth' AND '$lastDayOfMonth'";
            $result = $conn->query($sql);
    
            echo "<ul id='titles'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li><p>" . $row['title'] . "</p></li>";
            }
            echo "</ul>";
        } 
        else { 
            echo "Error: Invalid month format.";
        }
    } else {
        echo "Error: Month is not set.";
    }
      ?>
    </div>
  <?php
  if (isset($_SESSION['loggedin'])) {
    echo '<a href="./post.php" class="blogbutton"><p>New Post</p></a>';
  }
  ?>
    
  </section>
  </section>
  
  <footer>
    <div>
      <a href="#"><img src="./img/li.png" alt="Linkedin Icon" class="icon"></a>
      <a href="#"><img src="./img/gh.png" alt="gitHub Icon" class="icon"></a>
      <a href="#"><img src="./img/insta.png" alt="Instagram Icon" class="icon"></a>
      <a href="#"><img src="./img/twit.png" alt="Twitter Icon" class="icon"></a>
      <a href="#"><img src="./img/fbook.png" alt="Facebook Icon" class="icon"></a>
    </div>
    <p><i>Copyright&copy; 2024 Dylan Kane</i></p>
  </footer>
</div>
<script>
  document.getElementById('monthselector').value = "<?php echo $_POST['month'];?>";
</script>
</body>
</html>