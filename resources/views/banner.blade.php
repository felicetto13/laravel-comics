@php
$cardLinks = [
    [
        'title' => 'digital comics',
        'image' => 'comics-digital-comics.png',
    ],
    [
        'title' => 'dc merchandise',
        'image' => 'comics-merchandise.png',
    ],
    [
        'title' => 'subscription',
        'image' => 'comics-subscriptions.png',
    ],
    [
        'title' => 'digital comics',
        'image' => 'comics-shop-locator.png',
    ],
    [
        'title' => 'dc power visa',
        'image' => 'dc-power-visa.svg',
    ],
];
@endphp

<div class="container">
    <div class="row">
        @foreach ($cardLinks as $card)
            <div class="col">
                <div class="my-card">
                    <div >
                        <img src="images/buy-{{$card['image']}}" alt="{{ $card['title'] }}" />
                    </div>
                    <div class="card-title">
                        <h3>{{ $card['title'] }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
