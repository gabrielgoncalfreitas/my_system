@include('components.core.header', ['title' => 'Manage forms'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Manage forms</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage forms</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card bg-dark border-white">
        <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
            <h5>Forms managment</h5>

            <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-outline-primary btn-sm"
                    data-bs-toggle="tooltip"data-bs-title="Create New Premises based form">
                    <i class="bi bi-house-door"></i>
                </a>
                <a class="btn btn-outline-primary btn-sm" href="{{ route('manage-forms.create') }}"
                    data-bs-toggle="tooltip"data-bs-title="Create New Profile based form">
                    <i class="bi bi-people"></i>
                </a>
                <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"data-bs-title="Clear filters">
                    <i class="bi bi-eraser"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col w-auto"># </th>
                            <th scope="col">Title</th>
                            <th scope="col">Instruction</th>
                            <th scope="col">Footer</th>
                            <th scope="col" style="width: 0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            @php
                                $details = json_decode($form->details, true);
                            @endphp
                            <tr>
                                <td scope="row">
                                    <a class="text-decoration-none"
                                        href="{{ route('manage-forms.edit', [$form->id, '']) }}">
                                        {{ $form->id }}
                                    </a>
                                </td>
                                <td>{{ $details['title'] }}</td>
                                <td>{{ $details['instruction'] }}</td>
                                <td>{{ $details['footer'] }}</td>
                                <td>
                                    <a type="submit" href="{{ route('manage-forms.delete', $form->id) }}"
                                        class="btn btn-outline-danger btn-sm"
                                        data-bs-toggle="tooltip"data-bs-title="Delete form">
                                        <i class="bi bi-trash"></i>
                                    </a>
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
