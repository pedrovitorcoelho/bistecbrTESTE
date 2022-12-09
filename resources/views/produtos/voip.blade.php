@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-voip-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Voip</h1>
        <p>
            Conte com um sistema de telefonia em nuvem que vai além da comunicação por voz
        </p>
        <p>
            Mobilidade (Receba e realize chamadas de qualquer lugar, por meio de telefones IP ou aplicativos para computadores e smartphones, basta ter conexão à internet)
        </p>

        <p>
            Comunicação (Chamadas de voz, reuniões por vídeo e mensagens de texto)
        </p>

        <p>
            Gerenciamento (Além da emissão de relatórios das ligações recebidas e efetuadas, é possível realizar a gravação, configurar ramais, músicas de espera, atendente virtual e muitas outras funcionalidades)
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Voip</a>
        </p>
    </div>
</article>
@stop