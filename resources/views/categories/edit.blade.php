<h1>Categorie aanpassen</h1>
<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$category->name}}">
    <label for="description">Beschrijving</label>
    <textarea name="description" id="description">{{$category->description}}</textarea>
   
    <button type="submit">Categorie aanmaken</button>
</form> 


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif