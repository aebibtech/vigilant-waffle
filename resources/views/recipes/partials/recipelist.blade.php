@if (count($recipes) > 0)
    @foreach ($recipes as $recipe)
    <div class="card recipe-card col col-12 col-md-6 col-lg-4">
        <a class="text-reset text-decoration-none" href="{{ route('show.recipe', $recipe->id) }}">
            <img src="{{ $recipe->image }}" class="card-img-top" alt="{{ $recipe->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $recipe->title }}</h5>
                <p class="card-text">{{ $recipe->description }}</p>
            </div>
        </a>
    </div>
    @endforeach
@else    
    <div class="lead">No recipes found for you. Maybe add one?</div>
@endif