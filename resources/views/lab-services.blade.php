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
                                <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Pre-Marital Test
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne"
                                        class="accordion-collapse collapse show bg-white border border-primary bg-transparent"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row justify-content-center align-items-start">
                                                <div class="col-12 col-md-4">
                                                    <div class="card border-0 bg-transparent accordion-card-item">
                                                        <div class="card-title px-3">
                                                            <h6 class="text-uppercase small fw-bold">Basic</h6>
                                                            <p class="fs-2 fw-bold text-success mb-0">15k</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="package-list-1">
                                                                <li>Basic</li>
                                                                <li>Standard</li>
                                                                <li>Comprehensive</li>
                                                            </ul>

                                                            <button type="button"
                                                                class="btn btn-success text-white my-3">Choose
                                                                Me</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="card border-0 bg-transparent accordion-card-item">
                                                        <div class="card-title px-3">
                                                            <h6 class="text-uppercase small fw-bold">Sandard</h6>
                                                            <p class="fs-2 fw-bold text-warning mb-0">30k</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="package-list-2">
                                                                <li>Blood Grouping (ABO & Rh Typing)</li>
                                                                <li>Hb Electrophoresis /Genotype (Quantitative)</li>
                                                                <li>Full Blood Count</li>
                                                                <li>Hepatitis B Surface Antigen (HBsAg) Rapid</li>
                                                                <li>HIV I & II Rapid</li>
                                                                <li>BHCG- Qualitative (Pregnancy Test for women)</li>
                                                                <li>Hepatitis C Virus Ab (Rapid)</li>
                                                                <li>Hepatitis B Surface Antigen (HBsAg) Rapid</li>
                                                                <li>Sputum AFB - Tuberculosis test</li>
                                                            </ul>

                                                            <button type="button"
                                                                class="btn btn-warning text-white my-3">Choose
                                                                Me</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="card border-0 bg-transparent accordion-card-item">
                                                        <div class="card-title px-3">
                                                            <h6 class="text-uppercase small fw-bold">Comprehensive</h6>
                                                            <div class="d-flex align-items-end ">
                                                                <p class="fs-2 fw-bold text-purple mb-0">90k</p>
                                                                <span>or</span>
                                                                <p class="fs-2 fw-bold text-purple mb-0">100k</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="package-list-3">
                                                                <li>Blood Grouping (ABO & Rh Typing)</li>
                                                                <li>Hb Electrophoresis /Genotype (Quantitative)</li>
                                                                <li>Full Blood Count</li>
                                                                <li>Thyroid Stimulating Hormone (TSH)</li>
                                                                <li>Seminal Fluid Analysis (SFA)</li>
                                                                <li>Semen: Microscopy, Culture & Sensitivity (MCS)</li>
                                                                <li>BHCG- Qualitative (Pregnancy Test)</li>
                                                            </ul>

                                                            <button type="button"
                                                                class="btn btn-purple text-white my-3 btn-pck-3">Choose
                                                                Me</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <div class="row justify-content-center align-items-start">
                                                    <div class="col-1 text-center">
                                                        <i class="bi bi-exclamation-triangle fa-2x"></i>
                                                    </div>
                                                    <div class="col-11">
                                                        <strong>The Palen Health Full Body Checkup is ideal for you
                                                            if</strong>
                                                        <p>Walking down the aisle and saying I do to the love of your
                                                            life
                                                            with
                                                            full
                                                            confidence sets the pace for a fruitful marriage filled with
                                                            love
                                                            and
                                                            long life. The Premarital package is designed to suit the
                                                            need
                                                            and
                                                            budget of everyone</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Full body checkup
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo"
                                        class="accordion-collapse collapse bg-white border border-primary"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended
                                            to demonstrate the <code>.accordion-flush</code> class. This is the second
                                            item's
                                            accordion body. Let's imagine this being filled with some actual content.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            STDs
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse bg-white border border-primary"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended
                                            to demonstrate the <code>.accordion-flush</code> class. This is the third
                                            item's
                                            accordion body. Nothing more exciting happening here in terms of content,
                                            but
                                            just
                                            filling up the space to make it look, at least at first glance, a bit more
                                            representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Pre-employment screening
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse bg-white border border-primary"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended
                                            to demonstrate the <code>.accordion-flush</code> class. This is the third
                                            item's
                                            accordion body. Nothing more exciting happening here in terms of content,
                                            but
                                            just
                                            filling up the space to make it look, at least at first glance, a bit more
                                            representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fw-bold bg-primary text-white"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Fertility checkup
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse bg-white border border-primary"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended
                                            to demonstrate the <code>.accordion-flush</code> class. This is the third
                                            item's
                                            accordion body. Nothing more exciting happening here in terms of content,
                                            but
                                            just
                                            filling up the space to make it look, at least at first glance, a bit more
                                            representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="test" role="tabpanel" aria-labelledby="test-tab">
                            Lorem
                            ipsum
                            dolor
                            sit amet consectetur adipisicing elit. Vero ipsa dolorem repellendus ducimus eos fugit minus
                            aperiam
                            sit
                            accusantium architecto sed tenetur consequuntur at, facere id, deserunt voluptatem possimus
                            nobis
                            optio
                            natus, debitis nam dignissimos. Placeat error accusamus beatae officia, soluta corporis
                            blanditiis
                            veniam alias exercitationem molestiae amet quibusdam ducimus quas tenetur obcaecati natus
                            ad.
                            Quisquam
                            voluptatem pariatur ullam repellendus iusto! Ipsum numquam id excepturi accusamus saepe
                            nostrum
                            vitae,
                            assumenda dignissimos eos rem sapiente quasi distinctio, quo autem cupiditate earum!</div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
