@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('RuangLab.store') }}" method="POST">
                @csrf
                <div class="field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control">
                </div>
                <div class="field">
                    <label>Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" placeholder="Nama Ruangan" class="form-control">
                </div>
                <div class="field">
                    <label>360 View</label>
                    <input type="text" name="view" placeholder="360 View" class="form-control">
                </div>
                <div class="field">
                    <label>Jumlah Komputer</label>
                    <input type="text" name="jumlah_komputer" placeholder="Jumlah Komputer" class="form-control">
                </div>
                <div class="field">
                    <label>Nama PIC</label>
                    <input type="text" name="nama_pic" placeholder="Nama PIC" class="form-control">
                </div>
                <div class="field">
                    <label>Email PIC</label>
                    <input type="text" name="kontak_pic" placeholder="Email PIC" class="form-control">
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
