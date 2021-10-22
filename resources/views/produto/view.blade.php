@extends('layouts.main')

@section('title', 'Document')

@section('content')
<div class="container-fluid">
    
    <div id="navigation-area">
        <div class="container sub-navigation">
            <a href="">Home</a> > 
            <a href="">Produtos</a> > 
            <a href="">Robôs</a>
        </div>
    </div>
    {{-- Produto --}}
    <div id="produto-view-area">
        <div class="container sem-padding">
            <div class="row">
                <div class="col-md-5 azul">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active" style="background-image: url(/img/produto/3.png);">
                          </div>
                          <div class="carousel-item" style="background-image: url(/img/produto/1.jpg);">
                          </div>
                          <div class="carousel-item" style="background-image: url(/img/produto/2.jpg);">
                          </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="indicator active"></li>
                            <li data-target="#carousel" data-slide-to="1" class="indicator"></li>
                            <li data-target="#carousel" data-slide-to="2" class="indicator"></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-7 vermelho">
                    <div class="row">
                        <div class="sem">
                        <h1 class="titulo-produto">Robô Otto</h1>
                        <p class="descricao">Este pequeno robô carismático é capaz de andar de forma autônoma, 
                            desviando de obstáculos que são captados através de seu sensor de 
                            distância, possui também a possibilidade de ser controlado pelo celular se
                            escolher uma capacidade de bateria maior, permitindo incluir um módulo
                            Wi-fi.Este pequeno robô carismático é capaz de andar de forma autônoma, z de andar de forma autônoma, </p>
                            

                        </div>
                       {{-- Se não tiver opções
                        <div class="ocupar-espaco">
                            
                        </div>
                         --}}
                        <div class="sem">
                            <div class="opcoes">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="opcao-">Cor</label>
                                    </div>
                                    <select class="custom-select" id="opcao-">
                                        <option selected>Escolha...</option>
                                        <option value="1"> 
                                            <p class="opcao">Rosa</p>
                                            <p class="dinheiro-opcao"> ---- R$ 40⁴⁴</p>
                                        </option>
                                        <option value="2"> 
                                            <p class="opcao">Rosa</p>
                                            <p class="dinheiro-opcao"> ---- R$ 40⁴⁴</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="opcoes">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="opcao-">Bateria</label>
                                    </div>
                                    <select class="custom-select" id="opcao-">
                                        <option selected>Escolha...</option>
                                        <option value="1"> 
                                            <p class="opcao">JWS 26650 3.7V 9800 mAh</p>
                                            <p class="dinheiro-opcao"> ---- R$ 50⁴⁴</p>
                                        </option>
                                        <option value="2"> 
                                            <p class="opcao">Rosa</p>
                                            <p class="dinheiro-opcao"> ---- R$ 40⁴⁴</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="opcoes">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="opcao-">Bateria</label>
                                    </div>
                                    <select class="custom-select" id="opcao-">
                                        <option selected>Escolha...</option>
                                        <option value="1"> 
                                            <p class="opcao">JWS 26650 3.7V 9800 mAh</p>
                                            <p class="dinheiro-opcao"> ---- R$ 50⁴⁴</p>
                                        </option>
                                        <option value="2"> 
                                            <p class="opcao">Rosa</p>
                                            <p class="dinheiro-opcao"> ---- R$ 40⁴⁴</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="opcoes">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="opcao-">Bateria</label>
                                    </div>
                                    <select class="custom-select" id="opcao-">
                                        <option selected>Escolha...</option>
                                        <option value="1"> 
                                            <p class="opcao">JWS 26650 3.7V 9800 mAh</p>
                                            <p class="dinheiro-opcao"> ---- R$ 50⁴⁴</p>
                                        </option>
                                        <option value="2"> 
                                            <p class="opcao">Rosa</p>
                                            <p class="dinheiro-opcao"> ---- R$ 40⁴⁴</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    <div class="col-md-6 sem">
                        <div>
                            <label class="quantidade">Quantidade:</label>
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="bi bi-dash"></i></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"><i class="bi bi-plus"></i></button>
                            </div>
                        </div>
                        <p class="disponiveis">Unidades disponíveis: 9</p>

                        <div class="consultar-cep">
                            <label class="consultar">Consultar frete e prazo de entrega</label>
                            <input type="text" class="form-control main-input input-cep">
                            <button class="main-btn cep">OK</button>
                        </div>
                    </div>
                    <div class="col-md-6 sem">
                            <div class="texto">
                                <p id="total">Total: </p>
                                <p id="valor">R$ 400 <sup>22</sup></p>
                                <br>
                                <p class="em">em</p>
                                <p class="juros"> 12x R$ XXX<sup>aa</sup> sem juros</p>
                            </div>
                        <button class="comprar">
                            <i class="bi bi-cart-fill"></i> Carrinho
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div id="vendedor-area">
        <div class="container sem-padding">
            <div class="row">

                <div class="col-md-5 avaliacao">
                    <div id="area-notas">
                        <h2>Avaliações dos compradores</h2>
                        <div class="notas">
                            <h1>3.5</h1>
                            <div class="campo-estrelas-avaliacoes">
                                <div class="estrelas">
                                    <i class="bi bi-star-fill align-top"></i>
                                    <i class="bi bi-star-fill align-top"></i>
                                    <i class="bi bi-star-fill align-top"></i>
                                    <i class="bi bi-star-half align-top"></i>
                                    <i class="bi bi-star align-top"></i>
                                </div>
                                <p id="total-avaliacoes">(172 Avaliações)</p>
                            </div>
                        </div>
                        <div id="data-area">
                              <div class="row">
                                <div class="col-md-1 col-xs-2 circle-box">
                                </div>
                                <div class="col-md-2 col-xs-4 circle-box">
                                    <p>1 estrela</p>
                                  <div id="circleA"></div>
                                </div>
                                <div class="col-md-2 col-xs-4 circle-box">
                                    <p>2 estrelas</p>
                                  <div id="circleB"></div>
                                </div>
                                <div class="col-md-2 col-xs-4 circle-box">
                                    <p>3 estrelas</p>
                                  <div id="circleC"></div>
                                </div>  
                                <div class="col-md-2 col-xs-4 circle-box">
                                    <p>4 estrelas</p>
                                  <div id="circleD"></div>
                                </div>
                                <div class="col-md-2 col-xs-4 circle-box">
                                    <p>5 estrelas</p>
                                    <div id="circleE"></div>
                                </div>
                                <div class="col-md-1 col-xs-2 circle-box">
                                </div>
                              </div>
                        </div>
                </div>
            </div>
            
            <div class="col-md-7 mais-produtos">
                <div class="row">
                    
                    <div class="col-12">
                        <h3 class="main-title">OUTROS PROdutos deste VEndedor</h3>
                      </div>
                      <div class="col-md-3">
                        <a href="" class="none">
                            <div class="card">
                                <h5 class="card-title">Robô Otto</h5>
                                <div class="foto-produto" style="background-image: url(/img/produto/3.png);"></div>
                            <div class="card-body">
                                <p class="card-text">R$ 500<sup>50</sup> </p>
                            </div>
                            </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="" class="none">
                            <div class="card">
                                <h5 class="card-title">Jhon Doe</h5>
                                <div class="foto-produto" style="background-image: url(/img/produto/7.jpg);"></div>
                            <div class="card-body">
                                <p class="card-text">R$ 500<sup>50</sup> </p>
                            </div>
                            </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="" class="none">
                            <div class="card">
                                <h5 class="card-title">Jhon Doe</h5>
                                <div class="foto-produto" style="background-image: url(/img/produto/7.jpg);"></div>
                            <div class="card-body">
                                <p class="card-text">R$ 500<sup>50</sup> </p>
                            </div>
                            </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="" class="none">
                            <div class="card">
                                <h5 class="card-title">Jhon Doe</h5>
                                <div class="foto-produto" style="background-image: url(/img/produto/7.jpg);"></div>
                            <div class="card-body">
                                <p class="card-text">R$ 500<sup>50</sup> </p>
                            </div>
                            </div>
                        </a>
                      </div>
                        <div class="col-md-12">
                            <a href="" class="mais-anuncios align-bottom">Ver mais anúncios deste vendedor</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="comentarios">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Pergunte ao vendedor</h4>
                </div>
                
                <div class="col-md-10 coluna">
                    <input type="text" class="form-control main-input pergunta">
                </div>
                <div class="col-md-2 coluna">
                    <button class="main-btn pergunte">Pergunte</button>
                </div>
                <div class="area-pergunta">
                </div>
                <div class="col-md-12 parte-pergunta">
                    <p class="perguntas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                        Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                        Willians Diglio.
                    </p>
                        <p class="respostas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.
                        </p>
                        <p class="respostas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.om dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N 
                        </p>
                </div>
                <div class="col-md-12 parte-pergunta">
                    <p class="perguntas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                        Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                        Willians Diglio.
                    </p>
                        <p class="respostas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.
                        </p>
                        <p class="respostas">Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.Bom dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N consigo mandar msg, por isso mandando por aqui. Obrigado 
                            Willians Diglio.om dia! Acabei d comprar dois relógios, quero 1 branco e 1 rosa. N 
                        </p>
                    <button class="responder">Responder</button>
                    <button class="excluir-resposta">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
    $(function(){

        // Progress bar
        let containerA=document.getElementById("circleA");
    
        let circleA= new ProgressBar.Circle(containerA,{
            color:'#E5CD14',
            // largura do circulo
            strokeWidth:12,
            duration: 1400,
            from:{ color:'#202226'},
            to:{color:'#E5CD14'},
    
            step: function(state, circle){
                circle.path.setAttribute('stroke',state.color);
    
                let value = Math.round(circle.value()*60);
    
                circle.setText(value);
            }
        });
    
        let containerB=document.getElementById("circleB");
    
        let circleB= new ProgressBar.Circle(containerB,{
            color:'#E5CD14',
            // largura do circulo
            strokeWidth:12,
            duration: 1600,
            from:{ color:'#202226'},
            to:{color:'#E5CD14'},
    
            step: function(state, circle){
                circle.path.setAttribute('stroke',state.color);
    
                let value = Math.round(circle.value()*245);
    
                circle.setText(value);
            }
        });
    
        let containerC=document.getElementById("circleC");
    
        let circleC= new ProgressBar.Circle(containerC,{
            color:'#E5CD14',
            // largura do circulo
            strokeWidth:12,
            duration: 1800,
            from:{ color:'#202226'},
            to:{color:'#E5CD14'},
    
            step: function(state, circle){
                circle.path.setAttribute('stroke',state.color);
    
                let value = Math.round(circle.value()*32);
    
                circle.setText(value);
            }
        });
    
        let containerD=document.getElementById("circleD");
    
        let circleD= new ProgressBar.Circle(containerD,{
            color:'#E5CD14',
            // largura do circulo
            strokeWidth:12,
            duration: 2000,
            from:{ color:'#202226'},
            to:{color:'#E5CD14'},
    
            step: function(state, circle){
                circle.path.setAttribute('stroke',state.color);
    
                let value = Math.round(circle.value()*52);
    
                circle.setText(value);
            }
        });
    
        let containerE=document.getElementById("circleE");
    
        let circleE= new ProgressBar.Circle(containerE,{
            color:'#E5CD14',
            // largura do circulo
            strokeWidth:12,
            duration: 2000,
            from:{ color:'#202226'},
            to:{color:'#E5CD14'},
    
            step: function(state, circle){
                circle.path.setAttribute('stroke',state.color);
    
                let value = Math.round(circle.value()*24);
    
                circle.setText(value);
            }
        });
    
    
        // iniciando o loader quando o usuário chega no elemento
        let dataAreaOffset = $('#data-area').offset();
        let stop=0;
    
        $(window).scroll(function(e){
            let scroll = $(window).scrollTop();
    
            if(scroll>(dataAreaOffset.top - 700) && stop == 0){
                circleA.animate(1.0)
                circleB.animate(1.0)
                circleC.animate(1.0)
                circleD.animate(1.0)
                circleE.animate(1.0)
    
                stop = 1;
            }
        });
    
    });
</script>
@endsection