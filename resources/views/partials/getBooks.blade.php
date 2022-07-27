<div>
    <div class="card-image">
        <a href="{{ route('comics.show', $book['id']) }}"><img src="{{ $book["thumb"] }}" alt="{{ $book["series"] }}" /></a>
    </div>

    <div class="card-body">
        <div class="card-title text-uppercase">{{ $book["title"] }}</div>
    </div>
</div>
