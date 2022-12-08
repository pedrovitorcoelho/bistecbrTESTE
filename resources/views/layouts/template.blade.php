<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://bistec.com.br/" />
    <meta property="og:title" content="Bistec BR - Automação Comercial" />
    <meta property="og:site_name" content="Bistec BR" />
    <meta property="og:description" content="Bistec Consultoria de TI. Desde 1999 fornecendo produtos e serviços de Automação Comercial e Informática. Aproveite o melhor da tecnologia para seu negócio." />

    <meta property="og:image" content="https://bistec.com.pt/assets/images/tagline-vertical.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Logo Bistec" />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bistec Consultoria de TI. Desde 1999 fornecendo produtos e serviços de Automação Comercial e Informática. Aproveite o melhor da tecnologia para seu negócio.">
    <title>Início - Bistec Brasil</title>
    @yield('style')
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleMobile.css">
    <link rel="stylesheet" href="/css/styleTablet.css">
    <link rel="stylesheet" href="/css/styleTelaQuadrada.css">
    <link rel="stylesheet" href="/css/styleTv.css">
    <link rel="stylesheet" href="/css/styleDark.css">
    <link rel="icon" href="https://ik.imagekit.io/bistecbr/simbolo.png">
</head>
<body>
    <header class="header-bistec" id="#first_section">
        <a href="#first_section" class="logo-bistec">
            <img src="https://ik.imagekit.io/bistecbr/logo-bistec.png" alt="Logo - Bistec" width="90" height="84">
            <img src="https://ik.imagekit.io/bistecbr/logo_bistec_branco.png" alt="Logo Branca - Bistec" width="300" height="102">
        </a>
        <ul class="normal-menu">
            <li>
                <a href="/" class="normal" >HOME</a>
            </li>
            <li>
                <a href="/contato" class="normal" >CONTATO</a>
            </li>
            <li>
                <a href="/portfolio" class="normal click_portfolio_mobile">PORTFÓLIO <ion-icon name="chevron-down-outline"></ion-icon></a>
                <ul class="normal-submenu">
                    <li><a href="/produtos/automacao"><ion-icon name="at-sharp"></ion-icon> BISTEC AUTOMAÇÃO</a></li>
                    <li><a href="/produtos/cloud"> <ion-icon name="cloud-done-sharp"></ion-icon> BISTEC CLOUD</a></li>
                    <li><a href="/produtos/edu"> <ion-icon name="pencil-sharp"></ion-icon> BISTEC EDU</a></li>
                    <li><a href="/produtos/ged"><ion-icon name="file-tray-stacked-sharp"></ion-icon> BISTEC GED</a></li>
                    <li><a href="/produtos/green"><ion-icon name="leaf-sharp"></ion-icon> BISTEC GREEN</a></li>
                    <li><a href="/produtos/lgpd"><ion-icon name="shield-checkmark-sharp"></ion-icon> BISTEC LGPD</a></li>
                    <li><a href="/produtos/msp"> <ion-icon name="lock-closed"></ion-icon> BISTEC MSP</a></li>
                    <li><a href="/produtos/outsourcing"> <ion-icon name="settings-sharp"></ion-icon> BISTEC OUTSOURCING</a></li>
                    <li><a href="/produtos/pay"> <ion-icon name="card"></ion-icon> BISTEC PAY</a></li>
                    <li><a href="/produtos/renting"> <ion-icon name="reload-circle-sharp"></ion-icon> BISTEC RENTING</a></li>
                    <li><a href="/produtos/sign"> <ion-icon name="log-in"></ion-icon> BISTEC SIGN</a></li>
                    <li><a href="/produtos/soft"><ion-icon name="disc-sharp"></ion-icon> BISTEC SOFT</a></li>
                    <li><a href="/produtos/voip"> <ion-icon name="call"></ion-icon> BISTEC VOIP</a></li>
                    <li><a href="/produtos/wifi"> <ion-icon name="wifi-sharp"></ion-icon>BISTEC WIFI</a></li>
                    <li><a href="/produtos/xml"> <ion-icon name="document"></ion-icon> BISTEC XML</a></li>
                </ul>
            </li>

            <li>
                <a href="https://www.cupomfiscaleletronico.com.br/" target="_blank" class="store_support">
                    <div class="button button_store">
                        <span class="button_icon store_icon"><ion-icon name="cart-outline"></ion-icon></span>
                        <span class="button_text">LOJA</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/suporte" class="store_support">
                    <div class="button_support">
                        <span class="button_icon support_icon"><ion-icon name="headset-outline"></ion-icon></span>
                        <span class="button_text">SUPORTE</span>
                    </div>
                </a>
            </li>
            
        </ul>
        <ul class="menu-cell">
            <li>
                <ion-icon name="menu-outline"></ion-icon>
            </li>
        </ul>
    </header>
    @yield('corpo')
    <footer>
        <div class="redes-sociais">
            <a href="mailto:bistec@bistec.com.br" title="Bistec E-mail" target="_blank"><ion-icon name="mail" class="ionspecial"></ion-icon></a>
            <a href="https://facebook.com/bistecweb" title="Bistec Facebook" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://instagram.com/bistecweb" title="Bistec Instagram" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://youtube.com/bistecweb" title="Bistec Youtube" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.twitter.com/bistecweb" title="Bistec Twitter" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.flickr.com/bistec" title="Bistec Flickr" target="_blank"><ion-icon name="logo-flickr"></ion-icon></a>
            <a href="https://soundcloud.com/bistecweb" title="Bistec Soundcloud" target="_blank"><ion-icon name="logo-soundcloud"></ion-icon></a>
            <a href="https://linkedin.com/company/bistec" title="Bistec Linkedin" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="https://www.google.com/maps/place/BISTEC+PT+-+Servi%C3%A7os+de+tecnologia+para+todas+as+empresas/@40.6404794,-8.6534868,17z/data=!3m1!4b1!4m5!3m4!1s0xd2399dba4bcb0ad:0x74340dfb6ecc8e8d!8m2!3d40.6404794!4d-8.6534868?hl=pt" title="Bistec Linkedin" target="_blank"><ion-icon name="location" class="ionspecial"></ion-icon></a>
        </div>

        <div class="contacts">
            <div class="contact item1">
                <p>
                    <a href="https://bistec.com.br">
                        <img src="https://ik.imagekit.io/bistecbr/brazil.png" alt="Brasil País" width="20" height="20"> Bistec Brasil 
                    </a> 
                </p> 
                <p>
                    <a href="tel:+55(13)3235-7735">+55 (13) 3235-7735</a>  
                </p>
                <p>
                    <a href="tel:+55(13)3522-8184">+55 (13) 3522-8184</a>
                </p>                    
            </div>
            
            <div class="contact item2">
                <p>
                    <img src="https://ik.imagekit.io/bistecbr/clock.png" alt="Logo Horário" height="15" width="15"> Funcionamento 
                </p> 
                <p>Segunda à Sexta:</p> 
                <p>08:15h - 18:00h</p>
            </div> 

            <div class="contact item3">
                <a href="#first_section">
                    <img src="https://ik.imagekit.io/bistecbr/portugal.png" alt="Portugal País"  width="20" height="20"> Bistec Portugal
                </a>
                <p><a href="tel:+351308807114">+351 308 807 114</a></p>
            </div>

            <div class="contact item4">
                <a href="https://api.whatsapp.com/send?phone=5513992101945" target="_blank">
                <img src="https://ik.imagekit.io/bistecbr/whatsapp.png" alt="Logo Whatsapp Business" width="20" height="20"> Whatsapp Business</a>
                <p>
                    <a href="https://api.whatsapp.com/send?phone=5513992101945" target="_blank">+55 (13) 99210-1945</a>
                </p>
            </div> 
           
        </div>
    </footer>
    <div class="footer-copyright">
        <p>©2022 Bistec · Consultoria de TI · Todos os direitos reservados.</p>
    </div>
    @yield('script')
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
    <script src="//code.jivosite.com/widget/3bZuUHkWaM" async></script>
</body>
</html>