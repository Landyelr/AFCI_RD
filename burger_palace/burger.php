<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Burger</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="favicon.ico" />
</head>

<body>

<?php include './PHP/header.php'; ?>

<div class="contenant">
    <img src="./IMG/banner_nos_burger.jpg" alt="nos burger" width="100%">
    <div class="texte"><p class="nosburger">NOS BURGER</p></div>
    <br></br>
  </div>

  <h1>Découvrez nos burger fait maison</h1>

  <div>
    <div class="row offset-2 col-8">
      <div class="row m-5">
        <div class="col-4"><img src="./IMG/mountain_burger.png" alt="Moutain Burger" width="100%"><h3>Moutain<h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
        <div class="col-4"><img src="./IMG/classic_burger.png" alt="Classic Burger" width="100%"><h3>Classic<h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
        <div class="col-4"><img src="./IMG/italian_burger.png" alt="Italian Burger" width="100%"><h3>Italian</h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
      </div>
    </div>

      <div class="row offset-2 col-8">
        <div class="row m-5">
          <div class="col-4"><img src="./IMG/royal_burger.png" alt="Royal Burger" width="100%"><h3>Royal<h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/chicken_burger.png" alt="Chicken Burger" width="100%"><h3>Chicken<h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/vegan_burger.png" alt="Vegan Burger" width="100%"><h3>Vegan</h3><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
        </div>
      </div>
    </div>
  </div>

<?php include './PHP/footer.php'; ?>

<script src="https://kit.fontawesome.com/4f31b71947.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>