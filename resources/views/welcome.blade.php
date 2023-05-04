@extends ('layouts.main') <!-- Estendo o arquivo, ou seja, isso é aquele arquivo mais este -->

@section('title', 'Bem vindo') <!-- Vai na "'arroba'yield" com o nome title e substui ela por "Bem Vindo" -->

@section('content') <!-- Faz basicamente a mesma coisa, mas ela coloca tudo que está dentro dessa tag -->

<div id="search-container" class="col-md-12" >
    <h1>Busque evento</h1>
    <form action=""> 
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="search-container" class="col-md-12" >
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card colm-md-3">
                <img src="/img/logo.png" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">13/10/2003</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                </div>
            </div>   
        @endforeach
    </div>
</div>

<a href="/contato">Contato</a>
<a href="/produtos">Protutos</a>

@endsection
