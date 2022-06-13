<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acceuil</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="favicon.ico" />
</head>

<body>

<?php include './PHP/header.php'; ?>

<div>
    <img src="./IMG/banner_burger_honey.jpg" alt="banner burger honey" width="100%">
</div>

<div>
      <p class="titlehome">NOS BURGER</p>
    </div>
    <div>
      <div class="row m-5">
        <div class="row offset-2 col-8">
          <div class="col-4"><img src="./IMG/mountain_burger.png" alt="Moutain Burger" width="100%"><p class="title-brg">Moutain</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/classic_burger.png" alt="Classic Burger" width="100%"><p class="title-brg">Classic</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/italian_burger.png" alt="Italian Burger" width="100%"><p class="title-brg">Italian</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
        </div>
      </div>

      <div class="row m-5">
        <div class="row offset-2 col-8">
          <div class="col-4"><img src="./IMG/royal_burger.png" alt="Royal Burger" width="100%"><p class="title-brg">Royal</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/chicken_burger.png" alt="Chicken Burger" width="100%"><p class="title-brg">Chicken</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
          <div class="col-4"><img src="./IMG/vegan_burger.png" alt="Vegan Burger" width="100%"><p class="title-brg">Vegan</p><p class="descrp-brg">Steak, cheddar, oignon cru, tomate, salade</p></div>
        </div>
      </div>

        <div class="m-5">
          <button type="button" class="btn btn-dark"><a class="text-white" href="burger.php">TOUT VOIR</a></button>
        </div>

        <div class="contenant">
        <img src="./IMG/banner_burger_spicy.gif" alt="" width="100%">
        <br></br>
      </div>
    </div>

    <div>
      <p class="titlehome">NOS DESSERTS</p>
    </div>
    <div>
      <div class="row m-5">
        <div class="row offset-2 col-8">
          <div class="col-4"><img src="./IMG/milkshake.png" alt="Milkshake" width="100%"><h3>Milkshake<h3><p class="descrp-brg">Milk, cream, sugar, strawberry ou chocolate</p></div>
          <div class="col-4"><img src="./IMG/cheesecake.png" alt="Cheesecake" width="100%"><h3>Cheesecake<h3><p class="descrp-brg">Cheese, white chocolate, strawberry, shortbread</p></div>
          <div class="col-4"><img src="./IMG/pancakes.png" alt="Pancakes" width="100%"><h3>Pancakes</h3><p class="descrp-brg">Milk, eggs, flour, sugar, hazelnut chocolate</p></div>
        </div>
      </div>
      <div class="m-5">
        <button type="button" class="btn btn-dark"><a class="text-white" href="dessert.php">TOUT VOIR</a></button>
      </div>
    </div>

<?php include './PHP/footer.php'; ?>

<script src="https://kit.fontawesome.com/4f31b71947.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>