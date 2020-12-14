        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=8';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 8"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    456 456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   465   Email:     465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  456   Contacto2:    465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   465    Provincia:   465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   465 456  Localidad: 465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: 654  Provincia: 654"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: 465 65 Localidad: 465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: 4654  Provincia: 465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: 64 654 Localidad: 65"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Granel Peso: 654 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 65      Combustible estimado: 4"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-14T09:54 ETA: 2021-01-08T06:06"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 456        Peaje y pasaje estimado: 465"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 6546"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 54      Costo reefer estimado: 65"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        