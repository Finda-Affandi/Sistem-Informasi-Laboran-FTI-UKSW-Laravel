@extends('layout/headerClient')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/client.ruangLabDetail.css') }}">
    <div class="ui stackable three column grid">
        <div class="column">
            <div class="ui raised segment">
                <h3>Detail Ruangan</h3>
                @foreach ($ruangLab as $rl)
                    <p>Ruangan : {{ $rl->ruangan }}</p>
                    <p>Nama Ruangan : {{ $rl->nama_ruangan }}</p>
                    <p>PIC : {{ $rl->nama_pic }}</p>
                    <a href="{{ $rl->kontak_pic }}" target="_blank">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Kontak PIC</div>
                            <div class="hidden content">
                                <i class="envelope icon"></i>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Kelengkapan</h3>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Kelengkapan</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelengkapan as $k)
                            <tr>
                                <td>{{ $k->kelengkapan }}</td>
                                <td>{{ $k->jumlah }}</td>
                                <td>{{ $k->kondisi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Spesifikasi Komputer</h3>
                @foreach ($spekKomputer as $sk)
                    <p>Processor : {{ $sk->processor }}</p>
                    <p>Ram : {{ $sk->ram }}</p>
                    <p>Tipe Penyimpanan : {{ $sk->tipe_penyimpanan }}</p>
                    <p>Monitor : {{ $sk->monitor }}</p>
                    <p>Motherboard : {{ $sk->motherboard }}</p>
                    <p>Tipe Lab : {{ $sk->tipe }}</p>
                @endforeach
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Software</h3>
                <table class="ui celled table">
                    <thead>
                        <!-- <tr>
                                                                                <th>Software</th>
                                                                            </tr> -->
                    </thead>
                    <tbody>
                        @foreach ($software as $sf)
                            <tr>
                                <td>{{ $sf->software }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Kondisi PC</h3>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>No Komputer</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komputerLab as $kl)
                            <tr>
                                <td>{{ $kl->no_komputer }}</td>
                                <td>{{ $kl->kondisi }}</td>
                                <td>{{ $kl->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui raised segment">
                @foreach ($kalenderLab as $kd)
                    @php
                        $calId = $kd->embed_kalender;
                    @endphp
                    <script type='text/javascript'>
                        var calId = '<?= $calId ?>'

                        $(document).ready(function() {

                            $('#calendar').fullCalendar({
                                plugins: ['dayGrid', 'list', 'googleCalendar'],
                                header: {
                                    left: 'prev,next, today',
                                    center: 'title',
                                    right: 'dayGridMonth, month, listYear'
                                },
                                googleCalendarApiKey: 'AIzaSyDSQvD1WnAhaqWM-CnHkfsmU_D5dvqboKs',
                                events: {
                                    googleCalendarId: calId
                                },
                                timeFormat: 'H(:mm)'
                            });
                        });
                    </script>
                    <div id='calendar'></div>
                @endforeach
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui raised segment">
                <h3>View Ruangan</h3>
                @foreach ($ruangLab as $rl)
                    @php
                        echo $rl->view;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
@endsection
