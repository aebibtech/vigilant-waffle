@if (count($recipes) > 0)
    @foreach ($recipes as $recipe)
    <a class="card recipe-card col col-12 col-sm-6 col-md-4 col-lg-4 my-2 text-reset text-decoration-none" href="{{ route('show.recipe', $recipe->id) }}">
        <img class="card-img-top" src="{{ $recipe->image }}" class="" alt="{{ $recipe->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $recipe->title }}</h5>
            <p class="card-text">{{ $recipe->description }}</p>
        </div>
    </a>
    @endforeach
@else    
    <div class="lead">No recipes found for you. Maybe add one?</div>
@endif