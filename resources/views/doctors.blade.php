<x-layouts.app>
    <div class="container-fluid p-0 doctors-banner">
        <x-carousel />
    </div>

    <div class="container untitled-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 py-4 text-center">
                <h4 class="display-5 fw-bold text-primary mb-0">Lorem Ipsum</h4>
                <p>Lorem Ipsum</p>
            </div>

            @for ($i = 0; $i < 4; $i++)
                <div class="col-10 col-md-5 mb-3">
                    <div class="card border-0 untitled-card">
                        <div class="d-flex justify-content-center">
                            <div class="card-header bg-white border-0">
                                <i class="bi bi-hand-thumbs-up-fill text-primary fa-2x"></i>
                            </div>
                            <div class="card-body bg-white">
                                <h6 class="card-title fw-bold">Title goes here</h6>
                                <p class="small untitled-detail">
                                    Lorem ipsum dolor sit amet consectetur. Dui euismod at blandit volutpat. Lorem
                                    semper
                                    lacus adipiscing quis molestie. Quam eget amet imperdiet maecenas sit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="container-fuild">
        <div class="row justify-content-center align-items-center learn-more-container p-5">
            <div class="col-10 col-md-5 text-left">
                <h3 class="display-6 fw-bold text-white mb-3">Do you want to learn more about Us?</h3>
                <a href="/about-us" class="btn btn-primary text-white">About Us <i
                        class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="col-10 col-md-5"></div>
        </div>
    </div>

    {{-- Questions --}}
    <x-question></x-question>
</x-layouts.app>
