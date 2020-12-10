        
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
    $pdf->Cell(100, 10,utf8_decode("Cliente:    asdada 231132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   21   Email:     132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  132   Contacto2:    132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   321    Provincia:   1"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   13 21  Localidad: 3213"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: 132  Provincia: 32"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: 1 321 Localidad: 132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: 21  Provincia: 13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: 1 32 Localidad: 132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Liquida Peso: 12 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 123      Combustible estimado: 13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-03-21T20:20 ETA: 2020-05-24T03:25"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 231        Peaje y pasaje estimado: 321"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 12"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 12      Costo reefer estimado: 12"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        