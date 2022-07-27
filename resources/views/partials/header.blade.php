@php
$navbarLink = [
    [
        'text' => 'Characters',
        'url' => '',
    ],
    [
        'text' => 'Comics',
        'url' => route('comics.index'),
    ],
    [
        'text' => 'movies',
        'url' => '',
    ],
    [
        'text' => 'tv',
        'url' => '',
    ],
    [
        'text' => 'games',
        'url' => '',
    ],
    [
        'text' => 'collectibles',
        'url' => '',
    ],
    [
        'text' => 'videos',
        'url' => '',
    ],
    [
        'text' => 'Fans',
        'url' => '',
    ],
    [
        'text' => 'news',
        'url' => '',
    ],
    [
        'text' => 'shop',
        'url' => '',
    ],
];
@endphp

<header>
    <div class="top-bar">
        <div class="container d-flex justify-content-end">
            <span><a href="">DC power VIsa</a></span>
            <span><a href="">Additional dc sites</a></span>
        </div>
    </div>
    <div class="container">

        <nav class="my-navbar">
            <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc  " />
            <ul class="d-flex list-unstyled">
                @foreach ($navbarLink as $link)
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

</header>
