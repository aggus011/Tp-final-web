        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=6';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 6"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    juan perez"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    perezosos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    2311654"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   31236546   Email:     joasd"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  132654   Contacto2:    32"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   32132    Provincia:   2132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   alksdla 132  Localidad: 1"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: 21  Provincia: 13"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: 132 3 Localidad: 2"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: 213  Provincia: 3213"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: 32 132 Localidad: 1"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Granel Peso: 132 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: si   Clase: 2"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 132      Combustible estimado: 1"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2001-12-31T03:13 ETA: 2020-02-20T05:23"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 12        Peaje y pasaje estimado: 12"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 12"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 12      Costo reefer estimado: 12"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        