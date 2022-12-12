@extends('layouts.template')
@section('corpo')
    <!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="banner-bistec" id="imagemUnica">
            <img id="img-banner" src="https://ik.imagekit.io/bistecbr/banner_bistecbr.png?tr=w-2008,h-762" alt="Imagem de fundo com o bondinho da cidade de Santos">
            <div class="banner-bistec-texto">
                <h1>Bistec Brasil</h1>
                <h2>Tecnologia para empresas de todos os tamanhos</h2>
            </div>
        </section>

        <!-- APRESENTAÇÃO EMPRESA -->
        <section class="bistec_presentation">
            <div class="container">
                <!-- <div class="image_presentation">
                    <img src="https://www.bistec.com.br/wp-content/uploads/2014/11/home-services-1024x746.png" alt="" width="410" height="380">
                </div> -->
                <div class="square_presentation">
                    <div class="text_presentation">
                        <h1>A Nova Bistec</h1>
                        <h2>Desde 1999, em constante evolução: </h2>
                        <p>
                            Entregamos soluções em tecnologia que atendem a todas as necessidades da sua empresa, unindo o que há de mais inovador com um atendimento personalizado.
                        </p>
                        <p>
                            Entregamos soluções em tecnologia que atendem a todas as necessidades da sua empresa, unindo o que há de mais inovador com um atendimento personalizado.
                        </p>
                        <p>
                            Entregamos soluções em tecnologia que atendem a todas as necessidades da sua empresa, unindo o que há de mais inovador com um atendimento personalizado.
                        </p>
                        <p>
                            Juntos transformaremos o seu negócio!
                        </p>
                    </div>
                </div>
            </div>
            <div class="section_button_presentation">
                <a href="https://bistec.com.pt" class="button_presentation">Conheça também Bistec Portugal!</a>
            </div>
        </section>
        <!-- PRODUTOS -->

        <section class="bistec-produtos">
            <a href="/produtos/automacao" id="bistec-automacao">
                <img src="{{$automacao}}" alt="Bistec Automação">
                <img src="{{$automacaowhite}}" alt="Bistec Automação">
            </a>
            <a href="/produtos/cloud" id="bistec-cloud">
                <img src="{{$cloud}}" alt="Bistec Cloud">
                <img src="{{$cloudwhite}}" alt="Bistec Cloud">
            </a>
            <a href="/produtos/edu" id="bistec-edu">
                <img src="{{$edu}}" alt="Bistec Edu">
                <img src="{{$eduwhite}}" alt="Bistec Edu">
            </a>
            <a href="/produtos/ged" id="bistec-ged">
                <img src="{{$ged}}" alt="Bistec GED">
                <img src="{{$gedwhite}}" alt="Bistec GED">
            </a>
            <a href="/produtos/green" id="bistec-green">
                <img src="{{$green}}" alt="Bistec Green">   
                <img src="{{$greenwhite}}" alt="Bistec GED">      
            </a>
            <a href="/produtos/lgpd" id="bistec-lgpd">
                <img src="{{$lgpd}}" alt="Bistec LGPD">
                <img src="{{$lgpdwhite}}" alt="Bistec LGPD">
            </a>
            <a href="/produtos/msp" id="bistec-msp">
                <img src="{{$msp}}" alt="Bistec MSP">
                <img src="{{$mspwhite}}" alt="Bistec MSP">
            </a>
            <a href="/produtos/outsourcing" id="bistec-outsourcing">
                <img src="{{$outsourcing}}" alt="Bistec Outsourcing">
                <img src="{{$outsourcingwhite}}" alt="Bistec Outsourcing">
            </a>
            <a href="/produtos/pay" id="bistec-pay">
                <img src="{{$pay}}" alt="Bistec Pay">
                <img src="{{$paywhite}}" alt="Bistec Pay">
            </a>
            <a href="/produtos/renting" id="bistec-renting">
                <img src="{{$renting}}" alt="Bistec Renting">
                <img src="{{$rentingwhite}}" alt="Bistec Renting">
            </a>
            <a href="/produtos/sign" id="bistec-sign">
                <img src="{{$sign}}" alt="Bistec Sign">
                <img src="{{$signwhite}}" alt="Bistec Sign">
            </a>
            <a href="/produtos/soft" id="bistec-soft">
                <img src="{{$soft}}" alt="Bistec Soft">
                <img src="{{$softwhite}}" alt="Bistec Soft">
            </a>
            <a href="/produtos/voip" id="bistec-voip">
                <img src="{{$voip}}" alt="Bistec Voip">
                <img src="{{$voipwhite}}" alt="Bistec Voip">
            </a>
            <a href="/produtos/wifi" id="bistec-wifi">
                <img src="{{$wifi}}" alt="Bistec wifi">
                <img src="{{$wifiwhite}}" alt="Bistec wifi">
            </a>
            <a href="/produtos/xml" id="bistec-xml">
                <img src="{{$xml}}" alt="Bistec XML">
                <img src="{{$xmlwhite}}" alt="Bistec XML">
            </a>
        </section>

        <section class="bistec_tour">
            <a href="/tour" class="bistec_button_tour">Visite a sede da Bistec pelo seu navegador em um tour virtual.</a>
        </section>
    </article>
@stop

@section('script')
    <script src="/js/main.js" defer async></script>
@stop