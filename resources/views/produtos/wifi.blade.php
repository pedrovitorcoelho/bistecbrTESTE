@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-wifi-intro.jpg" alt="Imagem de fundo do produto Bistec Wifi">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Wifi</h1>
            <p>
                Transforme seu Wifi em uma ferramenta completa de marketing de relacionamento.
            </p>
            
            <p>
                Acesso (Disponibilize a conexão por meio das redes sociais ou e-mail e senha e tenha o controle de quem está acessando sua internet)
            </p>

            <p>
                Segurança (disponibilize Wifi para o seu cliente isolado do Wifi de uso corporativo, garantindo segurança para seus arquivos)
            </p>

            <p>
                Marketing (Fidelize seus clientes com mensagens de aniversário e promocionais por meio de SMS e WhatsApp)
            </p>
            
            <p>
                * Atende ao Marco Civíl da Internet e a Lei Geral de Proteção de Dados - LGPD
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Wifi</a>
            </p>
        </div>
    </article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop