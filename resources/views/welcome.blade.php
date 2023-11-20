<x-layouts.app>
    <div class="container-fluid p-0 app-banner">
        <x-banner />

        {{-- packages --}}
        <div class="container px-0 px-lg-5 mb-5 package-container">
            <div class="py-5 text-center">
                <h2 class="fw-bold">Choose A Package</h2>
                <p class="fw-bold">Or Pick from the list</p>
            </div>
            <div class="row justify-content-center align-items-center package-grid">
                <div class="col-10 col-md-3 mb-3 package-grid-item">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="bi bi-house fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-primary">Pre-Marital Test</h5>
                                <p class="card-subtitle">Starting from</p>
                                <strong class="text-primary font-weight-bold package-price">20, 000 FCFA</strong>

                                <ul class="package-list">
                                    <li>Basic</li>
                                    <li>Standard</li>
                                    <li>Comprehensive</li>
                                </ul>
                                <p class="small package-detail">
                                    A pre-wedding health screening provides you with information on health compatibility
                                    between couples. Get tested at home, and a doctor will analyze the results with you
                                    and your partner.
                                </p>
                                <button type="button" class="btn btn-primary text-white my-3">Choose Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-3 mb-3 package-grid-item">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="card-icon bg-warning">
                                <i class="bi bi-pc-display fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-warning">Full Body Checkup</h5>
                            <p class="card-subtitle">Starting from</p>
                            <strong class="text-warning font-weight-bold package-price">20, 000 FCFA</strong>

                            <ul class="package-list">
                                <li>Basic</li>
                                <li>Standard</li>
                                <li>Comprehensive</li>
                            </ul>
                            <p class="small package-detail">
                                A pre-wedding health screening provides you with information on health compatibility
                                between couples. Get tested at home, and a doctor will analyze the results with you and
                                your partner.
                            </p>
                            <button type="button" class="btn btn-warning text-white my-3">Choose Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-3 mb-3 package-grid-item">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="card-icon bg-purple">
                                <i class="bi bi-bar-chart-fill fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-purple">STDs and STIs Checkup</h5>
                            <p class="card-subtitle">Starting from</p>
                            <strong class="text-purple font-weight-bold package-price">20, 000 FCFA</strong>

                            <ul class="package-list">
                                <li>Basic</li>
                                <li>Standard</li>
                                <li>Comprehensive</li>
                            </ul>
                            <p class="small package-detail">
                                A pre-wedding health screening provides you with information on health compatibility
                                between
                                couples. Get tested at home, and a doctor will analyze the results with you and your
                                partner.
                            </p>
                            <button type="button" class="btn bg-purple text-white my-3">Choose Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-3">
                    <a href="/packages" class="btn btn-primary px-4 py-2 text-white fw-bold">Packages Details <i
                            class="bi bi-arrow-down"></i></a>
                </div>
            </div>
        </div>

        {{-- reviews --}}
        <div class="container px-0 px-lg-5 mb-5 review-container">
            <div class="row justify-content-center align-items-center review-grid">
                <div class="col-12 col-md-3 mb-3 review-grid-item">
                    <div class="card border-0 review-card">
                        <div class="d-flex justify-content-center">
                            <div class="card-header bg-white border-0">
                                <i class="bi bi-hand-thumbs-up-fill text-primary fa-2x"></i>
                            </div>
                            <div class="card-body bg-white">
                                <h6 class="card-title fw-bold">Trusted Labs</h6>
                                <p class="small review-detail">
                                    Every test booked via Palen Health is conducted by certified labs that are 100%
                                    verified
                                    and trustworthy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3 review-grid-item">
                    <div class="card border-0 review-card">
                        <div class="d-flex justify-content-center">
                            <div class="card-header bg-white border-0">
                                <i class="bi bi-house-door-fill text-primary fa-2x"></i>
                            </div>
                            <div class="card-body bg-white">
                                <h6 class="card-title fw-bold">Home Visit</h6>
                                <p class="small review-detail">
                                    With Palen Health, you get a FREE sample pick-up by professional phlebotomists from
                                    your
                                    home or preferred location.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3 review-grid-item">
                    <div class="card border-0 review-card">
                        <div class="d-flex justify-content-center">
                            <div class="card-header bg-white border-0">
                                <i class="bi bi-bar-chart-fill text-primary fa-2x"></i>
                            </div>
                            <div class="card-body bg-white">
                                <h6 class="card-title fw-bold">Timely and Accurate Reports</h6>
                                <p class="small review-detail">
                                    Once collected, samples will be sent to labs for processing. Detailed reports will
                                    be
                                    shared within a stipulated timeline.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- partner --}}
        <div class="partner-container">
            <div class="container px-0 px-lg-5 mb-5">
                <div class="pt-5 text-center">
                    <h2 class="fw-bold">Partner</h2>
                    <p class="fw-bold">With Us</p>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-4 mb-3 partner-media">
                        <div class="partner-overlay">
                            <div class="gallery">
                                <img src="{{ asset('palen-health/amisom-7.jpeg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="row justify-content-center align-items-center partner-grid">
                            <div class="col-12 mb-3 partner-grid-item">
                                <div class="card border-0 partner-card">
                                    <div class="d-flex justify-content-center">
                                        <div class="card-body bg-white">
                                            <h6 class="card-title fw-bold">Doctors</h6>
                                            <p class="small partner-detail">
                                                Are you a medical doctor offering practice to your patients?. Let us
                                                assist
                                                you
                                                to extend the scale of your practice. We will keep the quality of
                                                practice
                                                at
                                                best while you keep your patients happy.
                                            </p>
                                            <button type="button" class="btn btn-primary text-white">Task to
                                                Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 partner-grid-item">
                                <div class="card border-0 partner-card">
                                    <div class="d-flex justify-content-center">
                                        <div class="card-body bg-white">
                                            <h6 class="card-title fw-bold">Private Labs, Health centers and Clinics
                                            </h6>
                                            <p class="small partner-detail">
                                                Working with us will extend the services of your existing laboratory.
                                                Partnering
                                                with us at Palen Health with help you serve more patients and increase
                                                your
                                                list
                                                of service offers to patients.
                                            </p>
                                            <button type="button" class="btn btn-primary text-white">Task to
                                                Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 partner-grid-item">
                                <div class="card border-0 partner-card">
                                    <div class="d-flex justify-content-center">
                                        <div class="card-body bg-white">
                                            <h6 class="card-title fw-bold">Businesses and Corporates</h6>
                                            <p class="small partner-detail">
                                                The health and stability of any business is determine by the health of
                                                its
                                                personnel. We accompany businesses to ensure they hire healthy personnel
                                                and
                                                keep them healthy to ensure optimum performance, we provide
                                                pre-employment
                                                packages and staff welfare packages.
                                            </p>
                                            <button type="button" class="btn btn-primary text-white">Task to
                                                Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Questions --}}
        <x-question />
    </div>
</x-layouts.app>
