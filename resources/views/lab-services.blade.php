<x-layouts.app>
    {{-- partner --}}
    <div class="lab-container">
        <div class="container px-0 px-lg-5 py-5 mb-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 pt-5 text-center">
                    <h2 class="fw-bold">All Your medial tests done from the comfort of your home, office or onsite
                        laboratory
                    </h2>
                    <p class="small">Tests done professionally, privately and results are confidential</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items center pb-5">
            <div class="col-11 col-md-10">
                <div class="card bg-white rounded-0">
                    <ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-0 border-0 bg-transparent" id="package-tab"
                                data-bs-toggle="tab" data-bs-target="#package" type="button" role="tab"
                                aria-controls="package" aria-selected="true">Test packages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-0 border-0 bg-transparent" id="test-tab"
                                data-bs-toggle="tab" data-bs-target="#test" type="button" role="tab"
                                aria-controls="test" aria-selected="false">List of tests</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-0 border-0 bg-transparent" id="ultrasound-tab"
                                data-bs-toggle="tab" data-bs-target="#ultrasound" type="button" role="tab"
                                aria-controls="ultrasound" aria-selected="false">Ultrasounds</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-0 border-0 bg-transparent" id="x-ray-tab"
                                data-bs-toggle="tab" data-bs-target="#x-ray" type="button" role="tab"
                                aria-controls="x-ray" aria-selected="false">X-ray scans</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="package" role="tabpanel"
                            aria-labelledby="package-tab">
                            <div class="accordion accordion-flush accordion-container" id="accordionFlushExample">
                                @foreach ($packageTypes as $packageType)
                                    <div class="accordion-item mb-2 border-0">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                {{ $packageType->name }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne"
                                            class="accordion-collapse collapse show bg-white border border-primary bg-transparent"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="row justify-content-center align-items-start">
                                                    @foreach ($packageType->packages as $package)
                                                        <div class="col-12 col-md-4">
                                                            <div
                                                                class="card border-0 bg-transparent accordion-card-item">
                                                                <div class="card-title px-3">
                                                                    <h6 class="text-uppercase small fw-bold">
                                                                        {{ $package->name }}</h6>
                                                                    <p
                                                                        class="fs-2 fw-bold text-success
                                                                    mb-0">
                                                                        {{ $package->price / 1000 }}K </p>
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul class="package-list-1">
                                                                        @foreach ($package->tests as $testEntry)
                                                                            <li>{{ $testEntry->labTest->name }}
                                                                                ({{ $testEntry->labTest->shortName }})
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>

                                                                    <button type="button"
                                                                        class="btn btn-success text-white my-3">Choose
                                                                        Me</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    <div class="row justify-content-center align-items-start">
                                                        <div class="col-1 text-center">
                                                            <i class="bi bi-exclamation-triangle fa-2x"></i>
                                                        </div>
                                                        <div class="col-11">
                                                            <strong>The Palen Health Full Body Checkup is ideal for you
                                                                if</strong>
                                                            <p>Walking down the aisle and saying I do to the love of
                                                                your
                                                                life
                                                                with
                                                                full
                                                                confidence sets the pace for a fruitful marriage filled
                                                                with
                                                                love
                                                                and
                                                                long life. The Premarital package is designed to suit
                                                                the
                                                                need
                                                                and
                                                                budget of everyone</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="test" role="tabpanel" aria-labelledby="test-tab">
                            <ul class="labtests">
                                @foreach ($tests as $test)
                                    <li class="labtest-card">
                                        <div>
                                            <img src="{{ $test->image }}" alt="Test image">
                                        </div>
                                        <div>
                                            <h4>{{ $test->name }}</h4>
                                            <p>{{ $test->description }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade p-3" id="ultrasound" role="tabpanel"
                            aria-labelledby="ultrasound-tab">
                            Lorem
                            ipsum
                            dolor
                            sit amet consectetur adipisicing elit. Animi cum debitis recusandae sequi dicta numquam
                            deleniti
                            voluptate soluta modi dolor, ut totam dolorum ipsam optio possimus suscipit natus enim error
                            deserunt in
                            minima nihil eaque! At nulla temporibus dolorem, ullam voluptatem fugit assumenda quo
                            corporis
                            tempore
                            dolor, quam ex necessitatibus.</div>
                        <div class="tab-pane fade p-3" id="x-ray" role="tabpanel" aria-labelledby="x-ray-tab">
                            <div class="row justify-content-center align-items-start">
                                @for ($i = 0; $i < 8; $i++)
                                    <div class="col-12 col-md-6">
                                        <div class="card border-0">
                                            <div class="card-body d-flex justify-content-space-between">
                                                <div class="card-header border-0 rounded-2 w-25 pr-2">
                                                </div>
                                                <div class="pl-2">
                                                    <h6 class="card-title">
                                                        Digital X-ray
                                                    </h6>
                                                    <p>
                                                        Sportsman do offending supported extremity breakfast by
                                                        listening.
                                                        Decisively advantages nor expression unpleasing she led met
                                                    </p>
                                                    <a href="#" class="nav-link text-primary">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
