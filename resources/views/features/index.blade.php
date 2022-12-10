@extends('default-layout', ['title' => 'Features'])

@section('container')
    <div class="container mt-4 d-flex justify-content-between">
        <h4 class="fw-normal">Features</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Features</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card bg-dark border-white">
            <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
                <h5>All features</h5>
            </div>
            <div class="card-body row justify-content-center align-items-center">
                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-person-workspace"></i>
                                </a>

                                <label for="">
                                    Work hours calculator
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-alarm"></i>
                                </a>

                                <label for="">
                                    Hour calculator
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-stopwatch"></i>
                                </a>

                                <label for="">
                                    Stopwatch
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-cash-coin"></i>
                                </a>

                                <label for="">
                                    Money conversor
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-calendar4-week"></i>
                                </a>

                                <label for="">
                                    Date calculator
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-calculator"></i>
                                </a>

                                <label for="">
                                    Calculator
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-calculator"></i>
                                </a>

                                <label for="">
                                    Scientific calculator
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 text-center">
                    <div class="card bg-dark border-0">
                        <div class="card-body">
                            <div class="row m-0">
                                <a class="btn btn-outline-secondary" href="">
                                    <i class="bi bi-0-square"></i>
                                    <i class="bi bi-1-square"></i>
                                    <i class="bi bi-0-square"></i>
                                    <i class="bi bi-0-square"></i>
                                </a>

                                <label for="">
                                    Binary conversor
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
