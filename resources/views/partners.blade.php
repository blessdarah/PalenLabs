<x-layouts.app>
    <div class="container-fluid p-0 doctors-banner">
        <x-banner />
    </div>

    <div class="partners">
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
                            <div
                                class="d-flex flex-column justify-content-center align-items-center text-center bg-white">
                                <div class="card-header bg-white border-0">
                                    <i class="{{ $card['icon'] }} text-primary fa-2x"></i>
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
    </div>

    <div class="row justify-content-center align-items-start doctors-count">
        <div class="col-12 col-md-4">

        </div>
        <div class="col-12 col-md-8 count-column">
            <div class="card rounded-0 text-white">
                <div class="card-body justify-content-center align-items-center">
                    <div class="row justify-content-center align-items-center p-5">
                        <div class="col-12 col-md-8">
                            <div class="row justify-content-between align-item-center border-bottom">
                                <div class="col-12 col-md-4 px-0 ">
                                    <h3 class="display-2 fw-bold">100+</h3>
                                    <p>Expert Doctors</p>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h3 class="display-2 fw-bold">12+</h3>
                                    <p>Medical Centers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 px-0 mt-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Odio congue quis sit integer. Adipiscing libero
                                volutpat viverra id sit amet urna. Iaculis odio vitae nunc netus vitae consectetur
                                risus. Sed sed et eget tortor purus posuere tellus amet nunc. Eget suspendisse et
                                aliquam et tortor massa praesent morbi ut. In feugiat ornare velit adipiscing aliquam
                                scelerisque mi fringilla sed. Non.
                            </p>
                            <button class="btn btn-light">Book Appoitement <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-0 img-card d-none d-md-block">
                <img src="{{ asset('palen-health/amisom-1.jpg') }}" alt="ackground banner">
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center p-5 benefits">
        <div class="col-12 col-md-5">
            <div class="card border-0">
                <div class="card-header border-bottom-0 bg-white">
                    <h3 class="fw-bold">Benefits</h3>
                    <p class="fw-bold">Working with Us</p>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur. Facilisi sagittis porttitor neque ultrices malesuada
                        quis mauris
                        ipsum. Ultricies in aliquam imperdiet nec id scelerisque. Senectus nibh volutpat congue
                        suspendisse
                        netus. Porttitor hac ultricies aliquam sagittis adipiscing ornare. Tortor dui phasellus eu
                        interdum nec
                        aliquam morbi viverra. Mauris pellentesque ullamcorper egestas platea dui. Velit eu a a felis mi
                        amet
                        varius vestibulum. Ullamcorper ut nisl volutpat sagittis et nibh non tortor. Integer elit
                        tristique
                        mattis tellus libero congue. Elit neque lacus ut arcu faucibus cursus egestas. Elementum augue
                        suscipit
                        quisque morbi et pulvinar dignissim consectetur volutpat.

                    </p>
                </div>
                <div class="card-footer border-top-0">
                    <button class="btn btn-primary text-white">Book Appointment</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="card benefit-card">
                <div class="card-body p-5">

                    @php
                        $elements = [
                            [
                                'percentage' => 98,
                                'title' => 'Robust workflow',
                            ],
                            [
                                'percentage' => 95,
                                'title' => 'Flexibility',
                            ],
                            [
                                'percentage' => 88,
                                'title' => 'Well Organized',
                            ],
                            [
                                'percentage' => 98,
                                'title' => 'Fast & Precise',
                            ],
                        ];

                    @endphp

                    @foreach ($elements as $element)
                        <div>
                            <p class="mb-0">{{ $element['title'] }}</p>
                            <div class="progress mb-3" role="progressbar" aria-label="Example 1px high"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
                                <div class="progress-bar" style="width: {{ $element['percentage'] }}%"></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-start align-items-center w-100 enquiries">
        <div class="col-12 col-md-4">
            <h3 class="display-5 fw-bold">To Book a test or For more enquiries</h3>
            <a href="/appointments" class="btn btn-primary text-white">Click Here <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</x-layouts.app>
