<html >
<head><link rel="icon" href="./img/logo-icon.png" />
  <meta charset="UTF-8">
  <title>Slideshow</title>
  <link href='https://rawgit.com/Reklino/gromlicons/master/style.css' rel='stylesheet' type='text/css'>
<script src="//use.typekit.net/wvm8nty.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<body ng-app='app' ng-controller='MainController'>
  <main id='main'>
    <section id='one'>
      <div class='pane'
           ng-repeat='forest in forests track by $index'
           ng-if="$index == active">
          <main>
              <h1 ng-style="{'background-image' : 'url(' + forest.img + ')'}">{{ forest.rank }}</h1>
          </main>
          <div class="bg" ng-style="{'background-image' : 'url(' + forest.img + ')'}"></div>
      </div>
    </section>
    <section id='two'>
      <div class='pane'
           ng-repeat='forest in forests track by $index'
           ng-class="{ 'active' : $index == active }"
           ng-if="$index == active">
        <main>
			<br>
			<br>
			<br>
			<br>
            <h2>{{ forest.name }}</h2>
            <p class='sub'>{{ forest.location }}</p>
            <p>{{ forest.desc }}</p>
            <p><a href="alumni_single.php?id={{ forest.id }}" target="_parent">了解更多</a></p>
        </main>
      </div>
    </section>
  </main>
  <nav id='nav'>
    <ul>

      <li class='numbers'>
        <a href='#' ng-repeat="forest in forests track by $index" ng-click="setActive($index)" ng-class="{'active' : $index == active}">
          {{ $index + 1 }}
        </a>
      </li>


      <li class="next">
        <a href='./alumni.php' target="_parent">
          <span> MORE</span>
        </a>
      </li>
    </ul>
  </nav>
    <div id="preloader">
        <img src="./img/alumni/index1.JPG" alt="" />
        <img src="./img/alumni/index2.JPG" alt="" />
        <img src="./img/alumni/index3.JPG" alt="" />
        <img src="./img/alumni/index4.JPG" alt="" />
        <img src="./img/alumni/index5.JPG" alt="" />
        
    </div>
</body>
 
<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
<script src='https://cdn.rawgit.com/chieffancypants/angular-hotkeys/master/build/hotkeys.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-animate.js'></script>

    <script src="./js/slide.js"></script>

</body>
</html>
