<?php
/*
##################################
  PHP CONTROLLER LA TRECE
##################################
*/
include('simple_html_dom.php');
include('model.php');

function fn_init() {
if (isset($_POST['data_name_attr'])) {
        $vDataNameAttr = preg_replace('/[^a-z]/', '',trim($_POST['data_name_attr']));
        switch ($vDataNameAttr) {
            case 'nacional':
                $vUrl = 'https://www.loteriasyapuestas.es/es/loteria-nacional';
                //$vUrl = 'http://localhost/loterias/Loteria-Nacional.htm';
                fn_SendNacional($vUrl);
                break;
            case 'primitiva':
                $vUrl = 'https://loteriasyapuestas.es/es/la-primitiva';
                //$vUrl = 'http://localhost/loterias/Loteriasyapuestas-primitiva.htm';
                fn_SendPrimi($vUrl);
                break;
            case 'bonoloto':
                $vUrl = 'https://www.loteriasyapuestas.es/es/bonoloto';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-bonoloto.html';
                fn_Send_Primi_Bono_LotoTurf($vUrl);
                break;
            case 'gordo':
                $vUrl = 'https://www.loteriasyapuestas.es/es/gordo-primitiva';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_el-gordo.html';
                fn_SendGordo($vUrl);
                break;
            case 'euromillones':
                $vUrl = 'https://www.loteriasyapuestas.es/es/euromillones';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-euromillones.html';
                fn_SendEuro($vUrl);
                break;
            case 'quiniela':
                $vUrl = 'https://www.loteriasyapuestas.es/es/la-quiniela';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-quiniela.html';
                fn_SendQuinis($vUrl);
                break;
            case 'quinigol':
                $vUrl = 'https://www.loteriasyapuestas.es/es/el-quinigol';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-quinigol.html';
                fn_SendQuinis($vUrl);
                break;
            case 'lototurf':
                $vUrl = 'https://www.loteriasyapuestas.es/es/lototurf';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-lototurf.html';
                fn_Send_Primi_Bono_LotoTurf($vUrl);
                break;
            case 'quintuple':
                $vUrl = 'https://www.loteriasyapuestas.es/es/quintuple-plus';
                //$vUrl = 'http://localhost/loterias/www.loteriasyapuestas.es_lot-quintuple-lototuf.html';
                fn_SendQuintu($vUrl);
                break;
            default:
                echo fn_ErrorReturn();
                break;
        }
    }
}
fn_init();
?>
