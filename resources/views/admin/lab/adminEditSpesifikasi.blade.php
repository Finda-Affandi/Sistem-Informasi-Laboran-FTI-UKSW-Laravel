@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('Spesifikasi.update', $spesifikasi->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="disabled field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $spesifikasi->ruangan }}">
                </div>
                <div class="field">
                    <label>Processor</label>
                    <input type="text" name="processor" placeholder="Processor" class="form-control"
                        value="{{ $spesifikasi->processor }}">
                </div>
                <div class="field">
                    <label>RAM</label>
                    <input type="text" name="ram" placeholder="RAM" class="form-control"
                        value="{{ $spesifikasi->ram }}">
                </div>
                <div class="field">
                    <label>Tipe Penyimpanan</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="tipe_penyimpanan" class="form-control"
                            value="{{ $spesifikasi->tipe_penyimpanan }}">
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
                    <input type="text" name="monitor" placeholder="Monitor" class="form-control"
                        value="{{ $spesifikasi->monitor }}">
                </div>
                <div class="field">
                    <label>Motherboard</label>
                    <input type="text" name="motherboard" placeholder="Motherboard" class="form-control"
                        value="{{ $spesifikasi->motherboard }}">
                </div>
                <div class="field">
                    <label>Tipe Komputer</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="tipe" class="form-control" value="{{ $spesifikasi->tipe }}">
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
                    <div class="visible content">Update</div>
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
