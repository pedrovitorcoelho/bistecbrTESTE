@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-edu-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Edu</h1>
            <p>
                Faça o treinamento com toda a sua equipe e explore 100% da capacidade das soluções Bistec.
            </p>

            <p>
                Temas (treinamentos em informática e de desenvolvimento profissional e gerencial).
            </p>

            <p>
                Modalidades (Treinamentos presenciais no nosso Showroom ou na sua empresa e Treinamentos a distância, utilizando a plataforma Bistec Edu).
            </p>

            <p>
                Formadores (Equipe de consultores técnicos. Contamos ainda com profissionais com mais de 25 anos de experiência acadêmica).
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Edu</a>
            </p>

            <h2>
                Acesso aos nossos recursos de formação:
            </h2>

            <div class="bistec-edu-plataformas">
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecbr/img-lg-bistec-edu.png" alt="Bistec Edu"></a>
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecbr/img-lg-bistec-edu-branco.png" alt="Bistec Edu"></a>
                <a href="https://www.youtube.com/c/BISTECEDU" target="_blank"><img src="https://ik.imagekit.io/bistecbr/youtube.png" alt="Canal do YouTube da Bistec Edu"></a>
                <a href="https://www.youtube.com/c/BISTECEDU" target="_blank"><img src="https://ik.imagekit.io/bistecbr/youtube_white.png" alt="Canal do YouTube da Bistec Edu"></a>
            </div>
        </div>
    </article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop