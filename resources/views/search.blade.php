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
  </table>