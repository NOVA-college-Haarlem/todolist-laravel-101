<x-base-layout>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                <h2>{{ $task->title }}</h2>
                <p>{{$task->description}}</p>
                <h4>{{ $task->user->firstname }}</h4>
                <p> {{$task->category->name}}</p>
                <p>
                    <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </p>
            
            </li>
        @endforeach
    </ul>
</x-base-layout>