<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"
        integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
        integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css" rel="stylesheet"
        media="print">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.min.js'></script>
    <link rel="stylesheet" href="{{ asset('css/kalender.css') }}">
    <link rel="stylesheet" href="{{ asset('css/container.css') }}">

</head>

<body>
    <div class="ui sidebar inverted vertical menu">
        <a class="item">
            Dashboard
        </a>
        <a class="item" href="/adminRuangLab">
            Ruang Lab
        </a>
        <a class="item" href="/adminRuangKelas">
            Ruang Kelas
        </a>
        <a class="item">
            Ruang Dosen
        </a>
        <a class="item" href="/adminGedungFti">
            Gedung FTI
        </a>
    </div>
    <div class="pusher">
        <div class="ui inverted vertical masthead left aligned segment" id="navBar">
            <div id="openSidebar" class="ui black vertical animated button" tabindex="0">
                <div class="visible content">
                    <i class="white bars icon"></i>
                </div>
                <div class="hidden content">Menu</div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>

<script>
    $("#openSidebar").click(function() {
        $(".ui.sidebar").sidebar("toggle");
    });
</script>
