<div class="alert alert-{{ $type }} m-0 fade show" role="alert">
    {!! $icon ?? '' !!} {!! $description !!}

    @if ($dismiss)
        <button type="button" class="btn-close btn-sm float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
