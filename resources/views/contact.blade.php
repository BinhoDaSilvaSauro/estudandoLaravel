@extends ('layouts.main')

@section('title', 'Contato')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>    
@endforeach


<h3>Entre em contado conosco atravás do número +55 81 9.8422-6586</h3>
<a href="/">Voltar para home</a>

@endsection
