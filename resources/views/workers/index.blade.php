@include('components.core.header', ['title' => 'Workers list'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Workers list</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Workers list</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card bg-dark border-white">
        <div class="card-header row align-items-center">
            <h5 class="col-auto py-3">Workers</h5>

            <div class="col row align-items-center">
                @if ($alert == 'deleted')
                    @include('components.alert', [
                        'icon' => '<i class="bi bi-exclamation-triangle"></i>',
                        'description' => 'Worker deleted!',
                        'type' => 'danger',
                        'dismiss' => true,
                    ])
                @endif
            </div>

            <div class="col-auto btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('workers.create') }}"
                    data-bs-toggle="tooltip"data-bs-title="Create a new worker">
                    <i class="bi bi-person-gear"></i>
                </a>
            </div>
        </div>
        <div class="card-body border-top border-white">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col w-auto">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Middle</th>
                            <th scope="col">Last</th>
                            <th scope="col">Birth</th>
                            <th scope="col">Hiring</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('components.core.footer')
