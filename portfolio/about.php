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
    <title>About</title>
    <link rel="stylesheet" href="./CSS/reset.css" type="text/css"/>
    <link rel="stylesheet" href="./CSS/about.css" type="text/css"/>
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
  
  <nav id="innernav">
    <ul>
      <li><a href="#about" class="navButton">About</a></li>
      <li><a href="#experience" class="navButton">Experience</a></li>
      <li><a href="#education"class="navButton">Education</a></li>
      <li><a href="#skills"class="navButton">Skills</a></li>
      <li><a href="#projects"class="navButton">Projects</a></li>
    </ul>
  </nav>
  
  <div id="about">
    <section>
      <h3>Hi, I am Dylan, <br> Software Developer</h3>
      <p>My name is Dylan Kane and I am an aspiring software engineer with previous experience working as an IT Technician, I am passionate about software development and eager to learn new skills and technologies.
        I currently study Computer Science at Queen Mary University of London.</p> 
    </section>
    <figure id="image">   
      <img src="./img/profile.jpg" alt="Picture of me" id="profile">
    </figure>
  </div>

  <div id="lightexp">
  <div id="experience">
    <section>
      <h3>Experience</h3>
        <div>
          <h4>IT Technician at Notley High School 2022-2023</h4>
          <div id="expbox1">
          <div class="textblock">
            <p>Provided technical assistance to the staff and students at the school.</p><br>
            <p>Ensured the optimal functioning of IT systems and equipment</p><br>
            <p>Installed, configured, and maintained computers, software, printers, routers, and other peripherals.</p><br>
            <p>Resolved IT issues both remotely and on-site.</p><br>
            <p>Delivered guidance and training to users on how to use the IT resources effectively and safely.</p><br>
            <p>Monitored the network and ensured data privacy, and performed regular backups and updates.</p><br>
            <p>Updated documentation and reported IT incidents and service requests.</p>
          </div>
          <figure>
            <img src="./img/Bridge_Academy_Trust_Logo_Half_Reverse.png" alt="Business Logo" class="logo">
          </figure>
          </div>
        </div> 
        <div>
          <h4>IT Technician at RDC 2021-2022</h4>
          <div id="expbox2">
          <div class="textblock">
            <p>Received, sorted and tested various IT equipment from different clients, such as laptops, desktops, servers, monitors, printers, etc.</p><br>
            <p>Performed data erasure on devices using certified software and hardware tools, ensuring that the data was securely wiped and compliant with data protection standards and regulations.</p><br>
            <p>Prepared detailed reports on the status, condition, and specifications of the devices, as well as the data erasure process.</p><br>
            <p>Troubleshot and repaired IT equipment, and performed quality checks on the devices before they were sent back to the clients.</p>
          </div>
          <figure>
            <img src="./img/rdc.webp" alt="Business Logo" class="logo">
          </figure>
          </div>
        </div>    
    </section>
    <aside id="cv">
      <p>Download CV</p>
      <a href="./KaneCV.pdf" download><img src="./img/dwnload.png" alt="Download button" id="dwnload"></a>
    </aside>
  </div>
</div>

<section id="education">
  <h3>Education</h3>
  <div>
    <h4>Bsc Computer Science 2023-2026</h4>
    <div id="edubox1">
    <p>In 2023 I started my undergraduate degree in computer science at Queen Mary University of London.
      This was a very proud moment for me as I am the first in my family to attend University and had worked very hard to gain the qualifications needed whilst working full-time.
    </p>
    <figure>
      <img src="./img/qm-logo-white.svg" alt="University Logo" id="qmullogo">
    </figure>
    </div>
  </div> 
  <div>
    <h4>Diploma (Computer Science & Mathematics) 2021-2023</h4>
    <div id="edubox2">
    <p>In 2021 I decided that I wanted to go to University to study Computer Science so began an A-level equivalence course to gain the qualifications needed to be accepted onto a Computer Science degree.
    I completed this course in 2023 acheiving a Distinction.</p>
    <figure>
      <img src="./img/stonebridge-associated-college-logo.png" alt="College Logo" id="accesslogo">
    </figure>
    </div>
  </div> 
</section>

<section id="skills">
  <div id="skillsbox">
    <h3>Skills</h3>
    <div id="skillsflex">
    <div>
      <h4>Languages</h4>
      <ul>
        <li><p>Java</p><img src="./img/java.png" alt="Java Logo"></li>
        <li><p>Kotlin</p><img src="./img/kotlin.png" alt="Kotlin Logo"></li>
        <li><p>Swift</p><img src="./img/Swift.png" alt="Swift Logo"></li>
        <li><p>JavaScript</p><img src="./img/JS.png" alt="JavaScript Logo"></li>
        <li><p>C</p><img src="./img/C.png" alt="C logo"></li>
        <li><p>SQL</p><img src="./img/SQL.png" alt="SQL Logo"></li>
        <li><p>PHP</p><img src="./img/PHP.png" alt="PHP Logo"></li>
      </ul>
    </div>
  
    <div>
      <h4>Technologies</h4>
      <ul>
        <li><p>React</p><img src="./img/react.png" alt="React Logo"></li>
        <li><p>SpringBoot</p><img src="./img/spring.png" alt="Spring logo"></li>
        <li><p>Git</p><img src="./img/git.png" alt="Git Logo"></li>
        <li><p>Bootstrap</p><img src="./img/bootstrap.png" alt="Bootstrap Logo"></li>
        <li><p>Compose</p><img src="./img/comp.png" alt="Compose Logo"></li>
      </ul>
    </div>
  </div>
  </div>
</section>

<section id="projects">
  <h3>Projects</h3>
  <div>
    <h4>ToneAlly</h4>
    <p>I am currently developing an application that provides insights into music theory for musicians.
      This application is using Java for the logic in the backend and React for the frontend.
      Find it on github <a href="https://github.com/DKane6112">here</a>.
    </p>
  </div> 
  <div>
    <h4>Webpage for a Small Business</h4>
    <p>I am also currently working on a webpage for a small business.
      This webpage is also being developed using react and will implement paralax scrolling and a number of other features to make the webpage more interactive.
    </p>
  </div> 
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
</body>
</html>