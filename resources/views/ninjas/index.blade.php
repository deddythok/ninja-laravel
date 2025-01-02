<x-layout>
    <h2>Currently Avalaible Ninjas</h2>

    @if ($greeting == 'hello')
        <p>Hi from insde the if statement</p>
    @endif
    <p>{{ $greeting }}</p>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 70">
                    <h3>{{ $ninja['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>