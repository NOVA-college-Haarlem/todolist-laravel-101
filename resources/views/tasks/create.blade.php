<h1>Taak aanmaken</h1>
<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <label for="title">Titel</label>
    <input type="text" name="title" id="title">
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>
    <label for="due_date">Due Date</label>
    <input type="date" name="due_date" id="due_date">
    <label for="completed">Completed</label>
    <input type="checkbox" name="completed" id="completed">
    <button type="submit">Taak aanmaken</button>
</form>