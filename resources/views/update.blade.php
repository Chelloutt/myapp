<form action="/edit/{{ $promotion[0]->id }}" method="get">

    @csrf
    <input type="text" name="name" value="{{ $promotion[0]->name }}" autocomplete="off">
    <button>confirmer</button>
</form><br><br>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <center>
<h3>list des apprenants</h3>

<table>

  <tr>
    <th>nom</th>
    <th>prénom</th>
    <th>email</th>
    <th>actions</th>
  </tr>
  @foreach ($apprenants as $item)
      
 
  <tr>

    <td>{{$item->first_name}}</td>
    <td>{{$item->last_name}}</td>
    <td>{{$item->email}}</td>
    <td>
        <a href="/edit-app/{{ $item->id }}">modifier</a>
        <a href="/delete-app/{{ $item->id }}">suprrimer</a>
    </td>
  </tr>
 @endforeach
</table><br>
<a href="{{ URL('addapp/' . $promotion[0]->id) }}" id="add">ajouter un apprenant</a>

</center>
</body>
</html>
