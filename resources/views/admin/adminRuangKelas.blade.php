@extends('layout.headerAdmin')
@section('getData')
    @php
        use App\Models\ruang_kelas;
        $ruangKelas = ruang_kelas::all();
        $sortedRuangKelas = $ruangKelas->sortBy('ruangan');
        $sortedRuangKelas->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui raised segment">
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>No Ruang</th>
                    <th>Nama Ruangan</th>
                    <th>Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sortedRuangKelas as $kls)
                    <tr>
                        <td>{{ $kls->ruangan }}</td>
                        <td>{{ $kls->nama_ruangan }}</td>
                        <td>{{ $kls->kapasitas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </script>
@endsection
