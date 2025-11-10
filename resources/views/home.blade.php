<x-base-layout>

  <!-- Main -->
  <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Left: acties / toevoegen -->
      <section class="lg:col-span-1">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
          <h2 class="text-base font-semibold mb-3">Nieuwe taak toevoegen</h2>

          <form class="space-y-3" onsubmit="event.preventDefault();">
            <div>
              <label class="sr-only">Taak</label>
              <input id="new-todo" class="w-full rounded-md border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" placeholder="Typ je taak..." />
            </div>

            <div class="flex gap-2">
              <select id="new-priority" class="rounded-md border border-slate-200 px-3 py-2 w-32">
                <option value="normal">Normaal</option>
                <option value="high">Hoog</option>
                <option value="low">Laag</option>
              </select>

              <input id="new-tags" class="rounded-md border border-slate-200 px-3 py-2 flex-1" placeholder="Tags (komma-gescheiden)" />
            </div>

            <div class="flex items-center gap-2">
              <button class="px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm shadow-sm hover:bg-indigo-700">Toevoegen</button>
              <button type="button" class="px-3 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm">Import</button>
            </div>

            <p class="text-xs text-slate-500">Tip: druk op Enter om snel toe te voegen.</p>
          </form>
        </div>

        <!-- Filters -->
        <div class="mt-6 bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
          <h3 class="text-sm font-medium mb-3">Filter & zoeken</h3>
          <div class="flex gap-2 mb-3">
            <input placeholder="Zoek taken..." class="flex-1 rounded-md border border-slate-200 px-3 py-2" />
            <button class="px-3 py-2 rounded-md bg-slate-100">Zoeken</button>
          </div>

          <div class="flex flex-wrap gap-2">
            <button class="px-3 py-1 rounded-md bg-indigo-50 text-indigo-700 text-sm">Alles</button>
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Actief</button>
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Voltooid</button>
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Belangrijk</button>
          </div>

          <div class="mt-4 text-xs text-slate-500">Sorteer op:</div>
          <div class="mt-2 flex gap-2">
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Nieuwste</button>
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Oudste</button>
            <button class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-sm">Prioriteit</button>
          </div>
        </div>
      </section>

      <!-- Right: overzicht taken -->
      <section class="lg:col-span-2">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
          <div class="flex items-center justify-between mb-4">
            <div>
              <h2 class="text-xl font-semibold">Vandaag</h2>
              <p class="text-sm text-slate-500">3 taken — 1 voltooid</p>
            </div>
            <div class="flex items-center gap-3">
              <button class="px-3 py-1 rounded-md bg-slate-100">+ Nieuw project</button>
              <button class="px-3 py-1 rounded-md bg-slate-100">Export</button>
            </div>
          </div>

          <!-- Todo lijst -->
          <ul class="space-y-3">
            <!-- voorbeeld taak -->
            <li class="todo-item flex items-start gap-4 p-3 rounded-lg border border-slate-100">
              <input type="checkbox" class="mt-1 h-5 w-5 rounded-md" checked />
              <div class="flex-1">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-base font-medium">Leer Tailwind CSS</div>
                    <div class="text-xs text-slate-500">Leer de utilities en componenten</div>
                  </div>
                  <div class="text-xs text-slate-500">Prioriteit: <span class="font-semibold text-amber-600">Hoog</span></div>
                </div>

                <div class="mt-2 flex items-center gap-2">
                  <span class="px-2 py-0.5 text-xs rounded-full bg-slate-100 text-slate-700">frontend</span>
                  <span class="px-2 py-0.5 text-xs rounded-full bg-slate-100 text-slate-700">studie</span>
                </div>
              </div>

              <div class="flex items-center gap-2">
                <button class="px-2 py-1 rounded-md text-sm bg-slate-50">Bewerken</button>
                <button class="px-2 py-1 rounded-md text-sm text-red-600 bg-red-50">Verwijderen</button>
              </div>
            </li>

            <!-- taak 2 -->
            <li class="todo-item flex items-start gap-4 p-3 rounded-lg border border-slate-100">
              <input type="checkbox" class="mt-1 h-5 w-5 rounded-md" />
              <div class="flex-1">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-base font-medium">Projectplan schrijven</div>
                    <div class="text-xs text-slate-500">Schets, milestones en acceptance criteria</div>
                  </div>
                  <div class="text-xs text-slate-500">Prioriteit: <span class="font-semibold text-slate-600">Normaal</span></div>
                </div>

                <div class="mt-2 flex items-center gap-2">
                  <span class="px-2 py-0.5 text-xs rounded-full bg-slate-100 text-slate-700">doc</span>
                </div>
              </div>

              <div class="flex items-center gap-2">
                <button class="px-2 py-1 rounded-md text-sm bg-slate-50">Bewerken</button>
                <button class="px-2 py-1 rounded-md text-sm text-red-600 bg-red-50">Verwijderen</button>
              </div>
            </li>

            <!-- leegstaat voorbeeld -->
            <!-- Als er geen items zijn, kun je deze empty state tonen -->
          </ul>

          <!-- Empty state voorbeeld (toon conditioneel als lijst leeg is) -->
          <div class="mt-6 p-6 rounded-lg border border-dashed border-slate-100 text-center text-slate-500 hidden" id="empty-state">
            <svg class="w-16 h-16 mx-auto mb-4 empty-illustration" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13l3 3L22 4" />
            </svg>
            <p class="font-medium">Geen taken gevonden</p>
            <p class="text-sm">Begin met het toevoegen van je eerste taak met het formulier links.</p>
          </div>
        </div>

        <!-- Onderste korte statistieken -->
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div class="bg-white p-4 rounded-xl border border-slate-100">
            <div class="text-sm text-slate-500">Open taken</div>
            <div class="text-2xl font-semibold">2</div>
          </div>

          <div class="bg-white p-4 rounded-xl border border-slate-100">
            <div class="text-sm text-slate-500">Voltooid vandaag</div>
            <div class="text-2xl font-semibold">1</div>
          </div>

          <div class="bg-white p-4 rounded-xl border border-slate-100">
            <div class="text-sm text-slate-500">Belangrijk</div>
            <div class="text-2xl font-semibold">1</div>
          </div>
        </div>
      </section>
    </div>
  </main>
  
</x-base-layout>

