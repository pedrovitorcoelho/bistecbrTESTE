@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-msp-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec MSP</h1>
        <p>
        Como provedor de serviços gerenciados, a Bistec analisa em tempo real o que está acontecendo com seu computador e sistemas, atuando antes mesmo que as falhas aconteçam.
        </p>
        <p>
            Controle (Bloqueio de sites, redes sociais, pendrives e outros dispositivos de armazenamento externo)
        </p>

        <p>
            Proteção (Monitoramos os principais componentes dos seus computadores, além de prever possíveis ameaças, como roubo de dados ou infecção)
        </p>

        <p>
            Segurança (Contamos com ferramentas de análise de vulnerabilidades para seus e-mails, websites e redes)
        </p>

        <p>
            * Atende a lei geral de proteção de dados - LGPD
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20MSP">Converse com um de nossos atendentes sobre a solução BISTEC MSP</a>
        </p>
    </div>
</article>
@stop