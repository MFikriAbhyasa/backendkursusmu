<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kursus</title>
</head>
<body>
    <h1>Daftar Kursus</h1>

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @foreach($courses as $course)
    <h2>{{ $course->title }}</h2>
    <p>{{ $course->description }}</p>
    <iframe width="560" height="315" src="{{ $course->youtube_link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    
    <hr>
@endforeach

@if(auth()->check() && auth()->user()->isAdmin())
    <a href="{{ route('courses.create') }}">Tambah Kursus</a>
@endif
</body>
</html>
