        
   <?php
require("fpdf.php");
     $pdf = new FPDF();
    $pdf->AddPage();
        
    $pdf->Image("../img/logoColor.png",175,5,30);
    $pdf->SetFont("Arial", "b", 16);
    $pdf->Cell(80);
    $pdf->Cell(70,10,utf8_decode("PROFORMA"),0,1,"c");
    $pdf->SetFont("Arial", "b", 14);
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Cliente:    Jose Machicado"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    MACHICADIN"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    456456"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   44543216   Email:     alguien@gmail"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  4343456   Contacto2:    456algo"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   argentina    Provincia:   buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   peron 4561  Localidad: san justo"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: argentina  Provincia: buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: crovara 245 Localidad: tablada"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: argentina  Provincia: buenos aires"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: rivadavia 456 Localidad: caba"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Container 20´ Peso: 456 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: no   Clase: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: si  Temperatura: -10"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 25      Combustible estimado: 10"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 2 ETA: 3"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 456        Peaje y pasaje estimado: 120"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 50"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 0      Costo reefer estimado: 4320"),0,1,"b",0);
    $pdf->Output();      
        