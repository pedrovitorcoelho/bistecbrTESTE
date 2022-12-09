@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleErro404.css">
@stop

@section('corpo')
    <!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="bistec-error404">
            <h1>Ops...</h1>
            <p>Parece que a página que você está procurando foi movida ou nunca existiu, certifique-se que digitou o endereço corretamente ou seguiu um link válido.</p>
            <strong><a class="menu_principal_link" href="/">Clique aqui para voltar ao Menu Principal</a></strong>
        </section>
    </article>
@stop