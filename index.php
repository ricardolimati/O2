<?php
session_start();
?>
<?php
include_once 'funcoes.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Meta Tags-->
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scala=1, sherink-to-fit=no">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
        <link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
        <title>Black Friday - Assim</title>
    </head>

    <body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12 text-center" id="efeitoNeon">
                <img src="imgs/img-top1.png" alt="neon1" class="neon1 col-lg-12 col-sm-12">
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
        <div class="row mt-4 mb-0">
            <div class="col-lg-3 col-sm-1"></div>
            <div class="col-lg-6 col-sm-10 text-center">
                <h3>
                    CONFIRA AS OFERTAS <span style="color: #ffa200">ESPECIAIS!</span>
                </h3>
                <h4>
                    CADASTRE-SE E NÃO PERCA ESSA OPORTUNIDADE
                </h4>
            </div>
            <div class="col-lg-3 col-sm-1"></div>
        </div>
        <div class="row mt-0">
            <div class="col-lg-3 col-sm-12 mt-0"></div>
            <div class="col-lg-6 col-sm-12 mt-0">
                <img src="imgs/neonpequeno.png" alt="">
            </div>
            <div class="col-lg-3 col-sm-12 mt-0"></div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <form id="fContato" name="fContato" action="index.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-lg-3 ml-1 mr-1">
                            <input type="hidden" name="iCadastro" id="iCadastro" value="1">
                            <input type="text" class="form-control clInput text-white" id="iNome" name="iNome" placeholder="NOME" minlength="3" required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-3 ml-1 mr-1">
                            <input type="tel" class="form-control clInput" id="iTelefone" name="iTelefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="TELEFONE""  required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-3 ml-1 mr-1">
                            <input type="email" class="form-control clInput" id="iEmail" name="iEmail" placeholder="E-MAIL" required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-2 ml-1">
                            <button id="btCadastrar" type="submit" class="btn-warning btn clButton col-sm-12 col-lg-12">CADASTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5" style="z-index: 1">
            <div class="col-12 text-center" style="background: url('imgs/bgAssinantes.png') no-repeat center; z-index: 1000;filter: drop-shadow(0 0 10px #feff16);">
                <h5>PARA NOVOS ASSINANTES</h5>
            </div>
        </div>
        <div id="bordaAssinantes" class="row rounded" style="margin-top: -10px; border: 3px solid #f967ff; filter: drop-shadow(0 0 30px #f967ff);">
            <div class="col-2">

            </div>
            <div class="col-sm-12 col-md-2 text-center mt-3">
                    <p class="text-white">
                        <span style="font-size: 35px; font-weight: bold;">+10</span><span style="font-size: 32px; font-weight: bold;">MB</span><br>
                        <span class="text-white estilo3" style="font-size: 14px;">em qualquer plano</span><br>
                        <img src="imgs/img1.png">
                    </p>
            </div>
            <div class="col-md-1 col-sm-12 text-center text-white mt-3">
                <span style="font-size: 50px; font-weight: lighter;">+</span>
            </div>
            <div class="col-sm-12 col-md-2 text-center mt-3">
                <p class="text-white">
                    <span style="font-size: 22px; font-weight: bold;">TAXA ZERO</span><br>
                    <span class="text-white estilo3" style="font-size: 23px;font-weight: lighter;">na intalação</span><br>
                    <img src="imgs/img2.png">
                </p>
            </div>
            <div class="col-md-1 col-sm-12 text-center text-white mt-3">
                <span style="font-size: 50px; font-weight: lighter;">+</span>
            </div>
            <div class="col-sm-12 col-md-2 text-center mt-3">
                <p class="text-white">
                    <span style="font-size: 22px; font-weight: bold;">ROTEADOR</span><br/>
                    <span style="font-size: 22px; font-weight: bold;">GRATUITO</span><br/>
                    <span class="text-white estilo3" style="font-size: 11px;font-weight: lighter;">PARA OS 100 PRIMEIROS</span><br>
                    <img src="imgs/img3.png">
                </p>
            </div>
        </div>

        <div class="row mt-5" style="z-index: 1">
            <div class="col-8 text-center" style="background: url('imgs/bgAssinantes.png') no-repeat center; z-index: 1000; filter: drop-shadow(0 0 10px #feff16);">
                <h5>PARA CLIENTES ASSIM</h5>
            </div>
        </div>
        <div class="row rounded mb-3" style="margin-top: -10px; border: 3px solid #f967ff; filter: drop-shadow(0 0 30px #f967ff);">
            <div class="col-2">

            </div>
            <div class="col-sm-8 col-md-8 text-center mt-3">
                <p class="text-white">
                    <span style="font-size: 30px; font-weight: bold;">CONSULTE A CENTRAL DE ATENDIMENTO<br/>
                    <span class="text-white" style="font-size: 20px; font-weight: lighter">CONFIRA A OFERTA ESPECIAL QUE PREPARAMOS PARA VOCÊ!</span><br>
                </p>
            </div>
        </div>
    </div>
    <?php
    if(@Sessions::getSession("iEmail")==$_POST["iEmail"]){
        $title = "Ops! Você já cadastrou esse email.";
        $msg = "Insira dados diferentes, esse email já foi cadastrado!.";
    }else{
        $erro = 0;
        $iCadastro = $_POST["iCadastro"];
        if (!$_POST["iNome"] or !$_POST["iEmail"] or !$_POST["iTelefone"]) {
            $title = "Ops! Algo saiu errado tente novamente.";
            $msg = "Tente novamente, não conseguimos gravar sua informações!.";
            $erro++;
        } else {
            $conn = ConnBD::Connectar();
            //$st = new Status();
            //$st->gravaStatus("ATIVO", $conn);

            $cl = new Clientes();
            $cl->gravaCliente($_POST["iNome"], $_POST["iTelefone"], $_POST["iEmail"], 1, $conn);
            if ($cl->getMensagem() == "Gravado com sucesso!") {
                $title = "Dados enviado com sucesso!";
                $msg = $cl->getMensagem();
            } else {
                $title = "Ops! Algo saiu errado tente novamente.";
                $msg = $cl->getMensagem();
                $erro++;
            }
            $conn = @ConnBD::Desconectar();
        }
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="modalConfirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?=$title?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?=$msg?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL -->

    <!-- Arquivos Javascript, jQuery e Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/funcoes.js"></script>
    <?php
    if($_SESSION["iEmail"]==$_POST["iEmail"]){
    ?>
    <script>
        $(document).ready(function(){
            /* Abre a Modal do Bootstrap*/
            $("#modalConfirma").modal('show');
        });
    </script>
    <?php
    }
    if($iCadastro==1){
    ?>
    <script>
        $(document).ready(function(){
            /* Abre a Modal do Bootstrap*/
            $("#modalConfirma").modal('show');
        });
    </script>
    <?php
        Sessions::addSession("iEmail", $_POST["iEmail"]);
    }
    ?>
    </body>
</html>