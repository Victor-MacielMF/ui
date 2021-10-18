@extends('layouts.main')

@section('title', 'Document')

@section('content')

<div class="container-fluid">
    {{-- Modal alterar senha --}}
    <div class="modal fade" id="alter-user-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alterar senha</h5>
            </div>
            <div class="modal-body">
                Informe a nova senha para a sua conta
                <input type="password" class="form-control modal-input" name="password" placeholder="Digite a sua senha atual*" autocomplete="off" required minlength="8">
                <input type="password" class="form-control modal-input" name="password" placeholder="Digite a nova senha*" autocomplete="off" required minlength="8">
                <input type="password" class="form-control modal-input" name="password" placeholder="Confirme a nova senha*" autocomplete="off" required minlength="8">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
    </div>

    {{--Modal Editar Endereço--}}
    <div class="modal fade" id="alter-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar endereço</h5>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control modal-input" name="cep" name="cpf" value="" autocomplete="off" readonly>
                <input type="text" class="form-control modal-input" name="endereco" placeholder="Endereço*" autocomplete="off" required>
                <input type="text" class="form-control modal-input end-numero" name="numero" placeholder="Número*" autocomplete="off" required>
                <input type="text" class="form-control modal-input end-comple" name="complemento" placeholder="Complemento" autocomplete="off">
                <input type="text" class="form-control modal-input" name="bairro" placeholder="Bairro*" autocomplete="off" required>
                <input type="text" class="form-control modal-input" name="referencia" placeholder="Referência" autocomplete="off">
                <input type="text" class="form-control modal-input end-cidade" name="cidade" value="" autocomplete="off" readonly>
                <input type="text" class="form-control modal-input end-uf" name="estado" value="" autocomplete="off" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
    </div>

    {{--Modal Cadastrar Endereço--}}
    <div class="modal fade" id="Add-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar novo endereço</h5>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control modal-input" name="cep" name="cpf" value="" autocomplete="off" >
                <input type="text" class="form-control modal-input" name="endereco" placeholder="Endereço*" autocomplete="off" required>
                <input type="text" class="form-control modal-input end-numero" name="numero" placeholder="Número*" autocomplete="off" required>
                <input type="text" class="form-control modal-input end-comple" name="complemento" placeholder="Complemento" autocomplete="off">
                <input type="text" class="form-control modal-input" name="bairro" placeholder="Bairro*" autocomplete="off" required>
                <input type="text" class="form-control modal-input" name="referencia" placeholder="Referência" autocomplete="off">
                <input type="text" class="form-control modal-input end-cidade" name="cidade" value="" autocomplete="off" >
                <input type="text" class="form-control modal-input end-uf" name="estado" value="" autocomplete="off" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
    </div>


    <div id="navigation-area">
        <div class="container">
            <h1 id="navigation">
                <i class="bi bi-person-fill"></i> MEUS DADOS
            </h1>
        </div>
    </div>
    <div id="logcad-area">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    {{-- Dados básicos --}}
                    <div class="col-md-6" id = "leftbox">
                        <div class="logcad left">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="title-view">
                                        Dados básicos
                                    </h1>
                                </div>
                                <div class="col-md-6 align-right">
                                    <button type="button" class="second-btn" id="btn-password" data-toggle="modal" data-target="#alter-user-password">
                                        {{ __('Alterar senha') }}
                                    </button>
                                </div>
                                <input type="text" class="form-control main-input espaco-embaixo espaco-cima" name="name" placeholder="Nome completo*" autocomplete="off" minlength="3" required>
                                <input type="email" class="form-control main-input espaco-embaixo preenchimento-automatico" name="email" name="cpf" value="" autocomplete="off" readonly required>
                                <input type="text" class="form-control main-input espaco-embaixo preenchimento-automatico" name="cpf" name="cpf" value="" autocomplete="off" readonly required>
                                <input type="text" class="form-control main-input espaco-embaixo" name="rg" placeholder="RG*" autocomplete="off">
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
                                <input type="text" class="form-control main-input espaco-embaixo" id="nascimento" name="nascimento" placeholder="Data de Nascimento*" autocomplete="off" minlength="10" onkeypress="$(this).mask('00/00/0000')" required>
                                <input type="text" class="form-control main-input" name="telefone" placeholder="Telefone para contato " onkeypress="$(this).mask('(00) 90000-0000')" autocomplete="off">
                                <div class="col-md-12 align-right">
                                    <button type="submit" class="main-btn" id="btn-salvar">
                                        {{ __('Salvar') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Endereços --}}
                    <div class="col-md-6 relative" id = "rightbox">
                        <div class="logcad right">
                            <div class="row">
                                <h1 class="title" id="title-endereco">
                                    Endereços
                                </h1>
                                <div class="container-fluid enderecos">
                                    <div class="enderecos-left">
                                        <p class="rua">Rua Azulao</p><br>
                                        <p class="numero">Número: 796</p>
                                        <p class="sinais">, </p>
                                        <p class="complemento">Q116 L20</p><br>
                                        <p class="referencia">Perto do peg pag Paulista</p><br>
                                        <p class="cep">77600-000</p>
                                        <p class="sinais"> - </p>
                                        <p class="cidade">Paraíso do Tocantins</p>
                                        <p class="sinais">,</p> <p class="uf">TO</p>
                                    </div>
                                    <div class="enderecos-right">
                                        <button class="btn endereco-btn" data-toggle="modal" data-target="#alter-address">Editar</button>
                                        <button class="btn endereco-btn">Excluir</button>
                                    </div>
                                </div>
                                <div class="container-fluid enderecos">
                                    <div class="enderecos-left">
                                        <p class="rua">Rua Azulao</p><br>
                                        <p class="numero">Número: 796</p>
                                        <p class="sinais">, </p>
                                        <p class="complemento">Q116 L20</p><br>
                                        <p class="referencia">Perto do peg pag Paulista</p><br>
                                        <p class="cep">77600-000</p>
                                        <p class="sinais"> - </p>
                                        <p class="cidade">Paraíso do Tocantins</p>
                                        <p class="sinais">,</p> <p class="uf">TO</p>
                                    </div>
                                    <div class="enderecos-right">
                                        <button class="btn endereco-btn" >Editar</button>
                                        <button class="btn endereco-btn">Excluir</button>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <button type="submit" class="main-btn absolut" id="btn-salvar" data-toggle="modal" data-target="#Add-address">
                                        <i class="bi bi-plus-circle-fill"></i>
                                        {{ __('Novo Endereço') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection