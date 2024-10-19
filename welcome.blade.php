<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajouter" methode="post">
        @csrf
            <label for="">Marque :</label>
            <input type="text" name="marque">
        <br><br>
            <label for="">Prix :</label>
            <input type="text" name="prix">
        <br><br>
            <label for="">Memoire :</label>
            <input type="text" name="memoire">
        <br><br>
            <label for="">Couleur</label>
            <input type="text" name="couleur">
        <br><br>
            <input type="submit" value="valider">
            <input type="reset" value="annuler">
            
    </form>
    
</body>
</html>