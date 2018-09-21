<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
      <div class="x_panel">
        <!-- <div class="x_title"><h2> Computers List</h2><div class="clearfix"></div></div> -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">OFFICE</label>
              <select id="ftr_office" name="ftr_office" class="form-control input-sm">
                <option value="">ALL</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">PROPERTY CODE</label>
              <input type="text" id="ftr_propertycode" name="ftr_propertycode" class="form-control input-sm">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">ISO CODE</label>
              <input type="text" id="ftr_isonum" name="ftr_isonum" class="form-control input-sm">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">PROCESSOR</label>
              <select id="ftr_processor" name="ftr_processor" class="form-control input-sm">
                <option value="">ALL</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">is CONDEMN?</label>
              <select id="ftr_condemn" name="ftr_condemn" class="form-control input-sm">
                <option value="">ALL</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">OS</label>
              <select id="ftr_os" name="ftr_os" class="form-control input-sm">
                <option value="">- choose -</option>
              </select>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <hr>
              <button type="button" id="btn_ftrcomputer" name="btn_ftrcomputer" class="btn btn-success btn-sm"> <i class="fa fa-filter"></i> FILTER</button>
            </div>
          </div>
        </div>
        <div class="x_content">
          <!-- <table id="dt_complist" name="dt_complist" class="table display table-bordered"> -->
          <table id="dt_complist" name="dt_complist"  class="cell-border compact hover width-full">
            <thead>
              <td>Office</td>
              <td>Property Code</td>
              <td>Iso Code</td>
              <td>Specification</td>
              <td>End User</td>
              <td>M.R. to</td>
              <td>Action</td>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal_pcdetails">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Details</h4> -->
        <h4 class="modal-title" id="propertycode">Details</h4>
      </div>
      <div class="modal-body">
        <!-- <h4 id="propertycode">PROPERTY CODE</h4> -->
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <label class="control-label">ISO</label>
            <input type="text" class="form-control" id="c_isonum" readonly>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <label class="control-label">OFFICE</label>
            <input type="text" class="form-control" id="c_office" readonly>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label class="control-label">END USER</label>
            <input type="text" class="form-control" id="c_enduser" readonly>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <label class="control-label">Processor</label>
            <input type="text" class="form-control" id="pros" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
