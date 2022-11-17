<div class="offcanvas offcanvas-end text-bg-dark" data-bs-backdrop="static" tabindex="4" id="create-section"
    aria-labelledby="create-sectionLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="create-sectionLabel"><i class="bi bi-receipt"></i> Add section</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @include('manage-forms.components.offcanvas.types-of-fields')

        <form action="{{ route('manage-forms.sections.store') }}" id="offcanvas-body-section">
            @csrf
        </form>
    </div>
</div>
