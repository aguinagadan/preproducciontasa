<?php


function menubar_showhide(){
	//VERIFICAMOS LA UBICACION PARA VER SI MOSTRAMOS U OCULTAMOS EL MENUBAR
	$cursovista=strpos($_SERVER['REQUEST_URI'],"/course/view.php?id",0);

	$cursoquiz=strpos($_SERVER['REQUEST_URI'],"/mod/quiz/",0);
	$cursocertificado=strpos($_SERVER['REQUEST_URI'],"/mod/customcert/view.php?id",0);
	$cursopage=strpos($_SERVER['REQUEST_URI'],"/mod/page/view.php?id",0);
	$cursohvp=strpos($_SERVER['REQUEST_URI'],"/mod/hvp/view.php?id",0);


	$cursoparticipantes=strpos($_SERVER['REQUEST_URI'],"/user/index.php?id",0);
	$cursocompetencias=strpos($_SERVER['REQUEST_URI'],"/lp/coursecompetencies.php?courseid",0);
	$cursocalificaciones=strpos($_SERVER['REQUEST_URI'],"/grade/",0);

	$insignias=strpos($_SERVER['REQUEST_URI'],"badges/view.php?",0);
	$archivos=strpos($_SERVER['REQUEST_URI'],"user/files.php",0);
	$calendario=strpos($_SERVER['REQUEST_URI'],"calendar/view.php?",0);
	$mensaje=strpos($_SERVER['REQUEST_URI'],"message/index.php",0);
	$notas=strpos($_SERVER['REQUEST_URI'],"/grade/report/grader/index.php?",0);
	$reporte=strpos($_SERVER['REQUEST_URI'],"/report/outline/index.php?",0);


	$adminpage=strpos($_SERVER['REQUEST_URI'],"/admin/");
	if($cursovista !== false or $cursoquiz !== false or $cursocertificado !== false or $cursopage !== false or $cursohvp !== false or $cursoparticipantes !== false or $cursocompetencias !== false or $cursocalificaciones !== false or $adminpage !== false or $insignias !== false or $archivos !== false or $calendario !== false or $mensaje !== false or $notas !== false or $reporte !== false){
	//if($cursovista !== false){
		echo'<link href="'.URL_TEMPLATE.'/style/mostrarmenubar.css" rel="stylesheet" type="text/css">';
	}else{
		echo'<link href="'.URL_TEMPLATE.'/style/ocultarmenubar.css" rel="stylesheet" type="text/css">';
	}
	//APROVECHO PARA IMPORTAR MI HOJA DE ESTILOS PERSONALIZADA
	echo'<link href="'.URL_TEMPLATE.'/style/misestilos.css" rel="stylesheet" type="text/css">';
}
?>