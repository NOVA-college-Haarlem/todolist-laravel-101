<h1>Categorie aanmaken</h1>
<form action="{{route('categories.store')}}" method="post">
    @csrf
    <label for="title">Titel</label>
    <input type="text" name="title" id="title">
    <label for="description">Beschrijving</label>
    <textarea name="description" id="description"></textarea>
   
    <button type="submit">Categorie aanmaken</button>
</form> 