<?php
$user = 'root';
$password = 'root';
$db = 'metro';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);
//Pridejimas
$name = $_GET['name'];
$email = $_GET['email'];
if(isset($name) && isset($email)){
    $sqlPridejimas = "INSERT INTO `m2033`(`id`, `name`, `email`) VALUES ('','$name','$email')";
    $resultsPridejimas = mysqLi_query($link, $sqlPridejimas);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="css.style.css"></style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Metro2033</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section class="one" id="top">
    <header>
      <ul>
        <li><a href="metroll.php"><img src="../img/metroLLlogo.png" height="100px"></a></li>
        <li><a href="metroex.php"><img src="../img/exodusE.png" height="100px"></a></li>
      </ul>
    </header>
    <div>
      <img src="../img/metro2033logo.png" height="200px">
    </div>
    <span>
      <nav>
        <ul>
          <li class="holo"><a href="#top">Home</a></li>
          <li class="2"><a href="#about">About</a></li>
          <li class="3"><a href="#book">Book</a></li>
          <li class="4"><a href="#studio">Studio</a></li>
          <li class="5"><a href="#galery">Gallery</a><li>
        </ul>
      </nav>
    </span>
  </section>
  <section class="two" id="about">
    <div>
    <span>
      <h1>About</h1>
      <p>Metro 2033 is a first-person shooter survival horror video game developed by 4A Games and published by THQ. It was released in 2010 for the Xbox 360 and Microsoft Windows. The story is based on Dmitry Glukhovsky's novel of the same name, and is set in the ruins of Moscow following a nuclear war, where the survivors are forced to live in underground metro tunnels. Players control Artyom, a man who must save his home station from the dangers lurking within the Metro.</p>
      <p>Metro 2033 is played from a first-person perspective. Players encounter human and mutant enemies, who can be killed with a variety of firearms; alternatively, players can employ stealth to evade or silently kill enemies. Ammunition and other necessary items must be either scavenged from the bodies of dead enemies, or purchased from vendors. Some areas of the metro tunnels, in addition to the Earth's surface, are covered in radiation, and the player must wear a gas mask to explore these areas. If the gas mask is worn while in combat, it may be damaged, and the player must quickly find a replacement before they die.</p>
    </span>
      <img src="../img/m2033box.jpg" >
    </div>
  </section>
  <section class="three" id="book">
    <div>
      <img src="../img/m2033book.jpg">
      <span>
        <h1>Dmitry Glukhovsky Book Metro 2033</h1>
        <p>The novel first appeared online in 2002, but was first being written when Glukhovsky was no older than 16. First called "Underground", this version consisted only of 13 of the story's eventual 20 chapters, and ended rather abruptly with Artyom's death from a stray bullet. Underground was a rather unique story in terms of maintaining a satisfyingly depressing vibe to it, but also structurally, including references to music to which each chapter was intended to be listened to. Underground didn't manage to be published however, as the publishers Glukhovsky approached either stated that the story's ending was too "edgy" or the overall premise was simply not inspiring enough. Once posted on the internet however, it became an interactive experiment, drawing in thousands of readers from around Russia.
        <br>
        <br>
        In 2005 it was reworked, expanded, and printed by an established publisher as Metro 2033, quickly becoming a nationwide bestseller.
        <br>
        <br>
        In 2007, Glukhovsky was awarded the Encouragement Award of the European Science Fiction Society in the prestigious Eurocon contest in Copenhagen for his novel Metro 2033.
        <br>
        <br>
        By 2009, over 400,000 copies of Metro 2033 had been sold in Russia alone. Online readers outnumber paperback readers by five times in terms of numbers. Foreign book rights have been sold to more than 20 countries.
        <br>
        <br>
        The FPS video game Metro 2033 by THQ was released worldwide out in March 16, 2010 for PC and Xbox 360. As of November 2010, Glukhovsky was in talks with Hollywood-based studios and producers to sell the film rights. In September 2012, MGM picked up the screen rights to Metro 2033, setting F. Scott Frazier to write the script. Mark Johnson is producing via his Gran Via Productions.</p>
      </span>
      
    </div>
  </section>
  <section class="four" id="studio">
    <div>
    <span>
      <h1>4A Games</h1>
      <p>4A Games Limited is a Ukrainian video game developer based in Sliema, Malta. The company was founded in Kiev, Ukraine in 2005, and moved its headquarters to Malta in 2014, with the Kiev office resuming work as sub-studio, but retaining the majority of the staff. 4A Games is best known for developing the Metro video game franchise.
      <br>
      <br>
      4A Games was formed in Kiev, Ukraine in 2005 by Oles Shishkovstov and Alexander Maximchuk, former employees of GSC Game World. In 2006, the company started operations and began development on the 4A Engine, which would be used in 4A Games' forthcoming title, Metro 2033.
      <br>
      <br>
      The company's first game was Metro 2033, an adaptation of the novel of the same name by Russian author Dmitry Glukhovsky. Work on the project began in 2006, which was first unveiled to the public during the 2009 Games Convention in Leipzig, Germany. The game was announced to the press via publisher THQ and Nvidia, who worked with the developers to integrate PhysX functionality. The game was released in March 2010 on the Xbox 360 and Microsoft Windows to generally favorable reviews.
      </p>
    </span>
    <img src="../img/4AGames.png">
    </div>
  </section>
  <section class="five" id="galery">
    <h1>Video</h1>
    <div class="videoWrapper">
      <iframe  src="https://www.youtube.com/embed/Xc2hhef-Nzo?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </section>
  <section class="six">
  <h1>Screenshots</h1>
  <div>
    <img class="mySlides" width="100%" src="../img/m2033s1.jpg">
    <img class="mySlides" width="100%" src="../img/m2033s2.jpg">
    <img class="mySlides" width="100%" src="../img/m2033s3.jpg">
    <img class="mySlides" width="100%" src="../img/m2033s4.jpg">
    <img class="mySlides" width="100%" src="../img/m2033s5.jpg">
    <img class="mySlides" width="100%" src="../img/m2033s6.jpg">

  </div>
  </section>
  <section class="seven">
    <form action="index.php" method="GET">
      <h1>Subscribe to newsletter</h1>
      <!--     <form action="index.php" method="get"> -->
      <label for="">Name:</label>
      <input type="text" name="name" placeholder="Name">
      <label for="">Email:</label>
      <input type="text" name="email" placeholder="Email">
      <button>SUBSCRIBE</button>
    </form>
    <div>
      <a href="https://www.facebook.com/m2033/" target="blank">
        <i class="fa fa-facebook-square" style="font-size:48px;"></i>
      </a>
      <a href="https://twitter.com/metrovideogame" target="blank">
      <i class="fa fa-twitter-square" style="font-size:48px;"></i>
      </a>
      <a href="http://store.steampowered.com/app/286690/Metro_2033_Redux/" target="blank" target="blank" >
      <i class="fa fa-steam-square" style="font-size:48px;"></i>
      </a>
      <a href="https://www.youtube.com/user/metrovideogame" target="blank">
      <i class="fa fa-youtube-play" style="font-size:48px;"></i>
      </a>
      <a href="https://www.goodreads.com/book/show/17274667-metro-2033" target="blank">
      <i class="fa fa-book" style="font-size:48px;"></i>
      </a>
      <a href="https://www.instagram.com/metrovideogame/" target="blank">
      <i class="fa fa-instagram" style="font-size:48px;"></i>
      </a>
    </div>

  </section>
  <script src="script.js"></script>
</body>
</html>
<!-- youtube video padaryt embed/kodas? -->
<!-- sestas baigtas -->
