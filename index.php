<?php include 'contact.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>SOH CHEE FUNG | My Online Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <a href="#" class="logo">My Portfolio</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
          <li><a href="#home" onclick="toggleMenu();">Home</a></li>
          <li><a href="#about" onclick="toggleMenu();">About</a></li>
          <li><a href="#skills" onclick="toggleMenu();">Skills</a></li>
          <li><a href="#work" onclick="toggleMenu();">Work</a></li>
          <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
          <li><a href="https://github.com/sohcheefung" target="_blank">Github</a></li>
        </ul>
    </header>
    <!-------------------------------------HOME--------------------------------->
    <section class="banner" id="home">
      <div class="textBx">
        <h2>Hello, I am<br><span>Soh Chee Fung.</span><h2>
        <h3>I am a Software Engineer Student from Universiti Utara Malaysia</h3><br>
        <h3>"Draw, Code and Play."</h3><br>
        <h3>- <i>Fung</i></h3>
        <a href="#about" class="btn">About Me</a>
      </div>
    </section>
      <!-------------------------------------HOME-------------------------------->
      <!-------------------------------------ABOUT------------------------------->
    <section class="about" id="about">
        <div class="heading" data-aos="zoom-in" data-aos-duration="1000" >
          <h2>About Me</h2>
        </div>
        <div class="content">
          <div class="contentBx w50" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Hi, I am a Software Engineer Student and a Game Developer.</h3>
            <p>I am currently a final year student in Universiti Utara Malaysia under
            Bachelor of Science Information Technology majoring in Software Engineering.
            I used to studied Diploma before this in Politeknik Tuanku Syed Sirajuddin
            majoring in Game Technology.<br><br>Thoughout the journey of my studies, I have
            developed deep interest in software development. I learned my programming skills,
            testing and debugging etc. I also like to explore and self learn from the internet
            in my spare time to keep improving my knowledge.<br><br>Outside of this, I have a
            hobby of drawing. I am interested in Anime, Manga, Games culture and I like to draw
            them. Yes, I'll admit that I am a nerd but with a wide sense of creativiy. I also
            play Guitar sometimes to lighthen my mood when I am feeling pressure from life.
            I hope that one day I'll be able to develop some of my favorite
            games along with my team. Oh yeah, I like Chocolate:) </p>
          </div>
          <div class="w50" data-aos="zoom-in" data-aos-duration="1000">
            <img src="img/about.jpg" class="img">
          </div>
        </div>
    </section>
      <!-------------------------------------ABOUT------------------------------->
      <!-------------------------------------SKILLS------------------------------->
    <section class="skills" id="skills">
      <div class="heading white" data-aos="zoom-in" data-aos-duration="1000">
        <h2>My Skills</h2>
        <p>These are the some list of skills within my area of expertise.</p>
      </div>
      <div class="content">
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/c.png">
          <h2>C# Language</h2>
          <p>The language that's used in Unity is called C#, hence I have quite a
          few experience in using it for my game development.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/java.png">
          <h2>Java Language</h2>
          <p>Java is a powerful programming language. I started to learn Java since my Diploma studies as it is the core of my programmes.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/html.png">
          <h2>HTML/CSS</h2>
          <p>HTML and CSS are essential in order to develop a web, I started to learn on
          how to develop and design a web page on my own and I am still learning to keep on improving.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/javascript.png">
          <h2>JavaScript Language</h2>
          <p>JavaScript is among the most powerful and flexible programming languages of the web. I one were to learn web development, then JavaScript is a must.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/photoshop.png">
          <h2>Adobe Photoshop</h2>
          <p>I use Adobe Photoshop mostly for editing my game asset, design poster and drawing.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/drawing.png">
          <h2>Drawing/Sketching</h2>
          <p>Yes,I likes to draw and sketches.You may find my drawing under the work section.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/video.png">
          <h2>Video Editing</h2>
          <p>I have experience in editing video especially for my game project. I mostly
          use Movavi video editor.</p>
        </div>
        <div class="skillsBx" data-aos="flip-left" data-aos-duration="1000">
          <img src="img/icon/game.png">
          <h2>Game Development</h2>
          <p>I learn about game development in my Diploma programme. Since then,
            I continue to explore on how to create a fun and challenging game. I mostly use Unity for my game development.</p>
        </div>
          <p style="color:#fff">Beside the mentioned skills above, I also have experience in GameMaker, Scratch, and 3dsMax</p>
      </div>
    </section>
      <!-------------------------------------SKILLS------------------------------->
      <!-------------------------------------WORK--------------------------------->
    <section class="work" id="work">
      <div class="heading black" data-aos="zoom-in" data-aos-duration="1000">
        <h2>My Latest Work</h2>
        <p>Below you may find my best work in three category. </p><br>
        <p>Alternatively, you may also visit my <a href="https://github.com/sohcheefung" target="_blank"><b>Github</b></a> Account</p>
      </div>
      <div class="content">
        <div class="workBx" data-aos="flip-left" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
          <img src="img/content1.png">
          <h2>Traditional Art Work and Sketches</h2>
          <p>Since I likes to draw and sketch, This are some of my best drawing collection which
          I produced in a traditional way.</p>
          <a href="art/art.html" class="btn">View More</a>
        </div>
        <div class="workBx" data-aos="flip-left" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
          <img src="img/content2.png">
          <h2>Digital Work and Model</h2>
          <p>Here you may find model,art and poster which I made digitally by using various Software
          such as Adobe Photoshop, Illustrator and 3dsMax.</p>
          <a href="digital/digital.html" class="btn">View More</a>
        </div>
        <div class="workBx" data-aos="flip-left" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
          <img src="img/content3.png">
          <h2>Game Project and Application</h2>
          <p>I specialize in game development. Here are some of the game I which developed by
          using Unity Game Engine.</p>
          <a href="game/game.html" class="btn">View More</a>
        </div>
      </div>
    </section>
      <!-------------------------------------WORK---------------------------------->
      <!-------------------------------------CONTACT------------------------------->
      <?php echo $alert; ?>
    <section class="contact" id="contact">
      <div class="heading white">
        <h2>Contact Me</h2>
        <p>Below are my contact information.</p>
      </div>
      <div class="content">
        <div class="contactInfo">
          <h3>Contact Info</h3>
          <div class="contactInfoBx">
            <div class="box">
              <div class="icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="text">
                <h3>Address</h3>
                <p>No.45, Jalan Seri 2, Taman Perlis, 01000<br>kangar, Perlis</p>
            </div>
          </div>
            <div class="box">
              <div class="icon">
                  <i class="fa fa-phone"></i>
              </div>
              <div class="text">
                <h3>Phone</h3>
                <p>019-8546916</p>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                  <i class="fa fa-envelope-o"></i>
              </div>
              <div class="text">
                <h3>Email</h3>
                <p>sohcheefung@gmail.com</p>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                  <i class="fa fa-linkedin-square"></i>
              </div>
              <div class="text">
                <h3>LinkedIn</h3>
                <p><a href="https://www.linkedin.com/in/soh-chee-fung-artist123/" target="_blank">https://www.linkedin.com/in/soh-chee-fung-artist123/</a></p>
              </div>
            </div>
        </div>
      </div>
      <div class="formBx">
        <form class="form" action="" method="post">
          <h3>Message Me</h3>
          <input type="text" name="name" placeholder="Full Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <textarea name="message" placeholder="Your Message"required></textarea>
          <input type="submit" name="submit" value="Send">
        </form>
      </div>
    </div>
    </section>
    <!------------------------------------CONTACT------------------------------->

    <div class="copyright">
      <p>Copyright @ 2020 Soh Chee Fung. All Right Reserved.</p>
    </div>

    <script type="text/javascript">

    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }

      window.addEventListener('scroll',function(){
        var header = document.querySelector('header');
        header.classList.toggle('sticky',window.scrollY > 0);
      });

      function toggleMenu(){
        var menuToggle = document.querySelector('.toggle');
        var menu = document.querySelector('.menu');
        menuToggle.classList.toggle('active');
        menu.classList.toggle('active');
      }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
  </body>
</html>
