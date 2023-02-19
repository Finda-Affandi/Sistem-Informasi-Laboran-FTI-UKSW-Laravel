@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('Kelengkapan.update', $kelengkapan->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="disabled field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $kelengkapan->ruangan }}">
                </div>
                <div class="field">
                    <label>Barang</label>
                    <input type="text" name="kelengkapan" placeholder="Barang" class="form-control"
                        value="{{ $kelengkapan->kelengkapan }}">
                </div>
                <div class="field">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" placeholder="Jumlah" class="form-control"
                        value="{{ $kelengkapan->jumlah }}">
                </div>
                <div class="field">
                    <label>Kondisi</label>
                    <input type="text" name="kondisi" placeholder="Kondisi" class="form-control"
                        value="{{ $kelengkapan->kondisi }}">
                </div>
                <br>
                <button type="submit" class="ui blue animated button" tabindex="0">
                    <div class="visible content">Update</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </button>
            </form>
        </div>
    </div>
@endsection
