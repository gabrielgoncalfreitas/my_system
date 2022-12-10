@extends('default-layout', ['title' => 'Manage forms - Create'])

@section('container')
    <div class="container mt-4 d-flex justify-content-between">
        <h4 class="fw-normal">Manage forms - create</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="{{ route('forms.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-decoration-none" href="{{ route('manage-forms.index') }}">Manage forms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
                <h5>Create form</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('manage-forms.store') }}" method="POST">
                    @csrf

                    @if (isset($errors))
                        @include('components.errors', [
                            'type' => 'danger',
                            'errors' => $errors,
                        ])
                    @endif

                    @include('components.fields.text', [
                        'title' => 'title',
                        'name' => 'details[title]',
                        'maxlength' => 255,
                        'required' => true,
                        'label' => 'Title <span class="text-danger">*</span>',
                        'value' => $old_title ?? '',
                    ])

                    @include('components.fields.textarea', [
                        'title' => 'instruction',
                        'name' => 'details[instruction]',
                        'maxlength' => 64000,
                        'required' => true,
                        'label' => 'Instruction <span class="text-danger">*</span>',
                        'text' => $old_instruction ?? '',
                    ])

                    @include('components.fields.textarea', [
                        'title' => 'footer',
                        'name' => 'details[footer]',
                        'maxlength' => 64000,
                        'required' => true,
                        'label' => 'Footer text <span class="text-danger">*</span>',
                        'text' => $old_footer ?? '',
                    ])

                    <div class="row m-0 p-0">
                        <button type="submit" class="btn btn-sm btn-outline-success">
                            <i class="bi bi-clipboard2-check"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
