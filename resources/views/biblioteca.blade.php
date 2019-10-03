@extends('layout.app')
@section('titulo','Biblioteca')
@section('header')
    @component('componentes.superior')
    @endcomponent
@endsection
@section('body')
    <div class="bg-dark">
        @isset($listaConteudo)
            <div class="container" style="padding: 3em">
                <div class="row">
                    @foreach($listaConteudo as $conteudo)
                        <input type="hidden" name="id" id="id" value="{{$conteudo->id}}"/>
                        <a href="{{'/conteudo/' . $conteudo->id}}" class="text-white">
                            <div class="col">
                                <h5>{{$conteudo->titulo}}</h5>
                                <div class="video-container">
                                    <iframe height="190em" width="332.5em" frameborder="0"
                                            src="{{$conteudo->url}}"
                                            class="video-container"></iframe>
                                </div>
                                </p>{{$conteudo->descricao}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
@section('footer')
    @component('componentes.inferior')
    @endcomponent
@endsection
