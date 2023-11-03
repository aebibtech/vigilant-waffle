<ol>
    @foreach ($instructions as $instruction)
    <li>
        <h3>{{ $instruction->name }}</h3>
        <p>{{ $instruction->description }}</p>
    </li>
    @endforeach
</ol>