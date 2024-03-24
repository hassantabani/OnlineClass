@extends("Master")

@section("content")

@foreach($post as $p)

<img src="{{ asset("storage/".$p->single_image) }}" width="250px" height="250px">
<h2>Title : {{ $p->title }}</h2>
<h4>Description : {{ $p->description }}</h4>
@if($p->multiple_image != null)
@foreach (json_decode($p->multiple_image) as $m)
<img src="{{ asset("storage/".$m) }}" width="250px" height="250px">
@endforeach

@endif

@endforeach
@endsection
