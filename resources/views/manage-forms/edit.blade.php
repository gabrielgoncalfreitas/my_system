@include('components.core.header', ['title' => 'Manage forms - Edit'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Manage forms - edit</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('forms.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a class="text-decoration-none" href="{{ route('manage-forms.index') }}">Manage forms</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card bg-dark border-white">
        <div class="card-header border-white">
            <div class="container m-0 p-0 row align-items-center">
                <div class="col my-3">
                    <h5>Edit form</h5>
                </div>

                <div class="col-sm-10 col-xs-12 row align-items-center">
                    @if ($code_message == 1)
                        @include('components.alert', [
                            'icon' => '<i class="bi bi-list-check"></i>',
                            'description' => 'Form created!',
                            'type' => 'success',
                            'dismiss' => true,
                        ])
                    @elseif ($code_message == 2)
                        @include('components.alert', [
                            'icon' => '<i class="bi bi-pencil-square"></i>',
                            'description' => 'Form updated!',
                            'type' => 'primary',
                            'dismiss' => true,
                        ])
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body border-top border-white">
            <form action="{{ route('manage-forms.update', $id) }}" method="POST">
                @csrf

                @php
                    $details = json_decode($forms->details, true);
                @endphp

                @include('components.fields.text', [
                    'title' => 'title',
                    'name' => 'details[title]',
                    'maxlength' => 255,
                    'required' => true,
                    'label' => 'Title <span class="text-danger">*</span>',
                    'value' => $details['title'],
                ])

                @include('components.fields.textarea', [
                    'title' => 'instruction',
                    'name' => 'details[instruction]',
                    'maxlength' => 64000,
                    'required' => true,
                    'label' => 'Instruction <span class="text-danger">*</span>',
                    'text' => $details['instruction'],
                ])

                @include('components.fields.textarea', [
                    'title' => 'footer',
                    'name' => 'details[footer]',
                    'maxlength' => 64000,
                    'required' => true,
                    'label' => 'Footer text <span class="text-danger">*</span>',
                    'text' => $details['footer'],
                ])

                <div class="row m-0 p-0">
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-clipboard2-check"></i>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-3 mb-2 d-flex justify-content-end">
    <div data-bs-toggle="offcanvas" data-bs-target="#create-section" aria-controls="create-section">
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip"
            data-bs-title="Add new section" id="manage-forms-add-new-section">
            <i class="bi bi-receipt"></i>
        </button>
    </div>
</div>

<div class="container" id="sections">
    <div class="card-body text-center">
        <ul class="list-group">
            <li class="list-group-item bg-dark border-white text-white">
                Sections is empty
            </li>
        </ul>
    </div>
    {{-- <div class="card bg-dark border-white" id="">
        <div class="card-header border-white" id="">
            <div class="container row align-items-center">
                <div class="col my-3">
                    <h5 id="">Edit form</h5>
                </div>
            </div>
        </div>
        <div class="card-body" id="secion--body">

        </div>
    </div> --}}
</div>

@include('manage-forms.components.offcanvas.create-section')

@include('components.core.footer')
