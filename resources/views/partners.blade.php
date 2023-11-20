<x-layouts.app>
    <div class="container-fluid p-0 doctors-banner">
        <x-banner />
    </div>

    <div class="container untitled-container bg-white p-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 py-4 text-center">
                <h4 class="display-5 fw-bold text-primary mb-0">Lorem Ipsum</h4>
                <p>Lorem Ipsum</p>
            </div>

            @php
                $cards = [
                    [
                        'icon' => 'bi bi-menu-up',
                        'title' => 'Robust workflow',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                    [
                        'icon' => 'bi bi-reception-4',
                        'title' => 'Flexibility',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                    [
                        'icon' => 'bi bi-star-fill',
                        'title' => 'Well Organized',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                    [
                        'icon' => 'bi bi-fan',
                        'title' => 'Fast & Precise',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                    [
                        'icon' => 'bi bi-grid-1x2-fill',
                        'title' => 'Good Lab Equipments',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                    [
                        'icon' => 'bi bi-headset',
                        'title' => 'Best Support',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique',
                    ],
                ];

            @endphp

            @foreach ($cards as $card)
                <div class="col-10 col-md-4 mb-3">
                    <div class="card border-0 untitled-card">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white">
                            <div class="card-header bg-white border-0">
                                <i class="{{$card['icon']}} text-primary fa-2x"></i>
                            </div>
                            <div class="card-body bg-white">
                                <h6 class="card-title fw-bold">{{ $card['title'] }}</h6>
                                <p class="small untitled-detail">{{ $card['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
