<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border="2">
            <th>Id</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Memiore</th>
            <th>Couleur</th>
            @foreach ($listOedinateurs as $ordi)
            <tr>
                <td>{{$ordi->id}}</td>
                <td>{{$ordi->marque}}</td>
                <td>{{$ordi->prix}}</td>
                <td>{{$ordi->memoire}}</td>
                <td>{{$ordi->couleur}}</td>
                <td><a href="supprimer?id={{$ordi->id}}">supprimer</a></td>
                <td><a href="modifier?id={{$ordi->id}}">modifier</a></td>
            </tr>
            @endforeach
        </table>
    
</body>
</html>