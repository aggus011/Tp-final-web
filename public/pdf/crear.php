        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=54';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    Juan Negro"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    el perrote"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    465465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   56456321   Email:     alguienmail"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  21332   Contacto2:    45"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   argentina    Provincia:   bs as"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   casa 123  Localidad: san justo"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: argentina  Provincia: caba"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: esperanza 666 Localidad: mataderos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: argentina  Provincia: la pampa"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: antiguedad 453 Localidad: pampa"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Liquida Peso: 45 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: 4"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: si  Temperatura: 54"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 32      Combustible estimado: 12"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-16T16:28 ETA: 2020-12-24T19:23"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 500        Peaje y pasaje estimado: 203"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 100"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 320      Costo reefer estimado: 500"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        