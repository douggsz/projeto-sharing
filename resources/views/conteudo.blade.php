@extends('layout.app')
@section('titulo','Conteudo')
@section('header')
    <div class="header-dark">
        @component('componentes.barra')
        @endcomponent
    </div>
@endsection
@section('body')
    <div class="bg-dark ">
        <section class="text-white container-fluid" style="padding: 3em">
            <div style="padding: 2em;">
                <input id="id" name="id" type="hidden" value="{{$resultado->id}}"/>
                <h4>{{$resultado->titulo}}</h4>
                <p>{{$resultado->descricao}}</p>
                <iframe height="100%" width="100%" frameborder="0"
                        allowfullscreen src="{{$resultado->url}}" class="video-container"></iframe>
                <p>{{$resultado->visualizacoes}} Visualiações</p>
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

        iframe = document.querySelector('iframe');
        player = new Vimeo.Player(iframe);

        player.getEnded().then(function (ended) {
            if (ended) {
                alert('Obrigado por assistir!')
                getVisualizacao();
            }
        });

        function getVisualizacao() {
            codigo = $('#id').val();
            $.getJSON('/api/conteudo/' + codigo, function (info) {
                setVisualizacao(info)
            })
        }

        function setVisualizacao(c) {
            conteudo = c;
            conteudo.visualizacoes = conteudo.visualizacoes + 1;
            $.ajax({
                type: "PUT",
                url: "/api/conteudo/" + codigo,
                data: conteudo,
                success: function (retorno) {
                    console.log(conteudo)
                },
                error(error) {
                    console.log(error)
                }
            })
        }

    </script>
@endsection
