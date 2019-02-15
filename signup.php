<?php
include 'db.php';


?>


<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Hate APP - Created by Tahir Ahmad." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <title>Signup - HateApp</title>

    <!-- Page styles -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <style>
      #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
      }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/hateapp.png" />
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div
            class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width"
          >
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field" />
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Your Profile</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/hateapp.png" />
          </span>
          <button
            class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
            id="more-button"
          >
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">Tahir Ahmad</li>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/android-logo-white.png" />
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Home</a>
          <a class="mdl-navigation__link" href="">Profile</a>

          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Logout</span>
        </nav>
      </div>
  <?php   
  
  $sql = "INSERT INTO `user`(`mobile`, `gender`, `password`, `picture`) VALUES ('$mobile','$gender','$password','$picture')";
      
      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


      ?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
        <!-- Simple Textfield -->
<form action="login.php" method='post'>
  <div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1">
    <label class="mdl-textfield__label" for="sample1">Mobile/Email</label>
  </div>
</div>
<div>
    <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="sample1">
      <label class="mdl-textfield__label" for="sample1">Name</label>
    </div>
  </div>
 <div>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Gender</label>
        </div>
      </div>
      <div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
    <label class="mdl-textfield__label" for="sample2">Password</label>
 
  </div>
</div>
<div class='text-center'>
  
</div>
<div class='text-center '>
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="file"  id="sample2">



  </div>
  <div class='text-center '>
      <div class="mdl-textfield mdl-js-textfield">

    <button  name='submitbutton' class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast ">
   SignUp
    </button>
      </div>



</form>
         
       

        
        </div>
        <div class="android-screen-section mdl-typography--text-center">
        
        
       
      
  
         

        <footer class="android-footer mdl-mega-footer">
       

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Creating this because I hate valentine week.</p>
            <p class="mdl-typography--font-light">Need your love to support this hate.</p>
          </div>

        
        </footer>
      </div>
    </div>
   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
