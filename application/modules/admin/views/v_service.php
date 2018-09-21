<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
        <div class="x_panel">
        <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <table id="dt_service" name="dt_service" class="cell-border compact hover width-full">
              <thead>
                <tr>
                  <th><center>PERSONNEL</center></th>
                  <th><center>LOCATION</center></th>
                  <th><center>CONCERN</center></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <form id="frm_service" name="frm_service">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="height: 50px !important;">
              <label class="control-label">Pull out by:</label>
              <input type="hidden" class="form-control" id="s_id" name="s_id">
              <select id="s_pulloutby" name="s_pulloutby" class="form-control input-sm">
                <option value="">- Choose -</option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="height: 50px !important;">
              <label class="control-label">In Charge:</label>
              <input type="hidden" class="form-control" id="s_id" name="s_id">
              <select id="s_personnel" name="s_personnel" class="form-control input-sm">
                <option value="">- Choose -</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="height: 50px !important;">
              <label class="control-label">On going?</label>
              <select class="form-control input-sm" id="s_ongoing" name="s_ongoing">
                  <option>- choose -</option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Office</label>
              <input type="text" class="form-control input-sm" id="s_office" name="s_office">
              <!-- <select id="s_office" name="s_office" class="form-control input-sm">
                <option value="">- Choose -</option>
              </select> -->
            </div>
             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="height: 50px !important;">
              <label class="control-label">Thru</label>
              <select class="form-control input-sm" id="s_thru" name="s_thru">
                  <option value="">- choose -</option>
                  <option value="WALK-IN">WALK-IN</option>
                  <option value="PHONE CALL">PHONE CALL</option>
              </select>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Install New CPU Hardware"> <small> Install New CPU Hardware</small>
                  </label>
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Repair New CPU Hardware"> <small> Repair New CPU Hardware</small>
                  </label>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Install New Software"> <small> Install New Software</small>
                  </label>
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Repair Software"> <small> Repair Software</small>
                  </label>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Install New Printer"> <small> Install New Printer</small>
                  </label>
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Repair Printer"> <small> Repair Printer</small>
                  </label>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Install New UPS"> <small> Install New UPS</small>
                  </label>
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Repair UPS"> <small> Repair UPS</small>
                  </label>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value="Install New Network"> Install New Network
                  </label>
                  <label class="form-control input-sm">
                      <input type="checkbox" id="s_type[]" name="s_type[]" value=" Repair Internet"> Repair Internet
                  </label>
              </div>
             </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Service Type</label>
              <select class="form-control input-sm" id="s_type" name="s_type">
                  <option>- choose -</option>
                  <option value="INSTALL NEW">INSTALL NEW</option>
                  <option value="REPAIR">REPAIR</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Specific</label>
              <select class="form-control input-sm" id="s_concern" name="s_concern">
                  <option value="">- choose -</option>
                  <option value="HARDWARE">HARDWARE</option>
                  <option value="SOFTWARE">SOFTWARE</option>
                  <option value="NETWORK">NETWORK</option>
                  <option value="SYSTEM">SYSTEM</option>
              </select>
            </div>-->
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 50px !important;">
              <label class="control-label">Property Code:</label>
              <input type="text" class="form-control input-sm" id="c_propertycode" name="c_propertycode"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Date</label>
              <input type="text" class="form-control input-sm fdate" id="s_date" name="s_date" value="<?php echo date('Y-m-d'); ?>" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Time Started:</label>
              <input type="text" class="form-control input-sm time" id="s_timestart" name="s_timestart" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Time End:</label>
              <input type="text" class="form-control input-sm time" id="s_timeend" name="s_timeend" />
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"D>
              <label class="control-label">Remarks</label>
              <textarea id="s_remarks" name="s_remarks" class="form-control input-sm" rows="4" placeholder="Enter your remarks here.." />
              </textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <br/>
              <button type="submit" id="btn_save_new_service" class="btn btn-success col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-save"></i> Save</button>
              <button type="button" id="btn_reset" class="btn btn-warning col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-refresh"></i> Clear</button>
              <button type="button" id="btn_del" class="btn btn-danger col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-remove"></i> Delete</button>
            </div>
          
        </div>
            </form>
      </div>
    </div>
</div>
</div>
</div>
