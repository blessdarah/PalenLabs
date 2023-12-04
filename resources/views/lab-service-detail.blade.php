<x-layouts.app>
    <div class="partners mb-5">
        <div class="container untitled-container bg-white p-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 py-4 text-center">
                    <h4 class="display-5 fw-bold text-primary mb-0">Lab service detail</h4>
                    <p>{{ $packageType->name }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Packages</h3>
        <div class="row">
            <div class="col-md-8">
                @foreach ($packageType->packages as $package)
                    <div class="card mb-4">
                        <div class="card-header">
                            <p class="card-title">{{ $package->name }}</p>
                            <p class="card-text">{{ $package->description }}</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($package->tests as $test)
                                    <li>
                                        <p>{{ $test->labTest->name }} ({{ $test->gender }})</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ $packageType->name }}</li>
                    <li class="list-group-item">Description: <br />{{ $packageType->description }}</li>
                </ul>
            </div>
        </div>
    </div>
</x-layouts.app>
