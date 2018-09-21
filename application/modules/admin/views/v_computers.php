<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="x_panel">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <label class="control-label">OFFICE</label>
          <select id="ftr_office" name="ftr_office" class="form-control input-sm">

              </select>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <label class="control-label">TYPE</label>
          <select id="ftr_type" name="ftr_type" class="form-control input-sm">
                <option value=""> - - - - </option>
               <option value="DESKTOP">DESKTOP</option>
               <option value="LAPTOP">LAPTOP</option>
               <option value="ALL IN ONE">ALL IN ONE</option>
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
          <label class="control-label">is CONDEMN?</label>
          <select id="ftr_condemn" name="ftr_condemn" class="form-control input-sm">
                <option value="">ALL</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
          <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <button type="button" id="btn_ftrcomputer" name="btn_ftrcomputer" class="btn btn-success btn-sm"> <i class="fa fa-filter"></i> FILTER</button>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <table id="dt_computerlist" name="dt_computerlist" class="cell-border compact hover width-full" style="min-width: 100% !important;">
            <thead>
              <tr>
                <th>PROPERTY CODE</th>
                <th>TYPE</th>
                <th>OFFICE</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <form id="frm_pcspecs" name="frm_pcspecs">
            <input type="hidden" id="c_id" name="c_id">
            <input type="hidden" id="id" name="id">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Type</label>
              <select class="form-control input-sm" id="type" name="type">
                <option value=""> - - - - </option>
                <option value="MOTHERBOARD">MOTHERBOARD</option>
                <option value="PROCESSOR">PROCESSOR</option>
                <option value="GRAPHICS CARD">GRAPHICS CARD</option>
                <option value="RAM">RAM</option>
                <option value="HDD">HDD</option>
                <option value="SSD">SSD</option>
                <option value="OPTICAL DRIVE">OPTICAL DRIVE</option>
                <option value="LAN CARD">LAN CARD</option>
                <option value="POWER-SUPPLY">POWER-SUPPLY</option>
                <option value="MONITOR">MONITOR</option>
                <option value="PRINTER">PRINTER</option>
                <option value="UPS/AVR">UPS/AVR</option>
                <option value="KEYBOARD">KEYBOARD</option>
                <option value="MOUSE">MOUSE</option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label"> Brand</label>
              <input type="text" class="form-control input-sm" id="brand" name="brand">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label"> Model</label>
              <input type="text" class="form-control input-sm" id="model" name="model">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label"> Serial #</label>
              <input type="text" class="form-control input-sm" id="serial" name="serial">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label class="control-label"> Remarks</label>
              <textarea class="form-control input-sm" id="remarks" name="remarks"></textarea>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <br/>
              <button type="button" class="btn btn-danger btn-sm col-xs-12" id="btn_delspecs" name="btn_delspecs"><i class="fa fa-remove"></i> Delete</button>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <br/>
              <button type="button" class="btn btn-success btn-sm col-xs-12" id="btn_savespecs" name="btn_savespecs"><i class="fa fa-save"></i> Save</button>
            </div>
          </form>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table id="dt_pcspecs" name="dt_pcspecs" class="cell-border compact hover width-full" style="min-width: 100% !important;">
              <thead>
                <tr>
                  <th>TYPE</th>
                  <th>BRAND</th>
                  <th>MODEL</th>
                  <th>SERIAL</th>
                  <th>REMARKS</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modals -->
<div class="modal fade bs-example-modal-md" id="mdl_newpc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form id="frm_newpc" name="frm_newpc">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"> <center> - Add New Computer - </center></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height: 50px;">
              <label class="control-label"> Type</label>
              <select class="form-control input-sm" id="c_type" name="c_type">
               <option value=""> - - - - </option>
               <option value="DESKTOP">DESKTOP</option>
               <option value="LAPTOP">LAPTOP</option>
               <option value="ALL IN ONE">ALL IN ONE</option>
               <option value="PRINTER">PRINTER</option>
               <option value="ROUTER">ROUTER</option>
               <option value="SWITCH">SWITCH</option>
             </select>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> Property Code</label>
              <input type="text" class="form-control input-sm" id="c_propertycode" name="c_propertycode">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label"> Brand</label>
              <input type="text" class="form-control input-sm" id="c_brand" name="c_brand">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label"> Model</label>
              <input type="text" class="form-control input-sm" id="c_model" name="c_model">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> Serial #</label>
              <input type="text" class="form-control input-sm" id="c_serial" name="c_serial">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label"> Office</label>
              <input type="text" class="form-control input-sm" id="c_office" name="c_office"/>
              <!-- <select class="form-control input-sm" id="c_office" name="c_office">
             </select> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height: 50px;">
              <label class="control-label"> ISO Unit?</label>
              <select class="form-control input-sm" id="c_iso" name="c_iso">
               <option value=""> - - - - </option>
               <option value="YES">YES</option>
               <option value="NO">NO</option>
             </select>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> ISO Code</label>
              <input type="text" class="form-control input-sm" id="c_isonum" name="c_isonum">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label">Delivery date</label>
              <input type="text" class="form-control input-sm" id="c_datedelivered" name="c_datedelivered">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label class="control-label">End user</label>
              <input type="text" class="form-control input-sm" id="c_enduser" name="c_enduser">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label class="control-label">M.R. To</label>
              <input type="text" class="form-control input-sm" id="c_mrto" name="c_mrto">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">IP Address</label>
              <input type="text" class="form-control input-sm" id="c_ipaddress" name="c_ipaddress">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Network</label>
              <select class="form-control input-sm" id="c_network" name="c_network">
               <option value=""> - - - - </option>
               <option value="LOCAL">LOCAL</option>
               <option value="INTERNET">INTERNET</option>
               <option value="BOTH">BOTH</option>
             </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Source of fund</label>
              <select class="form-control input-sm" id="c_sourceoffund" name="c_sourceoffund">
               <option value=""> - - - - </option>
               <option value="CITY GOVERNMENT">CITY GOVERNMENT</option>
               <option value="DONATION">DONATION</option>
             </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Cost</label>
              <input type="text" class="form-control input-sm" id="c_cost" name="c_cost">
            </div>

          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label class="control-label">Remarks</label>
              <textarea class="form-control input-sm" id="c_remarks" name="c_remarks"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_closenewpc">Close</button>
          <button type="button" class="btn btn-primary" id="btn_savenewpc">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modals -->
<div class="modal fade bs-example-modal-md" id="mdl_updatepc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form id="frm_updatenpc" name="frm_updatenpc">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"> <center> - Update Equipment - </center></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="text" class="form-control input-sm" id="c_id" name="c_id">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height: 50px;">
              <label class="control-label"> Type</label>
              <select class="form-control input-sm" id="c_type" name="c_type">
               <option value=""> - - - - </option>
               <option value="DESKTOP">DESKTOP</option>
               <option value="LAPTOP">LAPTOP</option>
               <option value="ALL IN ONE">ALL IN ONE</option>
               <option value="PRINTER">PRINTER</option>
               <option value="ROUTER">ROUTER</option>
               <option value="SWITCH">SWITCH</option>
             </select>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> Property Code</label>
              <input type="text" class="form-control input-sm" id="c_propertycode" name="c_propertycode">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label"> Brand</label>
              <input type="text" class="form-control input-sm" id="c_brand" name="c_brand">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label"> Model</label>
              <input type="text" class="form-control input-sm" id="c_model" name="c_model">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> Serial #</label>
              <input type="text" class="form-control input-sm" id="c_serial" name="c_serial">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label"> Office</label>
              <input type="text" class="form-control input-sm" id="c_office" name="c_office">
              <!-- <select class="form-control input-sm" id="c_office" name="c_office">
             </select> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height: 50px;">
              <label class="control-label"> ISO Unit?</label>
              <select class="form-control input-sm" id="c_iso" name="c_iso">
               <option value=""> - - - - </option>
               <option value="YES">YES</option>
               <option value="NO">NO</option>
             </select>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <label class="control-label"> ISO Code</label>
              <input type="text" class="form-control input-sm" id="c_isonum" name="c_isonum">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <label class="control-label">Delivery date</label>
              <input type="text" class="form-control input-sm" id="c_datedelivered" name="c_datedelivered">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label class="control-label">End user</label>
              <input type="text" class="form-control input-sm" id="c_enduser" name="c_enduser">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label class="control-label">M.R. To</label>
              <input type="text" class="form-control input-sm" id="c_mrto" name="c_mrto">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">IP Address</label>
              <input type="text" class="form-control input-sm" id="c_ipaddress" name="c_ipaddress">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Network</label>
              <select class="form-control input-sm" id="c_network" name="c_network">
               <option value=""> - - - - </option>
               <option value="LOCAL">LOCAL</option>
               <option value="INTERNET">INTERNET</option>
               <option value="BOTH">BOTH</option>
             </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Source of fund</label>
              <select class="form-control input-sm" id="c_sourceoffund" name="c_sourceoffund">
               <option value=""> - - - - </option>
               <option value="CITY GOVERNMENT">CITY GOVERNMENT</option>
               <option value="DONATION">DONATION</option>
             </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Cost</label>
              <input type="text" class="form-control input-sm" id="c_cost" name="c_cost">
            </div>

          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label class="control-label">Remarks</label>
              <textarea class="form-control input-sm" id="c_remarks" name="c_remarks"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_closeupdatepc">Close</button>
          <button type="button" class="btn btn-primary" id="btn_saveupdatepc">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modals -->
<div class="modal fade bs-example-modal-md" id="mdl_condempc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form id="frm_condemnpc" name="frm_condemnpc">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"> <center> - Comdemn Computer - </center></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="hidden" id="c_id" name="c_id">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Condemn date</label>
              <input type="text" class="form-control input-sm" id="c_condemdate" name="c_condemdate">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label class="control-label">Condemn reason</label>
              <!-- <input type="text"> -->
              <textarea class="form-control input-sm" id="c_condemnreason" name="c_condemnreason"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_closecondemnpc">Close</button>
          <button type="button" class="btn btn-primary" id="btn_savecondemnpc">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modals -->
<div class="modal fade bs-example-modal-md" id="mdl_pcinfo" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"> <center> - INDEX CARD - </center></h4>
      </div>
      <div class="modal-body" id="printthis">
        <div class="row" style="margin: 0;
                                  padding-left: 10px;">
          <div class="col-xs-12">
            <div id="propertycode" style="font-size: 24px;"></div>
            <div>CONTROL CODE</div>
            <div id="office" class='typex' style="  padding-top: 10px !important;
                                                    padding-bottom: 10px !important;
                                                    width: 200px !important;
                                                    display: inline-block !important;">
              <i class="">OFFICE:</i></div>
            <div id="enduser" class='typex' style="  padding-top: 10px !important;
                                                    padding-bottom: 10px !important;
                                                    width: 200px !important;
                                                    display: inline-block !important;">
              ><i class="">END USER:</i></div>
                <div class="row" id="specs">
                  <div id="processor"></div>
                  <div id="harddisk"></div>
                  <div id="ram"></div>
                  <div id="mboard"></div>
                  <div id="opticaldrive"></div>
                  <div id="graphicscard"></div>
                  <div id="lan"></div>
                  <div id="other"></div>
                  <div id="monitor"></div>
                  <div id="mouse"></div>
                  <div id="keyboard"></div>
                  <div id="printer"></div>
                  <div id="avr"></div>
                </div>
            <div class="row">
              <hr>
              <h4>UNIT HISTORY</h4>
              <table style="max-width: 700px" border="1">
                <thead>
                  <tr>
                    <th style="width:100px">
                      <center>DATE</center>
                    </th>
                    <th style="width:300px">
                      <center>REMARKS</center>
                    </th>
                    <th style="width:150px">
                      <center>ATTENDED BY</center>
                    </th>
                    <th style="width:150px">
                      <center>ATTESTED BY</center>
                    </th>
                  </tr>
                </thead>
                <tbody id="unithistor">
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_closepcinfo">Close</button>
          <button type="button" class="btn btn-primary" onclick="printDiv(printthis)" id="btn_printpcinfo">Save changes</button>
        </div>
      </div>
    </div>
  </div>
