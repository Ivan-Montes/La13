<?php
/*
##################################
  PHP MODEL LA TRECE
##################################
*/
function fn_ErrorReturn () {
    $aResults = array();
    $aResults [] = "0"; // Lugar para un Codigo de control, un 0 error, un 1 datos (Proximo desarrollo)
    $aResults [] = "######################";    
    $aResults [] = "Error en la recopilacion de datos";
    $aResults [] = "######################";
    $aResults [] = "Disculpen las molestias";
    $aResults [] = "######################";
    $aResults [] = "Estos no son los droides que estas buscando";
    $aResults [] = "######################";
    $aResults [] = "Codigo de error: -- Funcionalidad en progreso de implementacion --"; // Si esta función se llamara en varios puntos podría identificarlos con una variable que pasaría
    $aResults [] = "######################";
    echo json_encode($aResults);
}
//Funcion en desarrollo
function fn_ExceptionErrorReturn ($pEx) {
    $aResults = array();
    $aResults [] = "EXCEPCION en la recopilacion de datos";
    $aResults [] = "######################";
    $aResults [] = "Codigo de error: "; // Si esta función se llamara en varios puntos podría identificarlos con una variable que pasaría
    //$aResults [] = $pEx->innertext;
    //$aResults [] = $pEx;
    $aResults [] = "######################";
    echo json_encode($aResults);
}
function fn_FreeHtmlCopy($pDOM) {
    $pDOM->clear();
    unset($pDOM);
}
function fn_TitleGeneralScraping($pDom, & $pArray) {
    foreach($pDom->find('#lastResultsTitleLink') as $raffle)
    $pArray [] = $raffle->innertext;
}
function fn_ResultGeneralScam($pDom, & $pArray) {
    foreach($pDom->find('#contenedor_ajax .cuerpoRegionIzq li') as $raffle)
    $pArray [] = $raffle->innertext;
}
//Prueba de creacion de objeto y peticion de la url, revisar fallo
function fn_CreateObjectHtml($pUrl) {
    $oHtml = new simple_html_dom();
    $oHtml->load_file($pUrl);
    echo $oHtml->save();
}
function fn_SendNacional($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
          $aResults = array();
            foreach($html->find('#contenedor_ajax .cabeceraRegion .tituloRegion h2 span') as $raffle)
            $aResults [] = $raffle->innertext;
            $aResults [] = $html->find('#contenedor_ajax',0)->find('.cuerpoRegionSupIzq',0)->find('.numeroLoteria',0)->innertext;
            echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_SendPrimi($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
            $aResults = array();
            fn_TitleGeneralScraping($html, $aResults);
            fn_ResultGeneralScam($html, $aResults);
            foreach($html->find('#contenedor_ajax .bolaPeq') as $reinteger)
            $aResults [] = $reinteger->innertext;
            foreach($html->find('#contenedor_ajax .cuerpoRegion .joker .numero') as $element)
            $aResults [] = $element->innertext;
            echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_Send_Primi_Bono_LotoTurf($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
            $aResults = array();
            fn_TitleGeneralScraping($html, $aResults);
            fn_ResultGeneralScam($html, $aResults);
            foreach($html->find('#contenedor_ajax .bolaPeq') as $reinteger)
            $aResults [] = $reinteger->innertext;
            echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_SendGordo($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
            $aResults = array();
            fn_TitleGeneralScraping($html, $aResults);
            fn_ResultGeneralScam($html, $aResults);
            foreach($html->find('#contenedor_ajax .bolaPeq') as $reinteger)
            $aResults [] = $reinteger->innertext;
            echo json_encode($aResults);
            }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_SendEuro($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
          $aResults = array();
        fn_TitleGeneralScraping($html, $aResults);
        fn_ResultGeneralScam($html, $aResults);
        foreach($html->find('#contenedor_ajax .cuerpoRegionDerecha li') as $element)
        $aResults [] = $element->innertext;
        foreach($html->find('#contenedor_ajax .cuerpoRegionInf .codigoPremiado .codigo') as $element)
        $aResults [] = $element->innertext;
        echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_SendQuinis($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
          $aResults = array();
        fn_TitleGeneralScraping($html, $aResults);
        foreach($html->find('#contenedor_ajax .contedorResultados .cuerpoRegionLeft ul.puntosSusp li') as $element)
        $aResults [] = $element->innertext;
        foreach($html->find('#contenedor_ajax .contedorResultados .cuerpoRegionRight ul.fondoGrisClaro li') as $element)
        $aResults [] = $element->innertext;
        echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
function fn_SendQuintu($pUrl) {
    try {
        $html = file_get_html($pUrl);//Excepcion no controlada si la url no está correcta
        if ($html === false) {//Da false si está vacio
            echo fn_ErrorReturn();
        } else {
          $aResults = array();
        fn_TitleGeneralScraping($html, $aResults);
        foreach($html->find('#contenedor_ajax .contedorResultados .cuerpoRegionLeft li') as $element)
        $aResults [] = $element->innertext;
        foreach($html->find('#contenedor_ajax .contedorResultados .cuerpoRegionRight li') as $element)
        $aResults [] = $element->innertext;
        echo json_encode($aResults);
        }
    }
    catch (Exception $e) {
        echo fn_ExceptionErrorReturn($e);
    }
    fn_FreeHtmlCopy($html);
}
?>