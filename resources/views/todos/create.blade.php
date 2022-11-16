@include('components.core.header', ['title' => 'Todos - Create'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Todos create</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('todos.index') }}">Todos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card bg-dark border-white">
        <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
            <h5>Create todo</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('todos.store') }}" method="POST">
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
                    'value' => $old_name ?? '',
                ])

                @include('components.fields.textarea', [
                    'title' => 'description',
                    'name' => 'description',
                    'maxlength' => 64000,
                    'required' => true,
                    'label' => 'Description <span class="text-danger">*</span>',
                    'text' => $old_description ?? '',
                ])

                <div class="row m-0 p-0">
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-clipboard2-check"></i>
                        Save
                    </button>

                    <a href="{{ route('todos.index') }}" class="btn btn-outline-primary mt-1 btn-sm">
                        <i class="bi bi-arrow-left-square"></i>
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.core.footer')
