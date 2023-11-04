<ul style="list-style: circle;">
    @foreach ($ingredients as $ingredient)
    <li>{{ $ingredient->quantity }} {{ $ingredient->unit }} {{ $ingredient->name }}</li>
    @endforeach
</ul>