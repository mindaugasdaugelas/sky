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
    $sqlPridejimas = "INSERT INTO `metroll`(`id`, `name`, `email`) VALUES ('','$name','$email')";
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
    <style type="css.metroLLstyle.css"></style>
    <title>MetroLastLight</title>
    <link rel="stylesheet" href="css/metroLLstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Montserrat" rel="stylesheet">
  </head>
<body>

  <section class="pirmas" id="home">
    <header>
      <ul>
        <li><a href="index.php"><img src="../img/metro2033logo.png" height="100px"></a></li>
        <li><a href="metroex.php"><img src="../img/exodusE.png" height="100px" ></a></li>
      </ul>
    </header>
    <div>
      <img src="../img/metroLLlogo.png" height="200px" >
    </div>
    <span>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#changes">Changes</a></li>
          <li><a href="#keturi">Factions</a></li>
          <li><a href="#galery">Gallery</a></li>
        </ul>
      </nav>
    </span>
  </section>
  <section class="antras" id="about">
    <div>
    <span>
      <h1>Overview</h1>
      <p>As the sequel Metro 2033, Metro: Last Light follows the same gameplay formula. With the player character, Artyom, journeying across linear sections of a Post-Apocalyptic Metro System and an irradiated surface of post-apocalyptic Moscow, hoping to save what's left of humanity, long after World War III. In this inhospitable landscape, the player must guide Artyom into following friends, battling dangerous mutants, and engaging in firefights with enemy factions, or complex stealth missions in which remaining unseen is vital for survival.
      <br>
      <br>
      The story takes place after Metro 2033, with a new story guided by Dmitry Glukhovsky but written in-house at 4A-Games. The story continues on from the canonical ending of the previous game, in which Artyom destroyed the mysterious new mutant threat, the Dark Ones. In this setting, Artyom's allies: Khan and other Rangers, join forces once again to defend D6 from many foes including the Fourth Reich, communists and bandits. With this new installment 4A has introduced a multitude of new weapons, such as the bolt-action rifle, a single-shot pistol, a hand powered chain gun, as well new locations to play in.
      </p>
    </span>
    <img src="../img/metroLLbox.jpg" >
    </div>
  </section>
  <section class="trecias" id="changes">
    <div>
      <div>
      <h1>Gameplay changes</h1>
      <span>
        <h2>World Management</h2>
        <p>From the first trailers, it was shown that Artyom's watch would be significantly different in Last Light.
        Instead of the, at-times confusing system of the three LEDs and three coloured areas on Artyom's dive-watch,
        Artyom's new watch is digital. The new watch replaces estimated filter time, with concise digital numbers 
        which indicate how much time Artyom has left in his filter - with each filter starting the countdown at exactly five minutes.
         Replacing the three LEDs for the stealth indicator is now a simple single blue light that states if Artyom can or can't be seen.
        Augmenting this is in stealth missions is a shrill horn sound effect, that plays when Artyom is in danger of being spotted and must move immediately.
        </p>
      </span>
      <span>
        <h2>Combat</h2>
        <p>In response to criticisms of lacklustre combat in 2033, weapon reload times, battery charge time, and Artyom's
         movement has all seen an increase in efficiency or "tightness". 4A games have given the in-universe explanation that
        this is to signify Artyom's expertise with weaponry, now that he is a ranger. These changes have been met with mixed 
        reactions from long-time fans of Metro 2033, with many praising the high-quality controls but criticizing the general
        ease of combat left by it.
        Weapons such as the grenade and the throwing knives are given their own devoted sub menu. Appearing only in the standard di
        fficulties, with the menu open the game slows down about four times. This could be very effective at some times, especially
        when entering an area where the player suddenly faces an enemy, as it is a very good way to evaluate the situation, and get
        time to think. Besides that, the player can shoot while ADS (aiming down sights) and reload, but not when looking down the iron sights.
        The only drawback is that it is still impossible to aim down the sights while reloading, but the player can strafe and duck to attempt to hit their target.
        The sounds also warp in the same way as some of the cinematics, and when smoking the "bong" in Venice.
        </p>
        
      </span>
      
    </div>
   </div> 
  </section>
  <section class="ketvirtas" id="ketvirtas">
    <div>
      <h1>Major Factions</h1>
      <span class="factions">
        <img src="../img/metroLLrangers.jpg" width="90%">
        <span>
          <h1>Rangers of the Order</h1>
          <p>A para-military organization considered the protectors of the Metro, the Rangers, also known as Spartans, venture the Metro and the surface, eliminating mutants and bandits who prey on the weak. Although neutral, they maintain close ties with Polis (itself a neutral power), with many members hailing from The City. They possess no home stations, instead of occupying the surface base of Sparta, and the D6 bunker. Their leader, Miller, enforces a policy of 'if it's hostile, you kill it', which has served the Rangers well so far. Many members were previously Russian special forces or military, training which has helped the Rangers to gain a reputation as the most formidable fighters in the Metro. About 250 men and women can claim the honor of being Spartans, with 100 in the field at any time. This is also Artyom's faction.</p>
        </span>
      </span>
      <span class="factions">
        <img src="../img/metroLLreich.jpg">
        <span>
          <h1>Fourth Reich</h1>
          <p>A far-right faction inspired by the ideas and policies of Adolf Hitler and his Third Reich. Led by the Führer and formed around a core of Neo-Nazis and pre-war xenophobes, the Reich strives to build a New Order, envisioning a Metro free of mutants and non-Russians. To this end, they employ special instruments and techniques (modeled upon those used in Hitler's Germany) to ensure that genetic "standards" are upheld by all inhabitants of and travelers to the Reich. Their home station is the triple station of Tverskaya-Chekhovskaya-Pushkinskaya, though they occupy many other stations and bases on the surface. In a state of perpetual war with their political opposites, the Marxist-Leninist Red Line, the Reich possesses an army of between 2,000 and 3,000 men. Preferring (partially as a result of their smaller population) quality to quantity, Reich soldiers are significantly better equipped and trained on a man-to-man basis than their more numerous red counterparts, a situation which clearly parallels the Eastern Front of World War II.</p>
        </span>
      </span>
      <span class="factions" width="1000px">
        <img src="../img/metroLLhanza.jpg" width="1000px">
        <span>
          <h1>The Commonwealth of the Stations of the Ring Line</h1>
          <p>Commonly shortened to "Hansa", this faction is a collection of stations led by President Pyotr Rusakov and occupying the vital Koltsevaya Ring Line. Formed soon after the collapse of Central Metro Command, Hansa is the most influential faction in the Metro. Occupying what could be considered the "jugular" of the entire metro system, trade from every station and faction in the Metro passes through Hansa checkpoints. To protect its sovereignty, security, and trade revenues, Hansa possesses a potent force of 4000 to 5000 soldiers. Despite this impressive ensemble, Hansa remains something of an apathetic bystander to strife in the tunnels, preferring to use sanctions and threats when necessary to protect the Commonwealth's interests.</p>
        </span>
      </span>
      <span class="factions">
        <img src="../img/metroLLreds.jpg" width="1000px">
        <span>
          <h1>Red Line</h1>
          <p>A Marxist-Leninist and Neo-Stalinist faction, the Red Line is the haven of Soviet nostalgists and aging former members of the CPSU and Komsomol. Led by General Secretary Maxim Moskvin, the Communist Party maintains control much as in Stalin's time- through a program of censorship, political and social repression, and webs of spies and informants. The Reds occupy most of the Sokolnicheskaya Line (literally, "Red Line"; the oldest in the Metro and a constant reminder of the glories of Russia's socialist past) minus the two stations of the Ring, and possess the largest population and greatest territory in the Metro. Much like the Soviet Army of the Second World War, the Red Line relies on a massive, but poorly trained and equipped, conscript army. Of the Line's 15,000 citizens, 6,000-7,000 serve in the Armed Forces, engaged in a constant struggle against the Neo-Nazis of the Fourth Reich.</p>
        </span>
      </span>
      <button class="buttonleft" onclick="plusDivs(-1)">&#10094;</button>
      <button class="buttonright" onclick="plusDivs(1)">&#10095;</button>
    </div>
  </section>
  <section class="mobsters">
    <div>
      <h1>Mutants</h1>
      <!-- type 1 -->
      <span class="monsters">
        <span>
          <h1>Nosalies</h1>
          <p>Nosalises are the standard enemy of the Metro video game series. They are fierce predators, extremely territorial, and can easily overwhelm fortified positions in large numbers. Nosalises differ from most other mutant types by the sheer number of variant subspecies that exist under the generalisation of "Nosalis". Common between all types however, is a bipedal and humanoid shape with two arms and legs, arched spines, and large round heads that prominently display big noses, gaping jaws, and huge teeth. Their nests are seemingly everywhere in the metro, but the creatures are less frequently seen on the surface. Nosalises seem to be derived from moles, as indicated by their Latin name, as well as their prominent snout and large claws. Like most animal inhabitants of the Metro and surface, they have undergone extreme mutation due to prolonged radioactive exposure. Some Nosalis variants may instead be derived from Shrews or Desmans, both of which were native to Russia before the war.
          </p>
        </span>
        <img src="../img/mnosalis.png" >
      </span>
      <!-- type 2 -->
      <span class="monsters">
        <img src="../img/watcher.png" >
        <span>
          <h1>Watcher</h1>
          <p>Watchers resemble Dogs, both in behaviour and appearance. The Watcher can commonly be found standing up on two hind legs sniffing the air or baying into the distance. A Watcher's mouth is very odd, it is angled upward and sunken into the face, giving the watcher a face reminiscent of a Bull Dog or Boxer breed of dog. A pair of phalanges adjoin either side of the mouth and have some teeth lining the lower edge. These are probably used to give the watcher a greater surface area when biting, or to amplify its howls.
          </p>
        </span>
      </span>
      <!-- type 3 -->
      <span class="monsters">
        <span>
          <h1>Demon</h1>
          <p>A Demon can be described as having a knobbly spine, short tail and three pairs of limbs: two prehensile arms, two legs and two large wings. They also have a long head with a blunt snout, consisting of a bat-like nose, eyes with vertical cat-like slit pupils set far apart on the head, and a large mouth with 4 canines and several secondary teeth. The backs of Demons are covered in sparse, short black fur and there are folds of skin on the base of the neck. Their wings are attached to their body with massively muscled arm like limbs that are almost twice the diameter of their thigh muscles. This explains how Demons can fly, despite a their massive size - a Demon's wings are in fact so powerful that they can hover in the air for significant periods of time. Demons vary in size from babies the size of household cats to the largest encountered in the level, The Crossing; this dead Demon is the size of a large horse. Demons produce roars that seem to be a guttural version of a tiger's. Because their eyes are quite small and on the sides of their head, it is unlikely that the demons hunt by sight. Their large nasal ducts suggest a powerful sense of smell.
          </p>
        </span>
        <img src="../img/demon.png" >
      </span>
      <!-- type 4 -->
      <span class="monsters">
        <img src="../img/lurker.jpg">
        <span>
          <h1>Lurker</h1>
          <p>Lurkers are small dog-like creatures that share similarities with watchmen. They are very fast and tend to jump up from holes in the ground and launch themselves at threats or food. They often show up in packs of one to three at a time, even if more are in the area. Lurkers are mostly scavengers that press in upon carcasses, and rarely hunt live prey. They have almost pink skin and no body hair whatsoever. They also possess a second pair of eyes, which are very small and are probably useless as they appear to be milky white (a sign of blindness).
          </p>
        </span>
      </span>
      <!-- type 5 -->
      <span class="monsters">
        <span>
          <h1>Shrimp</h1>
          <p>Despite a number of forms, all shrimps share several similarities. For one, all shrimp share similar visual characteristics - including long slender bodies ending with pronounced heads, large arm-like appendages and heavy chitinous armor. The hard shells, made out of multiple plates or large scales, resemble that of a hybrid of lobster and common cockroach, and is solid enough to absorb or deflect shotgun fire. The end of their tails shows some kind of spikes, like a lot of arthropods, possibly used to dig in the ground in order to lay eggs. Shrimp, as a category, can be found all over the  Metro and the surface, always near sources of water, which they presumably live within. Such behavior suggests their origin could be a river arthropod, such as a crayfish - but it could also be some kind of terrestrial insect brought back into water by radiation. Interestingly, the long extendable limb on their undersides implies that at least some shrimp variants were in fact mutated from dragonfly nymphs, which possess similar grasping mouth-parts. A dragonfly origin could certainly explain the shrimps' physical appearance as well as their close association with warm and wet environments.
          </p>
        </span>
        <img src="../img/shrimp.png">
      </span>
      <!-- type 6 -->
      <span class="monsters">
        <img src="../img/spider.png">
        <span>
          <h1>Spider Bug</h1>
          <p>Large spiders are enemies encountered in several chapters throughout Last Light, first appearing in Reich, but first fought in Torchlight. All variations of spider will avoid any light sources, including Artyom's flashlight, so turn on all the available lights in your area to create safe zones in case you need to retreat. When exposed to the flashlight beam, spiders will begin to smoke, turn a reddish-black color, and often backpedal away from Artyom to attempt to break line of sight, such as by scurrying behind a pillar or around a corner. Once they are safely out of the light, they will come back to attack again. Adult spiders have a thick armored shell that is impervious to gunfire, and must be flipped onto their backs via exposure to light to kill; these can be distinguished from their weaker hatchling counterparts, that are not bulletproof, by their brown coloration.
          </p>
        </span>
      </span>
      <button class="butleft" onclick="plusSlides(-1)">&#10094;</button>
      <button class="butright" onclick="plusSlides(1)">&#10095;</button>
    </div>
  </section>
  <section class="penktas" id="galery">
    <h1>Video</h1>
    <div class="videoWrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/7DUCA8wK9Ls?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>  </section>
  <section class="sestas">
  <h1>Screenshots</h1>
  <div>
    <img class="mySlides" width="100%" src="../img/metroLLs1.jpg">
    <img class="mySlides" width="100%" src="../img/metroLLs2.jpg">
    <img class="mySlides" width="100%" src="../img/metroLLs3.png">
    <img class="mySlides" width="100%" src="../img/metroLLs4.png">
    <img class="mySlides" width="100%" src="../img/metroLLs5.jpg">
    <img class="mySlides" width="100%" src="../img/metroLLs6.jpg">
    <img class="mySlides" width="100%" src="../img/metroLLs7.jpg">
    <img class="mySlides" width="100%" src="../img/metroLLs8.jpg">
    </div>
  </section>
<section class="septintas">
    <form action="metroll.php" method="GET">
      <h1>Subscribe to newsletter</h1>
      <label for="">Name:</label>
      <input type="text" name="name" placeholder="Name">
      <label for="">Email:</label>
      <input type="text" name="email" placeholder="Email">
      <button>SUBSCRIBE</button>
    </form>
    <div>
      <a href="https://www.facebook.com/Metro.2034/" target="blank">
      <i class="fa fa-facebook-square" style="font-size:48px;"></i>
      </a>
      <a href="https://twitter.com/metrovideogame" target="blank">
      <i class="fa fa-twitter-square" style="font-size:48px;"></i>
      </a>
      <a href="http://store.steampowered.com/app/287390/Metro_Last_Light_Redux/" target="blank" >
      <i class="fa fa-steam-square" style="font-size:48px;" target="blank" ></i>
      </a>
      <a href="https://www.youtube.com/user/metrovideogame" target="blank">
      <i class="fa fa-youtube-play" style="font-size:48px;"></i>
      </a>
      <a href="https://www.instagram.com/metrovideogame/" target="blank">
      <i class="fa fa-instagram" style="font-size:48px;"></i>
      </a>
    </div>

  </section>
<script src="script.js"></script>
</body>
</html>
<!-- youtube video padaryt ember/kodas? -->