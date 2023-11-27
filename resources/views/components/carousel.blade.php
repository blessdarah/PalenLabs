<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($banners as $banner)
            <div class="carousel-item active">
                <img src="{{ asset('/storage/' . $banner->image) }}" class="d-block w-100" alt="Carousel image" />
                <div class="carousel-caption d-md-block">
                    <h1 class="display-4 fw-bold">{{ $banner->title ?? 'Title' }}</h1>
                    <p>{{ $banner->text ?? 'Sample text' }}</p>
                    <button class="btn btn-primary text-white px-4 py-2">Book a Test</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
