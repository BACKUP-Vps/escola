@extends('layouts.main')
@section('title', $lugares->titulo)
@section('content')


<div class="titulonovo">
<h1>{{$lugares->titulo}}</h1><br><br>

</div>
    
<div class="imagem-cont">
  <img src="/img/lugares/{{$lugares->foto}}" alt="">
</div>


  <br>
  <br>
<div class="desc-cont">

  <p>{{$lugares->descricao}}</p>
</div>


  

<div class="lugares">

@php

    echo $lugares->mapa;
@endphp
 
  <br><br><br>

  </div>
@endsection