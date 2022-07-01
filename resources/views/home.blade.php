<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Home</h1>

<form action="/gifts-card" method="post">
    <label for="prices">Prix:</label>
    <input type="number" name="prices" placeholder="Prix" min="10" max="10000">
    <hr/>
    <label for="lastname">Nom:</label>
    <input type="text" name="lastname" placeholder="Nom">
    <hr/>
    <label for="firstname">Prenom:</label>
    <input type="text" name="firstname" placeholder="Prenom">
    <hr/>
    <label for="date">Date:</label>
    <input type="date" name="date" placeholder="date">
    <hr/>
    <!-- <input type="text" name="commande" placeholder="commande"> -->
    <input type="submit" name="submit" value="Envoyer">

</form>
    
</body>
</html>