@include('components.core.header', ['title' => 'Workers - Edit'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Workers - edit</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('workers.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a class="text-decoration-none" href="{{ route('workers.index') }}">Workers list</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</div>

<form action="{{ route('worker.update', $id) }}" method="POST">
    @csrf
    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header border-white">
                <div class="container m-0 p-0 row align-items-center">
                    <div class="col my-3">
                        <h5>Edit worker</h5>
                    </div>

                    <div class="col-sm-10 col-xs-12 row align-items-center">
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
                </div>
            </div>
            <div class="card-body border-top border-white">
                <div class="row m-0 p-0">
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-clipboard2-check"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

@include('components.core.footer')
