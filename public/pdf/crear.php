        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=1';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 1"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    fgd gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    5435"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   543543   Email:     fgdg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  gfd   Contacto2:    gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   gfd    Provincia:   gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   gfd 435  Localidad: fgd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: dgf  Provincia: gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: gfd 543 Localidad: gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: gdf  Provincia: gfd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: gdf 43 Localidad: dfg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Container 20´ Peso: 45 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 543      Combustible estimado: 543"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-18T21:36 ETA: 2020-12-30T18:37"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 543        Peaje y pasaje estimado: 543"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 534"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 543      Costo reefer estimado: 543"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        