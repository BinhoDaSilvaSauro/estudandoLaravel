@extends ('layouts.main') <!-- Estendo o arquivo, ou seja, isso é aquele arquivo mais este -->

@section('title', 'Bem vindo') <!-- Vai na "'arroba'yield" com o nome title e substui ela por "Bem Vindo" -->

@section('content') <!-- Faz basicamente a mesma coisa, mas ela coloca tudo que está dentro dessa tag -->

<h1>Bem Vindo</h1>
@if (22 > 13)
    <p>Vitória do Brasil</p>
@endif

<p>{{$nome}}</p> <!-- Chama a chave que foi passada pela rota -->

@if ($nome == "José")
    <p>O nome é José</p>
@else
    <p>O nome não é José, e sim {{ $nome }} e ele {{ $idade }} anos.</p>
@endif

<!-- Mostra todos os valores do vetor junto cim suas respectivas chaves e diz se for um número par -->

@for ($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} = a chave é {{ $i }}
        @if ($arr[$i] % 2 == 0)
            <strong>, esse número é par!</strong> 
        @endif
    </p>
@endfor

@php
    $nomeSobrenome = "Rubens Lira";
    echo $nomeSobrenome;
@endphp

@foreach ($nomes as $n)
    <p>{{$n}}, chave {{$loop->index}}</p> {{-- Imprime a chave de cada elemento do array --}}
@endforeach

<!-- Comentário no HTML, esse o usuário vè -->
{{-- Comentário Blade, esse não --}}

<a href="/contato">Contato</a>
<a href="/produtos">Protutos</a>

@endsection
