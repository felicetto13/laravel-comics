@php
$socialItems = [
    [
        'name' => 'facebook',
        'img' => 'images/footer-facebook.png',
    ],
    [
        'name' => 'twitter',
        'img' => 'images/footer-twitter.png',
    ],
    [
        'name' => 'youtube',
        'img' => 'images/footer-youtube.png',
    ],
    [
        'name' => 'pinterest',
        'img' => 'images/footer-pinterest.png',
    ],
    [
        'name' => 'periscope',
        'img' => 'images/footer-periscope.png',
    ],
];
@endphp

<div class="sign-up-banner">
    <div class="container">
        <div class="row">
            <div class="col justify-content-start">
                <button class="btn my-btn-primary">SIGN-UP NOW!</button>
            </div>
            <div class="col d-flex gap-5 justify-content-end align-self-center">
                <h2 class="text-blue">FOLLOW US</h2>
                <ul class="list-unstyled d-flex">
                    @foreach ($socialItems as $item)
                        <li class="social-icon">
                            <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
