<?php
use App\Models\Teacher;
use App\Models\Schedule;

$imagen = $person->getThumbs200ForCollection('gallery');
$valorImagen = $imagen[0];
$url = $valorImagen['url']; 
$str = ucfirst(mb_substr($url, 22, null, 'UTF-8'));
$profesor  = Teacher::where('id',$person->teacher_id)->get();
$horario = Schedule::where('id',$person->schedule_id)->get();
// dd($horario[0]);

// dd($str);
use Codedge\Fpdf\Fpdf\Fpdf;
$fpdf = new Fpdf;
$fpdf->AddPage();
$fpdf->Rect(8,8,160,80);

$fpdf->SetFont('Arial', 'B', 16);
    $fpdf->SetY(10);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'-Tarjeta de acceso-',0,1,'L');


    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(22);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Nombre:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(22);
	$fpdf->SetX(77);
    $fpdf->Cell(0,5, $person->nombre,0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(30);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Nombre del tutor:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(30);
	$fpdf->SetX(93);
    $fpdf->Cell(0,5, $person->tutor,0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(40);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Edad :',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(40);
	$fpdf->SetX(72);
    $fpdf->Cell(0,5, $person->edad,0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(50);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Telefono:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(50);
	$fpdf->SetX(78);
    $fpdf->Cell(0,5, $person->telefono,0,1,'L');


    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(60);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Profesor:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(60);
	$fpdf->SetX(78);
    $fpdf->Cell(0,5, $profesor[0]->nombre,0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(70);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Horario:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(70);
	$fpdf->SetX(77);
    $fpdf->Cell(0,5,$horario[0]->Hora_inicio,0,1,'L');

    
    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(70);
	$fpdf->SetX(60);
    $fpdf->Cell(0,5,'Horario:',0,1,'L');

    $fpdf->SetFont('Arial', 'B', 11);
    $fpdf->SetY(70);
	$fpdf->SetX(77);
    $fpdf->Cell(0,5,$horario[0]->Hora_inicio,0,1,'L');

    $fpdf->Image($str,13,22,40,50);
 
    $fpdf->Output();
    exit;
?>