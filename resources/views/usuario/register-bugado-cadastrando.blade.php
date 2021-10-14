@extends('layouts.main')

@section('title', 'Document')

@section('content')
<div class="container-fluid">
    
    <div id="navigation-area">
        <div class="container">
            <h1 id="navigation">
                <i class="bi bi-person-fill"></i> IDENTIFICAÇÃO
            </h1>
        </div>
    </div>
    {{-- Cadastro --}}
    <div id="logcad-area">
        <div class="container">



            @if ($errors->any() || session('msg'))
            <div class="alert alert-danger">
                
                @foreach ($errors->all() as $error)
                <div class="row">
                    {{ $error }}.
                </div>
                @endforeach

            </div>
        @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-md-12">
                    <div class="row">
                           
                            
                            <div class="col-md-6" id = "leftbox">
                                <div class="logcad left">
                                    <div class="row">
                                        <h1 class="title">
                                            Dados pessoais
                                        </h1>
                                        <input type="text" class="form-control main-input espaco-embaixo" name="name" placeholder="Nome*" autocomplete="off" required>
                                        <input type="email" class="form-control main-input espaco-embaixo preenchimento-automatico" name="email"  required>
                                        <input type="text" class="form-control main-input espaco-embaixo preenchimento-automatico" name="cpf" value="{{session('msg2')}}" required>
                                        <input type="text" class="form-control main-input espaco-embaixo" name="password_confirmation" placeholder="RG*" autocomplete="off">
                                        <div class="row row-sexo espaco-embaixo">
                                            <div class="col-md-12">
                                                <h1 class="title" id="sexo">Sexo</h1>
                                            </div>
                                            <div class="col-md-4">
                                                <INPUT TYPE="RADIO"  NAME="sexo" VALUE="I" checked> <p>Não informar</p>
                                            </div>
                                            <div class="col-md-4">
                                                <INPUT TYPE="RADIO"  NAME="sexo" VALUE="M"> <p>Masculino</p>
                                            </div>
                                            <div class="col-md-4 ">
                                                <INPUT TYPE="RADIO" NAME="sexo" VALUE="F"> <p>Feminino</p>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control main-input espaco-embaixo" id="nascimento" name="nascimento" placeholder="Data de Nascimento*" autocomplete="off" onkeypress="$(this).mask('00/00/0000')" required>
                                        <input type="text" class="input-hidden" name="password"  value="84472602">
                                        <input type="text" class="form-control main-input" name="telefone" placeholder="Telefone para contato " onkeypress="$(this).mask('(00) 90000-0000')" autocomplete="off">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id = "rightbox">
                                <div class="logcad right">
                                    <div class="row">
                                        <h1 class="title">
                                            Endereço de cadastro
                                        </h1>
                                        <input type="text" class="form-control main-input espaco-embaixo preenchimento-automatico" name="cep" >
                                        <input type="text" class="form-control main-input espaco-embaixo" name="endereco" placeholder="Endereço*" autocomplete="off" required>
                                        <input type="text" id="numero-cad" class="form-control main-input espaco-embaixo" name="numero" placeholder="Número*" autocomplete="off" required>
                                        <input type="text" id="complemento-cad" class="form-control main-input espaco-embaixo" name="complemento" placeholder="Complemento" autocomplete="off">
                                        <input type="text" class="form-control main-input espaco-embaixo" name="bairro" placeholder="Bairro*" autocomplete="off" required>
                                        <input type="text" class="form-control main-input espaco-embaixo" name="referencia" placeholder="Referência" autocomplete="off">
                                        <input type="text" id="cidade-cad" class="form-control main-input espaco-embaixo preenchimento-automatico" name="cidade" >
                                        <input type="text" id="estado-cad" class="form-control main-input espaco-embaixo preenchimento-automatico" name="estado" >
                                        <p id="termos">Aqui vai ficar a parte de aceitar os termos de uso que ainda não foram desenvolvidos</p>
                                    </div>
                                </div>
                            </div>
        


                    </div>
                    <div class="row" id="concluir">
                        <button type="submit" class="main-btn c" id="concluir">
                            <i class="bi bi-check-lg"></i>
                            {{ __('Concluir') }}
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection