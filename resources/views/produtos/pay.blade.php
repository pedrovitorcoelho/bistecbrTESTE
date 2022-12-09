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
        </p>
    </div>
</article>
@stop