
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
        <div class="x_panel">
        <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <table id="dt_personnellist" name="dt_personnellist" class="cell-border compact hover width-full">
              <thead>
                <tr>
                  <th><center>PERSONNEL</center></th>
                  <th><center>STATUS</center></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <form id="frm_personnel" name="frm_personnel">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">First Name:</label>
              <input type="hidden" class="form-control" id="p_id" name="p_id">
              <input type="text" class="form-control input-sm" id="p_fname" name="p_fname">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Middle Name:</label>
                <input type="text" class="form-control input-sm" id="p_mname" name="p_mname">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
              <label class="control-label">M.I:</label>
                <input type="text" class="form-control input-sm" id="p_mi" name="p_mi">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Surname Name:</label>
                <input type="text" class="form-control input-sm" id="p_lname" name="p_lname">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Name Ext:</label>
                <input type="text" class="form-control input-sm" id="p_next" name="p_next">
            </div>
            <div  style="max-height:50px;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <label class="control-label">Nick Name:</label>
                <input type="text" class="form-control input-sm" id="p_nickname" name="p_nickname">
            </div>
            <div  style="max-height:50px;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <label class="control-label">Position:</label>
                <input type="text" class="form-control input-sm" id="p_position" name="p_position">
            </div>
            <div style="max-height:50px;" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Position:</label>
                <select class="form-control input-sm" id="p_section" name="p_section">
                  <option value=""> - - - </option>
                  <option value="SOFTWARE">SOFTWARE</option>
                  <option value="TECHNICAL">TECHNICAL</option>
                  <option value="GIS">GIS</option>
                </select>
            </div>
            <div style="max-height:50px;" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <label class="control-label">Position:</label>
                <select class="form-control input-sm" id="p_gender" name="p_gender">
                  <option value=""> - - - </option>
                  <option value="F">FEMALE</option>
                  <option value="MALE">MALE</option>
                </select>
            </div>
            <div style="max-height:50px;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <label class="control-label">Mobile Number:</label>
                <input type="text" class="form-control input-sm" id="p_mobilenum" name="p_mobilenum">
            </div>
            <div style="max-height:50px;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <label class="control-label">STATUS:</label>
                <select class="form-control input-sm" id="p_status" name="p_status">
                  <option value=""> - - - </option>
                  <option value="ON-LEAVE">ON-LEAVE</option>
                  <option value="ON-FIELD">ON-FIELD</option>
                  <option value="ON-MEETING">ON-MEETINGG</option>
                  <option value="ON-TRAINING">ON-TRAINING</option>
                </select>
            </div>
            <div style="max-height:50px;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <label class="control-label">STATUS:</label>
                <select class="form-control input-sm" id="p_active" name="p_active">
                  <option value=""> - - - </option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
                </select>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <br/>
              <button type="submit" id="btn_save" class="btn btn-success col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-save"></i> Save</button>
              <button type="button" id="btn_reset" class="btn btn-warning col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-refresh"></i> Clear</button>
              <button type="button" id="btn_del" class="btn btn-danger col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-remove"></i> Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
