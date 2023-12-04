<div class="question-container">
    <div class="container px-0 px-lg-5 pb-5">
        <div class="py-5 text-center">
            <h2 class="fw-bold text-primary">Any Question?</h2>
            <p class="fw-bold">Frequently Asked Questions</p>
        </div>

        <div class="row justify-content-center align-items center">
            <div class="col-12 col-md-10 mb-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($faqs as $faq)
                        <div class="accordion-item mb-2 border-0">
                            <h2 class="accordion-header" id="accordion{{ $faq->id }}">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}"
                                    aria-expanded="false"
                                    aria-controls="flush-collapse{{ $faq->id }}">{{ $faq->question }}</button>
                            </h2>
                            <div id="flush-collapse{{ $faq->id }}"
                                class="accordion-collapse collapse bg-white border border-primary"
                                aria-labelledby="flush-heading{{ $faq->id }}"
                                data-bs-parent="#accordion{{ $faq->id }}">
                                <div class="accordion-body">{{ $faq->response }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
