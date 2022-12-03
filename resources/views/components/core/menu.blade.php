<nav class="navbar navbar-expand-lg navbar-dark bg-dar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="dropdown mx-5">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Reports">
                            <i class="bi bi-file-text"></i>
                        </span>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item text-secondary" href="#">List</a></li>
                        <li><a class="dropdown-item text-secondary" href="#">Create</a></li>
                    </ul>
                </li>

                <li class="dropdown mx-5">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Profiles">
                            <i class="bi bi-people"></i>
                        </span>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item text-secondary" href="#">List</a></li>
                        <li><a class="dropdown-item text-secondary" href="#">Create</a></li>
                    </ul>
                </li>

                <li class="dropdown mx-5">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Premises">
                            <i class="bi bi-house-door"></i>
                        </span>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item text-secondary" href="#">List</a></li>
                        <li><a class="dropdown-item text-secondary" href="#">Create</a></li>
                    </ul>
                </li>

                <li class="dropdown mx-5">
                    <a class="nav-link" href="#" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Smartforms">
                            <i class="bi bi-list-ul"></i>
                        </span>
                    </a>
                </li>

                <li class="dropdown mx-5">
                    <div class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Admin">
                            <i class="bi bi-gear-wide-connected"></i>
                        </span>
                    </div>
                    <ul class="dropdown-menu dropend dropdown-menu-dark">
                        <li><a class="dropdown-item text-secondary" href="#">FAQ</a></li>
                        <li class="dropdown">
                            <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Imports
                            </div>
                            <ul class="dropdown-menu dropend dropdown-menu-dark">
                                <li><a class="dropdown-item text-secondary" href="#">Documents Bulk Import</a>
                                </li>
                                <li><a class="dropdown-item text-secondary" href="#">Import Premises</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Import Reports Documents</a>
                                </li>
                                <li><a class="dropdown-item text-secondary" href="#">Import Reports/Profiles</a>
                                </li>
                                <li><a class="dropdown-item text-secondary" href="#">Import Reports updates</a>
                                </li>
                                <li><a class="dropdown-item text-secondary" href="#">IOM Import</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Teams Permission Mapping</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item text-secondary" href="#">Language Configuration</a></li>
                        <li class="dropdown">
                            <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                Manage
                            </div>
                            <ul class="dropdown-menu dropend dropdown-menu-dark">
                                <li><a class="dropdown-item"
                                        href="{{ route('manage-forms.index') }}">Form</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Content</a></li>
                                <li class="dropdown">
                                    <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        Exports
                                    </div>
                                    <ul class="dropdown-menu dropend dropdown-menu-dark">
                                        <li><a class="dropdown-item text-secondary" href="#">Exports
                                                Configurations</a></li>
                                        <li><a class="dropdown-item text-secondary" href="#">Exported
                                                Documents</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item text-secondary" href="#">Map Areas</a></li>
                        <li class="dropdown">
                            <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Surveys
                            </div>
                            <ul class="dropdown-menu dropend dropdown-menu-dark">
                                <li><a class="dropdown-item text-secondary" href="#">Distribution Groups</a>
                                </li>
                                <li><a class="dropdown-item text-secondary" href="#">Surveys Sent</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Surveys Templates</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                System Fields
                            </div>
                            <ul class="dropdown-menu dropend dropdown-menu-dark">
                                <li><a class="dropdown-item text-secondary" href="#">Premises Fields</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Profiles Fields</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Report Fields</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Static Fields</a></li>
                                <li><a class="dropdown-item text-secondary" href="#">Tags</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Templates
                            </div>
                            <ul class="dropdown-menu dropend dropdown-menu-dark">
                                <li class="dropdown">
                                    <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        Review
                                    </div>
                                    <ul class="dropdown-menu dropend dropdown-menu-dark">
                                        <li><a class="dropdown-item text-secondary" href="#">Create Review
                                                Template</a></li>
                                        <li><a class="dropdown-item text-secondary" href="#">Review Template
                                                List</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        Email
                                    </div>
                                    <ul class="dropdown-menu dropend dropdown-menu-dark">
                                        <li><a class="dropdown-item text-secondary" href="#">Create Email
                                                Template</a></li>
                                        <li><a class="dropdown-item text-secondary" href="#">Email Template
                                                List</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <div class="dropdown-item dropdown-toggle text-secondary" role="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        Letter
                                    </div>
                                    <ul class="dropdown-menu dropend dropdown-menu-dark">
                                        <li><a class="dropdown-item text-secondary" href="#">Create Letter
                                                Template</a></li>
                                        <li><a class="dropdown-item text-secondary" href="#">Letter Template
                                                List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown mx-5">
                    <a class="nav-link active" href="{{ route('todos.index') }}" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Todos">
                            <i class="bi bi-check2-all"></i>
                        </span>
                    </a>
                </li>

                <li class="dropdown mx-5">
                    <a class="nav-link active" href="{{ route('features.index') }}" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-title="Features">
                            <i class="bi bi-tools"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
