        
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
    $pdf->Cell(100, 10,utf8_decode("Cliente:    afg sdfg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Denominacion:    sdfg"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Cuit:    872"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Telefono:   563   Email:     dfadaf"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Contacto1:  adfs   Contacto2:    asdf"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais:   sbf    Provincia:   fgb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Direccion:   asd 638  Localidad: asdf"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Pais de origen: sdvf  Provincia: dv"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Origen: sb 563 Localidad: bgf"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Pais de Destino: sdfb  Provincia: sdfb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Direccion Destino: asd 752 Localidad: sfb"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Tipo: Container 20´ Peso: 2 kilos"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Hazar: si   Clase: 2"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Reefer: no  Temperatura: "),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Kilometros estimados: 452      Combustible estimado: 752"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("ETD: 752 ETA: 257"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Viatico estimado: 752        Peaje y pasaje estimado: 752"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Gastos extras estimados: 75"),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Costo hazar estimado: 275      Costo reefer estimado: 754"),0,1,"b",0);
    $pdf->Output();      
        