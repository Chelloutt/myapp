
<form action="/insertapp" method="get">
nom<input type="text" name="name" autocomplete="off">
prenom<input type="text" name="last" autocomplete="off">
email<input type="text" name="email" autocomplete="off">
<input type="hidden" name="idapp" value="{{$id}}">
<button>Add</button>
</form>