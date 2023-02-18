@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form role="form" class="ui form" action="{{ route('RuangLab.update', $lab->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $lab->ruangan }}">
                </div>
                <div class="field">
                    <label>Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" placeholder="Nama Ruangan"
                        class="form-control"value="{{ $lab->nama_ruangan }}">
                </div>
                <div class="field">
                    <label>360 View</label>
                    <input type="text" name="view" placeholder="360 View"
                        class="form-control"value="{{ $lab->view }}">
                </div>
                <div class="field">
                    <label>Jumlah Komputer</label>
                    <input type="text" name="jumlah_komputer" placeholder="Jumlah Komputer"
                        class="form-control"value="{{ $lab->jumlah_komputer }}">
                </div>
                <div class="field">
                    <label>Nama PIC</label>
                    <input type="text" name="nama_pic" placeholder="Nama PIC"
                        class="forkm-control"value="{{ $lab->nama_pic }}">
                </div>
                <div class="field">
                    <label>Email PIC</label>
                    <input type="text" name="kontak_pic" placeholder="Email PIC"
                        class="form-control"value="{{ $lab->kontak_pic }}">
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
