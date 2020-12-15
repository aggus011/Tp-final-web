        
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
    $pdf->Cell(100, 10,utf8_decode("Cliente:    Juan Perez"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    los perez osos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    312265"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   1321   Email:     algo@gmail"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  465   Contacto2:    456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   argentina    Provincia:   buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   rivadavia 456  Localidad: san justo"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: argentina  Provincia: buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: rivadavia 3350 Localidad: caba"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: argentina  Provincia: buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: eva peron 3060 Localidad: caba"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Container 20´ Peso: 200 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no hazard   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: si reefer  Temperatura: -20"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 20      Combustible estimado: 10"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-18T17:21 ETA: 2021-01-02T17:21"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 10        Peaje y pasaje estimado: 10"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 0"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 0      Costo reefer estimado: 10"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        