@extends('layout.app')
@section('titulo','Sharing')
@section('header')
    @component('componentes.superior')
    @endcomponent
@endsection
@section('body')
    <div class="article-list" id="sobre" name="sobre">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Sobre o projeto</h2>
                <p class="text-center">O projeto Sharing, veio da iniciativa de alunos em resolver algumas lacunas na
                    parte de atendimentos ou &quot;reforco escolar&quot;. Aqui é possível, além de, obter ajuda em
                    conteúdos no qual possui dificuldade, aprender novas coisas nas mais
                    diversas áreas do conhecimento.</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item">
                    <img class="img-fluid" src="{{asset('img/adult-business-meeting-business-people.jpg')}}"/>
                    <h3 class="name">De alunos para alunos</h3>
                    <p class="description">Os conteúdos são todos produzidos pelos próprios alunos, mas é claro,
                        aprovados pelos professores, o que garante uma segurança para quem assiste.</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <img class="img-fluid" src="{{asset('/img/adult-boy-break-306534.jpg')}}"/>
                    <h3 class="name">A quaquer momento, é tudo online</h3>
                    <p class="description">Por ser tudo onlne, basta ter conexão com a internet e um navegador para
                        aprender aqui, seja no celular, computador, Tablet, TV, notebook ou até geladeira o sitema do
                        sharing funciona em todos.</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <img class="img-fluid" src="{{asset('/img/advice-advise-advisor-7096.jpg')}}"/>
                    <h3 class="name">Sem limites</h3>
                    <p class="description">Buscamos aqui uma integração entre cursos do campus, mas, acima de tudo
                        queremos propagar o conhecimento, por isso não importa a área, todos os videos afim de
                        compartillhar o conhecimento seram bem vindos.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @component('componentes.inferior')
    @endcomponent
@endsection
