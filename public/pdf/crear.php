        
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
    $pdf->Cell(100, 10,utf8_decode("Cliente:    789 789"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    789"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    789"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   789   Email:     789"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  798   Contacto2:    798"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   798    Provincia:   798"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   789 987  Localidad: 798"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: 564  Provincia: 4"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: 456 465 Localidad: 456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: 123  Provincia: 123"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: 123 123 Localidad: 123"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Granel Peso: 052 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: si hazard   Clase: 5"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no reefer  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 50      Combustible estimado: 5321"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-25T10:00 ETA: 2021-01-07T14:00"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 20        Peaje y pasaje estimado: 202"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 0"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 2020      Costo reefer estimado: 2"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        