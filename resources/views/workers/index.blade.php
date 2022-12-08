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
            <h5 class="col-auto py-3">All workers</h5>

            <div class="col row align-items-center">
                @if ($alert == 'created')
                    @include('components.alert', [
                        'icon' => '<i class="bi bi-list-check"></i>',
                        'description' => 'Worker created!',
                        'type' => 'success',
                        'dismiss' => true,
                    ])
                @elseif ($alert == 'edited')
                    @include('components.alert', [
                        'icon' => '<i class="bi bi-pencil-square"></i>',
                        'description' => 'Worker updated!',
                        'type' => 'primary',
                        'dismiss' => true,
                    ])
                @endif
            </div>

            <div class="col-auto btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('workers.create') }}"
                    data-bs-toggle="tooltip"data-bs-title="Create New Worker">
                    <i class="bi bi-people"></i>
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
                        @foreach ($workers as $worker)
                            <tr>
                                <td>{{ $worker->id }}</td>
                                <td>{{ $worker->first_name }}</td>
                                <td>{{ $worker->middle_name }}</td>
                                <td>{{ $worker->last_name }}</td>
                                <td>
                                @if (isset($worker->date_of_birth))
                                        {{ date('d/m/Y', strtotime($worker->date_of_birth)) }}
                                    @endif
                                </td>
                                <td>
                                    @if (isset($worker->hiring_date))
                                        {{ date('d/m/Y', strtotime($worker->hiring_date)) }}
                                    @endif
                                </td>
                                <td>{{ $worker->status }}</td>
                                <td class="col-sm-1 text-end">
                                    <div class="button-group">
                                        <a href="{{ route('workers.edit', $worker->id) }}"
                                            class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip"data-bs-title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('workers.delete', $worker->id) }}"
                                            class="btn btn-outline-danger btn-sm"
                                            data-bs-toggle="tooltip"data-bs-title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('components.core.footer')
