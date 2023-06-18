{{$slot}}
{{$header}}

@foreach ($posts as $p )
    <div class="card card-white mb-2">
        <h3>{{$p -> title}}</h3>
        <a href='{{route('web.blog.show', $p)}}'>ver</a>
        <p>{{$p -> description}}</p>

    </div>
@endforeach 