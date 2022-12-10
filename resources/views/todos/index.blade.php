@extends('default-layout', ['title' => 'Todos'])

@section('container')
    <div class="container mt-4 d-flex justify-content-between">
        <h4 class="fw-normal">Todos</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Todos</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
                <h5>All todos</h5>

                <a class="btn btn-success btn-sm float-end" href="{{ route('todos.create') }}"
                    data-bs-toggle="tooltip"data-bs-title="Create new todo">
                    <i class="bi bi-plus-square"></i>
                </a>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @if ($todos->isEmpty())
                        <li class="list-group-item text-truncate bg-dark text-center text-white border-white">
                            Todos is empty
                        </li>
                    @else
                        @foreach ($todos as $todo)
                            <li class="list-group-item bg-dark border-white py-1 d-flex align-items-center justify-content-between {{ $todo->completed ? 'text-secondary' : 'text-white' }}"
                                style="{{ $todo->completed ? 'text-decoration: line-through' : '' }}">
                                {{ $todo->name }}

                                <div class="btn-group float-end" role="group">
                                    <a class="btn btn-outline-success btn-sm"
                                        href="{{ route('todos.complete', [$todo->id, 0]) }}"
                                        data-bs-toggle="tooltip"data-bs-title="Mark as complete">
                                        <i class="bi bi-check2-square"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="{{ route('todos.incomplete', [$todo->id, 0]) }}"
                                        data-bs-toggle="tooltip"data-bs-title="Mark as incomplete">
                                        <i class="bi bi-x-square"></i>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('todos.edit', $todo->id) }}"
                                        data-bs-toggle="tooltip"data-bs-title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('todos.view', $todo->id) }}"
                                        data-bs-toggle="tooltip"data-bs-title="View">
                                        <i class="bi bi-binoculars"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm" href="{{ route('todos.delete', $todo->id) }}"
                                        data-bs-toggle="tooltip"data-bs-title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
