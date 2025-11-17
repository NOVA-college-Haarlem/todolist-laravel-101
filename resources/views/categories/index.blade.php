<x-base-layout>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                <h2>{{ $category->name }}</h2>
                <p>{{$category->description}}</p>
            
            </li>
        @endforeach
    </ul>
</x-base-layout>