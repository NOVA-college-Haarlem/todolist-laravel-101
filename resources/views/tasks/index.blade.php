<x-base-layout>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


    <div class="max-w-3xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-8 text-slate-800">{{$title}}</h1>
        @if($tasks->isEmpty())
            <div class="text-center text-slate-400 py-16">
                <svg class="mx-auto mb-4 empty-illustration" width="64" height="64" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" fill="none"/><path d="M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <p class="text-lg">Geen taken gevonden.</p>
            </div>
        @else

        <ul class="space-y-6">
            @foreach($tasks as $task)
                <li class="todo-item bg-white rounded-lg shadow-sm p-6 flex flex-col gap-2 border border-slate-100 hover:bg-indigo-50">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-indigo-700">{{ $task->title }}</h2>
                        <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-2 px-3 py-1 rounded bg-red-100 text-red-700 text-xs font-medium hover:bg-red-200 transition">Verwijder</button>
                        </form>
                        <a href="{{route('tasks.edit', $task->id)}}" class="ml-2 px-3 py-1 rounded bg-yellow-100 text-red-700 text-xs font-medium hover:bg-red-200 transition">Edit</a>
                    </div>
                    <p class="text-slate-700">{{$task->description}}</p>
                    <div class="flex flex-wrap gap-4 text-sm text-slate-500 mt-2">
                        <span class="inline-flex items-center gap-1"><svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>{{ $task->user->firstname }}</span>
                        <span class="inline-flex items-center gap-1"><svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 0v10l6 3"/></svg>{{ $task->category->name }}</span>
                    </div>
                    <ul>
                        @foreach($task->tags as $tag)
                            <li>
                                {{$tag->name}}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</x-base-layout>