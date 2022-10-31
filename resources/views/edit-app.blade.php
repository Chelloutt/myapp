



<form action="/edit-app/{{  $apprenant[0]->promotionID  }}" method="get">

    <input type="text" name="name" value="{{ $apprenant[0]->first_name }}">
    <input type="text" name="last" value="{{ $apprenant[0]->last_name }}">
    <input type="text" name="email" value="{{ $apprenant[0]->email }}">
    <input type="hidden" name="id_promo" value="{{ $apprenant[0]->id }}">

    <button>Save</button>
</form>