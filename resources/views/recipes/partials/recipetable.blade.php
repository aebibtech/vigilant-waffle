@if (count($recipes) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Banner Image</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($recipes as $recipe)
            <tr>
                <td class="align-middle"><a href="{{ route('show.recipe', $recipe->id) }}">{{ $recipe->title }}</a></td>
                <td class="align-middle">{{ $recipe->description }}</td>
                <td><div class="mx-auto w-75"><img style="width: 64px; height: 64px;" src="{{ $recipe->image }}" alt="{{ $recipe->title }} banner image"></div></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div>No recipes yet.</div>
@endif