@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')

<!-- banner -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-outsourcing-intro.jpg" alt="Imagem de fundo do produto Bistec Edu">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>
                
    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Outsourcing</h1>
        <p>
            Conte com consultores técnicos e economize o tempo e o dinheiro da sua empresa.
        </p>

        <p>
            Canais de Atendimento (chat online, redes sociais, aplicativos de mensagens, ligações e acesso remoto)
        </p>

        <p>
            Visitas (Atendimento presencial para prevenir ou corrigir problemas técnicos)
        </p>

        <p>
            Contratos (Atendimento presencial em até 24 horas ou conforme o acordo de nível de serviço contratado)
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Outsourcing</a>
        </p>
    </div>
    </article>

@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop