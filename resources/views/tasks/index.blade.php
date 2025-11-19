<x-base-layout>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                <h2>{{ $task->title }}</h2>
                <p>{{$task->description}}</p>
                <h4>{{ $task->user->firstname }}</h4>
            
            </li>
        @endforeach
    </ul>
</x-base-layout>