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
        <form method="POST">
            <div class="card-body border-white row">

                <h5 class="text-center fw-light">Details</h5>
                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingTitle" placeholder="Title">
                            <option selected>-Select a title-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingTitle">Title</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingGender" placeholder="Gender">
                            <option selected>-Select a gender-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingGender">Gender</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingGender" placeholder="Gender">
                            <option selected>-Select a gender-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingGender">Gender</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingLanguage" placeholder="Language">
                            <option selected>-Select the languages-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingLanguage">Language</label>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingReligion" placeholder="Religion">
                            <option selected>-Select the religions-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingReligion">Religion</label>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="form-floating text-dark">
                        <select type="text" class="form-control" id="floatingSexualOrientations"
                            placeholder="Sexual Orientations">
                            <option selected>-Select the sexual orientations-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSexualOrientations">Sexual Orientations</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Name and birth</h5>
                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingFirstName" placeholder="First name">
                        <label for="floatingFirstName">First name</label>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingMiddleName" placeholder="Middle name">
                        <label for="floatingMiddleName">Middle name</label>
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingLastName" placeholder="Last name">
                        <label for="floatingLastName">Last name</label>
                    </div>
                </div>

                <div class="col-md-2 mb-5">
                    <div class="form-floating text-dark">
                        <input type="date" class="form-control" id="floatingDateOfBirth"
                            placeholder="Date of birth">
                        <label for="floatingDateOfBirth">Date of birth</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Documents</h5>
                <div class="col-md-6 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCpf" placeholder="CPF">
                        <label for="floatingCpf">CPF</label>
                    </div>
                </div>

                <div class="col-md-6 mb-5">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingRg" placeholder="RG">
                        <label for="floatingRg">RG</label>
                    </div>
                </div>

                <h5 class="text-center fw-light">Address</h5>
                <div class="col-md-3 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCep" placeholder="CEP">
                        <label for="floatingCep">CEP</label>
                    </div>
                </div>

                <div class="col-md-9 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingAddress" placeholder="Address">
                        <label for="floatingAddress">Address</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCity" placeholder="City">
                        <label for="floatingCity">City</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingState" placeholder="State">
                        <label for="floatingState">State</label>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="floatingCountry" placeholder="Country">
                        <label for="floatingCountry">Country</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('components.core.footer')
