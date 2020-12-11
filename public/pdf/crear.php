        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=10';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 10"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    321 32"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   13   Email:     132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  132   Contacto2:    13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   321    Provincia:   131"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   132 1321  Localidad: 32"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: 1  Provincia: 132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: 2313 21 Localidad: 3"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: 321  Provincia: 21"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: 321 32 Localidad: 13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Granel Peso: 132 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no hazard   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no reefer  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 3      Combustible estimado: 321"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-18T22:49 ETA: 2021-01-08T22:49"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 132        Peaje y pasaje estimado: 132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 121"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 3      Costo reefer estimado: 31321"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        