@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-pay-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Pay</h1>
        <p>
<<<<<<< HEAD
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
=======
            Oferecemos diversas soluções que facilitam e agilizam o pagamento do seu cliente
        </p>
        <p>
            Sistema PDV Móvel (O seu caixa onde você estiver. O nosso sistema é instalado na “maquininha” de cartão e dispensa o uso de computadores e impressoras)
        </p>

        <p>
            Meios de pagamento (Disponibilizamos links de pagamento, compartilhamento de “maquininhas” com até 10 empresas, divisão de vendas, recorrência, vendas offline e taxas ao portador)  
        </p>

        <p>
            POS e TEF (Comercializamos equipamentos POS, mais conhecida como “maquininha” e o TEF, transferência eletrônica de fundos, solução integrada ao sistema de venda)
        </p>
        
        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Pay</a>
>>>>>>> gui-laravel1
        </p>
    </div>
</article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop