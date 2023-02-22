@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $id = $_SESSION['idRuang'];
        $kelas = $_SESSION['kelas'];
    @endphp
    <div class="ui container">
        <div class="ui raised segment">
            @if ($kelas == true)
                <h3>Ruang Kelas {{ $id }}</h3>
            @else
                <h3>Ruang Lab {{ $id }}</h3>
            @endif
            <form class="ui form" action="{{ route('Kelengkapan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="ruangan" value="{{ $id }}" class="form-control">
                <div class="field">
                    <label>Barang</label>
                    <input type="text" name="kelengkapan" placeholder="Barang" class="form-control">
                </div>
                <div class="field">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" placeholder="Jumlah" class="form-control">
                </div>
                <div class="field">
                    <label>Kondisi</label>
                    <input type="text" name="kondisi" placeholder="Kondisi" class="form-control">
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
@endsection
