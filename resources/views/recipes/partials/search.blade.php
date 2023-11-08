<div class="container search-results border shadow-lg rounded bg-light">
@if (count($results) > 0)
    @foreach ($results as $result)
    <a class="row py-2 text-reset text-decoration-none mb-2 border-bottom overflow-hidden" href="{{ route('show.recipe', $result->id) }}">
        <div class="col col-6">
            <img class="img-fluid" src="{{ $result->image }}" alt="{{ $result->title }}">
        </div>
        <div class="col col-6">
            <p class="fw-bold">{{ $result->title }}</p>
        </div>
    </a>
    @endforeach
@endif
</div>