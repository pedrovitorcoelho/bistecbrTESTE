@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-green-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Green</h1>
        <p>
            Quando se trata de atendimento técnico para a sua empresa atualmente existem dois modelos, o break-fix (quebrou-consertou) e o MSP (Provedores de Serviços Gerenciados).
        </p>
        <p>
            No modelo break-fix o suporte técnico é acionado após o problema acontecer e até que ele seja resolvido você fica com seu equipamento/sistema inoperante.
        </p>

        <p>
            Já no modelo MSP, a Bistec atua ativamente, utilizando ferramentas gerenciais, para analisar em tempo real o que está a acontecer com o seu computador e sistemas. Dessa forma é possível resolver os seus problemas antes mesmo de eles acontecerem.
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20MSP">Converse com um de nossos atendentes sobre a solução BISTEC MSP</a>
        </p>
    </div>
</article>
@stop