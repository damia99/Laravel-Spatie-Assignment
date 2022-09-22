<x-products-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CRUD Application') }}
        </h2>
    </x-slot>
    
    <body>
        <br><br>
        <div class="container">
            @yield('content')
        </div>
    </body>
</x-products-layout>