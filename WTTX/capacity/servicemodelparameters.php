

  <div class="card mb-3" >
          <div class="card-header">
            service Model </div>
            <div class="card-body">
              <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
               <tr>
                <th bgcolor="skyblue"width="30" rowspan="2" height="20px">Traffic Penetration</th>
                <th bgcolor="skyblue"width="30" colspan="4">uplink</th> 
                <th bgcolor="skyblue" width="30"colspan ="4">downlink</th>
              </tr>
              <tr>
                <th bgcolor="skyblue"width="30">Bearer Rate(kbps)</th>
                <th bgcolor="skyblue"width="30">PPP session time(s)</th>
                <th bgcolor="skyblue"width="30">PPP session Duty Ratio(s)</th>
                <th bgcolor="skyblue" width="30">BLER</th>
                <th bgcolor="skyblue" width="30">Bearer Rate(kbps)</th>
                <th bgcolor="skyblue" width="30">PPP session time(s)</th>
                <th bgcolor="skyblue" width="30">PPP session Duty Ratio(s)</th>
                <th bgcolor="skyblue" width="30">BLER</th>
              </tr>
              <tbody>
                <tr height ="2px">
                <th >VOIP</th>
                <div class="form-group">
                <th> <input type="text" name ="VOIPBR_up" id="VOIPBR_up"  value="<?php if(isset($_SESSION['VOIPBR_up'])) echo $_SESSION['VOIPBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VOIPPPST_up" id="VOIPPPST_up" value="<?php if(isset($_SESSION['VOIPPPST_up'])) echo $_SESSION['VOIPPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VOIPPPSDR_up" id="VOIPPPSDR_up" value="<?php if(isset($_SESSION['VOIPPPSDR_up'])) echo $_SESSION['VOIPPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VOIPBLER_up" id="VOIPBLER_up " value="<?php if(isset($_SESSION['VOIPBLER_up'])) echo $_SESSION['VOIPBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                 <th> <input type="text" name ="VOIPBR_dl" id="VOIPBR_dl" value="<?php if(isset($_SESSION['VOIPBR_dl'])) echo $_SESSION['VOIPBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VOIPPPST_dl" id="VOIPPPST_dl" value="<?php if(isset($_SESSION['VOIPPPST_dl'])) echo $_SESSION['VOIPPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VOIPPPSDR_dl" id="VOIPPPSDR_dl" value="<?php if(isset($_SESSION['VOIPPPSDR_dl'])) echo $_SESSION['VOIPPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VOIPBLER_dl" id="VOIPBLER_dl " value="<?php if(isset($_SESSION['VOIPBLER_dl'])) echo $_SESSION['VOIPBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >Video Phone</th>
                <div class="form-group">
                <th> <input type="text" name ="VIDPhBR_up" id="VIDPhBR_up"  value="<?php if(isset($_SESSION['VIDPhBR_up'])) echo $_SESSION['VIDPhBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDPhPPST_up" id="VIDPhPPST_up" value="<?php if(isset($_SESSION['VIDPhPPST_up'])) echo $_SESSION['VIDPhPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDPhPPSDR_up" id="VIDPhPPSDR_up" value="<?php if(isset($_SESSION['VIDPhPPSDR_up'])) echo $_SESSION['VIDPhPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDPhBLER_up" id="VIDPhBLER_up " value="<?php if(isset($_SESSION['VIDPhBLER_up'])) echo $_SESSION['VIDPhBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDPhBR_dl" id="VIDPhBR_dl"  value="<?php if(isset($_SESSION['VIDPhBR_dl'])) echo $_SESSION['VIDPhBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDPhPPST_dl" id="VIDPhPPST_dl" value="<?php if(isset($_SESSION['VIDPhPPST_dl'])) echo $_SESSION['VIDPhPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDPhPPSDR_dl" id="VIDPhPPSDR_dl" value="<?php if(isset($_SESSION['VIDPhPPSDR_dl'])) echo $_SESSION['VIDPhPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDPhBLER_dl" id="VIDPhBLER_dl " value="<?php if(isset($_SESSION['VIDPhBLER_dl'])) echo $_SESSION['VIDPhBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                  <tr height ="2px">
                <th >Video Conference</th>
                <div class="form-group">
                <th> <input type="text" name ="VIDConBR_up" id="VIDConBR_up"  value="<?php if(isset($_SESSION['VIDConBR_up'])) echo $_SESSION['VIDConBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDConPPST_up" id="VIDConPPST_up" value="<?php if(isset($_SESSION['VIDConPPST_up'])) echo $_SESSION['VIDConPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDConPPSDR_up" id="VIDConPPSDR_up" value="<?php if(isset($_SESSION['VIDConPPSDR_up'])) echo $_SESSION['VIDConPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDConBLER_up" id="VIDConBLER_up " value="<?php if(isset($_SESSION['VIDConBLER_up'])) echo $_SESSION['VIDConBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDConBR_dl" id="VIDConBR_dl"  value="<?php if(isset($_SESSION['VIDConBR_dl'])) echo $_SESSION['VIDConBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="VIDConPPST_dl" id="VIDConPPST_dl" value="<?php if(isset($_SESSION['VIDConPPST_dl'])) echo $_SESSION['VIDConPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="VIDConPPSDR_dl" id="VIDConPPSDR_dl" value="<?php if(isset($_SESSION['VIDConPPSDR_dl'])) echo $_SESSION['VIDConPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="VIDConBLER_dl" id="VIDConBLER_dl " value="<?php if(isset($_SESSION['VIDConBLER_dl'])) echo $_SESSION['VIDConBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >Real Time Gaming</th>
                <div class="form-group">
                <th> <input type="text" name ="RTGamBR_up" id="RTGamBR_up"  value="<?php if(isset($_SESSION['RTGamBR_up'])) echo $_SESSION['RTGamBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="RTGamPPST_up" id="RTGamPPST_up" value="<?php if(isset($_SESSION['RTGamPPST_up'])) echo $_SESSION['RTGamPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="RTGamPPSDR_up" id="RTGamPPSDR_up" value="<?php if(isset($_SESSION['RTGamPPSDR_up'])) echo $_SESSION['RTGamPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="RTGamBLER_up" id="RTGamBLER_up " value="<?php if(isset($_SESSION['RTGamBLER_up'])) echo $_SESSION['RTGamBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="RTGamBR_dl" id="RTGamBR_dl"  value="<?php if(isset($_SESSION['RTGamBR_dl'])) echo $_SESSION['RTGamBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="RTGamPPST_dl" id="RTGamPPST_dl" value="<?php if(isset($_SESSION['RTGamPPST_dl'])) echo $_SESSION['RTGamPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="RTGamPPSDR_dl" id="RTGamPPSDR_dl" value="<?php if(isset($_SESSION['RTGamPPSDR_dl'])) echo $_SESSION['RTGamPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="RTGamBLER_dl" id="RTGamBLER_dl " value="<?php if(isset($_SESSION['RTGamBLER_dl'])) echo $_SESSION['RTGamBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >Streaming Media</th>
                <div class="form-group">
                <th> <input type="text" name ="StreamMedBR_up" id="StreamMedBR_up"  value="<?php if(isset($_SESSION['StreamMedBR_up'])) echo $_SESSION['StreamMedBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="StreamMedPPST_up" id="StreamMedPPST_up" value="<?php if(isset($_SESSION['StreamMedPPST_up'])) echo $_SESSION['StreamMedPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="StreamMedPPSDR_up" id="StreamMedPPSDR_up" value="<?php if(isset($_SESSION['StreamMedPPSDR_up'])) echo $_SESSION['StreamMedPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="StreamMedBLER_up" id="StreamMedBLER_up " value="<?php if(isset($_SESSION['StreamMedBLER_up'])) echo $_SESSION['StreamMedBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="StreamMedBR_dl" id="StreamMedBR_dl"  value="<?php if(isset($_SESSION['StreamMedBR_dl'])) echo $_SESSION['StreamMedBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="StreamMedPPST_dl" id="StreamMedPPST_dl" value="<?php if(isset($_SESSION['StreamMedPPST_dl'])) echo $_SESSION['StreamMedPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="StreamMedPPSDR_dl" id="StreamMedPPSDR_dl" value="<?php if(isset($_SESSION['StreamMedPPSDR_dl'])) echo $_SESSION['StreamMedPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="StreamMedBLER_dl" id="StreamMedBLER_dl " value="<?php if(isset($_SESSION['StreamMedBLER_dl'])) echo $_SESSION['StreamMedBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th >IMS Signaling</th>
                <div class="form-group">
                <th> <input type="text" name ="IMSBR_up" id="IMSBR_up"  value="<?php if(isset($_SESSION['IMSBR_up'])) echo $_SESSION['IMSBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="IMSPPST_up" id="IMSPPST_up" value="<?php if(isset($_SESSION['IMSPPST_up'])) echo $_SESSION['IMSPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="IMSPPSDR_up" id="IMSPPSDR_up" value="<?php if(isset($_SESSION['IMSPPSDR_up'])) echo $_SESSION['IMSPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="IMSBLER_up" id="IMSBLER_up " value="<?php if(isset($_SESSION['IMSBLER_up'])) echo $_SESSION['IMSBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="IMSBR_dl" id="IMSBR_dl"  value="<?php if(isset($_SESSION['IMSBR_dl'])) echo $_SESSION['IMSBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="IMSPPST_dl" id="IMSPPST_dl" value="<?php if(isset($_SESSION['IMSPPST_dl'])) echo $_SESSION['IMSPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="IMSPPSDR_dl" id="IMSPPSDR_dl" value="<?php if(isset($_SESSION['IMSPPSDR_dl'])) echo $_SESSION['IMSPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="IMSBLER_dl" id="IMSBLER_dl " value="<?php if(isset($_SESSION['IMSBLER_dl'])) echo $_SESSION['IMSBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th >Web Browsing</th>
                <div class="form-group">
                <th> <input type="text" name ="WebBR_up" id="WebBR_up"  value="<?php if(isset($_SESSION['WebBR_up'])) echo $_SESSION['WebBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="WebPPST_up" id="WebPPST_up" value="<?php if(isset($_SESSION['WebPPST_up'])) echo $_SESSION['WebPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="WebPPSDR_up" id="WebPPSDR_up" value="<?php if(isset($_SESSION['WebPPSDR_up'])) echo $_SESSION['WebPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="WebBLER_up" id="WebBLER_up " value="<?php if(isset($_SESSION['WebBLER_up'])) echo $_SESSION['WebBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="WebBR_dl" id="WebBR_dl"  value="<?php if(isset($_SESSION['WebBR_dl'])) echo $_SESSION['WebBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="WebPPST_dl" id="WebPPST_dl" value="<?php if(isset($_SESSION['WebPPST_dl'])) echo $_SESSION['WebPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="WebPPSDR_dl" id="WebPPSDR_dl" value="<?php if(isset($_SESSION['WebPPSDR_dl'])) echo $_SESSION['WebPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="WebBLER_dl" id="WebBLER_dl " value="<?php if(isset($_SESSION['WebBLER_dl'])) echo $_SESSION['WebBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                 <tr height ="2px">
                <th >File Transfer</th>
                <div class="form-group">
                <th> <input type="text" name ="FileBR_up" id="FileBR_up"  value="<?php if(isset($_SESSION['FileBR_up'])) echo $_SESSION['FileBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="FilePPST_up" id="FilePPST_up" value="<?php if(isset($_SESSION['FilePPST_up'])) echo $_SESSION['FilePPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="FilePPSDR_up" id="FilePPSDR_up" value="<?php if(isset($_SESSION['FilePPSDR_up'])) echo $_SESSION['FilePPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="FileBLER_up" id="FileBLER_up " value="<?php if(isset($_SESSION['FileBLER_up'])) echo $_SESSION['FileBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="FileBR_dl" id="FileBR_dl"  value="<?php if(isset($_SESSION['FileBR_dl'])) echo $_SESSION['FileBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="FilePPST_dl" id="FilePPST_dl" value="<?php if(isset($_SESSION['FilePPST_dl'])) echo $_SESSION['FilePPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="FilePPSDR_dl" id="FilePPSDR_dl" value="<?php if(isset($_SESSION['FilePPSDR_dl'])) echo $_SESSION['FilePPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="FileBLER_dl" id="FileBLER_dl " value="<?php if(isset($_SESSION['FileBLER_dl'])) echo $_SESSION['FileBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >Email</th>
                <div class="form-group">
                <th> <input type="text" name ="EmailBR_up" id="EmailBR_up"  value="<?php if(isset($_SESSION['EmailBR_up'])) echo $_SESSION['EmailBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="EmailPPST_up" id="EmailPPST_up" value="<?php if(isset($_SESSION['EmailPPST_up'])) echo $_SESSION['EmailPPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="EmailPPSDR_up" id="EmailPPSDR_up" value="<?php if(isset($_SESSION['EmailPPSDR_up'])) echo $_SESSION['EmailPPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="EmailBLER_up" id="EmailBLER_up " value="<?php if(isset($_SESSION['EmailBLER_up'])) echo $_SESSION['EmailBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="EmailBR_dl" id="EmailBR_dl"  value="<?php if(isset($_SESSION['EmailBR_dl'])) echo $_SESSION['EmailBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="EmailPPST_dl" id="EmailPPST_dl" value="<?php if(isset($_SESSION['EmailPPST_dl'])) echo $_SESSION['EmailPPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="EmailPPSDR_dl" id="EmailPPSDR_dl" value="<?php if(isset($_SESSION['EmailPPSDR_dl'])) echo $_SESSION['EmailPPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="EmailBLER_dl" id="EmailBLER_dl " value="<?php if(isset($_SESSION['EmailBLER_dl'])) echo $_SESSION['EmailBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th >P2P File Sharing</th>
                <div class="form-group">
                <th> <input type="text" name ="P2PfileBR_up" id="P2PfileBR_up"  value="<?php if(isset($_SESSION['P2PfileBR_up'])) echo $_SESSION['P2PfileBR_up']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="P2PfilePPST_up" id="P2PfilePPST_up" value="<?php if(isset($_SESSION['P2PfilePPST_up'])) echo $_SESSION['P2PfilePPST_up']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="P2PfilePPSDR_up" id="P2PfilePPSDR_up" value="<?php if(isset($_SESSION['P2PfilePPSDR_up'])) echo $_SESSION['P2PfilePPSDR_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="P2PfileBLER_up" id="P2PfileBLER_up " value="<?php if(isset($_SESSION['P2PfileBLER_up'])) echo $_SESSION['P2PfileBLER_up']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="P2PfileBR_dl" id="P2PfileBR_dl"  value="<?php if(isset($_SESSION['P2PfileBR_dl'])) echo $_SESSION['P2PfileBR_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
                <div class="form-group">
                <th> <input type="text" name ="P2PfilePPST_dl" id="P2PfilePPST_dl" value="<?php if(isset($_SESSION['P2PfilePPST_dl'])) echo $_SESSION['P2PfilePPST_dl']; ?>"class="form-control"   size="5"></th>
              </div> 
              <div class="form-group">
                <th> <input type="text" name ="P2PfilePPSDR_dl" id="P2PfilePPSDR_dl" value="<?php if(isset($_SESSION['P2PfilePPSDR_dl'])) echo $_SESSION['P2PfilePPSDR_dl']; ?>"class="form-control"   size="5"></th>
              </div>
              <div class="form-group">
                <th> <input type="text" name ="P2PfileBLER_dl" id="P2PfileBLER_dl " value="<?php if(isset($_SESSION['P2PfileBLER_dl'])) echo $_SESSION['P2PfileBLER_dl']; ?>"class="form-control"   size="5"></th>
              </div>
                </tr>
              </tbody>
                <tr align="center">
                  <th colspan="9">  <input type="submit" name="service_Defaultvalues" id="service_Defaultvalues"class="btn btn-secondary " value="Default Values">   <input type="submit" name="Next_traff" id="Next_traff"class="btn btn-secondary " value="NEXT"> </th>
                </tr>


           </table>
         </div>
       </div>
    

  