@extends('default-layout', ['title' => 'Todos - View'])

@section('container')
    <div class="container mt-4 d-flex justify-content-between">
        <h4 class="fw-normal">Todos view</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('forms.index') }}">Todos</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card card-default bg-dark border-white">
            <div class="card-header py-4 d-flex align-items-center justify-content-between border-white
            {{ $todos->completed ? 'text-secondary' : 'text-white' }}"
                style="{{ $todos->completed ? 'text-decoration: line-through' : '' }}">
                <div class="row">
                    <div class="col pe-0">
                        <h5>{{ $todos->name }}</h5>
                    </div>

                    <div class="col">
                        @if ($todos->completed)
                            <span class="badge bg-success">Completed</span>
                        @else
                            <span class="badge bg-danger">Incomplete</span>
                        @endif
                    </div>
                </div>

                <div class="btn-group float-end" role="group">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('todos.complete', [$todos->id, true]) }}"
                        data-bs-toggle="tooltip"data-bs-title="Mark as complete">
                        <i class="bi bi-check2-square"></i>
                    </a>
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('todos.incomplete', [$todos->id, true]) }}"
                        data-bs-toggle="tooltip"data-bs-title="Mark as incomplete">
                        <i class="bi bi-x-square"></i>
                    </a>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('todos.edit', $todos->id) }}"
                        data-bs-toggle="tooltip"data-bs-title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('todos.delete', $todos->id) }}"
                        data-bs-toggle="tooltip"data-bs-title="Delete">
                        <i class="bi bi-trash"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item bg-dark border-white {{ $todos->completed ? 'text-secondary' : 'text-white' }}"
                        style="{{ $todos->completed ? 'text-decoration: line-through' : '' }}">
                        {{ $todos->description }}
                    </li>
                </ul>

                <div class="row p-0 m-0">
                    <a href="{{ route('todos.index') }}" class="btn btn-outline-primary mt-3 btn-sm float-end">
                        <i class="bi bi-arrow-left-square"></i>
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
