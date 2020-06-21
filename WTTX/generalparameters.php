<form>
              <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
             <tr bgcolor="coral">
                <th width="30">General Parameters</th>
                <th width="30">Downlink</th> 
                <th width="30">Uplink</th>
              </tr>
              <tbody>
                <tr>
                <th>Duplex Mode</th>
              <div class="form-group">
                <th> <select name="inputDuplexMode" id="inputDuplexMode" class="form-control">
                  <option value="TDD" selected>TDD</option>
                  <option value="FDD" selected>FDD</option>
                </select>
                </th>
              <div class="form-group">
                <th> <select name="inputDuplexMode" id="inputDuplexMode" class="form-control">
                  <option value="TDD" selected>TDD</option>
                  <option value="FDD" selected>FDD</option>
                </select>
                </th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Channel Bandwidth(MHz)</th>
                <div class="form-group">
                <th> <input type="text" name="inputBW" id="inputBW" class="form-control" required="required"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name="inputBW" id="inputBW" class="form-control" required="required"  size="5"></th>
              </div>
                </tr>
                <tr height ="2px">
                <th>Carrier Frequency(MHz)</th>
                <div class="form-group">
                <th> <input type="text" name="inputfrequency" id="inputfrequency" class="form-control" required="required"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name="inputfrequency" id="inputfrequency" class="form-control" required="required"  size="5"></th>
              </div>
                </tr> 
                <tr>
                <th>Modulation Mode</th>
              <div class="form-group">
                <th> <select name="downlinkModulationMode" id="downlinkModulationMode" class="form-control">
                  <option value="QPSK1/3" selected>QPSK1/3</option>
                  <option value="QPSK1/2" selected>QPSK1/2</option>
                  <option value="16QAM2/3" selected>16QAM2/3</option>
                  <option value="16QAM3/4" selected>16QAM3/4</option>
                </select>
                </th>
              <div class="form-group">
                <th> <select name="uplinkModulationMode" id="uplinkModulationMode" class="form-control">
                 <option value="QPSK1/3" selected>QPSK1/3</option>
                  <option value="QPSK1/2" selected>QPSK1/2</option>
                  <option value="16QAM2/3" selected>16QAM2/3</option>
                  <option value="16QAM3/4" selected>16QAM3/4</option>
                </select>
                </th>
              </div>
                </tr>              
                 <tr height ="2px">
                <th>Target Surface area(km2)</th>
                <div class="form-group">
                <th> <input type="text" name ="inputzonearea" id="inputzonearea" class="form-control" required="required"  size="5"></th>
              </div> 
                <div class="form-group">
                <th><input type="text" name ="inputzonearea"id="inputzonearea" class="form-control" required="required"  size="5"></th>
              </div>
                </tr>
                 <tr>
                <th>Morphology</th>
              <div class="form-group">
                <th> <select name="inputmorphology" id="inputmorphology" class="form-control">
                  <option value="URBAN" selected>URBAN</option>
                  <option value="SUBURAN" selected>SUBURBAN</option>
                  <option value="RURAL" selected>RURAL</option>
                </select>
                </th>
              <div class="form-group">
                <th> <select name="inputmorphology" id="inputmorphology" class="form-control">
                  <option value="URBAN" selected>URBAN</option>
                  <option value="SUBURAN" selected>SUBURBAN</option>
                  <option value="RURAL" selected>RURAL</option>
                </select>
                </th>
              </div>
                </tr> 
                </tbody>
                </table>
              </form>