@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-renting-intro.jpg" alt="Imagem de fundo do produto Bistec Renting">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Renting</h1>
        <p>
            Faça a locação de equipamentos e tenha em sua empresa as tecnologias mais recentes, de maneira rápida e barata.
        </p>
        <p>
            Custos (Pequenas mensalidades em vez de grandes investimentos)
        </p>
        <p>
            Flexibilidade (Prazo contratual de 12 a 72 meses).
        </p>
        <p>
            Atualização (Equipamentos de TI tornam-se obsoletos no curto prazo. No final do período de locação você pode optar por trocar o equipamento por um novo ou estender o contrato vigente pagando uma mensalidade muito inferior a contratada inicialmente).
        </p>
        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Renting</a>
        </p>
    </div>
    </article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop