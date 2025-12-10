<x-base-layout>
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg border border-slate-200 p-8">
            <h1 class="text-3xl font-bold text-slate-900 mb-8">Taak bewerken</h1>
            
            <form action="{{ route('tasks.update', $task->id) }}" method="post" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Titel -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-900 mb-2">Titel</label>
                    <input type="text" name="title" id="title" value="{{ $task->title }}"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <!-- Beschrijving -->
                <div>
                    <label for="description" class="block text-sm font-medium text-slate-900 mb-2">Beschrijving</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                        rows="4">{{ $task->description }}</textarea>
                </div>

                <!-- Categorie -->
                <div>
                    <label for="category" class="block text-sm font-medium text-slate-900 mb-2">Categorie</label>
                    <select name="category" id="category"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecteer categorie...</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @selected($task->category_id == $category->id)>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tags -->
                <div>
                    <label for="tags" class="block text-sm font-medium text-slate-900 mb-2">Tags</label>
                    <select name="tags[]" id="tags" multiple
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecteer tags...</option>
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}" @selected($task->tags->contains($tag->id))>{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Due Date -->
                <div>
                    <label for="due_date" class="block text-sm font-medium text-slate-900 mb-2">Vervaldatum</label>
                    <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <!-- Completed -->
                <div class="flex items-center">
                    <input type="checkbox" name="completed" id="completed" value="1" @checked($task->completed)
                        class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500 cursor-pointer">
                    <label for="completed" class="ml-2 text-sm font-medium text-slate-900 cursor-pointer">Voltooid</label>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-6">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors">
                        Taak bewerken
                    </button>
                    <a href="{{ route('tasks.index') }}"
                        class="px-4 py-2 bg-slate-200 text-slate-900 font-medium rounded-lg hover:bg-slate-300 transition-colors">
                        Annuleren
                    </a>
                </div>
            </form>
        </div>
    </main>
</x-base-layout>