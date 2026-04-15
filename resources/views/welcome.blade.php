<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lucy's Celebration - Una Sorpresa Elegante</title>
    @if(file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        @endphp
        @foreach($manifest as $file)
            @if(str_ends_with($file['file'], '.css'))
                <link rel="stylesheet" href="{{ asset('build/' . $file['file']) }}">
            @endif
        @endforeach
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <div id="app"></div>
    @if(file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        @endphp
        @foreach($manifest as $file)
            @if(str_ends_with($file['file'], '.js'))
                <script src="{{ asset('build/' . $file['file']) }}" type="module"></script>
            @endif
        @endforeach
    @endif
</body>
</html>
