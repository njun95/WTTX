<?php

  if(isset($_GET['rapdf'])){
     
         session_start();
 include 'fpdf.php';
 include 'exfpdf.php';
 include 'easyTable.php';


 $pdf=new exFPDF();
 $pdf->AddPage(); 
 $pdf->SetFont('helvetica','',10);


 $table1=new easyTable($pdf, 2);
 $table1->easyCell('WTTX PLANING', 'font-size:30; font-style:B; font-color:#00bfff;');
 $table1->printRow();

  $rapdf = $_GET['rapdf'];   
         if($rapdf == "couv" or $rapdf == "capa" or $rapdf == "capex"){ 
          

 $table1->rowStyle('font-size:15; font-style:B;');
 $table1->easyCell('1.Coverage PLANING');
 $table1->printRow();
 

 $table1->endTable(5);

//====================================================================
 $table=new easyTable($pdf, '{80, 50, 50}','align:C{LCCR};border:1; border-color:#a1a1a1; ');

 $table->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table->easyCell('General Parameters');
 $table->easyCell('DOWNLINK');
 $table->easyCell('UPLINK');
 $table->printRow();

 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Zone of interest');
    $table->easyCell($_SESSION['zonename'],'colspan:2');
    $table->printRow();
 
 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Target Surface area(km2)');
    $table->easyCell($_SESSION["zonesurfacearea"]);
    $table->easyCell($_SESSION["zonesurfacearea"]);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Morphology');
    $table->easyCell($_SESSION["inputmorphology"]);
    $table->easyCell($_SESSION["inputmorphology"]);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Duplex Mode');
    $table->easyCell($_SESSION["inputDuplexMode"]);
    $table->easyCell($_SESSION["inputDuplexMode"]);
    $table->printRow();
 
 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Channel Bandwidth(MHz)');
    $table->easyCell($_SESSION["Bandwidth"]);
    $table->easyCell($_SESSION["Bandwidth"]);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Carrier Frequency(MHz)');
    $table->easyCell($_SESSION["frequency"]);
    $table->easyCell($_SESSION["frequency"]);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Modulation Mode');
    $table->easyCell( $_SESSION["downlinkModulationMode"]);
    $table->easyCell($_SESSION["uplinkModulationMode"]);
    $table->printRow();

    $table->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table->easyCell('Transmitter');
 $table->easyCell('TX=eNodeB');
 $table->easyCell('TX=CPE');
 $table->printRow();

 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Maximum total TX Power(dBm)');
    $table->easyCell($_SESSION['eNodeBTpower']);
    $table->easyCell($_SESSION['CPETpower']);
    $table->printRow();

 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Resource to distributepower');
    $table->easyCell($_SESSION['eNodeBRB']);
    $table->easyCell($_SESSION['CPERB']);
    $table->printRow();

 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Subcarirer to distribute Power(dBm)');
    $table->easyCell($_SESSION['eNodeBsubcarrier']);
    $table->easyCell( $_SESSION['CPEsubcarrier']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('TX Antenna Gain(dBi)');
    $table->easyCell($_SESSION['eNodeBgain']);
    $table->easyCell( $_SESSION['CPEgain']);
    $table->printRow();

   $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('TX Cable Loss(dB)');
    $table->easyCell($_SESSION['eNodeBbodyloss']);
    $table->easyCell( $_SESSION['CPEbodyloss']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('EIRP per subscriber (dBm)');
    $table->easyCell($_SESSION['EIRP_dl']);
    $table->easyCell($_SESSION['EIRP_up']);
    $table->printRow();

    $table->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table->easyCell('Receiver');
 $table->easyCell('RX=CPE');
 $table->easyCell('RX=eNodeB');
 $table->printRow();


$table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('RX Antenna Gain(dBi)');
    $table->easyCell($_SESSION['CPEgain']);
    $table->easyCell($_SESSION['eNodeBgain']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Noise Figure');
    $table->easyCell($_SESSION['thermalNoise_dl']);
    $table->easyCell($_SESSION['thermalNoise_up']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('SNIR(dB)');
    $table->easyCell($_SESSION['snir_dl']);
    $table->easyCell($_SESSION['snir_up']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('RX Body Loss(dB)');
    $table->easyCell($_SESSION['CPEbodyloss']);
    $table->easyCell($_SESSION['eNodeBbodyloss']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('RX Cable Loss(dB)');
    $table->easyCell($_SESSION['CPEcableloss']);
    $table->easyCell($_SESSION['eNodeBcableloss']);
    $table->printRow();


     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Interferance Margin (dB)');
    $table->easyCell($_SESSION['downlinkIM']);
    $table->easyCell( $_SESSION['uplinkIM']);
    $table->printRow();

      $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Minimum Signal Reception Strength(dBm)');
    $table->easyCell($_SESSION['MSRS_dl']);
    $table->easyCell( $_SESSION['MSRS_up']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Shadow Fading Margin (dB)');
    $table->easyCell($_SESSION['downlinkSFM']);
    $table->easyCell($_SESSION['uplinkSFM']);
    $table->printRow();

      $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Shadow Fading Margin (dB)');
    $table->easyCell($_SESSION['downlinkSFM']);
    $table->easyCell($_SESSION['uplinkSFM']);
    $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Penetration loss (dB)');
    $table->easyCell($_SESSION['penetrationloss']);
    $table->easyCell($_SESSION['penetrationloss']);
    $table->printRow();

$table->rowStyle('align:{CCC};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table->easyCell('OTHER PARAMETERS');
 $table->easyCell('DOWNLINK');
 $table->easyCell('UPLINK');
 $table->printRow();

 $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('propagation Model');
    $table->easyCell($_SESSION["propagationModel"]);
    $table->easyCell($_SESSION["propagationModel"]);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Type of Site');
    $table->easyCell($_SESSION["typesite"]);
    $table->easyCell($_SESSION["typesite"]);
    $table->printRow();

      $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('eNodeB Antenna Height(m)');
    $table->easyCell($_SESSION['eNodeBAntennaHgh']);
    $table->easyCell($_SESSION['eNodeBAntennaHgh']);
    $table->printRow();


      $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('CPE Antenna Height(m)');
    $table->easyCell($_SESSION['CPEAntennaHeight']);
    $table->easyCell($_SESSION['CPEAntennaHeight']);
    $table->printRow();

     $table->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table->easyCell('COVERAGE RESULTS');
 $table->easyCell('DOWNLINK');
 $table->easyCell('UPLINK');
 $table->printRow();

    $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Maximum Allowable Path Loss');
    $table->easyCell($_SESSION['pathloss_dl']);
    $table->easyCell($_SESSION['pathloss_up']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
    $table->easyCell('Cell Radius(km)');
    $table->easyCell($_SESSION['cellradius_dl']);
    $table->easyCell($_SESSION['cellradius_up']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
     $table->easyCell('Cell Area(km2)');
    $table->easyCell($_SESSION['cellarea_dl']);
    $table->easyCell($_SESSION['cellarea_up']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
     $table->easyCell('Number of site');
    $table->easyCell($_SESSION['numsite_dl']);
    $table->easyCell($_SESSION['numsite_up']);
    $table->printRow();

     $table->rowStyle('valign:M;paddingY:2;font-family:times;');
     $table->easyCell('Number of coverage site');
    $table->easyCell($_SESSION['numsite'], 'colspan:2');
    $table->printRow();
     $table->endTable();

    

}
   
         if( $rapdf == "capa" or $rapdf == "capex"){ 
    
 //====================================================================
$tableA=new easyTable($pdf,2);
$tableA->rowStyle('font-size:15; font-style:B;');

 $tableA->easyCell('2.Capacity Planning');
 $tableA->printRow();
$tableA->rowStyle('font-size:15; font-style:B;');
 $tableA->easyCell('2.1.service model');
 $tableA->printRow();

 $tableA->endTable(5);

 $table3=new easyTable($pdf, '{50,20,20,20,20,20,20,20,20}','align:C{LCCC};border:1; border-color:#a1a1a1; ');

 $table3->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table3->easyCell('Traffic Parameters','rowspan:2');
 $table3->easyCell('uplink','colspan:4');
 $table3->easyCell('downlink','colspan:4');
 $table3->printRow();

 $table3->rowStyle(' bgcolor:#87CEEB;font-style:B');
 $table3->easyCell("Bearer Rate(kbps)");
 $table3->easyCell("PPP session time(s)");
 $table3->easyCell("PPP session Duty Ratio(s)");
 $table3->easyCell("BLER");
  $table3->easyCell("Bearer Rate(kbps)");
 $table3->easyCell("PPP session time(s)");
 $table3->easyCell("PPP session Duty Ratio(s)");
 $table3->easyCell("BLER");
 $table3->printRow();


 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("VOIP");
$table3->easyCell($_SESSION['VOIPBR_up']);
 $table3->easyCell($_SESSION['VOIPPPST_up']);
 $table3->easyCell($_SESSION['VOIPPPSDR_up']);
 $table3->easyCell($_SESSION['VOIPBLER_up']);
  $table3->easyCell($_SESSION['VOIPBR_dl']);
 $table3->easyCell($_SESSION['VOIPPPST_dl']);
 $table3->easyCell($_SESSION['VOIPPPSDR_dl']);
 $table3->easyCell($_SESSION['VOIPBLER_dl']);
 $table3->printRow();

  $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Video Phone");
$table3->easyCell($_SESSION['VIDPhBR_up']);
 $table3->easyCell($_SESSION['VIDPhPPST_up']);
 $table3->easyCell($_SESSION['VIDPhPPSDR_up']);
 $table3->easyCell($_SESSION['VIDPhBLER_up']);
  $table3->easyCell($_SESSION['VIDPhBR_dl']);
 $table3->easyCell($_SESSION['VIDPhPPST_dl']);
 $table3->easyCell($_SESSION['VIDPhPPSDR_dl']);
 $table3->easyCell($_SESSION['VIDPhBLER_dl']);
 $table3->printRow();

  $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Video Conference");
$table3->easyCell($_SESSION['VIDConBR_up']);
 $table3->easyCell($_SESSION['VIDConPPST_up']);
 $table3->easyCell($_SESSION['VIDConPPSDR_up']);
 $table3->easyCell($_SESSION['VIDConBLER_up']);
  $table3->easyCell($_SESSION['VIDConBR_dl']);
 $table3->easyCell($_SESSION['VIDConPPST_dl']);
 $table3->easyCell($_SESSION['VIDConPPSDR_dl']);
 $table3->easyCell($_SESSION['VIDConBLER_dl']);
 $table3->printRow();

  $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Real Time Gaming");
$table3->easyCell($_SESSION['RTGamBR_up']);
 $table3->easyCell($_SESSION['RTGamPPST_up']);
 $table3->easyCell($_SESSION['RTGamPPSDR_up']);
 $table3->easyCell($_SESSION['RTGamBLER_up']);
  $table3->easyCell($_SESSION['RTGamBR_dl']);
 $table3->easyCell($_SESSION['RTGamPPST_dl']);
 $table3->easyCell($_SESSION['RTGamPPSDR_dl']);
 $table3->easyCell($_SESSION['RTGamBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Streaming Media");
$table3->easyCell($_SESSION['StreamMedBR_up']);
 $table3->easyCell($_SESSION['StreamMedPPST_up']);
 $table3->easyCell($_SESSION['StreamMedPPSDR_up']);
 $table3->easyCell($_SESSION['StreamMedBLER_up']);
  $table3->easyCell($_SESSION['StreamMedBR_dl']);
 $table3->easyCell($_SESSION['StreamMedPPST_dl']);
 $table3->easyCell($_SESSION['StreamMedPPSDR_dl']);
 $table3->easyCell($_SESSION['StreamMedBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("IMS Signaling");
$table3->easyCell($_SESSION['IMSBR_up']);
 $table3->easyCell($_SESSION['IMSPPST_up']);
 $table3->easyCell($_SESSION['IMSPPSDR_up']);
 $table3->easyCell($_SESSION['IMSBLER_up']);
  $table3->easyCell($_SESSION['IMSBR_dl']);
 $table3->easyCell($_SESSION['IMSPPST_dl']);
 $table3->easyCell($_SESSION['IMSPPSDR_dl']);
 $table3->easyCell($_SESSION['IMSBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Web Browsing");
$table3->easyCell($_SESSION['WebBR_up']);
 $table3->easyCell($_SESSION['WebPPST_up']);
 $table3->easyCell($_SESSION['WebPPSDR_up']);
 $table3->easyCell($_SESSION['WebBLER_up']);
  $table3->easyCell($_SESSION['WebBR_dl']);
 $table3->easyCell($_SESSION['WebPPST_dl']);
 $table3->easyCell($_SESSION['WebPPSDR_dl']);
 $table3->easyCell($_SESSION['WebBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("File Transfer");
$table3->easyCell($_SESSION['FileBR_up']);
 $table3->easyCell($_SESSION['FilePPST_up']);
 $table3->easyCell($_SESSION['FilePPSDR_up']);
 $table3->easyCell($_SESSION['FileBLER_up']);
  $table3->easyCell($_SESSION['FileBR_dl']);
 $table3->easyCell($_SESSION['FilePPST_dl']);
 $table3->easyCell($_SESSION['FilePPSDR_dl']);
 $table3->easyCell($_SESSION['FileBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("Email");
$table3->easyCell($_SESSION['EmailBR_up']);
 $table3->easyCell($_SESSION['EmailPPST_up']);
 $table3->easyCell($_SESSION['EmailPPSDR_up']);
 $table3->easyCell($_SESSION['EmailBLER_up']);
  $table3->easyCell($_SESSION['EmailBR_dl']);
 $table3->easyCell($_SESSION['EmailPPST_dl']);
 $table3->easyCell($_SESSION['EmailPPSDR_dl']);
 $table3->easyCell($_SESSION['EmailBLER_dl']);
 $table3->printRow();

 $table3->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table3->easyCell("P2P File Sharing");
$table3->easyCell($_SESSION['P2PfileBR_up']);
 $table3->easyCell($_SESSION['P2PfilePPST_up']);
 $table3->easyCell($_SESSION['P2PfilePPSDR_up']);
 $table3->easyCell($_SESSION['P2PfileBLER_up']);
  $table3->easyCell($_SESSION['P2PfileBR_dl']);
 $table3->easyCell($_SESSION['P2PfilePPST_dl']);
 $table3->easyCell($_SESSION['P2PfilePPSDR_dl']);
 $table3->easyCell($_SESSION['P2PfileBLER_dl']);
 $table3->printRow();

 $table3->endTable();      

 $tableB=new easyTable($pdf,2);

$tableB->rowStyle('font-size:15; font-style:B;');
 $tableB->easyCell('2.1.Traffic Model');
 $tableB->printRow();

 $tableB->endTable(5);
 $table4=new easyTable($pdf, '{50,40,40,40,40}','align:C{LCCC};border:1; border-color:#a1a1a1; ');

 $table4->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table4->easyCell('User behaviour','rowspan:2');
 $table4->easyCell('urban','colspan:2');
 $table4->easyCell("Busy Hour throughput per user (kbps)",'colspan:2');
 $table4->printRow();

 $table4->rowStyle(' bgcolor:#87CEEB;font-style:B');
 $table4->easyCell("Traffic Penetration ratio");
 $table4->easyCell("BHSA");
 $table4->easyCell("uplink");
 $table4->easyCell("downlink");
 $table4->printRow();

  $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("VOIP");
$table4->easyCell($_SESSION['VOIPTraffPR']);
 $table4->easyCell($_SESSION['VOIP_BHSA']);
 $table4->easyCell($_SESSION['VOIPBHTput_up']);
 $table4->easyCell($_SESSION['VOIPBHTput_dl']);
 $table4->printRow();

 $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Video Phone");
$table4->easyCell($_SESSION['VIDPhTraffPR']);
 $table4->easyCell($_SESSION['VIDPh_BHSA']);
 $table4->easyCell($_SESSION['VIDPhBHTput_up']);
 $table4->easyCell($_SESSION['VIDPhBHTput_dl']);
 $table4->printRow();

$table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Video Conference");
$table4->easyCell($_SESSION['VIDConTraffPR']);
 $table4->easyCell($_SESSION['VIDCon_BHSA']);
 $table4->easyCell($_SESSION['VIDConBHTput_up']);
 $table4->easyCell($_SESSION['VIDConBHTput_dl']);
 $table4->printRow();

 $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Real Time Gaming");
$table4->easyCell($_SESSION['RTGamTraffPR']);
 $table4->easyCell($_SESSION['RTGam_BHSA']);
 $table4->easyCell($_SESSION['RTGamBHTput_up']);
 $table4->easyCell($_SESSION['RTGamBHTput_dl']);
 $table4->printRow();

  $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Streaming Media");
$table4->easyCell($_SESSION['StreamMedTraffPR']);
 $table4->easyCell($_SESSION['StreamMed_BHSA']);
 $table4->easyCell($_SESSION['StreamMedBHTput_up']);
 $table4->easyCell($_SESSION['StreamMedBHTput_dl']);
 $table4->printRow();

$table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("IMS Signaling");
$table4->easyCell($_SESSION['IMSTraffPR']);
 $table4->easyCell($_SESSION['IMS_BHSA']);
 $table4->easyCell($_SESSION['IMSBHTput_up']);
 $table4->easyCell($_SESSION['IMSBHTput_dl']);
 $table4->printRow();

$table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Web Browsing");
$table4->easyCell($_SESSION['WebTraffPR']);
 $table4->easyCell($_SESSION['Web_BHSA']);
 $table4->easyCell($_SESSION['WebBHTput_up']);
 $table4->easyCell($_SESSION['WebBHTput_dl']);
 $table4->printRow();

 $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("File Transfer");
$table4->easyCell($_SESSION['FileTraffPR']);
 $table4->easyCell($_SESSION['File_BHSA']);
 $table4->easyCell($_SESSION['FileBHTput_up']);
 $table4->easyCell($_SESSION['FileBHTput_dl']);
 $table4->printRow();

  $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Email");
$table4->easyCell($_SESSION['EmailTraffPR']);
 $table4->easyCell($_SESSION['Email_BHSA']);
 $table4->easyCell($_SESSION['EmailBHTput_up']);
 $table4->easyCell($_SESSION['EmailBHTput_dl']);
 $table4->printRow();

 $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("P2P File Sharing");
$table4->easyCell($_SESSION['P2PfileTraffPR']);
 $table4->easyCell($_SESSION['P2Pfile_BHSA']);
 $table4->easyCell($_SESSION['P2PfileBHTput_up']);
 $table4->easyCell($_SESSION['P2PfileBHTput_dl']);
 $table4->printRow();

  $table4->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table4->easyCell("Single user THroughput");
 $table4->easyCell('','colspan:2');
$table4->easyCell($_SESSION['singleuserthput_up']);
 $table4->easyCell($_SESSION['singleuserthput_dl']);
  $table4->printRow();
 $table4->endTable(); 

 $table5=new easyTable($pdf, '{80, 50, 50}','align:C{LCCR};border:1; border-color:#a1a1a1; ');
  $table5->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table5->easyCell('other parameters');
 $table5->easyCell('downlink');
 $table5->easyCell('uplink');
 $table5->printRow();

  $table5->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table5->easyCell("IPTV Single user throughput(Mbps)");
$table5->easyCell($_SESSION['IPTVbandwidth']);
 $table5->easyCell('');
  $table5->printRow();

   $table5->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table5->easyCell(" Single user throughput(kbps)");
$table5->easyCell($_SESSION['singleuserthput_dl']);
 $table5->easyCell($_SESSION['singleuserthput_up']);
  $table5->printRow();

   $table5->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table5->easyCell(" Average cell  throughput(Mbps)");
$table5->easyCell($_SESSION['avcellthrput_dl']);
 $table5->easyCell($_SESSION['avcellthrput_up']);
  $table5->printRow();

     $table5->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table5->easyCell("  Number of users");
$table5->easyCell($_SESSION['number_user']);
 $table5->easyCell($_SESSION['number_user']);
  $table5->printRow();

$table5->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table5->easyCell("Percentage of IPTV users % ");
$table5->easyCell($_SESSION['IPTV_user']);
 $table5->easyCell($_SESSION['IPTV_user']);
  $table5->printRow();

  $table5->endTable();     

 $tableC=new easyTable($pdf,2);

$tableC->rowStyle('font-size:15; font-style:B;');
 $tableC->easyCell('2.2 Capacity Results');
 $tableC->printRow();

 $tableC->endTable(5);

  $table6=new easyTable($pdf, '{80, 50, 50}','align:C{LCCR};border:1; border-color:#a1a1a1; ');
  $table6->rowStyle('align:{CCCR};valign:M;bgcolor:#87CEEB; font-color:#000000; font-family:times; font-style:B;');
 $table6->easyCell('other parameters');
 $table6->easyCell('downlink');
 $table6->easyCell('uplink');
 $table6->printRow();

 $table6->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table6->easyCell("total Network throughput IP (Kbps) ");
$table6->easyCell($_SESSION['Totalnetwrkthrput_dl']);
 $table6->easyCell($_SESSION['Totalnetwrkthrput_up']);
  $table6->printRow();

   $table6->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table6->easyCell("total Network throughput MAC (Mbps)");
$table6->easyCell($_SESSION['Totalnetwrkthrput_MAC_dl']);
 $table6->easyCell($_SESSION['Totalnetwrkthrput_MAC_up']);
  $table6->printRow();

  $table6->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table6->easyCell("Capacity per site (Mbps)");
$table6->easyCell($_SESSION['sitethrput_dl']);
 $table6->easyCell($_SESSION['sitethrput_up']);
  $table6->printRow();

  $table6->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table6->easyCell("number of enodes");
$table6->easyCell($_SESSION['number_enode_dl']);
 $table6->easyCell($_SESSION['number_enode_up']);
  $table6->printRow();

   $table6->rowStyle('valign:M;paddingY:2;font-family:times;');
 $table6->easyCell("capacity number of enodes");
$table6->easyCell($_SESSION['number_enode'], 'colspan:2');
  $table6->printRow();



  $table6->endTable(); 

}

 $pdf->Output(); 


 }

?>