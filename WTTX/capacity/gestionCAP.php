<?php
include 'connection.php';
?>
<?php 
// $Penetration = "SELECT Morphology FROM coverage_results WHERE(ProjectID='".$_SESSION['ProjectID']."')";
// $checkpen = mysqli_query($connect, $Penetration);
// if($checkpen){
//   $morpval= mysqli_fetch_row($checkpen);
//   $morph= $_SESSION['inputmorphology']
// }
$morph= $_SESSION['inputmorphology'];
$site= $_SESSION['typesite'];
switch ($morph) {
  case 'DENSE URBAN':
    $_SESSION['avcellthrput_dl']=16.92;
    $_SESSION['avcellthrput_up'] =9.76;
    break;
  
  case 'URBAN':
    $_SESSION['avcellthrput_dl']=16.92;
    $_SESSION['avcellthrput_up'] =9.76;
    break;

    case 'SUBURBAN':
   $_SESSION['avcellthrput_dl']=12.97;
    $_SESSION['avcellthrput_up'] =6.92;
    break;
     case 'RURAL':
    $_SESSION['avcellthrput_dl']=12.97;
    $_SESSION['avcellthrput_up'] =6.92;
    break;}


// $sitecheck = "SELECT typesite FROM coverage_results WHERE(ProjectID='".$_SESSION['ProjectID']."')";
// $checksite = mysqli_query($connect, $sitecheck);
// if($checksite){
//   $siteval= mysqli_fetch_row($checksite);
//   $site=$siteval[0];}

  switch ($site) {
  case 'trisect':
   $_SESSION['sitethrput_dl']= 3*$_SESSION['avcellthrput_dl'];
   $_SESSION['sitethrput_up']= 3*$_SESSION['avcellthrput_up'];
    break;
  
  case 'Bisect':
$_SESSION['sitethrput_dl']= 2*$_SESSION['avcellthrput_dl'];
   $_SESSION['sitethrput_up']= 2*$_SESSION['avcellthrput_up'];
    break;

    case 'omni':
   $_SESSION['sitethrput_dl']= $_SESSION['avcellthrput_dl'];
   $_SESSION['sitethrput_up']= $_SESSION['avcellthrput_up'];
    break;
     
}




/*//INTIALISING  TO EMPTY
$_SESSION['VIOPBR_up']= $_POST['VI0PBR_up']='';
  $_SESSION['VI0PBR_dl']= $_POST['VI0PBR_dl']='';
  $_SESSION['VOIPPPST_up']= $_POST['VOIPPPST_up']='';
  $_SESSION['VOIPPPST_dl']= $_POST['VOIPPPST_dl']='';
  $_SESSION['VOIPPPSDR_up'] =$_POST['VOIPPPSDR_up']='';
  $_SESSION['VOIPPPSDR_dl'] =$_POST['VOIPPPSDR_dl']='';
  $_SESSION['VOIPBLER_up'] =$_POST['VOIPBLER_up']='';
  $_SESSION['VOIPBLER_dl'] =$_POST['VOIPBLER_dl']='';

  $_SESSION['VIDPhBR_up'] =$_POST['VIDPhBR_up'] ='';
  $_SESSION['VIDPhBR_dl'] =$_POST['VIDPhBR_dl'] ='';
  $_SESSION['VIDPhPPST_up'] = $_POST['VIDPhPPST_up']='';
  $_SESSION['VIDPhPPST_dl'] = $_POST['VIDPhPPST_dl']='';
  $_SESSION['VIDPhPPSDR_up'] =$_POST['VIDPhPPSDR_up'] ='';
  $_SESSION['VIDPhPPSDR_dl'] =$_POST['VIDPhPPSDR_dl'] ='';
  $_SESSION['VIDPhBLER_up'] = $_POST['VIDPhBLER_up']='';
  $_SESSION['VIDPhBLER_dl'] = $_POST['VIDPhBLER_dl']='';

    $_SESSION['VIDConBR_up'] = $_POST['VIDConBR_up']='';
     $_SESSION['VIDConBR_dl'] = $_POST['VIDConBR_dl']='';
    $_SESSION['VIDConPPST_up'] = $_POST['VIDConPPST_up']='';
    $_SESSION['VIDConPPST_dl'] = $_POST['VIDConPPST_dl']='';
    $_SESSION['VIDConPPSDR_up'] = $_POST['VIDConPPSDR_up'] ='';
    $_SESSION['VIDConPPSDR_dl'] = $_POST['VIDConPPSDR_dl'] ='';
     $_SESSION['VIDConBLER_up']= $_POST['VIDConBLER_up']='';
      $_SESSION['VIDConBLER_dl']= $_POST['VIDConBLER_dl']='';

     $_SESSION['RTGamBR_up'] = $_POST['RTGamBR_up']='';
     $_SESSION['RTGamBR_dl'] = $_POST['RTGamBR_dl']='';
     $_SESSION['RTGamPPST_up'] =  $_POST['RTGamPPST_up']=''; 
     $_SESSION['RTGamPPST_dl'] =  $_POST['RTGamPPST_dl']='';
     $_SESSION['RTGamPPSDR_up']= $_POST['RTGamPPSDR_up']='';
     $_SESSION['RTGamPPSDR_dl']= $_POST['RTGamPPSDR_dl']='';
     $_SESSION['RTGamBLER_up'] = $_POST['RTGamBLER_up']='';
     $_SESSION['RTGamBLER_dl'] = $_POST['RTGamBLER_dl']='';

     $_SESSION['StreamMedBR_up'] = $_POST['StreamMedBR_up']='';
     $_SESSION['StreamMedBR_dl'] = $_POST['StreamMedBR_dl']='';
     $_SESSION['StreamMedPPST_up'] = $_POST['StreamMedPPST_up']='';
     $_SESSION['StreamMedPPST_dl'] = $_POST['StreamMedPPST_dl']='';
     $_SESSION['StreamMedPPSDR_up'] = $_POST['StreamMedPPSDR_up']='';
     $_SESSION['StreamMedPPSDR_dl'] = $_POST['StreamMedPPSDR_dl']='';
     $_SESSION['StreamMedBLER_up'] = $_POST['StreamMedBLER_up']='';
     $_SESSION['StreamMedBLER_dl'] = $_POST['StreamMedBLER_dl']='';

     $_SESSION['IMSBR_up'] = $_POST['IMSBR_up']='';
     $_SESSION['IMSBR_dl'] = $_POST['IMSBR_dl']='';
     $_SESSION['IMSPPST_up']= $_POST['IMSPPST_up']='';
     $_SESSION['IMSPPST_dl']= $_POST['IMSPPST_dl']='';
     $_SESSION['IMSPPSDR_up'] = $_POST['IMSPPSDR_up']='';
     $_SESSION['IMSPPSDR_dl'] = $_POST['IMSPPSDR_dl']='';
     $_SESSION['IMSBLER_up']= $_POST['IMSBLER_up']='';
     $_SESSION['IMSBLER_dl']= $_POST['IMSBLER_dl']='';


     $_SESSION['WebBR_up'] = $_POST['WebBR_up']='';
     $_SESSION['WebBR_dl'] = $_POST['WebBR_dl']='';
     $_SESSION['WebPPST_up']= $_POST['WebPPST_up']='';
     $_SESSION['WebPPST_dl']= $_POST['WebPPST_dl']=''; 
     $_SESSION['WebPPSDR_up']= $_POST['WebPPSDR_up']='';
     $_SESSION['WebPPSDR_dl']= $_POST['WebPPSDR_dl']='';
     $_SESSION['WebBLER_up']= $_POST['WebBLER_up']='';
      $_SESSION['WebBLER_dl']= $_POST['WebBLER_dl']='';

      $_SESSION['FileBR_up'] = $_POST['FileBR_up']=''; 
      $_SESSION['FileBR_dl'] = $_POST['FileBR_dl']='';
      $_SESSION['FilePPST_up'] = $_POST['FilePPST_up']='';
      $_SESSION['FilePPST_dl'] = $_POST['FilePPST_dl']='';
      $_SESSION['FilePPSDR_up'] =  $_POST['FilePPSDR_up']=''; 
       $_SESSION['FilePPSDR_dl'] =  $_POST['FilePPSDR_dl']=''; 
       $_SESSION['FileBLER_up'] = $_POST['FileBLER_up']='';
       $_SESSION['FileBLER_dl'] = $_POST['FileBLER_dl']='';

       $_SESSION['EmailBR_up'] = $_POST['EmailBR_up']='';
       $_SESSION['EmailBR_dl'] = $_POST['EmailBR_dl']='';
       $_SESSION['EmailPPST_up']= $_POST['EmailPPST_up']='';
       $_SESSION['EmailPPST_dl']= $_POST['EmailPPST_dl']='';
       $_SESSION['EmailPPSDR_up']= $_POST['EmailPPSDR_up']='';
       $_SESSION['EmailPPSDR_dl']= $_POST['EmailPPSDR_dl']='';
       $_SESSION['EmailBLER_up'] =$_POST['EmailBLER_up']='';
       $_SESSION['EmailBLER_dl'] =$_POST['EmailBLER_dl']='';

       $_SESSION['P2PfileBR_up']= $_POST['P2PfileBR_up']='';
        $_SESSION['P2PfileBR_dl']= $_POST['P2PfileBR_dl']='';
        $_SESSION['P2PfilePPST_up']= $_POST['P2PfilePPST_up']='';
        $_SESSION['P2PfilePPST_dl']= $_POST['P2PfilePPST_dl']='';
        $_SESSION['P2PfilePPSDR_up']= $_POST['P2PfilePPSDR_up']='';
        $_SESSION['P2PfilePPSDR_dl']= $_POST['P2PfilePPSDR_dl']='';
        $_SESSION['P2PfileBLER_up']= $_POST['P2PfileBLER_up']='';
        $_SESSION['P2PfileBLER_dl']= $_POST['P2PfileBLER_dl']='';

// INTIALISE TRAFFIC MODEL 


 $_SESSION['VOIPTraffPR'] = $_POST['VOIPTraffPR']='';
$_SESSION['VOIP_BHSA'] = $_POST['VOIP_BHSA']='';
$_SESSION['VOIPBHTput_up']= $_POST['VOIPBHTput_up'] ='';
$_SESSION['VIOPBHTput_dl']= $_POST['VIOPBHTput_dl'] ='';

$_SESSION['VIDPhTraffPR'] = $_POST['VIDPhTraffPR']='';
$_SESSION['VIDPh_BHSA'] = $_POST['VIDPh_BHSA']='';
$_SESSION['VIDPhBHTput_up']= $_POST['VIDPhBHTput_up'] ='';
$_SESSION['VIDPhBHTput_dl']= $_POST['VIDPhBHTput_dl'] ='';

$_SESSION['VIDConTraffPR'] = $_POST['VIDConTraffPR']='';
$_SESSION['VIDCon_BHSA'] = $_POST['VIDCon_BHSA']='';
$_SESSION['VIDConBHTput_up']= $_POST['VIDConBHTput_up'] ='';
$_SESSION['VIDConBHTput_dl']= $_POST['VIDConBHTput_dl'] ='';

$_SESSION['RTGamTraffPR'] = $_POST['RTGamTraffPR']='';
$_SESSION['RTGam_BHSA'] = $_POST['RTGam_BHSA']='';
$_SESSION['RTGamBHTput_up']= $_POST['RTGamBHTput_up'] ='';
$_SESSION['RTGamBHTput_dl']= $_POST['RTGamBHTput_dl'] ='';

$_SESSION['StreamMedTraffPR'] = $_POST['StreamMedTraffPR']='';
$_SESSION['StreamMed_BHSA'] = $_POST['StreamMed_BHSA']='';
$_SESSION['StreamMedBHTput_up']= $_POST['StreamMedBHTput_up'] ='';
$_SESSION['StreamMedBHTput_dl']= $_POST['StreamMedBHTput_up'] ='';

$_SESSION['IMSTraffPR'] = $_POST['IMSTraffPR']='';
$_SESSION['IMS_BHSA'] = $_POST['IMS_BHSA']='';
$_SESSION['IMSBHTput_up']= $_POST['IMSBHTput_up'] ='';
$_SESSION['IMSBHTput_dl']= $_POST['IMSBHTput_dl'] ='';


$_SESSION['WebTraffPR'] = $_POST['WebTraffPR']='';
$_SESSION['Web_BHSA'] = $_POST['Web_BHSA']='';
$_SESSION['WebBHTput_up']= $_POST['WebBHTput_up'] ='';
$_SESSION['WebBHTput_dl']= $_POST['WebBHTput_dl'] ='';

 $_SESSION['FileTraffPR'] = $_POST['FileTraffPR']='';
$_SESSION['File_BHSA'] = $_POST['File_BHSA']='';
$_SESSION['FileBHTput_up']= $_POST['FileBHTput_up'] ='';
$_SESSION['FileBHTput_dl']= $_POST['FileBHTput_dl'] ='';

$_SESSION['EmailTraffPR'] = $_POST['EmailTraffPR']='';
$_SESSION['Email_BHSA'] = $_POST['Email_BHSA']='';
$_SESSION['EmailBHTput_up']= $_POST['EmailBHTput_up'] ='';
$_SESSION['EmailBHTput_dl']= $_POST['EmailBHTput_dl'] ='';

$_SESSION['P2PfileTraffPR'] = $_POST['P2PfileTraffPR']='';
$_SESSION['P2Pfile_BHSA'] = $_POST['P2Pfile_BHSA']='';
$_SESSION['P2PfileBHTput_up']= $_POST['P2PfileBHTput_up'] ='';
$_SESSION['P2PfileBHTput_dl']= $_POST['P2PfileBHTput_dl'] ='';
$_SESSION['singleuserthput_up'] =$_POST['singleuserthput_up'] ='';
$_SESSION['singleuserthput_dl'] =$_POST['singleuserthput_dl'] ='';
$_SESSION['singleuser_throughput_IPTV'] = $_POST['singleuser_throughput_IPTV']='';
$_SESSION['IPTV_definition'] = $_SESSION['IPTV_definition'] ='';*/

if (isset($_POST['VALIDATE_Capacity'])){
	/*intialising parameters used */
	$_SESSION['VOIPBR_up']= $_POST['VOIPBR_up'];
	$_SESSION['VOIPBR_dl']= $_POST['VOIPBR_dl'];
	$_SESSION['VOIPPPST_up']= $_POST['VOIPPPST_up'];
	$_SESSION['VOIPPPST_dl']= $_POST['VOIPPPST_dl'];
	$_SESSION['VOIPPPSDR_up'] =$_POST['VOIPPPSDR_up'];
	$_SESSION['VOIPPPSDR_dl'] =$_POST['VOIPPPSDR_dl'];
	$_SESSION['VOIPBLER_up'] =$_POST['VOIPBLER_up'];
	$_SESSION['VOIPBLER_dl'] =$_POST['VOIPBLER_dl'];

	$_SESSION['VIDPhBR_up'] =$_POST['VIDPhBR_up'] ;
	$_SESSION['VIDPhBR_dl'] =$_POST['VIDPhBR_dl'] ;
	$_SESSION['VIDPhPPST_up'] = $_POST['VIDPhPPST_up'];
	$_SESSION['VIDPhPPST_dl'] = $_POST['VIDPhPPST_dl'];
	$_SESSION['VIDPhPPSDR_up'] =$_POST['VIDPhPPSDR_up'] ;
	$_SESSION['VIDPhPPSDR_dl'] =$_POST['VIDPhPPSDR_dl'] ;
	$_SESSION['VIDPhBLER_up'] = $_POST['VIDPhBLER_up'];
	$_SESSION['VIDPhBLER_dl'] = $_POST['VIDPhBLER_dl'];

    $_SESSION['VIDConBR_up'] = $_POST['VIDConBR_up'];
     $_SESSION['VIDConBR_dl'] = $_POST['VIDConBR_dl'];
    $_SESSION['VIDConPPST_up'] = $_POST['VIDConPPST_up'];
    $_SESSION['VIDConPPST_dl'] = $_POST['VIDConPPST_dl'];
    $_SESSION['VIDConPPSDR_up'] = $_POST['VIDConPPSDR_up'] ;
    $_SESSION['VIDConPPSDR_dl'] = $_POST['VIDConPPSDR_dl'] ;
     $_SESSION['VIDConBLER_up']= $_POST['VIDConBLER_up'];
      $_SESSION['VIDConBLER_dl']= $_POST['VIDConBLER_dl'];

     $_SESSION['RTGamBR_up'] = $_POST['RTGamBR_up'];
     $_SESSION['RTGamBR_dl'] = $_POST['RTGamBR_dl'];
     $_SESSION['RTGamPPST_up'] =  $_POST['RTGamPPST_up']; 
     $_SESSION['RTGamPPST_dl'] =  $_POST['RTGamPPST_dl'];
     $_SESSION['RTGamPPSDR_up']= $_POST['RTGamPPSDR_up'];
     $_SESSION['RTGamPPSDR_dl']= $_POST['RTGamPPSDR_dl'];
     $_SESSION['RTGamBLER_up'] = $_POST['RTGamBLER_up'];
     $_SESSION['RTGamBLER_dl'] = $_POST['RTGamBLER_dl'];

     $_SESSION['StreamMedBR_up'] = $_POST['StreamMedBR_up'];
     $_SESSION['StreamMedBR_dl'] = $_POST['StreamMedBR_dl'];
     $_SESSION['StreamMedPPST_up'] = $_POST['StreamMedPPST_up'];
     $_SESSION['StreamMedPPST_dl'] = $_POST['StreamMedPPST_dl'];
     $_SESSION['StreamMedPPSDR_up'] = $_POST['StreamMedPPSDR_up'];
     $_SESSION['StreamMedPPSDR_dl'] = $_POST['StreamMedPPSDR_dl'];
     $_SESSION['StreamMedBLER_up'] = $_POST['StreamMedBLER_up'];
     $_SESSION['StreamMedBLER_dl'] = $_POST['StreamMedBLER_dl'];

     $_SESSION['IMSBR_up'] = $_POST['IMSBR_up'];
     $_SESSION['IMSBR_dl'] = $_POST['IMSBR_dl'];
     $_SESSION['IMSPPST_up']= $_POST['IMSPPST_up'];
     $_SESSION['IMSPPST_dl']= $_POST['IMSPPST_dl'];
     $_SESSION['IMSPPSDR_up'] = $_POST['IMSPPSDR_up'];
     $_SESSION['IMSPPSDR_dl'] = $_POST['IMSPPSDR_dl'];
     $_SESSION['IMSBLER_up']= $_POST['IMSBLER_up'];
     $_SESSION['IMSBLER_dl']= $_POST['IMSBLER_dl'];


     $_SESSION['WebBR_up'] = $_POST['WebBR_up'];
     $_SESSION['WebBR_dl'] = $_POST['WebBR_dl'];
     $_SESSION['WebPPST_up']= $_POST['WebPPST_up'];
     $_SESSION['WebPPST_dl']= $_POST['WebPPST_dl']; 
     $_SESSION['WebPPSDR_up']= $_POST['WebPPSDR_up'];
     $_SESSION['WebPPSDR_dl']= $_POST['WebPPSDR_dl'];
     $_SESSION['WebBLER_up']= $_POST['WebBLER_up'];
      $_SESSION['WebBLER_dl']= $_POST['WebBLER_dl'];

      $_SESSION['FileBR_up'] = $_POST['FileBR_up']; 
      $_SESSION['FileBR_dl'] = $_POST['FileBR_dl'];
      $_SESSION['FilePPST_up'] = $_POST['FilePPST_up'];
      $_SESSION['FilePPST_dl'] = $_POST['FilePPST_dl'];
      $_SESSION['FilePPSDR_up'] =  $_POST['FilePPSDR_up']; 
       $_SESSION['FilePPSDR_dl'] =  $_POST['FilePPSDR_dl']; 
       $_SESSION['FileBLER_up'] = $_POST['FileBLER_up'];
       $_SESSION['FileBLER_dl'] = $_POST['FileBLER_dl'];

       $_SESSION['EmailBR_up'] = $_POST['EmailBR_up'];
       $_SESSION['EmailBR_dl'] = $_POST['EmailBR_dl'];
       $_SESSION['EmailPPST_up']= $_POST['EmailPPST_up'];
       $_SESSION['EmailPPST_dl']= $_POST['EmailPPST_dl'];
       $_SESSION['EmailPPSDR_up']= $_POST['EmailPPSDR_up'];
       $_SESSION['EmailPPSDR_dl']= $_POST['EmailPPSDR_dl'];
       $_SESSION['EmailBLER_up'] =$_POST['EmailBLER_up'];
       $_SESSION['EmailBLER_dl'] =$_POST['EmailBLER_dl'];

       $_SESSION['P2PfileBR_up']= $_POST['P2PfileBR_up'];
        $_SESSION['P2PfileBR_dl']= $_POST['P2PfileBR_dl'];
        $_SESSION['P2PfilePPST_up']= $_POST['P2PfilePPST_up'];
        $_SESSION['P2PfilePPST_dl']= $_POST['P2PfilePPST_dl'];
        $_SESSION['P2PfilePPSDR_up']= $_POST['P2PfilePPSDR_up'];
        $_SESSION['P2PfilePPSDR_dl']= $_POST['P2PfilePPSDR_dl'];
        $_SESSION['P2PfileBLER_up']= $_POST['P2PfileBLER_up'];
        $_SESSION['P2PfileBLER_dl']= $_POST['P2PfileBLER_dl'];

// INTIALISE TRAFFIC MODEL 


  $_SESSION['VOIPTraffPR'] = $_POST['VOIPTraffPR'];
$_SESSION['VOIP_BHSA'] = $_POST['VOIP_BHSA'];

$_SESSION['VIDPhTraffPR'] = $_POST['VIDPhTraffPR'];
$_SESSION['VIDPh_BHSA'] = $_POST['VIDPh_BHSA'];

$_SESSION['VIDConTraffPR'] = $_POST['VIDConTraffPR'];
$_SESSION['VIDCon_BHSA'] = $_POST['VIDCon_BHSA'];

$_SESSION['RTGamTraffPR'] = $_POST['RTGamTraffPR'];
$_SESSION['RTGam_BHSA'] = $_POST['RTGam_BHSA'];

$_SESSION['StreamMedTraffPR'] = $_POST['StreamMedTraffPR'];
$_SESSION['StreamMed_BHSA'] = $_POST['StreamMed_BHSA'];

$_SESSION['IMSTraffPR'] = $_POST['IMSTraffPR'];
$_SESSION['IMS_BHSA'] = $_POST['IMS_BHSA'];


$_SESSION['WebTraffPR'] = $_POST['WebTraffPR'];
$_SESSION['Web_BHSA'] = $_POST['Web_BHSA'];

 $_SESSION['FileTraffPR'] = $_POST['FileTraffPR'];
$_SESSION['File_BHSA'] = $_POST['File_BHSA'];

$_SESSION['EmailTraffPR'] = $_POST['EmailTraffPR'];
$_SESSION['Email_BHSA'] = $_POST['Email_BHSA'];

$_SESSION['P2PfileTraffPR'] = $_POST['P2PfileTraffPR'];
$_SESSION['P2Pfile_BHSA'] = $_POST['P2Pfile_BHSA'];


// CALCULATION OF DATA PER SESSION AND  BUSY HOUR THROUGHPUT
function datapersession($BR, $ST, $SDT, $BLER)
{
  $A = $BLER/100 ;
  $B = 1-$A;
  $TH=round(($BR*$ST*$SDT)/($B),0);
  return  $TH ;
}
 function busyhourperthroughput($dps, $BHSA,$PR)
 {
  $A= $PR/100 ;
  $BHpt = round($dps*$BHSA*$A /3600 ,3);
  return $BHpt ;
 }


$Penetration = "SELECT Morphology FROM coverage_results WHERE(ProjectID='".$_SESSION['ProjectID']."')";
$checkpen = mysqli_query($connect, $Penetration);
if($checkpen){
  $morpval= mysqli_fetch_row($checkpen);
  $morph=$morpval[0];
}
switch ($morph) {
  case 'DENSE URBAN':
    $_SESSION['PTAR']=0.4;
    break;
  
  case 'URBAN':
    $_SESSION['PTAR']=0.2;
    break;

    case 'SUBURBAN':
    $_SESSION['PTAR']=0.1;
    break;
     case 'RURAL':
    $_SESSION['PTAR']=0;
    break;

}
 
$VOIPdps_up=$_SESSION['VOIPdps_up'] = datapersession ($_SESSION['VOIPBR_up'],$_SESSION['VOIPPPST_up'],$_SESSION['VOIPPPSDR_up'],$_SESSION['VOIPBLER_up']);
$VIOPdps_dl=$_SESSION['VOIPdps_dl'] = datapersession ($_SESSION['VOIPBR_dl'],$_SESSION['VOIPPPST_dl'],$_SESSION['VOIPPPSDR_dl'],$_SESSION['VOIPBLER_dl']);
$VIDPhdps_up=$_SESSION['VIDPhdps_up'] =datapersession ($_SESSION['VIDPhBR_up'],$_SESSION['VIDPhPPST_up'],$_SESSION['VIDPhPPSDR_up'],$_SESSION['VIDPhBLER_up']);
$VIDPhdps_dl=$_SESSION['VIDPhdps_dl'] =datapersession ($_SESSION['VIDPhBR_dl'],$_SESSION['VIDPhPPST_dl'],$_SESSION['VIDPhPPSDR_dl'],$_SESSION['VIDPhBLER_dl']); 
 $VIDCondps_up=$_SESSION['VIDCondps_up'] = datapersession ($_SESSION['VIDConBR_up'],$_SESSION['VIDConPPST_up'],$_SESSION['VIDConPPSDR_up'],$_SESSION['VIDConBLER_up']);
 $VIDCondps_dl= $_SESSION['VIDCondps_dl'] = datapersession ($_SESSION['VIDConBR_dl'],$_SESSION['VIDConPPST_dl'],$_SESSION['VIDConPPSDR_dl'],$_SESSION['VIDConBLER_dl']);
$RTGamdps_up=$_SESSION['RTGamdps_up'] = datapersession ($_SESSION['RTGamBR_up'],$_SESSION['RTGamPPST_up'],$_SESSION['RTGamPPSDR_up'],$_SESSION['RTGamBLER_up']);
$RTGamdps_dl=$_SESSION['RTGamdps_dl'] = datapersession ($_SESSION['RTGamBR_dl'],$_SESSION['RTGamPPST_dl'],$_SESSION['RTGamPPSDR_dl'],$_SESSION['RTGamBLER_dl']);
$StreamMeddps_up=$_SESSION['StreamMeddps_up'] =datapersession ($_SESSION['StreamMedBR_up'],$_SESSION['StreamMedPPST_up'],$_SESSION['StreamMedPPSDR_up'],$_SESSION['StreamMedBLER_up']);
$StreamMeddps_dl=$_SESSION['StreamMeddps_dl'] =datapersession ($_SESSION['StreamMedBR_dl'],$_SESSION['StreamMedPPST_dl'],$_SESSION['StreamMedPPSDR_dl'],$_SESSION['StreamMedBLER_dl']);
$IMSdps_up=$_SESSION['IMSdps_up'] = datapersession ($_SESSION['IMSBR_up'],$_SESSION['IMSPPST_up'],$_SESSION['IMSPPSDR_up'],$_SESSION['IMSBLER_up']);
$IMSdps_dl=$_SESSION['IMSdps_dl'] = datapersession($_SESSION['IMSBR_dl'],$_SESSION['IMSPPST_dl'],$_SESSION['IMSPPSDR_dl'],$_SESSION['IMSBLER_dl']);
 $Webdps_up=$_SESSION['Webdps_up'] = datapersession ($_SESSION['WebBR_up'],$_SESSION['WebPPST_up'],$_SESSION['WebPPSDR_up'],$_SESSION['WebBLER_up']);
  $Webdps_dl=$_SESSION['Webdps_dl'] = datapersession ($_SESSION['WebBR_dl'],$_SESSION['WebPPST_dl'],$_SESSION['WebPPSDR_dl'],$_SESSION['WebBLER_dl']);
  $Filedps_up=$_SESSION['Filedps_up'] = datapersession ($_SESSION['FileBR_up'],$_SESSION['FilePPST_up'],$_SESSION['FilePPSDR_up'],$_SESSION['FileBLER_up']);
 $Filedps_dl= $_SESSION['Filedps_dl'] = datapersession ($_SESSION['FileBR_dl'],$_SESSION['FilePPST_dl'],$_SESSION['FilePPSDR_dl'],$_SESSION['FileBLER_dl']);
  $Emaildps_up=$_SESSION['Emaildps_up'] = datapersession ($_SESSION['EmailBR_up'],$_SESSION['EmailPPST_up'],$_SESSION['EmailPPSDR_up'],$_SESSION['EmailBLER_up']);
  $Emaildps_dl=$_SESSION['Emaildps_dl'] = datapersession ($_SESSION['EmailBR_dl'],$_SESSION['EmailPPST_dl'],$_SESSION['EmailPPSDR_dl'],$_SESSION['EmailBLER_dl']);
  $P2Pfiledps_up=$_SESSION['P2Pfiledps_up'] = datapersession ($_SESSION['P2PfileBR_up'],$_SESSION['P2PfilePPST_up'],$_SESSION['P2PfilePPSDR_up'],$_SESSION['P2PfileBLER_up']);
 $P2Pfiledps_dl= $_SESSION['P2Pfiledps_dl'] = datapersession ($_SESSION['P2PfileBR_dl'],$_SESSION['P2PfilePPST_dl'],$_SESSION['P2PfilePPSDR_dl'],$_SESSION['P2PfileBLER_dl']);


// saving the data per session values in a database

// single user throughput

$VOIPBHTput_up=$_SESSION['VOIPBHTput_up'] = round(busyhourperthroughput ($_SESSION['VOIPdps_up'],$_SESSION['VOIP_BHSA'],$_SESSION['VOIPTraffPR']),3);
$VOIPBHTput_dl=$_SESSION['VOIPBHTput_dl'] = round(busyhourperthroughput ($_SESSION['VOIPdps_dl'],$_SESSION['VOIP_BHSA'],$_SESSION['VOIPTraffPR']),3);
$VIDPhBHTput_up=$_SESSION['VIDPhBHTput_up'] =round(busyhourperthroughput ($_SESSION['VIDPhdps_up'],$_SESSION['VIDPh_BHSA'],$_SESSION['VIDPhTraffPR']),3);
$VIDPhBHTput_dl=$_SESSION['VIDPhBHTput_dl'] =round(busyhourperthroughput ($_SESSION['VIDPhdps_dl'],$_SESSION['VIDPh_BHSA'],$_SESSION['VIDPhTraffPR']),3); 
 $VIDConBHTput_up=$_SESSION['VIDConBHTput_up'] = round(busyhourperthroughput ($_SESSION['VIDCondps_up'],$_SESSION['VIDCon_BHSA'],$_SESSION['VIDConTraffPR']),3);
 $VIDConBHTput_dl= $_SESSION['VIDConBHTput_dl'] = round(busyhourperthroughput ($_SESSION['VIDCondps_dl'],$_SESSION['VIDCon_BHSA'],$_SESSION['VIDConTraffPR']),3);
$RTGamBHTput_up=$_SESSION['RTGamBHTput_up'] = round(busyhourperthroughput ($_SESSION['RTGamdps_up'],$_SESSION['RTGam_BHSA'],$_SESSION['RTGamTraffPR']),3);
$RTGamBHTput_dl=$_SESSION['RTGamBHTput_dl'] = round(busyhourperthroughput ($_SESSION['RTGamdps_dl'],$_SESSION['RTGam_BHSA'],$_SESSION['RTGamTraffPR']),3);
$StreamMedBHTput_up=$_SESSION['StreamMedBHTput_up'] =round(busyhourperthroughput ($_SESSION['StreamMeddps_up'],$_SESSION['StreamMed_BHSA'],$_SESSION['StreamMedTraffPR']),3);
$StreamMedBHTput_dl=$_SESSION['StreamMedBHTput_dl'] =round(busyhourperthroughput ($_SESSION['StreamMeddps_dl'],$_SESSION['StreamMed_BHSA'],$_SESSION['StreamMedTraffPR']),3);
$IMSBHTput_up=$_SESSION['IMSBHTput_up'] = round(busyhourperthroughput ($_SESSION['IMSdps_up'],$_SESSION['IMS_BHSA'],$_SESSION['IMSTraffPR']),3);
$IMSBHTput_dl=$_SESSION['IMSBHTput_dl'] = round(busyhourperthroughput ($_SESSION['IMSdps_dl'],$_SESSION['IMS_BHSA'],$_SESSION['IMSTraffPR']),3);
 $WebBHTput_up=$_SESSION['WebBHTput_up'] = round(busyhourperthroughput ($_SESSION['Webdps_up'],$_SESSION['Web_BHSA'],$_SESSION['WebTraffPR']),3);
  $WebBHTput_dl=$_SESSION['WebBHTput_dl'] = round(busyhourperthroughput ($_SESSION['Webdps_dl'],$_SESSION['Web_BHSA'],$_SESSION['WebTraffPR']),3);
  $FileBHTput_up=$_SESSION['FileBHTput_up'] = round(busyhourperthroughput ($_SESSION['Filedps_up'],$_SESSION['File_BHSA'],$_SESSION['FileTraffPR']),3);
 $FileBHTput_dl= $_SESSION['FileBHTput_dl'] = round(busyhourperthroughput ($_SESSION['Filedps_dl'],$_SESSION['File_BHSA'],$_SESSION['FileTraffPR']),3);
  $EmailBHTput_up=$_SESSION['EmailBHTput_up'] = round(busyhourperthroughput ($_SESSION['Emaildps_up'],$_SESSION['Email_BHSA'],$_SESSION['EmailTraffPR']),3);
  $EmailBHTput_dl=$_SESSION['EmailBHTput_dl'] = round(busyhourperthroughput ($_SESSION['Emaildps_dl'],$_SESSION['Email_BHSA'],$_SESSION['EmailTraffPR']),3);
  $P2PfileBHTput_up=$_SESSION['P2PfileBHTput_up'] = round(busyhourperthroughput ($_SESSION['P2Pfiledps_up'],$_SESSION['P2Pfile_BHSA'],$_SESSION['P2PfileTraffPR']),3);
 $P2PfileBHTput_dl= $_SESSION['P2PfileBHTput_dl'] = round(busyhourperthroughput ($_SESSION['P2Pfiledps_dl'],$_SESSION['P2Pfile_BHSA'],$_SESSION['P2PfileTraffPR']),3);

  //single  user throughput
  $_SESSION['singleuserthput_up'] = round(($VOIPBHTput_up + $VIDPhBHTput_up +$VIDConBHTput_up +$RTGamBHTput_up +$IMSBHTput_up+ $StreamMedBHTput_up +$WebBHTput_up +$FileBHTput_up +$EmailBHTput_up +$P2PfileBHTput_up )*(1+$_SESSION['PTAR']),3);

  $_SESSION['singleuserthput_dl'] = round(($VOIPBHTput_dl + $VIDPhBHTput_dl +$VIDConBHTput_dl +$RTGamBHTput_dl +$IMSBHTput_dl+ $StreamMedBHTput_dl +$WebBHTput_dl +$FileBHTput_dl +$EmailBHTput_dl +$P2PfileBHTput_dl )*(1+$_SESSION['PTAR']),3);

  //saving the trafic parameters
//INSERT INTO `traffic_model`(`Traffic_model_ID`, `ProjectID`, `VOIPBHTpS_up`, `VOIPBHTpS_dl`, `EmailBHTpS_dl`, `EmailBHTpS_up`, `vidphoneBHTpS_up`, `vidphoneBHTpS_dl`, `RTgamingBHTpS_up`, `RTgamingBHTpS_dl`, `streamingMedBHTpS_up`, `streamingMedBHTpS_dl`, `IMSBHTpS_up`, `IMSBHTpS_dl`, `WebBHTpS_up`, `WebBHTpS_dl`, `FiletransBHTpS_up`, `FiletransBHTpS_dl`, `singleuser_throughput_up`, `singleuser_throughput_dl`, `singleuser_throughput_IPTV`, `IPTV_definition`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22])
   $del5= "DELETE FROM traffic_model WHERE (ProjectID='".$_SESSION['ProjectID']."')";
 $del5check = mysqli_query($connect, $del5);
   $sql5 ="INSERT INTO traffic_model(Traffic_model_ID, ProjectID,VOIPBHTpS_up,VOIPBHTpS_dl, EmailBHTpS_dl, EmailBHTpS_up, vidphoneBHTpS_up, vidphoneBHTpS_dl, VIDConBHTpS_up, VIDConBHTpS_dl, RTgamingBHTpS_up,RTgamingBHTpS_dl,streamingMedBHTpS_up,streamingMedBHTpS_dl,IMSBHTpS_up,IMSBHTpS_dl,WebBHTpS_up,WebBHTpS_dl,FiletransBHTpS_up,FiletransBHTpS_dl,singleuser_throughput_up,singleuser_throughput_dl,singleuser_throughput_IPTV,IPTV_definition ) VALUES ('','".$_SESSION['ProjectID']."','$VOIPBHTput_up','$VOIPBHTput_dl','$EmailBHTput_dl','$EmailBHTput_up','$VIDPhBHTput_up','$VIDPhBHTput_dl','$VIDConBHTput_up','$VIDConBHTput_dl','$RTGamBHTput_up','$RTGamBHTput_dl','$StreamMedBHTput_up','$StreamMedBHTput_dl','$IMSBHTput_up','$IMSBHTput_dl','$WebBHTput_up','$WebBHTput_dl','$FileBHTput_up','$FileBHTput_dl','".$_SESSION['singleuserthput_up']."','".$_SESSION['singleuserthput_dl']."','','')";
   $sql5check = mysqli_query($connect, $sql5);


}
  //if(isset($_POST['VALIDATE_Capacity_Results'])){}


//DEFAULT VALUES FOR SERVICE MODEL
 if(isset($_POST['service_Defaultvalues']))
 {


        $_POST['VOIPBR_dl']=$_POST['VOIPBR_up']="26.90";
        $_POST['VOIPPPST_dl']=$_POST['VOIPPPST_up']="80";
         $_POST['VOIPPPSDR_dl']=$_POST['VOIPPPSDR_up']="0.4";
          $_POST['VOIPBLER_dl']=$_POST['VOIPBLER_up']="1";

        $_POST['VIDPhBR_dl']=$_POST['VIDPhBR_up']="62.53";
        $_POST['VIDPhPPST_dl']=$_POST['VIDPhPPST_up']="70";
         $_POST['VIDPhPPSDR_dl']=$_POST['VIDPhPPSDR_up']="1";
          $_POST['VIDPhBLER_dl']=$_POST['VIDPhBLER_up']="1";

        $_POST['VIDConBR_dl']=$_POST['VIDConBR_up']="62.53";
        $_POST['VIDConPPST_dl']=$_POST['VIDConPPST_up']="1800";
         $_POST['VIDConPPSDR_dl']=$_POST['VIDConPPSDR_up']="1";
          $_POST['VIDConBLER_dl']=$_POST['VIDConBLER_up']="1";

        $_POST['RTGamBR_dl']="125.06";$_POST['RTGamBR_up']="31.26";
        $_POST['RTGamPPST_dl']=$_POST['RTGamPPST_up']="1800";
         $_POST['RTGamPPSDR_dl']="0.4";$_POST['RTGamPPSDR_up']="0.2";
          $_POST['RTGamBLER_dl']=$_POST['RTGamBLER_up']="1";

       $_POST['StreamMedBR_dl']="251.11";$_POST['StreamMedBR_up']="31.26";
        $_POST['StreamMedPPST_dl']=$_POST['StreamMedPPST_up']="3600";
         $_POST['StreamMedPPSDR_dl']="0.95";$_POST['StreamMedPPSDR_up']="0.05";
          $_POST['StreamMedBLER_dl']=$_POST['StreamMedBLER_up']="1";

          $_POST['IMSBR_dl']=$_POST['IMSBR_up']="15.63";
        $_POST['IMSPPST_dl']=$_POST['IMSPPST_up']="7";
         $_POST['IMSPPSDR_dl']="0.2";$_POST['IMSPPSDR_up']="0.2";
          $_POST['IMSBLER_dl']=$_POST['IMSBLER_up']="1";

      $_POST['WebBR_dl']="251.11";$_POST['WebBR_up']="62.53";
        $_POST['WebPPST_dl']=$_POST['WebPPST_up']="1800";
         $_POST['WebPPSDR_dl']="0.05"; $_POST['WebPPSDR_up']="0.05";
          $_POST['WebBLER_dl']=$_POST['WebBLER_up']="1";


      $_POST['FileBR_dl']="750.34";$_POST['FileBR_up']="140.69";
        $_POST['FilePPST_dl']=$_POST['FilePPST_up']="600";
         $_POST['FilePPSDR_dl']=$_POST['FilePPSDR_up']="1";
          $_POST['FileBLER_dl']=$_POST['FileBLER_up']="1";

        $_POST['EmailBR_dl']="750.34";$_POST['EmailBR_up']="140.69";
        $_POST['EmailPPST_dl']="15";$_POST['EmailPPST_up']="50";
         $_POST['EmailPPSDR_dl']=$_POST['EmailPPSDR_up']="1";
          $_POST['EmailBLER_dl']=$_POST['EmailBLER_up']="1";

      $_POST['P2PfileBR_dl']="750.34";$_POST['P2PfileBR_up']="250.11";
        $_POST['P2PfilePPST_dl']="1200";$_POST['P2PfilePPST_up']="1200";
         $_POST['P2PfilePPSDR_dl']=$_POST['P2PfilePPSDR_up']="1";
          $_POST['P2PfileBLER_dl']=$_POST['P2PfileBLER_up']="1";

          $_POST['P2PfileBR_dl']="750.34";$_POST['P2PfileBR_up']="250.11";
        $_POST['P2PfilePPST_dl']="1200";$_POST['P2PfilePPST_up']="1200";
         $_POST['P2PfilePPSDR_dl']=$_POST['P2PfilePPSDR_up']="1";
          $_POST['P2PfileBLER_dl']=$_POST['P2PfileBLER_up']="1";


$_SESSION['VOIPBR_up']= $_POST['VOIPBR_up'];
  $_SESSION['VOIPBR_dl']= $_POST['VOIPBR_dl'];
  $_SESSION['VOIPPPST_up']= $_POST['VOIPPPST_up'];
  $_SESSION['VOIPPPST_dl']= $_POST['VOIPPPST_dl'];
  $_SESSION['VOIPPPSDR_up'] =$_POST['VOIPPPSDR_up'];
  $_SESSION['VOIPPPSDR_dl'] =$_POST['VOIPPPSDR_dl'];
  $_SESSION['VOIPBLER_up'] =$_POST['VOIPBLER_up'];
  $_SESSION['VOIPBLER_dl'] =$_POST['VOIPBLER_dl'];

  $_SESSION['VIDPhBR_up'] =$_POST['VIDPhBR_up'] ;
  $_SESSION['VIDPhBR_dl'] =$_POST['VIDPhBR_dl'] ;
  $_SESSION['VIDPhPPST_up'] = $_POST['VIDPhPPST_up'];
  $_SESSION['VIDPhPPST_dl'] = $_POST['VIDPhPPST_dl'];
  $_SESSION['VIDPhPPSDR_up'] =$_POST['VIDPhPPSDR_up'] ;
  $_SESSION['VIDPhPPSDR_dl'] =$_POST['VIDPhPPSDR_dl'] ;
  $_SESSION['VIDPhBLER_up'] = $_POST['VIDPhBLER_up'];
  $_SESSION['VIDPhBLER_dl'] = $_POST['VIDPhBLER_dl'];

    $_SESSION['VIDConBR_up'] = $_POST['VIDConBR_up'];
     $_SESSION['VIDConBR_dl'] = $_POST['VIDConBR_dl'];
    $_SESSION['VIDConPPST_up'] = $_POST['VIDConPPST_up'];
    $_SESSION['VIDConPPST_dl'] = $_POST['VIDConPPST_dl'];
    $_SESSION['VIDConPPSDR_up'] = $_POST['VIDConPPSDR_up'] ;
    $_SESSION['VIDConPPSDR_dl'] = $_POST['VIDConPPSDR_dl'] ;
     $_SESSION['VIDConBLER_up']= $_POST['VIDConBLER_up'];
      $_SESSION['VIDConBLER_dl']= $_POST['VIDConBLER_dl'];

     $_SESSION['RTGamBR_up'] = $_POST['RTGamBR_up'];
     $_SESSION['RTGamBR_dl'] = $_POST['RTGamBR_dl'];
     $_SESSION['RTGamPPST_up'] =  $_POST['RTGamPPST_up']; 
     $_SESSION['RTGamPPST_dl'] =  $_POST['RTGamPPST_dl'];
     $_SESSION['RTGamPPSDR_up']= $_POST['RTGamPPSDR_up'];
     $_SESSION['RTGamPPSDR_dl']= $_POST['RTGamPPSDR_dl'];
     $_SESSION['RTGamBLER_up'] = $_POST['RTGamBLER_up'];
     $_SESSION['RTGamBLER_dl'] = $_POST['RTGamBLER_dl'];

     $_SESSION['StreamMedBR_up'] = $_POST['StreamMedBR_up'];
     $_SESSION['StreamMedBR_dl'] = $_POST['StreamMedBR_dl'];
     $_SESSION['StreamMedPPST_up'] = $_POST['StreamMedPPST_up'];
     $_SESSION['StreamMedPPST_dl'] = $_POST['StreamMedPPST_dl'];
     $_SESSION['StreamMedPPSDR_up'] = $_POST['StreamMedPPSDR_up'];
     $_SESSION['StreamMedPPSDR_dl'] = $_POST['StreamMedPPSDR_dl'];
     $_SESSION['StreamMedBLER_up'] = $_POST['StreamMedBLER_up'];
     $_SESSION['StreamMedBLER_dl'] = $_POST['StreamMedBLER_dl'];

     $_SESSION['IMSBR_up'] = $_POST['IMSBR_up'];
     $_SESSION['IMSBR_dl'] = $_POST['IMSBR_dl'];
     $_SESSION['IMSPPST_up']= $_POST['IMSPPST_up'];
     $_SESSION['IMSPPST_dl']= $_POST['IMSPPST_dl'];
     $_SESSION['IMSPPSDR_up'] = $_POST['IMSPPSDR_up'];
     $_SESSION['IMSPPSDR_dl'] = $_POST['IMSPPSDR_dl'];
     $_SESSION['IMSBLER_up']= $_POST['IMSBLER_up'];
     $_SESSION['IMSBLER_dl']= $_POST['IMSBLER_dl'];


     $_SESSION['WebBR_up'] = $_POST['WebBR_up'];
     $_SESSION['WebBR_dl'] = $_POST['WebBR_dl'];
     $_SESSION['WebPPST_up']= $_POST['WebPPST_up'];
     $_SESSION['WebPPST_dl']= $_POST['WebPPST_dl']; 
     $_SESSION['WebPPSDR_up']= $_POST['WebPPSDR_up'];
     $_SESSION['WebPPSDR_dl']= $_POST['WebPPSDR_dl'];
     $_SESSION['WebBLER_up']= $_POST['WebBLER_up'];
      $_SESSION['WebBLER_dl']= $_POST['WebBLER_dl'];

      $_SESSION['FileBR_up'] = $_POST['FileBR_up']; 
      $_SESSION['FileBR_dl'] = $_POST['FileBR_dl'];
      $_SESSION['FilePPST_up'] = $_POST['FilePPST_up'];
      $_SESSION['FilePPST_dl'] = $_POST['FilePPST_dl'];
      $_SESSION['FilePPSDR_up'] =  $_POST['FilePPSDR_up']; 
       $_SESSION['FilePPSDR_dl'] =  $_POST['FilePPSDR_dl']; 
       $_SESSION['FileBLER_up'] = $_POST['FileBLER_up'];
       $_SESSION['FileBLER_dl'] = $_POST['FileBLER_dl'];

       $_SESSION['EmailBR_up'] = $_POST['EmailBR_up'];
       $_SESSION['EmailBR_dl'] = $_POST['EmailBR_dl'];
       $_SESSION['EmailPPST_up']= $_POST['EmailPPST_up'];
       $_SESSION['EmailPPST_dl']= $_POST['EmailPPST_dl'];
       $_SESSION['EmailPPSDR_up']= $_POST['EmailPPSDR_up'];
       $_SESSION['EmailPPSDR_dl']= $_POST['EmailPPSDR_dl'];
       $_SESSION['EmailBLER_up'] =$_POST['EmailBLER_up'];
       $_SESSION['EmailBLER_dl'] =$_POST['EmailBLER_dl'];

       $_SESSION['P2PfileBR_up']= $_POST['P2PfileBR_up'];
        $_SESSION['P2PfileBR_dl']= $_POST['P2PfileBR_dl'];
        $_SESSION['P2PfilePPST_up']= $_POST['P2PfilePPST_up'];
        $_SESSION['P2PfilePPST_dl']= $_POST['P2PfilePPST_dl'];
        $_SESSION['P2PfilePPSDR_up']= $_POST['P2PfilePPSDR_up'];
        $_SESSION['P2PfilePPSDR_dl']= $_POST['P2PfilePPSDR_dl'];
        $_SESSION['P2PfileBLER_up']= $_POST['P2PfileBLER_up'];
        $_SESSION['P2PfileBLER_dl']= $_POST['P2PfileBLER_dl'];


 }

 if(isset($_POST['traffic_Defaultvalues'])){
  $_POST['VOIPTraffPR'] = "100";
  $_POST['VOIP_BHSA'] = "1.4";

  $_POST['VIDPhTraffPR'] = "20";
  $_POST['VIDPh_BHSA'] = "0.2";

   $_POST['VIDConTraffPR'] = "20";
  $_POST['VIDCon_BHSA'] = "0.2";

   $_POST['RTGamTraffPR'] = "30";
  $_POST['RTGam_BHSA'] = "0.2";

   $_POST['StreamMedTraffPR'] = "15";
  $_POST['StreamMed_BHSA'] = "0.2";

$_POST['IMSTraffPR'] = "40";
  $_POST['IMS_BHSA'] = "5";

  $_POST['WebTraffPR'] = "100";
  $_POST['Web_BHSA'] = "0.6";

  $_POST['FileTraffPR'] = "20";
  $_POST['File_BHSA'] = "0.3";

 $_POST['EmailTraffPR'] = "10";
  $_POST['Email_BHSA'] = "0.4";

   $_POST['P2PfileTraffPR'] = "20";
  $_POST['P2Pfile_BHSA'] = "0.2";


  $_SESSION['VOIPTraffPR'] = $_POST['VOIPTraffPR'];
$_SESSION['VOIP_BHSA'] = $_POST['VOIP_BHSA'];

$_SESSION['VIDPhTraffPR'] = $_POST['VIDPhTraffPR'];
$_SESSION['VIDPh_BHSA'] = $_POST['VIDPh_BHSA'];

$_SESSION['VIDConTraffPR'] = $_POST['VIDConTraffPR'];
$_SESSION['VIDCon_BHSA'] = $_POST['VIDCon_BHSA'];

$_SESSION['RTGamTraffPR'] = $_POST['RTGamTraffPR'];
$_SESSION['RTGam_BHSA'] = $_POST['RTGam_BHSA'];

$_SESSION['StreamMedTraffPR'] = $_POST['StreamMedTraffPR'];
$_SESSION['StreamMed_BHSA'] = $_POST['StreamMed_BHSA'];

$_SESSION['IMSTraffPR'] = $_POST['IMSTraffPR'];
$_SESSION['IMS_BHSA'] = $_POST['IMS_BHSA'];


$_SESSION['WebTraffPR'] = $_POST['WebTraffPR'];
$_SESSION['Web_BHSA'] = $_POST['Web_BHSA'];

 $_SESSION['FileTraffPR'] = $_POST['FileTraffPR'];
$_SESSION['File_BHSA'] = $_POST['File_BHSA'];

$_SESSION['EmailTraffPR'] = $_POST['EmailTraffPR'];
$_SESSION['Email_BHSA'] = $_POST['Email_BHSA'];

$_SESSION['P2PfileTraffPR'] = $_POST['P2PfileTraffPR'];
$_SESSION['P2Pfile_BHSA'] = $_POST['P2Pfile_BHSA'];



 }

 if(isset($_POST['VALIDATE_Caparesult'])){
$_SESSION['IPTVbandwidth']=$_POST['IPTVbandwidth'];
$_SESSION['avcellthrput_dl'] = $_POST['avcellthrput_dl'] ;
$_SESSION['avcellthrput_up'] = $_POST['avcellthrput_up'];
$_SESSION['number_user'] =$_POST['number_user'] ;
$_SESSION['IPTV_user'] = $_POST['IPTV_user'] ;
$_SESSION['sitethrput_dl'] = $_POST['sitethrput_dl'];
 $_SESSION['sitethrput_up'] = $_POST['sitethrput_up'] ;

 $total_throughput_iptv =round( $_SESSION['IPTV_user']*$_SESSION['IPTVbandwidth'] * 1000* $_SESSION['number_user']/100 ,3);

 $total_throughput_dl = round((100-$_SESSION['IPTV_user'])*$_SESSION['singleuserthput_dl'] *$_SESSION['number_user']/100 ,3);
  $total_throughput_up = round((100-$_SESSION['IPTV_user'])*$_SESSION['singleuserthput_up'] *$_SESSION['number_user']/100 ,3);

$_SESSION['Totalnetwrkthrput_dl'] =round( $total_throughput_dl+ $total_throughput_iptv ,3);
$_SESSION['Totalnetwrkthrput_up'] = round( $total_throughput_up ,3);

$_SESSION['Totalnetwrkthrput_MAC_dl'] = round($_SESSION['Totalnetwrkthrput_dl']*100/(98.04*1000),2) ;
 $_SESSION['Totalnetwrkthrput_MAC_up'] = round($_SESSION['Totalnetwrkthrput_up']*100/(98.04*1000),2) ;

$_SESSION['number_enode_dl'] = round( $_SESSION['Totalnetwrkthrput_MAC_dl'] / $_SESSION['sitethrput_dl'],0);
$_SESSION['number_enode_up'] =  round($_SESSION['Totalnetwrkthrput_MAC_up']/ $_SESSION['sitethrput_up'],0) ;
 $_SESSION['number_enode']= max($_SESSION['number_enode_dl'],$_SESSION['number_enode_up']);
 }

  if(isset($_POST['capacity_Defaultvalues'])){
$_SESSION['IPTVbandwidth']=$_POST['IPTVbandwidth'] ='1';
$_SESSION['number_user'] =$_POST['number_user']='10000' ;
$_SESSION['IPTV_user'] = $_POST['IPTV_user']='1' ;


  }



?>