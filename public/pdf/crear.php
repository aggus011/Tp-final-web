        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=2';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 2"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    sfgsfg cvxb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    dfg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    752"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   752   Email:     fgbfs"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  yu   Contacto2:    mk"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   dfgb    Provincia:   fgb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   dfgh 752  Localidad: dfgn"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: xgfb  Provincia: xfbg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: dfgb 532 Localidad: ghn"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: dfgb  Provincia: fdgb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: xfgb 863 Localidad: dfgb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Liquida Peso: 984 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 85      Combustible estimado: 863"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-21T21:01 ETA: 2020-12-29T20:59"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 08        Peaje y pasaje estimado: 528"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 285"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 852      Costo reefer estimado: 852"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        