<?php ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food Ninja</title>
  <!-- materialize icons, css & js -->
  <link type="text/css" href="./js/materialize.min.js" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="./css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="./js/materialize.min.js"></script>
  <link rel="manifest" href="./manifest.json"></link>
  <!--ios support repeat to get other icons sizes-->
  <link rel="apple-touch-icon" href="./icons/icon-96x96.png"></link>
  <meta name="apple-mobile-web-app-status-bar" content="black">
</head>
<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="./">Food<span>Ninja</span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">FOODNINJA</a></li>
    <li><a href="./" class="waves-effect">Home</a></li>
    <li><a href="./pages/about.html" class="waves-effect">About</a></li>
    <li><div class="divider"></div></li>
    <li><a href="./pages/contact.html" class="waves-effect">
      <i class="material-icons">mail_outline</i>Contact</a>
    </li>
  </ul>

  <!-- recipes -->
  <div class="recipes container grey-text text-darken-1">
    <div class="card-panel recipe white row">
      <img src="./img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Edame Noodles</div>
        <div class="recipe-ingredients">Edame Beans, Noodels, Garlic oil</div>
      </div>
      <div class="recipe-delete">
        <i class="material-icons">delete_outline</i>
      </div>
    </div>
    <div class="card-panel recipe white row">
      <img src="./img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Edame Noodles</div>
        <div class="recipe-ingredients">Edame Beans, Noodels, Garlic oil</div>
      </div>
      <div class="recipe-delete">
        <i class="material-icons">delete_outline</i>
      </div>
    </div>
    <div class="card-panel recipe white row">
      <img src="./img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Edame Noodles</div>
        <div class="recipe-ingredients">Edame Beans, Noodels, Garlic oil</div>
      </div>
      <div class="recipe-delete">
        <i class="material-icons">delete_outline</i>
      </div>
    </div>
    <div class="card-panel recipe white row">
      <img src="./img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Edame Noodles</div>
        <div class="recipe-ingredients">Edame Beans, Noodels, Garlic oil</div>
      </div>
      <div class="recipe-delete">
        <i class="material-icons">delete_outline</i>
      </div>
    </div>
  </div>

  <div class="center">
    <a class="btn-floating btn-small btn-large add-btn sidenav-trigger" data-target="side-form">
      <i class="material-icons">add</i>
    </a>
  </div>

  <!-- add recipe side nav -->
  <div id="side-form" class="sidenav side-form">
    <form class="add-recipe container section">
      <h6 >New Recipe</h6>
      <div class="divider"></div>
      <div class="input-field">
        <input placeholder="e.g. Ninja soup" id="title" type="text" class="validate">
        <label for="title">Recipe Title</label>
      </div>
      <div class="input-field">
        <input placeholder="e.g. Tofu, mushroom, garlic" id="ingredients" type="text" class="validate">
        <label for="ingredients">Ingredients</label>
      </div>
      <div class="input-field center">
        <button class="btn-small">Add</button>
      </div>
    </form>
  </div>

  <script src="./js/ui.js"></script>
</body>
</html>