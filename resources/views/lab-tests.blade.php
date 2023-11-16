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

        <div class="row justify-content-center align-items center ">
            <div class="col-11 col-md-10">
                <div class="card bg-white rounded-0">
                    <ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-0 border-0 bg-transparent" id="package-tab"
                                data-bs-toggle="tab" data-bs-target="#package" type="button" role="tab"
                                aria-controls="package" aria-selected="true">Test packages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-0 border-0 bg-transparent" id="test-tab"
                                data-bs-toggle="tab" data-bs-target="#test" type="button" role="tab"
                                aria-controls="test" aria-selected="false">List of Tests</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade p-3" id="package" role="tabpanel" aria-labelledby="package-tab">

                        </div>
                        <div class="tab-pane fade show active p-3" id="test" role="tabpanel"
                            aria-labelledby="test-tab">Lorem
                            <div class="row justify-content-center align-items-start">
                                @for ($i = 0; $i < 8; $i++)
                                    <div class="col-12 col-md-6">
                                        <div class="card border-0">
                                            <div class="card-body d-flex justify-content-space-between">
                                                <div class="card-header border-0 rounded-2 w-25 pr-2">

                                                </div>
                                                <div>
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
