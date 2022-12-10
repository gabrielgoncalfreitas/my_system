@extends('default-layout', ['title' => 'Manage forms'])

@section('container')
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
            <div class="card-header row align-items-center">
                <h5 class="col-auto py-3">Forms managment</h5>

                <div class="col row align-items-center">
                    @if ($alert == 'deleted')
                        @include('components.alert', [
                            'icon' => '<i class="bi bi-exclamation-triangle"></i>',
                            'description' => 'Form deleted!',
                            'type' => 'danger',
                            'dismiss' => true,
                        ])
                    @endif
                </div>

                <div class="col-auto btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-outline-primary btn-sm"
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
            <div class="card-body border-top border-white">
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col w-auto"># </th>
                                <th scope="col">Title</th>
                                <th scope="col">Instruction</th>
                                <th scope="col">Footer</th>
                                <th scope="col"></th>
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
                                    <td>
                                        <a class="text-decoration-none"
                                            href="{{ route('manage-forms.edit', [$form->id, '']) }}">
                                            {{ $details['title'] }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-decoration-none text-white"
                                            href="{{ route('manage-forms.edit', [$form->id, '']) }}">
                                            {{ $details['instruction'] }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-decoration-none text-white"
                                            href="{{ route('manage-forms.edit', [$form->id, '']) }}">
                                            {{ $details['footer'] }}
                                        </a>
                                    </td>
                                    <td class="col-sm-1 text-end">
                                        <div class="button-group">
                                            <a href="{{ route('manage-forms.edit', $form->id) }}"
                                                class="btn btn-outline-primary btn-sm"
                                                data-bs-toggle="tooltip"data-bs-title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ route('manage-forms.delete', $form->id) }}"
                                                class="btn btn-outline-danger btn-sm"
                                                data-bs-toggle="tooltip"data-bs-title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
