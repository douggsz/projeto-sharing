<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<main role="main">
    <form action="/api/categorias" method="POST">
        <select class="form-control" id="categorias" name="categoria">

        </select>
        <button type="submit">teste</button>
    </form>
    <hr/>
    <form action="/api/usuarios" method="POST">
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="senha">Usuario</label>
            <input type="password" name="senha" id="senha">
        </div>

        <div>
            <select id="tipos" name="tipo">

            </select>
        </div>
        <button type="submit">teste</button>
    </form>
    <hr/>
    <form action="/api/conteudo" method="POST">
        <input type="text" name="autor" id="autor">
        <input type="text" name="url" id="url">
        <input type="text" name="descricao" id="descricao">
        <select class="form-control" id="categoriasVideo" name="categoria">
        </select>

        <button type="submit">teste</button>
    </form>
</main>
<footer>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-3.4.1.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                }
            });

            function carrega() {
                $.getJSON('/api/descricao', function (categoria) {
                    for (i = 0; i < categoria.length; i++) {
                        opcao = '<option class="form-control" value="' + categoria[i].id + '">' + categoria[i].nome + '</option>';
                        $('#categorias').append(opcao);
                    }
                })
            }

            function tipos() {
                $.getJSON('/api/tipos', function (tipos) {
                    for (i = 0; i < tipos.length; i++) {
                        if (tipos[i].descricao != 'ADM') {
                            opcao = '<option class="form-control" value="' + tipos[i].id + '">' + tipos[i].descricao + '</option>';
                            $('#tipos').append(opcao);
                        }
                    }
                })
            }

            function categorias() {
                $.getJSON('/api/descricao', function (categoria) {
                    for (i = 0; i < categoria.length; i++) {
                        opcao = '<option class="form-control" value="' + categoria[i].id + '">' + categoria[i].nome + '</option>';
                        $('#categoriasVideo').append(opcao);
                    }
                })
            }

            $(function () {
                carrega();
                tipos();
                categorias();
            });
        });
    </script>
</footer>
</body>
</html>
