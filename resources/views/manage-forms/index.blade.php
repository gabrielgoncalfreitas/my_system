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
            This is some text within a card body.
        </div>
    </div>
</div>

@include('components.core.footer')
