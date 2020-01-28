<!DOCTYPE html>
<html>
<head>
	<title>
		CARRIER VICIDIAL
	</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="js/jquery-3.3.1.min.js"></script>

<script src="js/jquery-3.4.1.js"></script>
<!--<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>-->
<script src="bootstrap-4.3.1/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/bootstrap-4.3.1-dist/css/bootstrap.min.css">

<script src="alertifyjs/alertify.min.js"></script>

<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.min.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.min.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/semantic.min.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.rtl.min.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.rtl.min.css">

<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/semantic.rtl.min.css">

<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/bootstrap.rtl.min.css">




</head>
<body>
	<script >
		function prefijoAutomaticol5() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto5.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_5").innerHTML =time2;
    }
	
 function prefijoManual5() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual5.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_5").innerHTML =time2;
    }

////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol6() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto6.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_6").innerHTML =time2;
    }
	
 function prefijoManual6() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual6.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_6").innerHTML =time2;
    }

///////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8").innerHTML =time2;
    }
	
 function prefijoManual8() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8").innerHTML =time2;
    }

////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8inv() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8inv.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8inv").innerHTML =time2;
    }
	
 function prefijoManual8inv() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8inv.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8inv").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8BIENV() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8BIENV.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8BIENV").innerHTML =time2;
    }
	
 function prefijoManual8BIENV() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8BIENV.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8BIENV").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8ET1() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8ET1.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8ET1").innerHTML =time2;
    }
	
 function prefijoManual8ET1() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8ET1.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8ET1").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8ET2() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8ET2.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8ET2").innerHTML =time2;
    }
	
 function prefijoManual8ET2() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8ET2.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8ET2").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8ET3() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8ET3.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8ET3").innerHTML =time2;
    }
	
 function prefijoManual8ET3() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8ET3.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8ET3").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////
function prefijoAutomaticol8ETR() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto8ETR.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_8ETR").innerHTML =time2;
    }
	
 function prefijoManual8ETR() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual8ETR.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_8ETR").innerHTML =time2;
    }
///////////////////////////////////////////////////////////////////////////////////////////////

function prefijoAutomaticol22ERGON() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto22ERGON.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_22ERGON").innerHTML =time2;
    }
	
 function prefijoManual22ERGON() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual22ERGON.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_22ERGON").innerHTML =time2;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////

function prefijoAutomaticol22COYOACAN() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto22COYOACAN.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_22COYOACAN").innerHTML =time2;
    }
	
 function prefijoManual22COYOACAN() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual22COYOACAN.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_22COYOACAN").innerHTML =time2;
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////

function prefijoAutomaticol27QUERETARO() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto27QUERETARO.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_27QUERETARO").innerHTML =time2;
    }
	
 function prefijoManual27QUERETARO() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual27QUERETARO.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_27QUERETARO").innerHTML =time2;
    }

function prefijoAutomaticol28() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto28.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_28").innerHTML =time2;
    }
	
 function prefijoManual28() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual28.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_28").innerHTML =time2;
    }

    function prefijoAutomatico29MIXC() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto29MIXC.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_29MIXC").innerHTML =time2;
    }
	
 function prefijoManual29MIXC() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual29MIXC.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_29MIXC").innerHTML =time2;
    }

      function prefijoAutomatico29DSOL() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto29DSOL.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_29DSOL").innerHTML =time2;
    }
	
 function prefijoManual29DSOL() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual29DSOL.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_29DSOL").innerHTML =time2;
    }
     function prefijoAutomatico29vene() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto29DSOL.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_29vene").innerHTML =time2;
    }
    
 function prefijoManual29vene() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual29vene.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_29vene").innerHTML =time2;
    }
     function prefijoAutomatico29AGUS() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto29AGUS.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_29AGUS").innerHTML =time2;
    }
    
 function prefijoManual29AGUS() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual29AGUS.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_29AGUS").innerHTML =time2;
    }
    function prefijoAutomatico35SEGUROS() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto35SEGUROS.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_35SEGUROS").innerHTML =time2;
    }
    
 function prefijoManual35SEGUROS() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual35SEGUROS.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_35SEGUROS").innerHTML =time2;
    }

 function prefijoAutomatico36MIXCOAC() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto36MIXCOAC.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_36MIXCOAC").innerHTML =time2;
    }
    
 function prefijoManual36MIXCOAC() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual36MIXCOAC.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_36MIXCOAC").innerHTML =time2;
    }


    function prefijoAutomatico37ESCOR() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto37ESCOR.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_37ESCOR").innerHTML =time2;
    }
    
 function prefijoManual37ESCOR() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual37ESCOR.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_37ESCOR").innerHTML =time2;
    }
 function prefijoAutomatico38NAUCALPAN() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto38NAUCALPAN.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_38NAUCALPAN").innerHTML =time2;
    }
    
 function prefijoManual38NAUCALPAN() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual38NAUCALPAN.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_38NAUCALPAN").innerHTML =time2;
    }
 function prefijoAutomatico39() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto39.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_39").innerHTML =time2;
    }
    
 function prefijoManual39() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual39.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_39").innerHTML =time2;
    }

function prefijoAutomatico41() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto41.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_41").innerHTML =time2;
    }
    
 function prefijoManual41() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual41.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_41").innerHTML =time2;
    }

    function prefijoAutomatico42() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto42.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_42").innerHTML =time2;
    }
    
 function prefijoManual42() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual42.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_42").innerHTML =time2;
    }
  function prefijoAutomatico43() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto43.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_43").innerHTML =time2;
    }
    
 function prefijoManual43() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual43.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_43").innerHTML =time2;
    }


function prefijoAutomatico44() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto44.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_44").innerHTML =time2;
    }
    
 function prefijoManual44() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual44.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_44").innerHTML =time2;
    }

    function prefijoAutomatico45() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto45.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_45").innerHTML =time2;
    }
    
 function prefijoManual45() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual45.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_45").innerHTML =time2;
    }

     function prefijoAutomatico46() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerAuto46.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("auto_46").innerHTML =time2;
    }
    
 function prefijoManual46() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

        var time2 = $.ajax({

            url: 'prefijosServerManual46.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("Manual_46").innerHTML =time2;
    }
$(document).ready(function(){


  setInterval(prefijoManual5,18000);
  setInterval(prefijoAutomaticol5,18000);
  
   setInterval(prefijoManual6,18000);
  setInterval(prefijoAutomaticol6,18000);
  
  setInterval(prefijoManual8,18000);
  setInterval(prefijoAutomaticol8,18000);
  
   setInterval(prefijoManual8inv,18000);
  setInterval(prefijoAutomaticol8inv,18000);
  
   setInterval(prefijoManual8BIENV,18000);
  setInterval(prefijoAutomaticol8BIENV,18000);
  
   setInterval(prefijoManual8ET1,18000);
  setInterval(prefijoAutomaticol8ET1,18000);
  
  setInterval(prefijoManual8ET2,18000);
  setInterval(prefijoAutomaticol8ET2,18000);
  
  setInterval(prefijoManual8ET3,18000);
  setInterval(prefijoAutomaticol8ET3,18000);
  
   setInterval(prefijoManual8ETR,18000);
  setInterval(prefijoAutomaticol8ETR,18000);
  
  setInterval(prefijoAutomaticol22ERGON,18000);
  setInterval(prefijoManual22ERGON,18000);
  
  setInterval(prefijoAutomaticol22COYOACAN,18000);
  setInterval(prefijoManual22COYOACAN,18000);
  
   setInterval(prefijoAutomaticol27QUERETARO,18000);
  setInterval(prefijoManual27QUERETARO,18000);
  
   setInterval(prefijoAutomaticol28,18000);
  setInterval(prefijoManual28,18000);

   setInterval(prefijoAutomatico29MIXC,18000);
  setInterval(prefijoManual29MIXC,18000);

 setInterval(prefijoAutomatico29DSOL,18000);
  setInterval(prefijoManual29DSOL,18000);

   setInterval(prefijoAutomatico29vene,18000);
  setInterval(prefijoManual29vene,18000);

   setInterval(prefijoAutomatico29AGUS,18000);
  setInterval(prefijoManual29AGUS,18000);

  setInterval(prefijoAutomatico35SEGUROS,18000);
  setInterval(prefijoManual35SEGUROS,18000);
 
   setInterval(prefijoAutomatico36MIXCOAC,18000);
  setInterval(prefijoManual36MIXCOAC,18000);

   //setInterval(prefijoAutomatico37ESCOR,18000);
  //setInterval(prefijoManual37ESCOR,18000);

   setInterval(prefijoAutomatico38NAUCALPAN,18000);
  setInterval(prefijoManual38NAUCALPAN,18000);
 
  setInterval(prefijoAutomatico39,18000);
  setInterval(prefijoManual39,18000);

  setInterval(prefijoAutomatico41,18000);
  setInterval(prefijoManual41,18000);
 
 setInterval(prefijoAutomatico42,18000);
  setInterval(prefijoManual42,18000);


   setInterval(prefijoAutomatico43,18000);
  setInterval(prefijoManual43,18000);


   setInterval(prefijoAutomatico44,18000);
  setInterval(prefijoManual44,18000);

   setInterval(prefijoAutomatico45,18000);
  setInterval(prefijoManual45,18000);
 
  setInterval(prefijoAutomatico46,18000);
  setInterval(prefijoManual46,18000);
 
 
 
});

</script>


  <center><h2>PREFIJOS VICIDIAL HSBC</h2></center>
   <!--<div class="panel panel-default">
    <div class="panel-heading">Prefijos de Carrier Configurados:</div>
    <button type="button" class="btn btn-success">MCM </button>
     <button type="button" class="btn btn-info">Marcatel</button>
      <button type="button" class="btn btn-warning">DIRECTO </button>
   
 
   <div class="panel-body">CARRIER MARCATEL:</div>
       <button type="button" class="btn btn-info">Marcatel Local 7</button>
       <button type="button" class="btn btn-info">Marcatel Raptor 777</button>
    <div class="panel-footer">CARRIER DIRECTO:</div>
     <button type="button" class="btn btn-warning">DIRECTO 222 </button>
     <button type="button" class="btn btn-warning">DIRECTO 210 </button>
       <button type="button" class="btn btn-warning">DIRECTO 888</button>-->

<table class="table table-dark">
	<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><button type="button" class="btn btn-dark btn-lg active" style="width: 180px;  font-size:30px;">
  Carrier : <span class="badge badge-light"><button type="button" class="btn btn-success" style="width: 120px; height: 60px; font-size:25px;">MCM</button></span>
</button>
<button type="button" class="btn btn-dark btn-lg active" style="width: 180px;  font-size:30px;">
  Carrier : <span class="badge badge-light"><button type="button" class="btn btn-warning" style="width: 120px; height: 60px; font-size:25px;">DIRECTO</button></span>
</button></th>
      <th scope="col"><button type="button" class="btn btn-dark btn-lg active" style="width: 180px;  font-size:30px;">
  Carrier : <span class="badge badge-light"><button type="button" class="btn btn-info" style="width: 150px; height: 60px; font-size:25px;">MARCATEL</button></span>
</button><button type="button" class="btn btn-dark btn-lg active" style="width: 180px;  font-size:30px;">
  Carrier : <span class="badge badge-light"><button type="button" class="btn btn-danger" style="width: 150px; height: 60px; font-size:25px;">209 LOCAL</button></span>
</button></th>
      <th scope="col">Tabla2</th>
      
      
    </tr>
  </thead>
   <tbody>
   	 <tr>
   	 	 <th scope="row">1</th>
   	 	 <td>

    <!--tabla1-->
    <div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"style="width: 100px;">#</th>
      <th scope="col"style="width: 100px;">Servidor</th>
      <th scope="col"style="width: 100px;">Campaña</th>
      <th scope="col"style="width: 100px;">Grupo</th>
      <th scope="col"style="width: 100px;">Prefijo Manual</th>
      <th scope="col"style="width: 100px;">Prefijo Predictivo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><button type="button"  class="btn btn-primary btn-lg active" style="width: 120px;  font-size:30px;">10.9.2.5</button></td>
      <td>ESCORZA HSBC</td>
      <td>ESCORZA</td>
       <td id=Manual_5><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
        <td id=auto_5><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
       <th scope="row">2</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.6</button></td>
      <td>LAZARO HSBC</td>
      <td>VALIDACION</td>
       <td id=Manual_6><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
        <td id=auto_6><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION</td>
       <td id=Manual_8><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
        <td id=auto_8><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
        </tr>  
    <tr>
      <th scope="row">4</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION INVEX</td>
       <td id=Manual_8inv><button  type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_8inv ><button  type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION BIENVENIDA </td>
       <td id=Manual_8BIENV><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_8BIENV ><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION ETAPA 1</td>
       <td id=Manual_8ET1><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_8ET1><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION ETAPA 2</td>
       <td id=Manual_8ET2><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_8ET2><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
    <tr>
    <th scope="row">8</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION ETAPA 3</td>
       <td  id=Manual_8ET3><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_8ET3><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
    <tr>
    <th scope="row">9</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 130px;  font-size:30px;">10.9.2.8</button></td>
      <td>LAZARO HSBC</td>
      <td>FORMALIZACION ETAPA RECUPERACION</td>
       <td  id=Manual_8ETR><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_8ETR><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
    <tr>
    <th scope="row">10</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.22</button></td>
      <td>SOT-ERGON HSBC</td>
      <td>ERGON </td>
       <td id=Manual_22ERGON><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_22ERGON><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
 <th scope="row">11</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.22</button></td>
      <td>STO-COYOACAN HSBC</td>
      <td>COYOACAN</td>
       <td id=Manual_22COYOACAN><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_22COYOACAN><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
     <tr>
 <th scope="row">12</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.27</button></td>
      <td>QUERETARO HSBC</td>
      <td>QUERETARO</td>
       <td id=Manual_27QUERETARO><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_27QUERETARO><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
      <tr>
 <th scope="row">13</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.28</button></td>
      <td>STO-MARIANO-HSBC</td>
      <td>MARIANO</td>
       <td id=Manual_28><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
      <td id=auto_28><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
  </tbody>
</table>
</div>
    <!--tabla1-->
     </td>
      <td>

    <!--tabla1-->
    <div>
    <table class="table table-dark">
  <thead>
    <tr>
     <th scope="col"style="width: 100px;">#</th>
      <th scope="col"style="width: 100px;">Servidor</th>
      <th scope="col"style="width: 100px;">Campaña</th>
      <th scope="col"style="width: 100px;">Grupo</th>
      <th scope="col"style="width: 100px;">Prefijo Manual</th>
      <th scope="col"style="width: 100px;">Prefijo Predictivo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">14</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.29</button></td>
      <td>MIXCOAC HSBC</td>
      <td>MIXCOAC</td>
       <td id=Manual_29MIXC ><button type="button" class="btn btn-light" style="width: 120px;height: 60px; ">0</button></td>
        <td id=auto_29MIXC><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.29</button></td>
      <td>STO CIUDAD DEL SOL</td>
      <td>CD DEL SOL</td>
       <td id=Manual_29DSOL><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
        <td id=auto_29DSOL><button type="button" class="btn btn-light" style="width: 120px;height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.29</button></td>
      <td>STO HSBC THECC</td>
      <td>VENEZUELA</td>
       <td id=Manual_29vene><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_29vene><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.29</button></td>
      <td>HSBC SAN AGUSTIN</td>
      <td>SAN AGUSTIN</td>
       <td id=Manual_29AGUS><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_29AGUS><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.35</button></td>
      <td>SEGUROS HSBC</td>
      <td>ESCORZA</td>
       <td id=Manual_35SEGUROS><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_35SEGUROS><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.36</button></td>
      <td>MIXCOAC HSBC</td>
      <td>MIXCOAC</td>
       <td id=Manual_36MIXCOAC><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_36MIXCOAC><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
     <tr>
      <th scope="row">17</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.37</button></td>
      <td>ESCORZA HSBC</td>
      <td>ESCORZA</td>
       <td id=Manual_37ESCOR><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_37ESCOR><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <th scope="row">18</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.38</button></td>
      <td>OPERACION-HSBC</td>
      <td>TLAJOMULCO</td>
       <td id=Manual_38NAUCALPAN ><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_38NAUCALPAN><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    </tr>
    <th scope="row">19</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.39</button></td>
      <td>STO SAN JUAN DEL RIO</td>
      <td>SAN JUAN</td>
       <td id=Manual_39><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_39><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    </tr>
    <th scope="row">20</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.41</button></td>
      <td>PACHUCA STO HSBC</td>
      <td>PACHUCA</td>
       <td id=Manual_41><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td id=auto_41 ><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
     </tr>
    <th scope="row">20</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.42</button></td>
      <td>STO REVOLUCION</td>
      <td>REVOLUCION</td>
       <td id=Manual_42><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td  id=auto_42><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
     </tr>
    <th scope="row">20</th>
      <td><button type="button"class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.43</button></td>
      <td>OPERACION-HSBC</td>
      <td>TLAJOMULCO</td>
       <td  id=Manual_43><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td  id=auto_43><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
     </tr>
    <th scope="row">20</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.44</button></td>
      <td>STO HSBC SAN JOSE </td>
      <td> SAN JOSE</td>
       <td  id=Manual_44><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
      <td  id=auto_44><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
  </tbody>
</table>
</div>
    <!--tabla1-->
     </td>
      <td>

<!--tabla1-->
    <div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"style="width: 100px;">#</th>
      <th scope="col"style="width: 100px;">Servidor</th>
      <th scope="col"style="width: 100px;">Campaña</th>
      <th scope="col"style="width: 100px;">Grupo</th>
      <th scope="col"style="width: 100px;">Prefijo Manual</th>
      <th scope="col"style="width: 100px;">Prefijo Predictivo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">21</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.45</button></td>
      <td>STO OPERACION GENERAL</td>
      <td>MARIANO</td>
       <td   id=Manual_45 ><button type="button" class="btn btn-light" style="width: 120px;  height: 60px;">0</button></td>
        <td id=auto_45><button type="button" class="btn btn-light" style="width: 120px; height: 60px;">0</button></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td><button type="button" class="btn btn-primary btn-lg active" style="width: 133px;  font-size:30px;">10.9.2.46</button></td>
      <td>STO LEON-2 HSBC</td>
      <td>LEON-2</td>
       <td  id=Manual_46 ><button type="button" class="btn btn-light" style="width: 120px ;  height: 60px;">0</button></td>
        <td id=auto_46><button type="button" class="btn btn-light" style="width: 120px ;  height: 60px;">0</button></td>
    </tr>
    <!--<tr>
      <th scope="row">13</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.41</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.42</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.43</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.44</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
     <tr>
      <th scope="row">17</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.45</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    <th scope="row">18</th>
      <td><button type="button" class="btn btn-secondary"style="width: 120px; height: 60px; font-size:25px;">10.9.2.46</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    </tr>
    <th scope="row">19</th>
      <td><button type="button" class="btn btn-info"style="width: 120px; height: 60px; font-size:25px;">10.9.2.11</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>
    </tr>
    <th scope="row">20</th>
      <td><button type="button" class="btn btn-info"style="width: 120px; height: 60px; font-size:25px;">10.9.2.201</button></td>
      <td>MARIANO HSBC</td>
      <td>MARIANO</td>
       <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
      <td><button type="button" class="btn btn-light" style="width: 120px">0</button></td>
    </tr>-->

  </tbody>
</table>
</div>
    <!--tabla1-->




      	 </td>
     <tr>
     </tbody>
    </table>
  </div>
</div>
</body>
</html>