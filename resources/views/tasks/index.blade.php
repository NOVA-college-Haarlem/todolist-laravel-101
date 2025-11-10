<x-base-layout>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</x-base-layout>