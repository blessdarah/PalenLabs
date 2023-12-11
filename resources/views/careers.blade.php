<x-layouts.app>
    <div class="mb-5">
        <div class="container untitled-container bg-white p-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 py-4 text-center">
                    <h4 class="display-5 fw-bold text-primary mb-0">Careers</h4>
                    <p>List of available opportunities for you to reach out.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto row">
                @foreach ($careers as $career)
                    <div class="card col-md-6 bg-white">
                        <div class="card-body">
                            <img src="{{ '/storage/' . asset($career->image) }}" alt="">
                            <h3 class="card-title">{{ $career->name }}</h3>
                            <small class="text-sm text-secondary">Deadline: {{ $career->deadline }}</small>
                            <p class="card-text text-secondary">{{ $career->description }}</p>
                            <a href="#" class="btn btn-primary btn-sm">apply</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
