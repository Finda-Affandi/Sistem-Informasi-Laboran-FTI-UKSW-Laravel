@extends('layout/headerEmpty')
@section('content')
    <div class="ui container">
        <a href="">
            <i class="large arrow left icon"></i>
        </a>
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('Laporan.store') }}" method="POST">
                @csrf
                <div class="field">
                    <label>Nama Lengkap Pelapor</label>
                    <input type="text" name="namaPelapor" placeholder="Nama Lengkap Pelapor" class="form-control">
                </div>
                <div class="field">
                    <label>Lapor Sebagai</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="statusPelapor" class="form-control">
                        <i class="dropdown icon"></i>
                        <div class="default text">Lapor Sebagai</div>
                        <div class="menu">
                            <div class="item" data-value="Dosen">Dosen</div>
                            <div class="item" data-value="Mahasiswa">Mahasiswa</div>
                            <div class="item" data-value="Asisten Dosen">Asisten Dosen</div>
                            <div class="item" data-value="Staff">Staff</div>
                            <div class="item" data-value="Cleaning Service">Cleaning Service</div>
                            <div class="item" data-value="Security">Security</div>
                            <div class="item" data-value="Lainnya">Lainnya</div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control">
                </div>
                <div class="field">
                    <label>Laporan</label>
                    <textarea name="laporan" rows="6" cols="50" placeholder="Laporan" class="form-control"></textarea>
                </div>
                <br>
                <button type="submit" class="ui blue animated button" tabindex="0">
                    <div class="visible content">Laporkan</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </button>
            </form>
        </div>
    </div>
    <script>
        $(function() {
            $('.ui.dropdown').dropdown();
        });
    </script>
@endsection
