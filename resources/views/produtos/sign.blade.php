@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-sign-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Sign</h1>
        <p>
            A identidade eletrônica que garante a autenticidade da sua empresa.        [
        </p>

        <p>
           Assinatura eletrônica (gestão e assinatura de documentos digitais com validade jurídica).
        </p>

        <p>
            Certificado digital (A1, A3, SSL ou online sob demanda, com suporte técnico personalizado durante o processo de emissão)
        </p>

        <p>
            Praticidade (Emissão e renovação dos certificados digitais sem sair da sua empresa).
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Sign</a>
        </p>
    </div>
</article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop