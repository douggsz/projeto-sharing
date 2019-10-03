@extends('layout.app')
@section('titulo','Conteudo')
@section('header')
    <div class="header-dark">
        @component('componentes.barra')
        @endcomponent
    </div>
@endsection
@section('body')
    <div class="bg-dark container-fluid">
        <section class="text-white" style="padding: 3em">
            <div style="padding: 2em;">
                <input id="id" name="id" type="hidden" value="{{$resultado->id}}"/>
                <input id="tituloBanco" name="titulo" type="hidden" value="{{$resultado->titulo}}"/>
                <h4 class="text text-white">{{$resultado->titulo}}</h4>
                <p class="text text-white">{{$resultado->descricao}}</p>
                <iframe height="100%" width="100%" frameborder="0"
                        allowfullscreen src="{{$resultado->url}}" class="video-container"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <p class="text text-white">{{$resultado->visualizacoes}} Visualiações</p>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        });

        var iframe = document.querySelector('iframe');
        var player = new Vimeo.Player(iframe);
        var titulo = $('#tituloBanco').val();

        player.on('play', function () {
            console.log('Executando');
        })
        player.on('ended', function () {
            console.log('Finalizado');
            getVisualizacao();
        });

        function getVisualizacao() {
            codigo = $('#id').val();
            $.getJSON('/api/conteudo/' + codigo, function (info) {
                setVisualizacao(info);
            })
        }

        function setVisualizacao(c) {
            conteudo = {
                'titulo': c.titulo,
                'descricao': c.descricao,
                'url': c.url,
                'visualizacoes': c.visualizacoes + 1
            }
            $.ajax({
                type: "PUT",
                url: "/api/conteudo/" + codigo,
                data: conteudo,
                success: function (retorno) {
                    console.log("/api/conteudo/" + codigo)
                    console.log(conteudo.visualizacoes)
                },
                error(error) {
                    console.log(error)
                }
            })
        }

        function setNome() {
            document.title = titulo + ' | Sharing';
        }

        $(function () {
            setNome();
        })
    </script>
@endsection
