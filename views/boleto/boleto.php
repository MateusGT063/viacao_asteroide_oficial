
























<?php
    
//Aqui pega a data atual na qual o cliente faz a compra da passagem
//    echo date( 'd/m/Y');
//Aqui pega a tada atual novamente, e acrescenta 10 dias para o vencimento;
//    echo date ('d/m/Y', strtotime ('+10 days'));


//    echo($idViagem);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Boleto Viação Asteroide</title>
    <style media="screen">
      #seguraTable{
        min-height: 500px;
          height: auto;
        width: 100%;
        margin: auto;
        background-color: #696969;
      }
      .caixaTexto{
/*          height: 30px;*/
/*          width: 200px;*/
/*          font-size: 15px;*/
          font-family: 'Verdana';
          background-color: aliceblue;
          padding-left: 5px;
      }
        .textoComumItem{
/*            width: 200px;*/
            font-size: 18px;
            font-family: 'Verdana';
          background-color: aliceblue;
/*            background-color: red;*/
            padding-left: 15px; 
        }
        
        .caixaTexto1{
/*          height: 30px;*/
/*          width: 50px;*/
          background-color: aliceblue;
          font-size: 18px;
/*          background-color: aliceblue;*/
          padding-left: 5px;
        }
        .caixaTexto img {
            margin-top: 5px;
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 5px;
            width: 400px;
            height: 50px;
/*            background-color: forestgreen;*/
        }
        .caixaDivizinha{
            width: 90%;
/*            font-weight: bold;*/
            font-size: 18px;
            font-family: 'Verdana';
            background-color: aliceblue;
            margin-left: 18px;
            text-align: justify;
/*            background-color: forestgreen;*/
        }
        
        .caixaDivizinha1{
            width: 90%;
/*            font-weight: bold;*/
            font-size: 18px;
            font-family: 'Verdana';
            margin-left: 18px;
            text-align: center;
/*            background-color: forestgreen;*/
        }
        
        
        .testeAlinhamentoClass{
            background-color: aliceblue;
            height: 30px;
          font-size: 15px;
/*            border: solid 1px;*/
        }
        
        
        .caixaTextoFicha{
/*          height: 30px;*/
          width: 200px;
          font-size: 18px;
          font-family: 'Verdana';
          background-color: aliceblue;
          padding-left: 5px;
            text-align: center;
      }
        
        .imagem{
            height: 170px;
            width: 200px;
            background-color: aliceblue;
        }
        
        .imagem img{
            width: 98%;
            height: 90%;
            margin-left: 10px;
        }
    </style>
  </head>
  <body>
    <table id="seguraTable">
        <tr>
            <td class="caixaTexto">
                <img src="imagens/caixa-logo-4.png" >
            </td>
            <td class="caixaTexto" colspan="2">
                <div class="caixaDivizinha1">
                104-0
                </div>
            </td>
            <td class="caixaTexto" colspan="3">03392.28132  02460.204684  48200.033248  3  71620000006800</td>
        </tr>
        <tr>
            <td class="caixaTexto" colspan="5" >
                Local de Pagamento
                <br>
                <div class="caixaDivizinha">
                    Pagável em qualquer agência bancária até a data de vencimento
                </div>
            </td>
            <td class="caixaTexto" colspan="">Vencimento
                <div class="caixaDivizinha">
                    <?php
                        echo date ('d/m/Y', strtotime ('+10 days'));
                    ?>
                </div>
            </td>
<!--
            <td class="caixaTexto">aa</td>
            <td class="caixaTexto">aa</td>
            <td class="caixaTexto">aa</td>
            <td class="caixaTexto">aa</td>
-->
        </tr>
        <tr>
            <td class="caixaTexto" colspan="1">
                Cedente
                <div class="caixaDivizinha">Viação Asteroide</div>
                
            </td>
            <td class="caixaTexto" colspan="4">
                CPF/CNPJ
                <div class="caixaDivizinha">000.0451    </div>
            </td>
            <td class="caixaTexto" colspan="">
<!--                AGÊNCIA/ COD.CEDENTE-->
                Agência/ Cod.Cedente
                <div class="caixaDivizinha"> 0012/123456</div>
            </td>
        </tr>
        <tr>
            <td class="caixaTexto1">
<!--                DATA DOCUMENTO-->
                Data Documento
                
                <div class="caixaDivizinha"> 
                    <?php
                        echo date( 'd/m/Y');
                    ?>
                </div>
            </td>
            <td class="caixaTexto" colspan="">
<!--                NÚMERO DO DOCUMENTO-->
                Número Do Documento
                
                <div class="caixaDivizinha"> 0012</div>
            </td>
            <td class="caixaTexto">
<!--                ESPÉCIE DOC.-->
                Espécie Doc.
                
                <div class="caixaDivizinha"> DM</div>
            </td>
            <td class="caixaTexto">
<!--                ACEITE-->
                Aceite
                <div class="caixaDivizinha"> S</div>
            </td>
            <td class="caixaTexto">
<!--                DATA PROCESSAMENTO-->
                Data Processamento
                <div class="caixaDivizinha"> 
                    <?php
                        echo date( 'd/m/Y');
                    ?>
                </div>
            </td>
            <td class="caixaTexto">
<!--                NOSSO NUMERO-->
                Nosso Número
                <div class="caixaDivizinha"> 11/000000002-8</div>
            </td>
        </tr>
        <tr>
            <td class="caixaTexto1">
                Uso do Banco
            </td>
            <td class="caixaTexto" colspan="">
                Carteira
                
                <div class="caixaDivizinha"> 11</div>
            </td>
            <td class="caixaTexto">
                    Espécie Moeda
                
                <div class="caixaDivizinha"> R$</div>
            </td>
            <td class="caixaTexto">
                Quantidade
            </td>
            <td class="caixaTexto">
                Valor Documento
            </td>
            <td class="caixaTexto">
                (-) Valor Documento
                <div class="caixaDivizinha"> 300,00</div>
            </td>
        </tr>
        <tr>
            <td class="caixaTexto1" colspan="5" rowspan="">Instruções</td>
            <td class="caixaTexto" >(-) Descontos /  Abatimentos</td>
        </tr>
        <tr>
            <td class="textoComumItem" colspan="5" >
                MULTA DE R$:
                <div class="caixaDivizinha"> 0,00 APÓS: (alguns dias depois de clicar em gerar o boleto);</div>
            </td>
            <td class="caixaTexto" >(-) Outras Deduções </td>
        </tr>
        <tr>
            <td class="textoComumItem" colspan="5" >
                JUROS DE R$:
                <div class="caixaDivizinha"> 0,00 AO DIA</div>
            </td>
            <td class="caixaTexto" >(+) Mora / Multa</td>
        </tr>
        <tr>
            <td class="textoComumItem" colspan="5" >RECEBER ATÉ 5 DIAS APÓS VENCIDO</td>
            <td class="caixaTexto" >(+) Outros Acréscimos</td>
        </tr>
        <tr>
            <td class="textoComumItem" colspan="5" >PROTESTAR NO QUINTO DIA APÓS VENCIDO</td>
            <td class="caixaTexto" >(=) Valor Cobrado</td>
        </tr>
        <tr>
            <td class="caixaTexto" colspan="4" >
                PAGADOR:
                <div class="caixaDivizinha"> Nome Do Cliente</div>
            </td>
            <td class="caixaTextoFicha" colspan="2" >
                Ficha de Compensação
            </td>
        </tr>
        <tr>
            <td class="imagem" colspan="4" rowspan="2" >
                <img src="imagens/codigo-de-barras.jpg">
            </td>
            <td class="caixaTextoFicha" colspan="2" rowspan="2" >
                Autenticação Mecânica
            </td>
        </tr>
    </table>

  </body>
</html>

