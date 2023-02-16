@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $id = $_SESSION['idRuang'];
    @endphp
    <div class="ui container">
        <div class="ui raised segment">
            <h3>Ruang Lab {{ $id }}</h3>
            <form class="ui form" action="{{ route('Spesifikasi.store') }}" method="POST">
                @csrf
                <input type="hidden" name="ruangan" value="{{ $id }}" class="form-control">
                <div class="field">
                    <label>Processor</label>
                    <input type="text" name="processor" placeholder="Processor" class="form-control">
                </div>
                <div class="field">
                    <label>RAM</label>
                    <input type="text" name="ram" placeholder="RAM" class="form-control">
                </div>
                <div class="field">
                    <label>Tipe Penyimpanan</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="tipe_penyimpanan" class="form-control">
                        <i class="dropdown icon"></i>
                        <div class="default text">Tipe Penyimpanan</div>
                        <div class="menu">
                            <div class="item" data-value="HDD">HDD</div>
                            <div class="item" data-value="SSD">SSD</div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Monitor</label>
                    <input type="text" name="monitor" placeholder="Monitor" class="form-control">
                </div>
                <div class="field">
                    <label>Motherboard</label>
                    <input type="text" name="motherboard" placeholder="Motherboard" class="form-control">
                </div>
                <div class="field">
                    <label>Tipe Komputer</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="tipe" class="form-control">
                        <i class="dropdown icon"></i>
                        <div class="default text">Tipe Komputer</div>
                        <div class="menu">
                            <div class="item" data-value="Spesifikasi Rendah">Spesifikasi Rendah</div>
                            <div class="item" data-value="Spesifikasi Menengah">Spesifikasi Menengah</div>
                            <div class="item" data-value="Spesifikasi Tinggi">Spesifikasi Tinggi</div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="ui blue animated button" tabindex="0">
                    <div class="visible content">Tambah</div>
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
