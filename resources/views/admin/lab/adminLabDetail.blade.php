@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $_SESSION['idRuang'] = $id;
    @endphp
    <div class="ui stackable two column grid">
        <div class="column">
            <div class="ui raised segment">
                <h3>Detail Ruangan</h3>
                <table class="ui celled table">
                    <tbody>
                        @foreach ($ruangLab as $rl)
                            <tr>
                                <td>Ruangan</td>
                                <td>{{ $rl->ruangan }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ruangan</td>
                                <td>{{ $rl->nama_ruangan }}</td>
                            </tr>
                            <tr>
                                <td>PIC</td>
                                <td>{{ $rl->nama_pic }}</td>
                            </tr>
                            <tr>
                                <td>Email PIC</td>
                                <td>{{ $rl->kontak_pic }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="">
                    <div class="ui blue animated button" tabindex="0">
                        <div class="visible content">Edit</div>
                        <div class="hidden content">
                            <i class="pencil alternate icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Kelengkapan</h3>
                @if (count($kelengkapan) == 0)
                    <center>
                        <br>
                        <p>Kelengkapan belum ditambahkan!</p>
                        <br>
                        <a href="{{ route('Kelengkapan.create') }}">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah Kelengkapan</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    </center>
                @else
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
                    <a href="">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Edit</div>
                            <div class="hidden content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('Kelengkapan.create') }}">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Tambah</div>
                            <div class="hidden content">
                                <i class="plus icon"></i>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Spesifikasi Komputer</h3>
                @if (count($spekKomputer) == 0)
                    <center>
                        <br>
                        <p>Spesifikasi Komputer belum ditambahkan!</p>
                        <br>
                        <a href="{{ route('Spesifikasi.create') }}">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah Spesifikasi Komputer</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    </center>
                @else
                    <table class="ui celled table">
                        <tbody>
                            @foreach ($spekKomputer as $sk)
                                <tr>
                                    <td>Processor</td>
                                    <td>{{ $sk->processor }}</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>{{ $sk->ram }}</td>
                                </tr>
                                <tr>
                                    <td>Tipe Penyimpanan</td>
                                    <td>{{ $sk->tipe_penyimpanan }}</td>
                                </tr>
                                <tr>
                                    <td>Monitor</td>
                                    <td>{{ $sk->monitor }}</td>
                                </tr>
                                <tr>
                                    <td>Motherboard</td>
                                    <td>{{ $sk->motherboard }}</td>
                                </tr>
                                <tr>
                                    <td>Tipe Lab</td>
                                    <td>{{ $sk->tipe }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Edit</div>
                            <div class="hidden content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Software</h3>
                @if (count($software) == 0)
                    <center>
                        <br>
                        <p>Software belum ditambahkan!</p>
                        <br>
                        <a href="">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah Software</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    </center>
                @else
                    <table class="ui celled table">
                        <tbody>
                            @foreach ($software as $sf)
                                <tr>
                                    <td>{{ $sf->software }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Edit</div>
                            <div class="hidden content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui raised segment">
                <h3>Kondisi PC</h3>
                @if (count($komputerLab) == 0)
                    <center>
                        <br>
                        <p>List Komputer belum ditambahkan!</p>
                        <br>
                        <a href="">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah Komputer</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    </center>
                @else
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
                    <a href="">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Edit</div>
                            <div class="hidden content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui raised segment">
                @if (count($kalenderLab) == 0)
                    <center>
                        <br>
                        <p>Kalender belum ditambahkan!</p>
                        <br>
                        <a href="">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah Kalender</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    </center>
                @else
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
                    <a href="">
                        <div class="ui blue animated button" tabindex="0">
                            <div class="visible content">Edit</div>
                            <div class="hidden content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                @endif
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
                <a href="">
                    <div class="ui blue animated button" tabindex="0">
                        <div class="visible content">Edit</div>
                        <div class="hidden content">
                            <i class="pencil alternate icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
