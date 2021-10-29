@extends('layouts.main')

@section('title', 'Document')

@section('content')
<div class="container-fluid vender">
    <form action="{{ route('storeProduto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="categoria-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-vender">
                            Qual categoria seu produto pertence?
                        </h1>
                    </div>

                    <div class="col-md-6 vender-produto">
                        <button class="button-div">
                            <div class="area-robo">
                                <div class="categoria">
                                    <p>Robótica</p>
                                </div>
                                <div class="imagem-vender"></div>
                            </div>
                        </button>
                    </div>

                    
                    <div class="col-md-6 vender-servico">
                        <button class="button-div">
                            <div class="area-impressao" id="area-impressao">
                                    <div class="categoria">
                                        <p>Impressão 3D</p>
                                    </div>
                                    <div class="imagem-vender2">
                                    </div>
                            </div>
                        </button>
                    </div>
                    <div class="d-none">
                        <div class="col-md-6">
                            <INPUT TYPE="RADIO"  NAME="categoria" VALUE="Robô"  id="robo" checked> <p>Robô</p>
                        </div>
                        <div class="col-md-6">
                            <INPUT TYPE="RADIO"  NAME="categoria" VALUE="Impressão 3D" id="impressao"> <p>Impressão 3D</p>
                        </div>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-vender">
                        Preencha as informações do anúncio
                    </h1>
                </div>
            </div>
        </div>
        
        <div id="titulo-area">
            <div class="container">
                <div class="row titulo-area">
                    <div class="col-md-12">
                        <h1 class="title-containers">
                            Preencha o título do seu anúncio
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <p class="paragrafos-containers">Inclua somente o nome do produto:</p>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="main-input" name="titulo" maxlength="60" required>
                    </div>
                    <div class="col-md-12">
                        <div class="modal-footer containers-botoes">
                            <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                            <button type="submit" class="main-btn modal-btn">Avançar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="imagem-area">
            <div class="container">
                <div class="row titulo-area">
                    <div class="col-md-12">
                        <div class="title-containers">
                            Insira as fotos do seu produto
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="paragrafos-containers">Insira pelo menos 1 foto:</p>
                    </div>
                    <div class="col-md-12 col-file">
                        <input name="imagens[]" class="form-control" type="file" id="formFile" max="2" required multiple>
                    </div>
                    <div class="col-md-12">
                        <div class="modal-footer containers-botoes">
                            <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                            <button type="submit" class="main-btn modal-btn">Avançar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="condicoes-venda">
            <div class="container">
                <div class="row titulo-area">
                    <div class="col-md-12">
                        <h1 class="title-containers">
                            Condições de venda
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <p class="paragrafos-containers">O seu produto possui componentes a serem especificados pelo cliente?</p>
                    </div>
                    <div class="radio-inline">
                        <INPUT TYPE="RADIO"  NAME="componentes" VALUE="S"> <p>Sim</p>
                    </div>
                    <div class="radio-inline">
                        <INPUT TYPE="RADIO"  NAME="componentes" VALUE="N" checked> <p>Não</p>
                    </div>
                    <div class="col-md-12">
                        <div class="modal-footer containers-botoes">
                            <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                            <button type="submit" class="main-btn modal-btn">Avançar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="preco-produto">
            <div class="container">
                <div class="row titulo-area">
                    <div class="col-md-12">
                        <h1 class="title-containers">
                            Condições de venda
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <p class="paragrafos-containers">Qual é o preço unitário?</p>
                    </div>
                    <div class="col-md-12">
                        <input name="preco" type="number" class="main-input" id="preco-venda">
                    </div>
                    <div class="col-md-12 espaco-em-cima">
                        <p class="paragrafos-containers">Unidades:</p>
                    </div>
                    <div class="col-md-12">
                        <input name="quantidade" type="number" class="main-input" id="qtd-venda" min="1" max="99">
                    </div>
                    <div class="col-md-12">
                        <div class="modal-footer containers-botoes">
                            <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                            <button type="submit" class="main-btn modal-btn">Avançar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="descricao-produto">
            <div id="preco-produto">
                <div class="container">
                    <div class="row titulo-area">
                        <div class="col-md-12">
                            <h1 class="title-containers">
                                Adicione uma descrição
                            </h1>
                        </div>
                        <div class="col-md-12">
                            <textarea name="descricao" class="form-control main-input" aria-label="With textarea" maxlength="500"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer containers-botoes">
                                <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                                <button type="submit" class="main-btn modal-btn">Avançar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="simplificada-produto">
                <div class="container">
                    <div class="row titulo-area">
                        <div class="col-md-12">
                            <h1 class="title-containers">
                                Adicione uma descrição simplificada
                            </h1>
                        </div>
                        <div class="col-md-12">
                            <p class="paragrafos-containers">Inclua o modelo e características principais.</p>
                        </div>
                        <div class="col-md-12">
                            <input name="descricao_simplificada" type="text" class="main-input" maxlength="50">
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer containers-botoes">
                                <button type="button" class="second-btn modal-btn cancelar-modal">Voltar</button>
                                <button type="submit" class="main-btn modal-btn" value="concluir">Concluir</button>
                            </div>
                        </div>
                    </div>
            </div>
    </form>
</div>
<script>
    $( ".area-impressao" ).click(function() {
        event.preventDefault();
       $('#impressao').prop("checked", true);
    });
    $( ".area-robo" ).click(function() {
        event.preventDefault();
        $('#robo').prop("checked", true);
    });
    $(".modal-btn").click(function(){
        nome=$(this).val();
        var radioValue = $("input[name='componentes']:checked").val();
        if( (nome!="concluir") && (radioValue=="N")){
            event.preventDefault();
        }
    });
</script>
@endsection