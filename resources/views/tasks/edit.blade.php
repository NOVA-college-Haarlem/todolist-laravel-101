<x-base-layout>
    <h1>Taak bewerken</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="title">Titel</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <label for="due_date">Due Date</label>
        <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}">
        <label for="completed">Completed</label>
        <input type="checkbox" name="completed" id="completed" value="{{ $task->completed }}">
        <button type="submit">Taak bewerken</button>
    </form>
</x-base-layout>