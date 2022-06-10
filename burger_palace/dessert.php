<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessert</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
</head>

<body>

 <?php include './PHP/header.php'; ?>

  <div class="contenant">
    <img src="./IMG/banner_nos_dessert.jpg" alt="nos desserts" width="100%">
  <div class="texte"><p class="nosburger">NOS DESSERTS</p></div>
  </div>
    <br></br>
    <h1>Découvrez nos desserts fait maison</h1>
  <div>
    <div>
      <div class="row m-5">
          <div class="row offset-2 col-8">
              <div class="col-4"><img src="./IMG/milkshake.png" alt="Milkshake" width="100%"><h3>Milkshake<h3><p class="descrp-brg">Milk, cream, sugar, strawberry ou chocolate</p></div>
              <div class="col-4"><img src="./IMG/cheesecake.png" alt="Cheesecake" width="100%"><h3>Cheesecake<h3><p class="descrp-brg">Cheese, white chocolate, strawberry, shortbread</p></div>
              <div class="col-4"><img src="./IMG/pancakes.png" alt="Pancakes" width="100%"><h3>Pancakes</h3><p class="descrp-brg">Milk, eggs, flour, sugar, hazelnut chocolate</p></div>
          </div>
      </div>
    </div>
  </div>

  <?php include './PHP/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  

</body>
</html>