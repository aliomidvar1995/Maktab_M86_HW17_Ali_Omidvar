<x-main>
    <x-slot name="title">
        <title>economy</title>
    </x-slot>
    <x-slot name="content">
        <div class="container">
            <div>
                <p>title => {{ $title }}</p>
                <p>id => {{ $id }}</p>
                <p>cat => {{ $cat }}</p>
            </div>
        </div>
    </x-slot>
</x-main>