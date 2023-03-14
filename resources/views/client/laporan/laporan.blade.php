@extends('layout/headerClient')
@section('ifDone')
@section('content')
    <div class="ui mini modal">
        <div class="header">Header</div>
        <div class="content">
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
    <div class="ui container">
        <div class="ui stackable three column grid">
            <div class="ui five wide column"></div>
            <div class="ui six wide column">
                <a href="{{ route('Laporan.create') }}">
                    <div class="ui raised segment">
                        <h5>Laporkan Permasalahan</h5>
                        <p>Laporkan permasalahan yang terjadi di ruang kelas, laboratorium, atau fasilitas lainnya</p>
                    </div>
                </a>
            </div>
            <div class="ui five wide column"></div>
        </div>
    </div>
    <script>
        var done = '<?= $done ?>'
        if (done == true) {
            $(function() {
                $('.mini.modal')
                    .modal('show');
            });
        }
    </script>
@endsection
