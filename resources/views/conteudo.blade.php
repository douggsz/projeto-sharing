{{ $url = '/api/conteudo' . $codigo }}
@extends('layout.app')
@section('titulo','Nome')
<script type="text/javascript">
    $.getJSON('{{ $url }}', function (conteudo) {
        $('#titulo').text(conteudo['titulo'])
    })
</script>
