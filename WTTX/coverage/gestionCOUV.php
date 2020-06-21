<?php
include 'connection.php';
?>
<?php
/*defining the coverage and general parameters to be used */
//initialising values 
/*$_SESSION['eNodeBTpower']='';
  $_SESSION['CPETpower']='';
  $_SESSION['eNodeBRB']='';
  $_SESSION['CPERB']='';
$_SESSION['eNodeBsubcarrier']=''; 
 $_SESSION['CPEsubcarrier']=''; 
 $_SESSION['eNodeBgain']='';  
 $_SESSION['CPEgain']='';   
  $_SESSION['CPENoiseF']=''; 
   $_SESSION['eNodeBNoiseF']=''; 
   $_SESSION['eNodeBcableloss']='';       
   $_SESSION['CPEcableloss']='';
  	$_SESSION['eNodeBbodyloss']='';
    $_SESSION['CPEbodyloss']='';
	 $_SESSION['downlinkSFM']='';
	 $_SESSION['uplinkSFM']='';
	 $_SESSION['downlinkIM']='';
	 $_SESSION['uplinkIM']='';
	 $_SESSION['penetrationloss']='' ;
	 /*PROPAGATION PARAMETERS*/        
	/*$_SESSION['propagationModel']='';
	 $_SESSION['eNodeBAntennaHgh']='';
  $_SESSION['CPEAntennaHeight']='';
   $_SESSION['typesite']=''; 
   /*GENERAL PARAMETERS*/
 /*  $_SESSION['zonename'] = '';
 $_SESSION['zonesurfacearea']='';
    $_SESSION['uplinkModulationMode']='';
    $_SESSION['downlinkModulationMode']='';
    $_SESSION['frequency']='';
   $_SESSION['Bandwidth']='';
   //$_SESSION['inputmorphology']='';
   $_SESSION['thermalNoise_dl'] = '';
   $_SESSION['thermalNoise_up'] = '';
  $_SESSION['inputDuplexMode'] ='';
*/
$_SESSION['typesite'] = "trisect";
$_SESSION['inputmorphology'] ="URBAN";

if (isset($_POST['VALIDATE_Coverage'])){
/*COVEERAGE PARAMETERS*/
  $_SESSION['eNodeBTpower']=$_POST['eNodeBTpower'];
  $_SESSION['CPETpower']=$_POST['CPETpower'];
  $_SESSION['eNodeBRB']=$_POST['eNodeBRB'];
  $_SESSION['CPERB']=$_POST['CPERB'];
$_SESSION['eNodeBsubcarrier']=$_POST['eNodeBsubcarrier']; 
 $_SESSION['CPEsubcarrier']=$_POST['CPEsubcarrier']; 
 $_SESSION['eNodeBgain']=$_POST['eNodeBgain'];  
 $_SESSION['CPEgain']=$_POST['CPEgain'];   
  $_SESSION['CPENoiseF']=$_POST['CPENoiseF']; 
   $_SESSION['eNodeBNoiseF']=$_POST['eNodeBNoiseF']; 
   $_SESSION['eNodeBcableloss']=$_POST['eNodeBcableloss'];       
   $_SESSION['CPEcableloss']=$_POST['CPEcableloss'];
  	$_SESSION['eNodeBbodyloss']=$_POST['eNodeBbodyloss'];
    $_SESSION['CPEbodyloss']=$_POST['CPEbodyloss'];
	 $_SESSION['downlinkSFM']=$_POST['downlinkSFM'];
	 $_SESSION['uplinkSFM']=$_POST['uplinkSFM'];
	 $_SESSION['downlinkIM']=$_POST['downlinkIM'];
	 $_SESSION['uplinkIM']=$_POST['uplinkIM'];
	 $_SESSION['penetrationloss']=$_POST['penetrationloss'] ;
	 /*PROPAGATION PARAMETERS*/        
	$_SESSION['propagationModel']=$_POST['propagationModel'];
	 $_SESSION['eNodeBAntennaHgh']=$_POST['eNodeBAntennaHgh'];
  $_SESSION['CPEAntennaHeight']=$_POST['CPEAntennaHeight'];
   $_SESSION['typesite']=$_POST['typesite']; 
   /*GENERAL PARAMETERS*/
   $_SESSION['zonename'] = $_POST['zonename'];
 $_SESSION['zonesurfacearea']=$_POST['zonesurfacearea'];
    $_SESSION['uplinkModulationMode']=$_POST['uplinkModulationMode'];
    $_SESSION['downlinkModulationMode']=$_POST['downlinkModulationMode'];
    $_SESSION['frequency']=$_POST['frequency'];
   $_SESSION['Bandwidth']=$_POST['Bandwidth'];
   $_SESSION['inputmorphology']=$_POST['inputmorphology'];
  $_SESSION['inputDuplexMode']= $_POST['inputDuplexMode'] ;
/*caLculated PARAMETERS*/



      /*calculation of SNIR*/

    switch ($_SESSION['uplinkModulationMode']){
 			case 'QPSK1/3':
 				$_SESSION['snir_up']=-7; 
				break;
 			case 'QPSK1/2':
			$_SESSION['snir_up']=-6.5; 
 				
				break;
			case 'QPSK2/3':
			$_SESSION['snir_up']=-2; 
 				
				break;
			case 'QPSK3/4':
			$_SESSION['snir_up']=4;
 				
				break;
			
		    case '16QAM1/2':
           $_SESSION['snir_up']=6.5; 
 				break;
				
			case '16QAM2/3':
 				$_SESSION['snir_up']=8; 

 				break;
			case '16QAM3/4':
 				$_SESSION['snir_up']=10;

 				break;

 			case '64QAM2/3':
 				 $_SESSION['snir_up']=0;

 				break;
			case '64QAM3/4':
 				 $_SESSION['snir_up']=0;
 				break;
			case'64QAM4/5':
 				 $_SESSION['snir_up']=0;
 				break;
			case'64QAM 2X2 MIMO 3/4':
 				 $_SESSION['snir_up']=0;
 				break;
			case'64QAM 2X2 MIMO 4/4':
 				 $_SESSION['snir_up']=0;
 				break;
			case'64QAM 4X4 MIMO 4/4':
 				 $_SESSION['snir_up']=0;
 				break;
		
			
		
  
}   
		 switch ($_SESSION['downlinkModulationMode']){
		 	case 'QPSK1/3':
 				$_SESSION['snir_dl']=-7; 
				break;
 			case 'QPSK1/2':
			$_SESSION['snir_dl']=-6.5; 
 				
				break;
			case 'QPSK2/3':
			$_SESSION['snir_dl']=-2; 
 				
				break;
			case 'QPSK3/4':
			$_SESSION['snir_dl']=4;
 				
				break;
			
		    case '16QAM1/2':
           $_SESSION['snir_dl']=6.5; 
 				break;
				
			case '16QAM2/3':
 				$_SESSION['snir_dl']=8; 

 				break;
			case '16QAM3/4':
 				$_SESSION['snir_dl']=10;

 				break;

 			case '64QAM2/3':
 				 $_SESSION['snir_dl']=13.5;

 				break;
			case '64QAM3/4':
 				 $_SESSION['snir_dl']=15;
 				break;
			case'64QAM4/5':
 				 $_SESSION['snir_dl']=17;
 				break;
			case'64QAM 2X2 MIMO 3/4':
 				 $_SESSION['snir_dl']=15;
 				break;
			case'64QAM 2X2 MIMO 4/4':
 				 $_SESSION['snir_dl']=18;
 				break;
			case'64QAM 4X4 MIMO 4/4':
 				 $_SESSION['snir_dl']=18.5;
 				break;		
  
} 

                /*calculation of results*/
   /*calculation of EIRP ,RS and thermal  noise */
   $_SESSION['eNodeBsubcarrier']=$_POST['eNodeBRB']*12; 
 $_SESSION['CPEsubcarrier']=$_POST['CPERB']*12;

$_SESSION['thermalNoise_dl']=round(-174+10*log10($_POST['Bandwidth']*1000),3);
$_SESSION['thermalNoise_up']=round(-174+10*log10($_POST['Bandwidth']*1000),3);

$_SESSION['Rsensitivity_dl']=round(-174+10*log10($_POST['Bandwidth']*1000)+$_SESSION['snir_dl']+$_POST['CPENoiseF'],3);
$_SESSION['Rsensitivity_up']=round(-174+10*log10($_POST['Bandwidth']*1000)+$_SESSION['snir_up']+$_POST['eNodeBNoiseF'],3);



$_SESSION['EIRP_up']= round($_POST['CPETpower']-10*log10($_SESSION['CPEsubcarrier'])+$_POST['CPEgain']-$_POST['CPEcableloss']-$_POST['CPEbodyloss'],3);
  $_SESSION['EIRP_dl']=round($_POST['eNodeBTpower']-10*log10($_SESSION['eNodeBsubcarrier']) +$_POST['eNodeBgain']-$_POST['eNodeBcableloss']-$_POST['eNodeBbodyloss'],3);

/*Minimum signal reception strength MSRS*/

$_SESSION['MSRS_dl'] = $_SESSION['Rsensitivity_dl'] -$_POST['CPEgain']+$_POST['CPEcableloss']+$_POST['CPEbodyloss'] +$_POST['downlinkIM'] ;

$_SESSION['MSRS_up'] = $_SESSION['Rsensitivity_up'] -$_POST['eNodeBgain']+$_POST['eNodeBcableloss']+$_POST['eNodeBbodyloss'] + $_POST['uplinkIM'] ;

/*calculation of pathloss*/

 $_SESSION['pathloss_up'] = round($_SESSION['EIRP_up']-$_SESSION['MSRS_up']-$_POST['penetrationloss']-$_POST['uplinkSFM'],3);
 $_SESSION['pathloss_dl'] = round($_SESSION['EIRP_dl']-$_SESSION['MSRS_dl']-$_POST['penetrationloss']-$_POST['downlinkSFM'],3);


 /*CALCULATION OF RADIUS THE PROPAGATION MODEL FUNCTIONS */

 if(($_SESSION['inputmorphology']=="DENSE URBAN")){ $index=0;}
if(($_SESSION['inputmorphology']=="URBAN")){$index=1;}
if(($_SESSION['inputmorphology']=="SUBURBAN")){$index=2;}
if($_SESSION['inputmorphology']=="RURAL"){$index=3;}

//-------------------------------DEFINITION of the  okumura-hata and  cost231-hata functions--------------------------------------------------------------------------------
function okumurahata($Lv, $f, $hb, $hm,$index)
{
if ($index==0){
    if ($f<300){
      $E = (log(1.54*$hm) / log(10));
       $Ch=8.29*pow($E,2)-1.11;
	   $A =$Lv - 69.55 - 26.16 * (log($f) / log(10)) + 13.82 * (log($hb) / log(10))+$Ch;
$B = 44.9 - (6.55 * log($hb) / log(10));
$C = $A/$B;
       $r = pow(10,$C);
	   return $r;
	   }
	   
    else{
       $E = (log(11.75*$hm) / log(10));
       $Ch=3.2*pow($E,2)-4.97;
	   $A =$Lv - 69.55 - 26.16 * (log($f) / log(10)) + 13.82 * (log($hb) / log(10))+$Ch;
$B = 44.9 - (6.55 * log($hb) / log(10));
$C = $A/$B;
	   $r = pow(10,$C);
	    return $r;}
}		
if ($index==1){
		$Ch = (1.1 * (log($f) / log(10)) - 0.7) * $hm - (1.56 *(log($f) / log(10)) - 0.8);
		$A =$Lv - 69.55 - 26.16 * (log($f) / log(10)) + 13.82 * (log($hb) / log(10))+$Ch;
$B = 44.9 - (6.55 * log($hb) / log(10));
$C = $A/$B;
		$r = pow(10,$C);
		 return $r;
		}
if ($index==2){
		$i = 2 * pow(log($f / 28) / log(10), 2) + 5.4;
		$Ch = (1.1 * (log($f) / log(10)) - 0.7) * $hm - (1.56 *(log($f) / log(10)) - 0.8);
		$A =$Lv - 69.55 - 26.16 * (log($f) / log(10)) + 13.82 * (log($hb) / log(10))+$Ch;
		$B = 44.9 - (6.55 * log($hb) / log(10));
		$r=pow(10,(($A+$i)/$B));
		 return $r;
		 }
		 
if ($index==3){
		$D = -4.78 * pow(log($f ) / log(10), 2) + 18.33 * log($f ) / log(10) - 40.94;
		$E = (log(11.75*$hm) / log(10));
		 $Ch=3.2*pow($E,2)-4.97;
		$A =$Lv - 69.55 - 26.16 * (log($f) / log(10)) + 13.82 * (log($hb) / log(10))+$Ch;
		$B = 44.9 - (6.55 * log($hb) / log(10));

		$r=pow(10,(($A-$D)/$B));
		 return $r;
		}
}
function costhata($Lv, $f, $hb, $hm,$index)
{
	$F = 46.3 + (33.9 * log($f) / log(10)) - 13.82 * (log($hb) / log(10));
	$B = 44.9 - (6.55 * log($hb) / log(10));
	$E = (log(11.75*$hm) / log(10));
	 $Ch=3.2*pow($E,2)-4.97;

if (($index==0)){
		$G = 3;
        $r=pow(10,(($Lv+$Ch-$G-$F)/$B));
		 return $r;	
		 }	
else {
	   $G = 0;
	   
	   $r=pow(10,(($Lv+$Ch-$G-$F)/$B));
	    return $r;
}		

}

/*WITH RESPECT TO THE CHOSEN PROPAGATION MODEL WE WILL CALCULATE THE RADIUS*/
if ($_SESSION['propagationModel'] == "OKUMURA-HATA"){
$_cellrad_up= round(okumurahata($_SESSION['pathloss_up'],$_SESSION['frequency'],$_SESSION['eNodeBAntennaHgh'],$_SESSION['CPEAntennaHeight'],$index),2);
$_cellrad_dl=round(okumurahata($_SESSION['pathloss_dl'],$_SESSION['frequency'],$_SESSION['eNodeBAntennaHgh'],$_SESSION['CPEAntennaHeight'],$index),2);

}
if ($_SESSION['propagationModel'] == "COST231-HATA"){
$_cellrad_up=round(costhata($_SESSION['pathloss_up'],$_SESSION['frequency'],$_SESSION['eNodeBAntennaHgh'],$_SESSION['CPEAntennaHeight'],$index),2);
$_cellrad_dl=round(costhata($_SESSION['pathloss_dl'],$_SESSION['frequency'],$_SESSION['eNodeBAntennaHgh'],$_SESSION['CPEAntennaHeight'],$index),2);
}
 /*calculating the number of enodeB */
 $_SESSION['cellradius_up']= $_cellrad_up;
  $_SESSION['cellradius_dl']= $_cellrad_dl;
  $_SESSION["cellradius"] = min($_SESSION['cellradius_up'],$_SESSION['cellradius_dl']) ;
 $rf_dl = $_SESSION['cellradius_dl']*$_SESSION['cellradius_dl'] ; /*square of radius*/
 $rf_up = $_SESSION['cellradius_up']*$_SESSION['cellradius_up'] ;
if ($_SESSION['typesite']=="omni") {
 $_SESSION['cellarea_up'] = round(2.6*$rf_up,2) ;
$_SESSION['cellarea_dl'] = 2.6*$rf_dl ;
$_SESSION['numsite_dl'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_dl'],0);
$_SESSION['numsite_up'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_up'],0);
$_SESSION['numsite'] =max($_SESSION['numsite_dl'] , $_SESSION['numsite_up']);

}
if ($_SESSION['typesite']=="Bisect") {
 $_SESSION['cellarea_up'] = round(1.3*2.6*$rf_up,2) ;
$_SESSION['cellarea_dl'] = round(1.3*2.6*$rf_dl,2) ;
$_SESSION['numsite_dl'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_dl'],0);
$_SESSION['numsite_up'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_up'],0);
$_SESSION['numsite'] =max($_SESSION['numsite_dl'] , $_SESSION['numsite_up']);

}
if ($_SESSION['typesite']=="trisect") {
 $_SESSION['cellarea_up'] = round(1.95*2.6*$rf_up,3);
$_SESSION['cellarea_dl'] =round(1.95*2.6*$rf_dl,3) ;
$_SESSION['numsite_dl'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_dl'],0);
$_SESSION['numsite_up'] =round($_SESSION['zonesurfacearea']/$_SESSION['cellarea_up'],0);
$_SESSION['numsite'] =max($_SESSION['numsite_dl'] , $_SESSION['numsite_up']);

}


/*inserting the general parameters into the database */
 $del1= "DELETE FROM general parameters WHERE (ProjectID='".$_SESSION['ProjectID']."')";
 $del1check = mysqli_query($connect, $del1);
   $sql1= "INSERT INTO general parameters(GparametersID, ProjectID, duplex mode, Frequency, zone surface area, morphology, channel Bandwidth, uplinkModulation mode, downlinkModulation mo , typesite) VALUES ('','".$_SESSION['ProjectID']."','".$_SESSION['inputDuplexMode']."','".$_SESSION['frequency']."','".$_SESSION['zonesurfacearea']."','".$_SESSION['inputmorphology']."','".$_SESSION['Bandwidth']."','".$_SESSION['uplinkModulationMode']."','".$_SESSION['downlinkModulationMode']."', '".$_SESSION['typesite']."')";
   $sql1check = mysqli_query($connect, $sql1);
   //coverage parameters and path loss
   $del2= "DELETE FROM coverage_paramaters WHERE (ProjectID='".$_SESSION['ProjectID']."')";
 $del2check = mysqli_query($connect, $del2);
   $sql2 = "INSERT INTO coverage_paramaters(CovParamID,ProjectID,power_up,power_dl,Resourceblock_up, Resourceblock_dl,subcarrier_up,subcarrier_dl,shadow_up,shadow_dl,gain_emission_TX, gain_emission_RX,noise_TX,noise_RX,thernalNoise_TX,thernalNoise_RX,body_loss_TX,body_loss_RX, cable_loss_TX, cable_loss_RX, inter_up, inter_dl, snir_up, snir_dl, MRSignal_strength_up, MRSignal_strength_dl, penetration_loss, Pathlloss_up, Pathlloss__dl, Rsensitivity_up, Rsensitvity_dl, EIRP_up, EIRP_dl) VALUES ('','".$_SESSION['ProjectID']."','".$_SESSION['CPETpower']."','".$_SESSION['eNodeBTpower']."','".$_SESSION['CPERB']."','".$_SESSION['eNodeBRB']."','".$_SESSION['CPEsubcarrier']."','".$_SESSION['eNodeBsubcarrier']."','".$_SESSION['uplinkSFM']."','".$_SESSION['downlinkSFM']."','".$_SESSION['eNodeBgain']."','".$_SESSION['CPEgain']."','".$_SESSION['eNodeBNoiseF']."','".$_SESSION['CPENoiseF']."','".$_SESSION['thermalNoise_up']."','".$_SESSION['thermalNoise_dl']."','".$_SESSION['eNodeBbodyloss']."','".$_SESSION['CPEbodyloss']."','".$_SESSION['eNodeBcableloss']."','".$_SESSION['CPEcableloss']."','".$_SESSION['uplinkIM']."','".$_SESSION['downlinkIM']."','".$_SESSION['snir_up']."','".$_SESSION['snir_dl']."','".$_SESSION['MSRS_up']."','".$_SESSION['MSRS_dl']."','".$_SESSION['penetrationloss']."','".$_SESSION['pathloss_up']."','".$_SESSION['pathloss_dl']."''".$_SESSION['Rsensitivity_up']."','".$_SESSION['Rsensitivity_dl']."','".$_SESSION['EIRP_up']."','".$_SESSION['EIRP_dl']."')";
   $sql2check = mysqli_query($connect, $sql2);

    // save propagation model parameters 
   $del3= "DELETE FROM propagation parameters WHERE (ProjectID='".$_SESSION['ProjectID']."')";
 $del3check = mysqli_query($connect, $del3);
   $propagationModel=$_SESSION['propagationModel'] ;
   $p_id= $_SESSION["ProjectID"];
   $antennaheight_TX =$_SESSION['eNodeBAntennaHgh'] ;
   $antennaheight_RX =$_SESSION['CPEAntennaHeight'] ;
   $sql3 = "INSERT INTO propagation parameters(PropParamID, ProjectID, Propa_Model, antennaheight_TX, antennaheight_RX) VALUES ('','".$_SESSION['ProjectID']."','".$_SESSION['propagationModel']."','".$_SESSION['eNodeBAntennaHgh']."','".$_SESSION['CPEAntennaHeight']."')";
   $sql3check = mysqli_query($connect, $sql3);



   //SAVE results
 $del4= "DELETE FROM coverage_results WHERE (ProjectID='".$_SESSION['ProjectID']."')";
 $del4check = mysqli_query($connect, $del4);
   $sql4 ="INSERT INTO coverage_results(CovResultID, ProjectID,ZONE, Morphology, typesite,cell_radius_up, cell_radius_dl, cell_area_up, cell_area_dl, enodeB_up, enodeB_dl, enode) VALUES ('','".$_SESSION['ProjectID']."','".$_SESSION['zonename']."','".$_SESSION['inputmorphology']."','".$_SESSION['typesite']."','".$_SESSION['cellradius_up']."','".$_SESSION['cellradius_dl']."','".$_SESSION['cellarea_up']."','".$_SESSION['cellarea_dl']."','".$_SESSION['numsite_up']."','".$_SESSION['numsite_dl']."','".$_SESSION['numsite']."')";
   $sql4check = mysqli_query($connect, $sql4);


//$inputparameters = "INSERT INTO users (FirstName, lastName, Password,Email ) VALUES ('$firstName', '$lastName', '$encryptPwd', '$email')";//
}

if(isset($_POST["coverage_Defaultvalues"])){

$_POST['eNodeBTpower']="46";
  $_POST['CPETpower']="23";
 $_POST['eNodeBRB']="100";
 $_POST['CPERB']="4"; 
 $_POST['eNodeBgain']="18";  
$_POST['CPEgain']="0";   
$_POST['CPENoiseF']="7"; 
 $_POST['eNodeBNoiseF']="2.5"; 
$_POST['eNodeBcableloss']="0.5";     
$_POST['CPEcableloss']="0";
 $_POST['eNodeBbodyloss']="0";
 $_POST['CPEbodyloss']="0";
$_POST['downlinkSFM']= "1.8";//"9.48";
$_POST['uplinkSFM']="1.8";//"9.48";
$_POST['downlinkIM']="0.87";//"3.67";
$_POST['uplinkIM']="3.67";
$_POST['penetrationloss']="10";//"20";
	 /*PROPAGATION PARAMETERS*/        
$_POST['propagationModel']="COST231-HATA";
$_POST['eNodeBAntennaHgh']="30";
 $_POST['CPEAntennaHeight']="1.5";
  $_POST['typesite']="trisect"; 
   /*GENERAL PARAMETERS*/
 $_POST['zonesurfacearea']="83";//"183";
  $_POST['zonename']="Nomayos";//"Yaounde";
  $_POST['uplinkModulationMode']="QPSK2/3";
  $_POST['downlinkModulationMode']="QPSK2/3";
  $_POST['frequency']="1800";
  $_POST['Bandwidth']="20";
  $_POST[' inputmorphology']="RURAL";//"URBAN";
$_POST['inputDuplexMode']="FDD";

  $_SESSION['eNodeBTpower']=$_POST['eNodeBTpower'];
  $_SESSION['CPETpower']=$_POST['CPETpower'];
  $_SESSION['eNodeBRB']=$_POST['eNodeBRB'];
  $_SESSION['CPERB']=$_POST['CPERB'];
$_SESSION['eNodeBsubcarrier']=$_POST['eNodeBsubcarrier']; 
 $_SESSION['CPEsubcarrier']=$_POST['CPEsubcarrier']; 
 $_SESSION['eNodeBgain']=$_POST['eNodeBgain'];  
 $_SESSION['CPEgain']=$_POST['CPEgain'];   
  $_SESSION['CPENoiseF']=$_POST['CPENoiseF']; 
   $_SESSION['eNodeBNoiseF']=$_POST['eNodeBNoiseF']; 
   $_SESSION['eNodeBcableloss']=$_POST['eNodeBcableloss'];       
   $_SESSION['CPEcableloss']=$_POST['CPEcableloss'];
  	$_SESSION['eNodeBbodyloss']=$_POST['eNodeBbodyloss'];
    $_SESSION['CPEbodyloss']=$_POST['CPEbodyloss'];
	 $_SESSION['downlinkSFM']=$_POST['downlinkSFM'];
	 $_SESSION['uplinkSFM']=$_POST['uplinkSFM'];
	 $_SESSION['downlinkIM']=$_POST['downlinkIM'];
	 $_SESSION['uplinkIM']=$_POST['uplinkIM'];
	 $_SESSION['penetrationloss']=$_POST['penetrationloss'] ;
	 /*PROPAGATION PARAMETERS*/        
	$_SESSION['propagationModel']=$_POST['propagationModel'];
	 $_SESSION['eNodeBAntennaHgh']=$_POST['eNodeBAntennaHgh'];
  $_SESSION['CPEAntennaHeight']=$_POST['CPEAntennaHeight'];
   $_SESSION['typesite']=$_POST['typesite']; 
   /*GENERAL PARAMETERS*/
   $_SESSION['zonename'] = $_POST['zonename'];
 $_SESSION['zonesurfacearea']=$_POST['zonesurfacearea'];
    $_SESSION['uplinkModulationMode']=$_POST['uplinkModulationMode'];
    $_SESSION['downlinkModulationMode']=$_POST['downlinkModulationMode'];
    $_SESSION['frequency']=$_POST['frequency'];
   $_SESSION['Bandwidth']=$_POST['Bandwidth'];
   $_SESSION['inputmorphology']=$_POST['inputmorphology'];
  
}


?>
