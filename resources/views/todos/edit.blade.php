@extends('default-layout', ['title' => 'Todos - Edit'])

@section('container')
    <div class="container mt-4 d-flex justify-content-between">
        <h4 class="fw-normal">Todos edit</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('forms.index') }}">Todos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
                <h5>Edit todo</h5>
            </div>
            <div class="card-body">
                @foreach ($todos as $todo)
                    <form action="{{ route('todos.edit', $todo->id) }}" method="POST">
                        @csrf

                        @if (isset($errors))
                            @include('components.errors', [
                                'type' => 'danger',
                                'errors' => $errors,
                            ])
                        @endif

                        @include('components.fields.text', [
                            'title' => 'name',
                            'name' => 'name',
                            'maxlength' => 255,
                            'required' => true,
                            'label' => 'Name <span class="text-danger">*</span>',
                            'value' => $todo->name,
                        ])

                        @include('components.fields.textarea', [
                            'title' => 'description',
                            'name' => 'description',
                            'maxlength' => 64000,
                            'required' => true,
                            'label' => 'Description <span class="text-danger">*</span>',
                            'text' => $todo->description,
                        ])

                        <div class="row p-0 m-0">
                            <button type="submit" class="btn btn-outline-success mt-3 btn-sm float-end">
                                <i class="bi bi-journal-text"></i>
                                Update
                            </button>

                            <a href="{{ route('todos.view', $todo->id) }}"
                                class="btn btn-outline-primary mt-1 btn-sm float-end">
                                <i class="bi bi-arrow-left-square"></i>
                                Back
                            </a>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
