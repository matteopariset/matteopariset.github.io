<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Ideas & Projects | Matteo Pariset</title>
  <meta name="description" content="A collection of some of my side-projects"/>
  <link href="https://fonts.googleapis.com/css?family=Oswald|Montserrat:200,300,500" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css?<?php echo date("H:i:s");?>"/>
</head>

<body>
  <div class="canvas">
    <div class="top-banner">
      <div class="selectors-bar">
        <div onclick="location.href='#top-page';" class="selector">
          HOME
        </div>
        <div onclick="location.href='me.php';" class="selector">
          ABOUT ME
        </div>
      </div>
    </div>

    <div class="home-content">

      <div id="top-page" class="topic" style="display: flex; align-items: center; justify-content: center;">
        <div class="welcome">
          <div class="welcome-logo">
            <img src="./img/logo.png" style="position: relative; height: 10vmin;"/>
          </div>
          <div class="welcome-text-big">
            Hi
          </div>
          <div class="welcome-text">
            scroll down to explore some of my projects
          </div>
          <div class="welcome-arrow arrow">
            &#9660;
          </div>
        </div>
      </div>

      <div class="topic big-tile" style="background-image: url('./img/ai-wall.jpg');">
        <div class="topic-text">
          <div onclick="location.href='ai.php';" class="topic-title">
            Artificial Intelligence: <br/> Neural networks
          </div>
          <div class="topic-description">
            How do artificial brains learn? <br/>An introduction the the mathematical models of the mind
          </div>
          <div class="topic-action">
            <a href="ai.php" class="action-button">
              LEARN MORE
            </a>
          </div>
          <a class="image-attribution" href="http://www.freepik.com">
            Image by Starline / Freepik
          </a>
        </div>
      </div>

      <!--
      TODO create smaller banner
      TODO create right banner
      TODO better handle color
    -->

      <div class="separator"><img src="./img/robot.png" width="128" style="position: relative; padding-top: 10vh;"/></div>

      <div class="bold-statement">
        Work in progress
      </div>
      <div class="plain-statement">
        Sorry for the mess, I'm still working on it
      </div>

      <div class="separator">&bull;</div>

      <!--
      <div class="topic slim-tile" style="background-image: url('./img/wip-wall.jpg');">
        <div class="slim-title">
          Work in progress
        </div>
        <a class="image-attribution" href="http://www.freepik.com">
          Image by Starline / Freepik
        </a>
      </div>

    -->
    </div>

    <div class="bottom-banner">
      <div class="footer-content">
        <div class="left-footer-content">
          &copy; Matteo Pariset, 2018
        </div>
        <div class="right-footer-content">
          <a href="mailto:matteopariset@gmail.com" class="mailto">
            matteopariset@gmail.com
          </a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
