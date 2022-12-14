@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleContato.css">
@stop

@section('corpo')
<!-- CORPO -->

@if(session('mensagem'))
 <div>
    <p>{{session('mensagem')}}</p>
 </div>
@endif

<article id="first_section" class="article_contact">
        <div class="formulario2">
           @if(session('mensagem'))
            <div>
              <p>{{session('mensagem')}}</p> 
            </div>        

           @endif 
             
             
             


            <form name="frmContato" method="POST" id="frmContato" method="POST" action="{{url('enviaContato')}}" >
                {{ csrf_field() }}
                <div class="campos">
                    <h1>Formulário para Contato</h1>
                    <label>Nome completo:</label><br>
                    <input type="text" name="nomeRemetente" placeholder="Digite seu nome aqui" required>
                </div>

                <div class="campos">
                    <label>Telefone-celular:</label><br>
                    <input type="tel" name="telefoneRemetente" placeholder="(XX) XXXXX-XXXX"  required>
                </div>
                
                <div class="campos">
                    <label>Seu endereço de e-mail:</label><br>
                    <input type="email" name="emailRemetente" placeholder="Digite seu endereço de e-mail aqui" required>
                </div>            
                
                <div class="campos">
                    <label>Assunto do e-mail:</label><br>
                    <input type="text" name="assuntoEmail" placeholder="Digite aqui sobre o que seu e-mail se trata" required>
                </div>


                <div class="campos">
                    <label> Seu comentário: </label><br>
                    <textarea name="conteudoEmail" placeholder="Deixe seu comentário" required></textarea>
                </div>
                
    
                <div class="campos">
                    <input type="submit" name="enviarEmail" value="Enviar" id="btEnviaForm">
                </div>
                
            </form>
        </div>

        <div>
            <div class="formulario2">
                <div class="campos">
                            <h1>Endereço</h1>
                            <p>Rua Amador Bueno, 333, Sala 501 - Centro – Santos, SP</p>
                            <p>CEP 11013-153</p>
                            <p><em>Estacionamento no local com acesso à recepção</em></p>
                </div> 
            </div>
        </div>

        <div>
            <div class="formulario2">
                <div class="campos">
                            <h1>Trabalhe Conosco</h1>
                            <p>Encaminhe seu currículo para o email <a href="mailto:curriculum@bistec.com.br">curriculum@bistec.com.br</a> e entraremos em contato em breve!</p>
                </div> 
            </div>
        </div>



 
        <div class="newsletter_address_talktous">
            <div class="formulario2">
                <form name="frmContato" method="POST" id="frmContato" method="POST" action="{{url('enviaLetter')}}" >
                    {{ csrf_field() }}
                    <div class="campos">
                        <h1>Newsletter</h1>
                        <label>Digite seu email para receber novidades:</label>
                        <input type="email" name="letterRemetente" placeholder="Digite seu endereço de e-mail aqui" required>
                        <input type="submit" name="enviarNewsletter" value="Enviar" id="btEnviaForm">
                    </div>  
                </form>
            </div>
        </div>
    </article>
@stop