<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modifier" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$modifierOrdinateurs->id}}">
            <label for="">Marque :</label>
            <input type="text" name="marque" value="{{$modifierOrdinateurs->marque}}">
        <br><br>
            <label for="">Prix :</label>
            <input type="text" name="prix" value="{{$modifierOrdinateurs->prix}}">
        <br><br>
            <label for="">Memoire :</label>
            <input type="text" name="memoire" value="{{$modifierOrdinateurs->memoire}}">
        <br><br>
            <label for="">Couleur</label>
            <input type="text" name="couleur" value="{{$modifierOrdinateurs->couleur}}">
        <br><br>
            <input type="submit" value="valider">
            <input type="reset" value="annuler">
            
    </form>
    
</body>
</html>