

  <div class="card mb-3" >
          <div class="card-header">
            Traffic Model </div>
            <div class="card-body">
              <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
               <tr>
                <th bgcolor="skyblue" width="30" rowspan="2" height="20px"> User Behavior</th>
                <th bgcolor="skyblue"width="30" colspan="2"><?php echo $morph;?></th> 
                <th bgcolor="skyblue" width="30"colspan ="2">Busy Hour throughput per user (kbps)</th>
              </tr>
              <tr>
                <th bgcolor="skyblue"width="30">Traffic Penetration ratio</th>
                <th bgcolor="skyblue"width="30">BHSA</th>
                <th bgcolor="skyblue"width="30">Uplink</th>
                <th bgcolor="skyblue"width="30">Downlink</th>
              </tr>
              <tbody>
                <tr height ="2px">
                <th >VOIP</th>
                <div class="form-group">
                <th> <input type="text" name ="VOIPTraffPR" id="VOIPTraffPR"  value="<?php if(isset($_SESSION['VOIPTraffPR'])) echo $_SESSION['VOIPTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VOIP_BHSA" id="VOIP_BHSA" value="<?php if(isset($_SESSION['VOIP_BHSA'])) echo $_SESSION['VOIP_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VOIPBHTput_up" id="VOIPBHTput_up" value="<?php if(isset($_SESSION['VOIPBHTput_up'])) echo $_SESSION['VOIPBHTput_up']; ?>"class="form-control" disabled = "disabled"size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VOIPBHTput_dl" id="VOIPBHTput_dl " value="<?php if(isset($_SESSION['VOIPBHTput_dl'])) echo $_SESSION['VOIPBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >Video Phone</th>
                <div class="form-group">
                <th> <input type="text" name ="VIDPhTraffPR" id="VIDPhTraffPR"  value="<?php if(isset($_SESSION['VIDPhTraffPR'])) echo $_SESSION['VIDPhTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDPh_BHSA" id="VIDPh_BHSA" value="<?php if(isset($_SESSION['VIDPh_BHSA'])) echo $_SESSION['VIDPh_BHSA'];?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDPhBHTput_up" id="VIDPhBHTput_up" value="<?php if(isset($_SESSION['VIDPhBHTput_up'])) echo $_SESSION['VIDPhBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDPhBHTput_dl" id="VIDPhBHTput_dl" value="<?php if(isset($_SESSION['VIDPhBHTput_dl'])) echo $_SESSION['VIDPhBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
                </tr>
                  <tr height ="2px">
                <th >Video Conference</th>
                <div class="form-group">
                <th> <input type="text" name ="VIDConTraffPR" id="VIDConTraffPR"  value="<?php if(isset($_SESSION['VIDConTraffPR'])) echo $_SESSION['VIDConTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDCon_BHSA" id="VIDCon_BHSA" value="<?php if(isset($_SESSION['VIDCon_BHSA'])) echo $_SESSION['VIDCon_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDConBHTput_up" id="VIDConBHTput_up" value="<?php if(isset($_SESSION['VIDConBHTput_up'])) echo $_SESSION['VIDConBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDConBHTput_dl" id="VIDConBHTput_dl" value="<?php if(isset($_SESSION['VIDConBHTput_dl'])) echo $_SESSION['VIDConBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
                  </tr>
                <tr height ="2px">
                <th >Real Time Gaming</th>
                <div class="form-group">
                <th> <input type="text" name ="RTGamTraffPR" id="RTGamTraffPR"  value="<?php if(isset($_SESSION['RTGamTraffPR'])) echo $_SESSION['RTGamTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="RTGam_BHSA" id="RTGam_BHSA" value="<?php if(isset($_SESSION['RTGam_BHSA'])) echo $_SESSION['RTGam_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="RTGamBHTput_up" id="RTGamBHTput_up" value="<?php if(isset($_SESSION['RTGamBHTput_up'])) echo $_SESSION['RTGamBHTput_up']; ?>"class="form-control" disabled = "disabled" size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="RTGamBHTput_dl" id="RTGamBHTput_dl " value="<?php if(isset($_SESSION['RTGamBHTput_dl'])) echo $_SESSION['RTGamBHTput_dl']; ?>"class="form-control" disabled = "disabled" size="5"></th>
              </div>
              
                </tr>
                <tr height ="2px">
                <th >Streaming Media</th>
                <div class="form-group">
                <th> <input type="text" name ="StreamMedTraffPR" id="StreamMedTraffPR"  value="<?php if(isset($_SESSION['StreamMedTraffPR'])) echo $_SESSION['StreamMedTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="StreamMed_BHSA" id="StreamMed_BHSA" value="<?php if(isset($_SESSION['StreamMed_BHSA'])) echo $_SESSION['StreamMed_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="StreamMedBHTput_up" id="StreamMedBHTput_up" value="<?php if(isset($_SESSION['StreamMedBHTput_up'])) echo $_SESSION['StreamMedBHTput_up']; ?>"class="form-control"disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="StreamMedBHTput_dl" id="StreamMedBHTput_dl " value="<?php if(isset($_SESSION['StreamMedBHTput_dl'])) echo $_SESSION['StreamMedBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th >IMS Signaling</th>
                <div class="form-group">
                <th> <input type="text" name ="IMSTraffPR" id="IMSTraffPR"  value="<?php if(isset($_SESSION['IMSTraffPR'])) echo $_SESSION['IMSTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="IMS_BHSA" id="IMS_BHSA" value="<?php if(isset($_SESSION['IMS_BHSA'])) echo $_SESSION['IMS_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="IMSBHTput_up" id="IMSBHTput_up" value="<?php if(isset($_SESSION['IMSBHTput_up'])) echo $_SESSION['IMSBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="IMSBHTput_dl" id="IMSBHTput_dl " value="<?php if(isset($_SESSION['IMSBHTput_dl'])) echo $_SESSION['IMSBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th >Web Browsing</th>
                <div class="form-group">
                <th> <input type="text" name ="WebTraffPR" id="WebTraffPR"  value="<?php if(isset($_SESSION['WebTraffPR'])) echo $_SESSION['WebTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="Web_BHSA" id="Web_BHSA" value="<?php if(isset($_SESSION['Web_BHSA'])) echo $_SESSION['Web_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="WebBHTput_up" id="WebBHTput_up" value="<?php if(isset($_SESSION['WebBHTput_up'])) echo $_SESSION['WebBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="WebBHTput_dl" id="WebBHTput_dl " value="<?php if(isset($_SESSION['WebBHTput_dl'])) echo $_SESSION['WebBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
            
                </tr>
                 <tr height ="2px">
                <th >File Transfer</th>
                <div class="form-group">
                <th> <input type="text" name ="FileTraffPR" id="FileTraffPR"  value="<?php if(isset($_SESSION['FileTraffPR'])) echo $_SESSION['FileTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="File_BHSA" id="File_BHSA" value="<?php if(isset($_SESSION['File_BHSA'])) echo $_SESSION['File_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="FileBHTput_up" id="FileBHTput_up" value="<?php if(isset($_SESSION['FileBHTput_up'])) echo $_SESSION['FileBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="FileBHTput_dl" id="FileBHTput_dl " value="<?php if(isset($_SESSION['FileBHTput_dl'])) echo $_SESSION['FileBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
             
                </tr>
                <tr height ="2px">
                <th >Email</th>
                <div class="form-group">
                <th> <input type="text" name ="EmailTraffPR" id="EmailTraffPR"  value="<?php if(isset($_SESSION['EmailTraffPR'])) echo $_SESSION['EmailTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="Email_BHSA" id="Email_BHSA" value="<?php if(isset($_SESSION['Email_BHSA'])) echo $_SESSION['Email_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="EmailBHTput_up" id="EmailBHTput_up" value="<?php if(isset($_SESSION['EmailBHTput_up'])) echo $_SESSION['EmailBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="EmailBHTput_dl" id="EmailBHTput_dl " value="<?php if(isset($_SESSION['EmailBHTput_dl'])) echo $_SESSION['EmailBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
            
                </tr>
                <tr height ="2px">
                <th >P2P File Sharing</th>
                <div class="form-group">
                <th> <input type="text" name ="P2PfileTraffPR" id="P2PfileTraffPR"  value="<?php if(isset($_SESSION['P2PfileTraffPR'])) echo $_SESSION['P2PfileTraffPR']; ?>"class="form-control"  size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="P2Pfile_BHSA" id="P2Pfile_BHSA" value="<?php if(isset($_SESSION['P2Pfile_BHSA'])) echo $_SESSION['P2Pfile_BHSA']; ?>"class="form-control"  size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="P2PfileBHTput_up" id="P2PfileBHTput_up" value="<?php if(isset($_SESSION['P2PfileBHTput_up'])) echo $_SESSION['P2PfileBHTput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="P2PfileBHTput_dl" id="P2PfileBHTput_dl " value="<?php if(isset($_SESSION['P2PfileBHTput_dl'])) echo $_SESSION['P2PfileBHTput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
             
                </tr>

                </tr>
                <tr height ="2px">
                <th >Single user THroughput</th>
                <div class="form-group">
                <th> </th>
              </div> 
                <div class="form-group">
                <th> </th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="singleuserthput_up" id="singleuserthput_up" value="<?php if(isset($_SESSION['singleuserthput_up'])) echo $_SESSION['singleuserthput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="singleuserthput_dl" id="singleuserthput_dl " value="<?php if(isset($_SESSION['singleuserthput_dl'])) echo $_SESSION['singleuserthput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
             
                </tr>
                <tr align="center">
                  <td colspan="5">  <input type="submit" name="traffic_Defaultvalues" id="traffic_Defaultvalues"class="btn btn-secondary " value="Default Values"> <input type="submit" name="VALIDATE_Capacity" id="VALIDATE"class="btn btn-secondary "value="VALIDATE"> <a href="capres.php" class="btn btn-secondary">NEXT</a></td>
                </tr>
              </tbody>
                </table>
         </div>
       </div>
    

  