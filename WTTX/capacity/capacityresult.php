

  <div class="card mb-3" >
          <div class="card-header">
            capacity parameters</div>
            <div class="card-body">
                 <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                  <tr>
                  <th  bgcolor="skyblue" width="30"  height="20px"></th>
                  <th  bgcolor="skyblue"width="30" height="20px"> DL</th>
                  <th  bgcolor="skyblue" width="30" height="20px"> UL</th>
                </tr>
                <tr>
                  <th> IPTV Single user throughput(Mbps)</th>
                  <div class="form-group">
                <th> <input type="text" name ="IPTVbandwidth" id="IPTVbandwidth " value="<?php if(isset($_SESSION['IPTVbandwidth'])) echo $_SESSION['IPTVbandwidth']; ?>"class="form-control"    size="5"></th>
              </div>
                  <div class="form-group">
                <th></th>
              </div>
               </tr>
                <tr>
                  <th>  Single user throughput(kbps)</th>
                    <div class="form-group">
                <th> <input type="text" name ="singleuserthput_dl" id="singleuserthput_dl " value="<?php if(isset($_SESSION['singleuserthput_dl'])) echo $_SESSION['singleuserthput_dl']; ?>"class="form-control"   size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="singleuserthput_up" id="singleuserthput_up" value="<?php if(isset($_SESSION['singleuserthput_up'])) echo $_SESSION['singleuserthput_up']; ?>"class="form-control"   size="5"></th>
              </div>
               </tr>

               <tr>
                  <th>  Average cell  throughput(Mbps)</th>
                    <div class="form-group">
                <th> <input type="text" name ="avcellthrput_dl" id="avcellthrput_dl " value="<?php if(isset($_SESSION['avcellthrput_dl'])) echo $_SESSION['avcellthrput_dl']; ?>"class="form-control"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="avcellthrput_up" id="avcellthrput_up" value="<?php if(isset($_SESSION['avcellthrput_up'])) echo $_SESSION['avcellthrput_up']; ?>"class="form-control"   size="5"></th>
              </div>
               </tr>

               <tr>
                  <th>  Number of users </th>
                    <div class="form-group">
                <th> <input type="text" name ="number_user" id="number_user " value="<?php if(isset($_SESSION['number_user'])) echo $_SESSION['number_user']; ?>"class="form-control"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="number_user" id="number_user" value="<?php if(isset($_SESSION['number_user'])) echo $_SESSION['number_user']; ?>"class="form-control"   size="5"></th>
              </div>
               </tr>

                <tr>
                  <th>  Percentage of IPTV users % </th>
                    <div class="form-group">
                <th> <input type="text" name ="IPTV_user" id="IPTV_user " value="<?php if(isset($_SESSION['IPTV_user'])) echo $_SESSION['IPTV_user']; ?>"class="form-control"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="IPTV_user" id="number_user" value="<?php if(isset($_SESSION['IPTV_user'])) echo $_SESSION['IPTV_user']; ?>"class="form-control"   size="5"></th>
              </div>
               </tr>

                </table>


                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                  <tr>
                  <th  bgcolor="skyblue" width="30"  height="20px">Item</th>
                  <th  bgcolor="skyblue"width="30" height="20px"> DL</th>
                  <th  bgcolor="skyblue" width="30" height="20px"> UL</th>
                </tr>
                
                <tr>
                  <th>  total Network throughput IP (Kbps) </th>
                    <div class="form-group">
                <th> <input type="text" name ="Totalnetwrkthrput_dl" id="Totalnetwrkthrput_dl " value="<?php if(isset($_SESSION['Totalnetwrkthrput_dl'])) echo $_SESSION['Totalnetwrkthrput_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="Totalnetwrkthrput_up" id="Totalnetwrkthrput_up" value="<?php if(isset($_SESSION['Totalnetwrkthrput_up'])) echo $_SESSION['Totalnetwrkthrput_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               </tr>

               <tr>
                  <th>  total Network throughput MAC (Mbps)</th>
                    <div class="form-group">
                <th> <input type="text" name ="Totalnetwrkthrput_MAC_dl" id="Totalnetwrkthrput_MAC_dl " value="<?php if(isset($_SESSION['Totalnetwrkthrput_MAC_dl'])) echo $_SESSION['Totalnetwrkthrput_MAC_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="Totalnetwrkthrput_MAC_up" id="Totalnetwrkthrput_MAC_up" value="<?php if(isset($_SESSION['Totalnetwrkthrput_MAC_up'])) echo $_SESSION['Totalnetwrkthrput_MAC_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               </tr>

               <tr>
                  <th>  Capacity per site (Mbps)</th>
                    <div class="form-group">
                <th> <input type="text" name ="sitethrput_dl" id="sitethrput_dl " value="<?php if(isset($_SESSION['sitethrput_dl'])) echo $_SESSION['sitethrput_dl']; ?>"class="form-control"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="sitethrput_up" id="sitethrput_up" value="<?php if(isset($_SESSION['sitethrput_up'])) echo $_SESSION['sitethrput_up']; ?>"class="form-control"  size="5"></th>
              </div>
               </tr>
                <tr>
                  <th>  number of enodes </th>
                    <div class="form-group">
                <th> <input type="text" name ="number_enode_dl" id="number_enode_dl " value="<?php if(isset($_SESSION['number_enode_dl'])) echo $_SESSION['number_enode_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="number_enode_up" id="number_enode_up" value="<?php if(isset($_SESSION['number_enode_up'])) echo $_SESSION['number_enode_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               </tr>
               <tr>
                  <th>  number of enodeBs By capacity</th>
                    <div class="form-group">
                <th> <input type="text" name ="number_enode_dl" id="number_enode_dl " value="<?php if(isset($_SESSION['number_enode_dl'])) echo $_SESSION['number_enode_dl']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               <div class="form-group">
                <th> <input type="text" name ="number_enode_up" id="number_enode_up" value="<?php if(isset($_SESSION['number_enode_up'])) echo $_SESSION['number_enode_up']; ?>"class="form-control" disabled = "disabled"  size="5"></th>
              </div>
               </tr>


               <tr>
                  <th>  capacity number of enodes</th>
                    <div class="form-group">
                <th> <input type="text" name ="number_enode" id="singleuserthput_dl " value="<?php if(isset($_SESSION['number_enode'])) echo $_SESSION['number_enode']; ?>"class="form-control"  size="5"></th>
              </div>
               
               </tr>

             <tr align="center">
                  <td colspan="3"> <a href="PDFreport/phpdf.php?rapdf=capa" target="_blank" class="btn btn-secondary">Generate PDF</a> <input type="submit" name="capacity_Defaultvalues" id="capacity_Defaultvalues"class="btn btn-secondary " value="Default Values"> <input type="submit" name="VALIDATE_Caparesult" id="VALIDATE_Caparesult"class="btn btn-secondary "value="VALIDATE"><a href="mapping.php" class="btn btn-secondary">NEXT-MAPPING</a></td></td>
                </tr>
                </table>
         </div>
       </div>
    

  