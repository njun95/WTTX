
<form  method="post" action="#">
              <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
               <tr bgcolor="coral">
                <th width="30">General Parameters</th>
                <th width="30">Downlink</th> 
                <th width="30">Uplink</th>
              </tr>
              <tbody>
                <tr height ="2px">
                <th>Zone of interest</th>
                <div class="form-group">
                <th> <input type="text" name ="zonename" id="zonename" value="<?php if(isset($_SESSION['zonename'])) echo $_SESSION['zonename']; ?>"class="form-control"   size="5"></th>
              </div> 
                </tr>
                <tr height ="2px">
                <th>Target Surface area(km2)</th>
                <div class="form-group">
                <th> <input type="text" name ="zonesurfacearea" id="zonesurfacearea" value="<?php if(isset($_SESSION['zonesurfacearea'])) echo $_SESSION['zonesurfacearea']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="zonesurfacearea"id="zonesurfacearea" value="<?php if(isset($_SESSION['zonesurfacearea'])) echo $_SESSION['zonesurfacearea']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                 <tr>
                <th>Morphology</th>
              <div class="form-group">
                <th> <select name="inputmorphology" id="inputmorphology" value="<?php if(isset($_SESSION["inputmorphology"])) echo $_SESSION["inputmorphology"]; ?>" class="form-control">
                  <option value="RURAL" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='RURAL')echo " selected";}?>>RURAL</option>
                  <option value="DENSE URBAN"<?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='DENSE URBAN')echo " selected";}?> >DENSE URBAN</option>
                  <option value="URBAN" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='URBAN')echo " selected";}?>>URBAN</option>
                  <option value="SUBURAN" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='SUBURBAN')echo " selected";}?> >SUBURBAN</option>
                  
                </select>
                </th>
              <div class="form-group">
                <th> <select name="inputmorphology" id="inputmorphology" value="<?php if(isset($_SESSION['inputmorphology'])) echo $_SESSION['inputmorphology']; ?>" class="form-control">
                  <option value="RURAL" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='RURAL')echo " selected";}?>>RURAL</option>
                    <option value="DENSE URBAN"<?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='DENSE URBAN')echo " selected";}?> >DENSE URBAN</option>
                  <option value="URBAN" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='URBAN')echo " selected";}?>>URBAN</option>
                  <option value="SUBURAN" <?php if(isset($_SESSION["inputmorphology"])) {if($_SESSION["inputmorphology"]=='SUBURBAN')echo " selected";}?> >SUBURBAN</option>
                  
                </select>
                </th>
              </div>
                </tr> 
                <tr>
                <th>Duplex Mode</th>
              <div class="form-group">
                <th> <select name="inputDuplexMode" id="inputDuplexMode" value="<?php if(isset($_SESSION['inputDuplexMode'])) echo $_SESSION['inputDuplexMode']; ?>" class="form-control">
                  <option value="FDD" <?php if(isset($_SESSION["inputDuplexMode"])) {if($_SESSION["inputDuplexMode"]=='FDD')echo " selected";}?>>FDD</option>
                  <option value="TDD" <?php if(isset($_SESSION["inputDuplexMode"])) {if($_SESSION["inputDuplexMode"]=='TDD')echo " selected";}?>>TDD</option>
            
                </select>
                </th>
              <div class="form-group">
                <th> <select name="inputDuplexMode" id="inputDuplexMode"  value="<?php if(isset($_SESSION['inputDuplexMode'])) echo $_SESSION['inputDuplexMode']; ?>"class="form-control">
                  <option value="FDD" <?php if(isset($_SESSION["inputDuplexMode"])) {if($_SESSION["inputDuplexMode"]=='FDD')echo " selected";}?>>FDD</option>
                  <option value="TDD" <?php if(isset($_SESSION["inputDuplexMode"])) {if($_SESSION["inputDuplexMode"]=='TDD')echo " selected";}?>>TDD</option>
                  
                </select>
                </th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Channel Bandwidth(MHz)</th>
                <div class="form-group">
                <th> <input type="text" name="Bandwidth" id="Bandwidth"  value="<?php if(isset($_SESSION['Bandwidth'])) echo $_SESSION['Bandwidth']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name="Bandwidth" id="Bandwidth" value="<?php if(isset($_SESSION['Bandwidth'])) echo $_SESSION['Bandwidth']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Carrier Frequency(MHz)</th>
                <div class="form-group">
                <th> <input type="text" name="frequency" id="frequency" value="<?php if(isset($_SESSION['frequency'])) echo $_SESSION['frequency']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name="frequency" id="frequency"  value="<?php if(isset($_SESSION['frequency'])) echo $_SESSION['frequency']; ?>"class="form-control"  size="5"></th>
              </div>
                </tr> 
                <tr>
                <th>Modulation Mode</th>
              <div class="form-group">
                <th> <select name="downlinkModulationMode" id="downlinkModulationMode" value="<?php if(isset($_SESSION['downlinkModulationMode'])) echo $_SESSION['downlinkModulationMode']; ?>" class="form-control">
                <optgroup   label="QPSK">
                 <option value="QPSK1/3" <?php if(isset($_SESSION['downlinkModulationMode'])) {if($_SESSION['downlinkModulationMode']=='QPSK1/3')echo " selected";}?>>QPSK1/3</option>
                  <option value="QPSK1/2"<?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='QPSK1/2')echo " selected";}?>>QPSK1/2</option>
                    <option value="QPSK2/3" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='QPSK2/3')echo " selected";}?>>QPSK2/3</option>
                    <option value="QPSK3/4" <?php if(isset($_SESSION["downlinkModulationMode'"])) {if($_SESSION["downlinkModulationMode"]=='QPSK3/4')echo " selected";}?>>QPSK3/4</option>
                       </optgroup>
                      <optgroup  title="16QAM" label="16QAM">
                        <option value="16QAM1/2" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='16QAM1/2')echo " selected";}?>>16QAM1/2</option>
                        <option value="16QAM2/3" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='16QAM2/3')echo " selected";}?>>16QAM2/3 </option>
                       <option value="16QAM3/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='16QAM3/4')echo " selected";}?>>16QAM3/4</option>
                        <option value="16QAM4/5" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='16QAM4/5')echo " selected";}?>>16QAM4/5</option>

                </optgroup>

                <optgroup  title="64QAM" label="64QAM">
<option value="64QAM2/3"<?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM2/3')echo " selected";}?>>64QAM2/3</option>
<option value="64QAM3/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM3/4')echo " selected";}?>>64QAM3/4</option>
<option value="64QAM4/5" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM4/5')echo " selected";}?>>64QAM4/5</option>
<option value="64QAM5/6" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM5/6')echo " selected";}?>>64QAM5/6</option>
<option value="64QAM4/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM4/4')echo " selected";}?>>64QAM4/4</option>
<option value="64QAM 2X2 MIMO 3/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM 2X2 MIMO 3/4')echo " selected";}?>>64QAM 2X2 MIMO 3/4</option>
<option value="64QAM 2X2 MIMO 4/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM 2X2 MIMO 4/4')echo " selected";}?>>64QAM 2X2 MIMO 4/4</option>
<option value="64QAM 4X4 MIMO 4/4" <?php if(isset($_SESSION["downlinkModulationMode"])) {if($_SESSION["downlinkModulationMode"]=='64QAM 4X4 MIMO 4/4')echo " selected";}?>>64QAM 4X4 MIMO 4/4</option>

</optgroup>
                </select>
                </th>
              <div class="form-group">
                <th> <select name="uplinkModulationMode" id="uplinkModulationMode" value="<?php if(isset($_SESSION['uplinkModulationMode'])) echo $_SESSION['uplinkModulationMode']; ?>" class="form-control">
                 <optgroup   label="QPSK">

<option value="QPSK1/3" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='QPSK1/3')echo " selected";}?>>QPSK1/3</option>
                  <option value="QPSK1/2"<?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='QPSK1/2')echo " selected";}?>>QPSK1/2</option>
                    <option value="QPSK2/3" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='QPSK2/3')echo " selected";}?>>QPSK2/3</option>
                    <option value="QPSK3/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='QPSK3/4')echo " selected";}?>>QPSK3/4</option>
                       </optgroup>
                      <optgroup  title="16QAM" label="16QAM">
                        <option value="16QAM1/2" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='16QAM1/2')echo " selected";}?>>16QAM1/2</option>
                        <option value="16QAM2/3" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='16QAM2/3')echo " selected";}?>>16QAM2/3 </option>
                       <option value="16QAM3/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='16QAM3/4')echo " selected";}?>>16QAM3/4</option>
                        <option value="16QAM4/5" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='16QAM4/5')echo " selected";}?>>16QAM4/5</option>

                </optgroup>

                <optgroup  title="64QAM" label="64QAM">
<option value="64QAM2/3"<?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM2/3')echo " selected";}?>>64QAM2/3</option>
<option value="64QAM3/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM3/4')echo " selected";}?>>64QAM3/4</option>
<option value="64QAM4/5" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM4/5')echo " selected";}?>>64QAM4/5</option>
<option value="64QAM5/6" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM5/6')echo " selected";}?>>64QAM5/6</option>
<option value="64QAM4/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM4/4')echo " selected";}?>>64QAM4/4</option>
<option value="64QAM 2X2 MIMO 3/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM 2X2 MIMO 3/4')echo " selected";}?>>64QAM 2X2 MIMO 3/4</option>
<option value="64QAM 2X2 MIMO 4/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM 2X2 MIMO 4/4')echo " selected";}?>>64QAM 2X2 MIMO 4/4</option>
<option value="64QAM 4X4 MIMO 4/4" <?php if(isset($_SESSION["uplinkModulationMode"])) {if($_SESSION["uplinkModulationMode"]=='64QAM 4X4 MIMO 4/4')echo " selected";}?>>64QAM 4X4 MIMO 4/4</option>

</optgroup>
                </select>
                </th>
              </div>
                </tr>              
                 
                <tr bgcolor="coral">
                <th width="30">Transmitter</th>
                <th width="30">TX=eNodeB</th> 
                <th width="30">TX=CPE</th>
              </tr>
                 <tr height ="2px">
                <th>Maximum total TX Power(dBm)</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBTpower" id="eNodeBTpower" value="<?php if(isset($_SESSION['eNodeBTpower'])) echo $_SESSION['eNodeBTpower']; ?>" class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPETpower"id="CPETpower" value="<?php if(isset($_SESSION['CPETpower'])) echo $_SESSION['CPETpower']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Resource to distributepower</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBRB" id="eNodeBRB"  value="<?php if(isset($_SESSION['eNodeBRB'])) echo $_SESSION['eNodeBRB']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPERB"id="CPERB" value="<?php if(isset($_SESSION['CPERB'])) echo $_SESSION['CPERB']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Subcarirer to distribute Power(dBm)</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBsubcarrier" id="eNodeBsubcarrier" value="<?php if(isset($_SESSION['eNodeBsubcarrier'])) echo $_SESSION['eNodeBsubcarrier']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPEsubcarrier"id="CPEsubcarrier" value="<?php if(isset($_SESSION['CPEsubcarrier'])) echo $_SESSION['CPEsubcarrier']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th>TX Antenna Gain(dBi)</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBgain" id="eNodeBgain" value="<?php if(isset($_SESSION['eNodeBgain'])) echo $_SESSION['eNodeBgain']; ?>"  class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPEgain"id="CPEgain" value="<?php if(isset($_SESSION['CPEgain'])) echo $_SESSION['CPEgain']; ?>"class="form-control"  size="5"></th>
              </div>
                </tr>
                </tr>
                 <tr height ="2px">
                <th>TX Cable Loss(dB)</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBcableloss" id="eNodeBcableloss" value="<?php if(isset($_SESSION['eNodeBcableloss'])) echo $_SESSION['eNodeBcableloss']; ?>" class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPEcableloss"id="CPEcableloss" " value="<?php if(isset($_SESSION['CPEcableloss'])) echo $_SESSION['CPEcableloss']; ?>"class="form-control"  size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th>TX Body Loss(dB)</th>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBbodyloss" id="eNodeBbodyloss" value="<?php if(isset($_SESSION['eNodeBbodyloss'])) echo $_SESSION['eNodeBbodyloss']; ?>" class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="CPEbodyloss"id="CPEbodyloss" value="<?php if(isset($_SESSION['CPEbodyloss'])) echo $_SESSION['CPEbodyloss']; ?>" class="form-control"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>EIRP per subscriber (dBm)</th>
                <div class="form-group">
                <th> <input type="text" name ="EIRP_dl" id="EIRP_dl" value="<?php if(isset($_SESSION['EIRP_dl'])) echo $_SESSION['EIRP_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="EIRP_up"id="EIRP_up" value="<?php if(isset($_SESSION['EIRP_up'])) echo $_SESSION['EIRP_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr bgcolor="coral">
                <th width="30">Receiver</th>
                <th width="30">RX=CPE</th> 
                <th width="30">RX=eNodeB</th>
              </tr>
              </tr>
              <tr height ="2px">
                <th>RX Antenna Gain(dBi)</th>
                <div class="form-group">
                <th><input type="text" name ="CPEgain"id="CPEgain"  value="<?php if(isset($_SESSION['CPEgain'])) echo $_SESSION['CPEgain']; ?>" class="form-control"  size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBgain" id="eNodeBgain"  value="<?php if(isset($_SESSION['eNodeBgain'])) echo $_SESSION['eNodeBgain']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr height ="2px">
                <th>Noise Figure</th>
                <div class="form-group">
                <th><input type="text" name ="CPENoiseF" id="CPENoiseF"  value="<?php if(isset($_SESSION['CPENoiseF'])) echo $_SESSION['CPENoiseF']; ?>" class="form-control"  size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBNoiseF" id="eNodeBNoiseF"  value="<?php if(isset($_SESSION['eNodeBNoiseF'])) echo $_SESSION['eNodeBNoiseF']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr height ="2px">
                <th>Thermal Noise(dBm)</th>
                <div class="form-group">
                <th> <input type="text" name ="thermalNoise_dl" id="thermalNoise_dl" value="<?php if(isset($_SESSION['thermalNoise_dl'])) echo $_SESSION['thermalNoise_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="thermalNoise_up"id="thermalNoise_up" value="<?php if(isset($_SESSION['thermalNoise_up'])) echo $_SESSION['thermalNoise_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                 </tr>
                <tr height ="2px">
                <th>SNIR(dB)</th>
                <div class="form-group">
                <th> <input type="text" name ="snir_dl" id="snir_dl" value="<?php if(isset($_SESSION['snir_dl'])) echo $_SESSION['snir_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="snir_up"id="snir_up" value="<?php if(isset($_SESSION['snir_up'])) echo $_SESSION['snir_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>


                 <tr height ="2px">
                <th>RX Body Loss(dB)</th>
                <div class="form-group">
                <th><input type="text" name ="CPEbodyloss"id="CPEbodyloss" value="<?php if(isset($_SESSION['CPEbodyloss'])) echo $_SESSION['CPEbodyloss']; ?>" class="form-control"  size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBbodyloss" id="eNodeBbodyloss"  value="<?php if(isset($_SESSION['eNodeBbodyloss'])) echo $_SESSION['eNodeBbodyloss']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr>
                <th>RX Cable Loss(dB)</th>
                <div class="form-group">
                <th><input type="text" name ="CPEcableloss"id="CPEcableloss" value="<?php if(isset($_SESSION['CPEcableloss'])) echo $_SESSION['CPEcableloss']; ?>" class="form-control" size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBcableloss" id="eNodeBcableloss" value="<?php if(isset($_SESSION['eNodeBcableloss'])) echo $_SESSION['eNodeBcableloss']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr>
                <th>Interferance Margin (dB)</th>
                <div class="form-group">
                <th><input type="text" name ="downlinkIM"id="downlinkIM" value="<?php if(isset($_SESSION['downlinkIM'])) echo $_SESSION['downlinkIM']; ?>" class="form-control" size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="uplinkIM" id="uplinkIM"  value="<?php if(isset($_SESSION['uplinkIM'])) echo $_SESSION['uplinkIM']; ?>"class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr height ="2px">
                <th>Minimum Signal Reception Strength(dBm)</th>
                <div class="form-group">
                <th> <input type="text" name ="MSRS_dl" id="MSRS_dl" value="<?php if(isset($_SESSION['MSRS_dl'])) echo $_SESSION['MSRS_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="MSRS_up"id="thermalNoise_up" value="<?php if(isset($_SESSION['MSRS_up'])) echo $_SESSION['MSRS_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr>
                 <th>Shadow Fading Margin (dB)</th>
                <div class="form-group">
                <th><input type="text" name ="downlinkSFM"id="downlinkSFM" value="<?php if(isset($_SESSION['downlinkSFM'])) echo $_SESSION['downlinkSFM']; ?>" class="form-control" size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="uplinkSFM" id="uplinkSFM"  value="<?php if(isset($_SESSION['uplinkSFM'])) echo $_SESSION['uplinkSFM']; ?>"  class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr>
                 <th>Penetration loss (dB)</th>
                <div class="form-group">
                <th><input type="text" name ="penetrationloss"id="penetrationloss" value="<?php if(isset($_SESSION['penetrationloss'])) echo $_SESSION['penetrationloss']; ?>" class="form-control" size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="penetrationloss" id="penetrationloss"  value="<?php if(isset($_SESSION['penetrationloss'])) echo $_SESSION['penetrationloss']; ?>"  class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr bgcolor="coral">
                <th width="30">OTHER PARAMETERS</th>
                <th width="30">DOWNLINK</th> 
                <th width="30">UPLINK</th>
              </tr>
               <tr>
                <th>propagation Model</th>
              <div class="form-group">
                <th> <select name="propagationModel" id="propagationModel"  value="<?php if(isset($_SESSION['propagationModel'])) echo $_SESSION['propagationModel']; ?>"class="form-control">
                  <option value="COST231-HATA" <?php if(isset($_SESSION["propagationModel"])) {if($_SESSION["propagationModel"]=='COST231-HATA')echo " selected";}?>>COST231-HATA</option>
                  <option value="OKUMURA-HATA" <?php if(isset($_SESSION["propagationModel"])) {if($_SESSION["propagationModel"]=='OKUMURA-HATA')echo " selected";}?>>OKUMURA-HATA</option>
                </select>
                </th>
              </div>
              <div class="form-group">
                <th> <select name="propagationModel" id="propagationModel"  value="<?php if(isset($_SESSION['propagationModel'])) echo $_SESSION['propagationModel']; ?>" class="form-control"> class="form-control">
                  <option value="COST231-HATA" <?php if(isset($_SESSION["propagationModel"])) {if($_SESSION["propagationModel"]=='COST231-HATA')echo " selected";}?>>COST231-HATA</option>
                  <option value="OKUMURA-HATA" <?php if(isset($_SESSION["propagationModel"])) {if($_SESSION["propagationModel"]=='OKUMURA-HATA')echo " selected";}?>>OKUMURA-HATA</option>
                </select>
                </th>
              </div>
                </tr>
                <tr>
                  <tr>
                <th>Type of Site</th>
              <div class="form-group">
                <th> <select name="typesite" id="typesite"  value="<?php if(isset($_SESSION['typesite'])) echo $_SESSION['typesite']; ?>" class="form-control">
                  <option value="omni" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='omni')echo " selected";}?>> omnidirectional site</option>
                  <option value="Bisect" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='Bisect')echo " selected";}?>>bisectorial site</option>
                  <option value="trisect" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='trisect')echo " selected";}?>>trisectorial site</option>
                </select>
                </th>
              </div>
              <div class="form-group">
                <th> <select name="typesite" id="typesite"  value="<?php if(isset($_SESSION['typesite'])) echo $_SESSION['typesite']; ?>" class="form-control">
                  <option value="omni" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='omni')echo " selected";}?>> omnidirectional site</option>
                  <option value="Bisect" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='Bisect')echo " selected";}?>>bisectorial site</option>
                  <option value="trisect" <?php if(isset($_SESSION["typesite"])) {if($_SESSION["typesite"]=='trisect')echo " selected";}?>>trisectorial site</option>
                </select>
                </th>
              </div>
                </tr>
                <tr>
                 <th>eNodeB Antenna Height(m)</th>
                <div class="form-group">
                <th><input type="text" name ="eNodeBAntennaHgh" id="eNodeBAntennaHgh" value="<?php if(isset($_SESSION['eNodeBAntennaHgh'])) echo $_SESSION['eNodeBAntennaHgh']; ?>" class="form-control"  size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="eNodeBAntennaHgh" id="eNodeBAntennaHgh" value="<?php if(isset($_SESSION['eNodeBAntennaHgh'])) echo $_SESSION['eNodeBAntennaHgh']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>
                <tr>
                 <th>CPE Antenna Height(m)</th>
                <div class="form-group">
                <th><input type="text" name ="CPEAntennaHeight" id="CPEAntennaHeight" value="<?php if(isset($_SESSION['CPEAntennaHeight'])) echo $_SESSION['CPEAntennaHeight']; ?>" class="form-control"  size="5"></th>
              </div>
                <div class="form-group">
                <th> <input type="text" name ="CPEAntennaHeight" id="CPEAntennaHeight" value="<?php if(isset($_SESSION['CPEAntennaHeight'])) echo $_SESSION['CPEAntennaHeight']; ?>" class="form-control"  size="5"></th>
              </div> 
                </tr>

              </tbody>
              
                <tr align="center">
                  <td colspan="3">  <input type="submit" name="coverage_Defaultvalues" id="coverage_Defaultvalues"class="btn btn-secondary " value="Default Values"> <input type="submit" name="VALIDATE_Coverage" id="VALIDATE"class="btn btn-secondary "value="VALIDATE">
                </tr>
              
              <tbody>
                 <tr bgcolor="coral">
                <th width="30">COVERAGE RESULTS</th>
                <th width="30">DOWNLINK</th> 
                <th width="30">UPLINK</th>
              </tr>
             <tr height ="2px">
                <th>Maximum Allowable Path Loss</th>
                <div class="form-group">
                <th> <input type="text" name ="pathloss_dl" id="pathloss_dl" value="<?php if(isset($_SESSION['pathloss_dl'])) echo $_SESSION['pathloss_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="pathloss_up"id="pathloss_up" value="<?php if(isset($_SESSION['pathloss_up'])) echo $_SESSION['pathloss_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Cell Radius(km)</th>
                <div class="form-group">
                <th> <input type="text" name ="cellradius_dl" id="cellradius_dl" value="<?php if(isset($_SESSION['cellradius_dl'])) echo $_SESSION['cellradius_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="cellradius_up"id="cellradius_up" value="<?php if(isset($_SESSION['cellradius_up'])) echo $_SESSION['cellradius_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Cell Area(km2)</th>
                <div class="form-group">
                <th> <input type="text" name ="cellarea_dl" id="cellarea_dl" value="<?php if(isset($_SESSION['cellarea_dl'])) echo $_SESSION['cellarea_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="cellarea_up" id="cellarea_up" value="<?php if(isset($_SESSION['cellarea_up'])) echo $_SESSION['cellarea_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Number of site</th>
                <div class="form-group">
                <th> <input type="text" name ="numsite_dl" id="numsite_dl" value="<?php if(isset($_SESSION['numsite_dl'])) echo $_SESSION['numsite_dl']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="numsite_up"id="numsite_up" value="<?php if(isset($_SESSION['numsite_up'])) echo $_SESSION['numsite_up'];?>" class="form-control" disabled="disabled"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Number of coverage site</th>
                <div class="form-group">
                <th> <input type="text" name ="numsite" id="numsite" value="<?php if(isset($_SESSION['numsite'])) echo $_SESSION['numsite']; ?>" class="form-control" disabled="disabled"  size="5"></th>
              </div> 
                </tr>
                <tr align="center">
                  <td colspan="3">  <a href="PDFreport/phpdf.php?rapdf=couv" target="_blank" class="btn btn-secondary">Generate PDF</a> <input type="submit" name="coverage_savevalues" id="coverage_savevalues"class="btn btn-secondary " value="Save"> <a href="capacity.php" class="btn btn-secondary">NEXT</a>
                </tr>
              </tbody>
               


           </table>
         </div>
            </form>

  