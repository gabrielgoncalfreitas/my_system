@foreach ($errors as $error)
    @include('components.alert', [
        'icon'        => '<i class="bi bi-exclamation-triangle"></i>',
        'description' => $error,
        'dismiss'     => true
    ])
@endforeach
