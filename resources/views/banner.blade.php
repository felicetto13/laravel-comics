@php
$cardLinks = [
    [
        'title' => 'digital comics',
        'image' => 'images/buy-comics-digital-comics.png',
    ],
    [
        'title' => 'dc merchandise',
        'image' => 'images/buy-comics-merchandise.png',
    ],
    [
        'title' => 'subscription',
        'image' => 'images/buy-comics-subscriptions.png',
    ],
    [
        'title' => 'digital comics',
        'image' => 'images/buy-comics-shop-locator.png',
    ],
    [
        'title' => 'dc power visa',
        'image' => 'images/buy-dc-power-visa.svg',
    ],
];
@endphp

<div class="container">
    <div class="row">
        @foreach ($cardLinks as $card)
            <div class="col">
                <div class="my-card">
                    <div >
                        <img src="{{$card['image']}}" alt="{{ $card['title'] }}" />
                    </div>
                    <div class="card-title">
                        <h3>{{ $card['title'] }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
