<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="./CSS/menu.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">NAVBAR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Acceuil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="burger.html">Burger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
                <span class="visually-hidden">(current)</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
            </ul>

            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <h1>Contact</h1>
    <br></br>
        <form method="get">
            <label for="nom">Votre nom</label>
            <input placeholder="ex : Dumo" type="text" id="nom" name="nom">
            <br></br>
            <label for="prenom">Votre prénom</label>
            <input placeholder="ex : Jean" type="text" id="prenom"
                name="prenom">
            <br></br>
            <label for="mail">Votre email</label>
            <input placeholder="example@example.com" type="text" id="mail"
                name="mail">
            <br></br>
            <label for="adresse">Votre adresse</label>
            <input placeholder="3 Avenue Montaigne" type="text" id="adresse"
                name="adresse">
            <br></br>
            <label for="description">Votre description</label>
            <textarea name="description" id="description" cols="20" rows="1"></textarea>
            <br></br>
            Quel type de musique aimez vous?
            <br></br>
            <input type="checkbox" id="jazz" name="jazz">
            <label for="jazz">Le Jazz</label>
            <input type="checkbox" id="techno" name="techno">
            <label for="techno">La Techno</label>
            <input type="checkbox" id="rock" name="rock">
            <label for="rock">Le Rock</label>
            <br></br>
            <fieldset>
                <legend>
                    Vous êtes :
                </legend>
            <input type="radio" name="sexe" id="sexe" value="femme" id="femme" checked/><label for="femme"> une femme</label>
            <input type="radio" name="sexe" value="homme" id="homme"/><label for="homme"> un homme</label>
            <input type="radio" name="sexe" value="nsp" id="nsp"/><label for="nsp"> non&nbsp;définie</label>
            </fieldset>
            <br>
            <label for="pays">De quel pays venez vous ?</label>
            <select name="pays" id="pays">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="royaume-uni">Royaume-Uni</option>
            </select>
            <br></br>
            <div class="center">
            <input type="reset" value="Remettre à zéros">
            <input type="submit" value="Envoyer">
            </div>
        </form>
    </form>
</body>
</html>