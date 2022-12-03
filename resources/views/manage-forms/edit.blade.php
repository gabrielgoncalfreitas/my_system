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

<form action="{{ route('manage-forms.update', $id) }}" method="POST">
    @csrf
    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header border-white">
                <div class="container m-0 p-0 row align-items-center">
                    <div class="col my-3">
                        <h5>Edit form</h5>
                    </div>

                    <div class="col-sm-10 col-xs-12 row align-items-center">
                        @if ($alert == 'created')
                            @include('components.alert', [
                                'icon' => '<i class="bi bi-list-check"></i>',
                                'description' => 'Form created!',
                                'type' => 'success',
                                'dismiss' => true,
                            ])
                        @elseif ($alert == 'edited')
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


                @php
                    $details = json_decode($forms->details, true);
                @endphp

                @include('components.fields.text', [
                    'title' => 'title',
                    'name' => 'json[details][title]',
                    'maxlength' => 255,
                    'required' => true,
                    'label' => 'Title <span class="text-danger">*</span>',
                    'value' => $details['title'],
                ])

                @include('components.fields.textarea', [
                    'title' => 'instruction',
                    'name' => 'json[details][instruction]',
                    'maxlength' => 64000,
                    'required' => true,
                    'label' => 'Instruction <span class="text-danger">*</span>',
                    'text' => $details['instruction'],
                ])

                @include('components.fields.textarea', [
                    'title' => 'footer',
                    'name' => 'json[details][footer]',
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
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-2">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="types-of-fields"
                    name="json[section_fields][select_field][]"
                    get-field-url="{{ route('manage-forms.sections.field') }}" onchange="addNewFieldsToSection(this)">
                    <option selected>-Select one field-</option>
                    @include('manage-forms.components.fields-categories-and-names')
                </select>
            </div>

            <div class="col-auto ps-0">
                <button type="submit" class="btn btn-sm btn-outline-success" data-bs-toggle="tooltip"
                    data-bs-title="Save section" id="manage-forms-save-section">
                    <i class="bi bi-bookmark-check"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container" id="sections">
        @if (isset($forms->fields) && $forms->fields != '[""]')
            <div class="card bg-dark border-white" id="section"
                section-fields-amount="{{ count(json_decode($forms->fields, true)) }}"
                section-fields-next-id="{{ count(json_decode($forms->fields, true)) }}">
                <div class="card-body border-white row" id="section-body">
                    @foreach (json_decode($forms->fields, true) as $id => $field)
                        @php
                            $type = $field['type'];
                            $title = $field['title'] ?? '';
                            $placeholder = $field['placeholder'] ?? '';
                            $required = $field['required'] ?? '';
                            $fullcolumn = $field['fullcolumn'] ?? '';
                        @endphp

                        @include('manage-forms.components.new-field', [
                            $id,
                            $type,
                            $title,
                            $placeholder,
                            $required,
                            $fullcolumn,
                        ])
                    @endforeach
                </div>
            </div>
        @else
            <div class="card bg-dark border-white" id="section" section-fields-amount="0" section-fields-next-id="0">
                <div class="card-body border-white row" id="section-body">
                    <h5 class="text-center">Section is empty</h5>
                </div>
            </div>
        @endif
    </div>
</form>

@include('components.core.footer')
