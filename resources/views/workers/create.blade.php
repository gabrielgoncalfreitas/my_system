@include('components.core.header', ['title' => 'Workers - Create'])

<div class="container mt-4 d-flex justify-content-between">
    <h4 class="fw-normal">Workers - create</h4>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('admin.reports.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a class="text-decoration-none" href="{{ route('workers.index') }}">Workers list</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card bg-dark border-white">
        <div class="card-header py-4 d-flex align-items-center justify-content-between border-white">
            <h5>Create worker</h5>
        </div>
        <form action="{{ route('workers.store') }}" method="POST">
            @csrf
            <div class="card-body border-white row">
                <div class="col-md-2 mb-5">
                    <div class="form-floating text-dark">
                        <input type="date" class="form-control" id="floatingHiringDate" placeholder="Hiring date"
                            value="{{ date('Y-m-d') }}" name="hiring_date">
                        <label for="floatingHiringDate">Hiring date</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Name and birth</h5>
                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingFirstName" placeholder="First name"
                            name="first_name">
                        <label for="floatingFirstName">First name</label>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingMiddleName" placeholder="Middle name"
                            name="middle_name">
                        <label for="floatingMiddleName">Middle name</label>
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingLastName" placeholder="Last name"
                            name="last_name">
                        <label for="floatingLastName">Last name</label>
                    </div>
                </div>

                <div class="col-md-2 mb-5">
                    <div class="form-floating text-dark">
                        <input type="date" class="form-control" id="floatingDateOfBirth" placeholder="Date of birth"
                            name="date_of_birth">
                        <label for="floatingDateOfBirth">Date of birth</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Details</h5>
                <div class="col-md-6 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-select" id="floatingTitles" placeholder="Titles"
                            name="titles">
                            <option value="" selected>-Select a option-</option>
                            @foreach ($titles as $title)
                                <option value="{{ $title->description }}">{{ $title->description }}</option>
                            @endforeach
                        </select>
                        <label for="floatingTitles">Titles</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-select" id="floatingGenders" placeholder="Genders"
                            name="genders">
                            <option value="" selected>-Select a option-</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->description }}">{{ $gender->description }}</option>
                            @endforeach
                        </select>
                        <label for="floatingGenders">Genders</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    @include('components.plugins.multiselect', [
                        'plugin_multiselect_id' => 'multi-select-language',
                        'placeholder' => 'Languages',
                        'name' => 'languages',
                        'options' => $languages,
                    ])
                </div>

                <div class="col-md-6 mb-3">
                    @include('components.plugins.multiselect', [
                        'plugin_multiselect_id' => 'multi-select-religion',
                        'placeholder' => 'Religion',
                        'name' => 'languages',
                        'options' => $religions,
                    ])
                </div>

                <h5 class="text-center fw-light">Documents</h5>
                <div class="col-md-6 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCpf" placeholder="CPF" name="cpf">
                        <label for="floatingCpf">CPF</label>
                    </div>
                </div>

                <div class="col-md-6 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingRg" placeholder="RG" name="rg">
                        <label for="floatingRg">RG</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Address</h5>
                <div class="col-md-3 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCep" placeholder="CEP"
                            name="cep">
                        <label for="floatingCep">CEP</label>
                    </div>
                </div>

                <div class="col-md-9 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingAddress" placeholder="Address"
                            name="address">
                        <label for="floatingAddress">Address</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCity" placeholder="City"
                            name="city">
                        <label for="floatingCity">City</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingState" placeholder="State"
                            name="state">
                        <label for="floatingState">State</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCountry" placeholder="Country"
                            name="country">
                        <label for="floatingCountry">Country</label>
                    </div>
                </div>

                <div class="row m-0">
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-clipboard2-check"></i>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('components.core.footer')