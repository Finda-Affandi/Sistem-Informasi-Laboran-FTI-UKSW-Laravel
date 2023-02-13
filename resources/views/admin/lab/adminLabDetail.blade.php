@extends('layout.headerAdmin')
@section('content')
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
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Spesifikasi Komputer</h3>
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
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <h3>Software</h3>
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
            </div>
        </div>
        <div class="sixteen wide column">
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
