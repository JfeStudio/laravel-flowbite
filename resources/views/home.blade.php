<x-app-layout>
    <div class="container">

        @auth
            <h1 class="mt-6 mb-4 text-3xl font-semibold text-slate-800">Welcome <span
                    class="font-bold uppercase">{{ Auth::user()->name }}</span></h1>
        @else
            <h1 class="mt-6 mb-4 text-3xl font-semibold text-slate-800">Homepage</h1>
            <img class="w-16 h-16 rounded-full object-cover" src="https://source.unsplash.com/random/?people"
                alt="Rounded avatar">
        @endauth

    </div>
</x-app-layout>
