<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($datas as $data)
                <th scope="row">{{ $data }}</th>
            @endforeach
        </tr>
    </tbody>
</table>
