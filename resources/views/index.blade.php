
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <title>List des Apprenats</title>

</head>
<body>

<input type="text" id="search" name="search" placeholder="search" autocomplete="off" ><br><br>
<table id="data">

    <th>id</th>
    <th>nom</th>
    <th>actions</th>
    

    @foreach ($data as $item)
    


  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>

    <td>
        <a href="/update/{{$item->id}}" id="edit">modifier</a>
        <a href="/delete?id={{ $item->id }}" id="supprimer">supprimer </a>
    </td>
    @endforeach
  </tr>
  </table><br>
      <a href="add" id="add">ajouter un promotion</a>

        




<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>


