        
   <?php
require("fpdf.php");
require("../phpqrcode/qrlib.php");
    
    $dir ="temp/"; 
     if (!file_exists($dir))
       mkdir($dir);
       
    $filename = $dir.'test.png';
    $level='m';
    $contenido='localhost/ActualizarProforma/choferConProforma?idViaje=3';
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA N° 3"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    pablo  marmol"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    los lescanos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    4654632321"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   6465132132   Email:     alguienahre@mail.com"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  132321564654   Contacto2:    4512132"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   argentina    Provincia:   buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   alads  123  Localidad: san justo"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: argentina  Provincia: san luis"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: juan 12365 Localidad: san pedrito"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: francia  Provincia: paris"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: aswqe 6523 Localidad: san pete"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: CarCarrier Peso: 40000 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: si   Clase: 6"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 250000      Combustible estimado: 120000"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2020-12-07T04:58 ETA: 2020-12-16T23:03"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 5000        Peaje y pasaje estimado: 1200"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 100"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 53000      Costo reefer estimado: 0"),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();      
        