@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-cloud-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

        <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Cloud</h1>
            <p>
                Guarde os seus arquivos com segurança. Nenhum sistema é 100% seguro, faça BACKUP.
            </p>
            <p>
                Backup (cópia dos arquivos realizada de forma automática, sem custos de investimentos em infraestrutura).
            </p>
            <p>
                Segurança (Garante a disponibilidade, confidencialidade e integridade dos seus arquivos).
            </p>

            <p>
                Elasticidade (Contrate mais espaço de armazenamento sempre que for necessário).
            </p>

            <p>
                * Atende à lei geral de proteção de dados - LGPD
            </p>

            <p>
                <a class="nice_button" target="_blank" href="https://bistec.backupmanager.info/">SAIBA MAIS</a>
            </p>
        </div>
    </article>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop