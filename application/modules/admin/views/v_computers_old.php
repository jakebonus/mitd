<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
      <div class="x_panel">
        <div class="x_title"><h2> Computers Inventory</h2><div class="clearfix"></div></div>
        <div class="x_content">
          <form id="frm_computers" name="frm_computers">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Computer type<span>*</span></label>
                <select id="c_type" name="c_type" class="form-control input-sm" required>
                  <option value=''>- Choose -</option>
                  <option value="DESKTOP" selected>DESKTOP</option>
                  <option value="LAPTOP">LAPTOP</option>
                  <option value="ALL IN ONE">ALL IN ONE</option>
                </select>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <label class="control-label">Property Code<span>*</span></label>
                <input type="text" id="c_propertycode" name="c_propertycode" class="form-control input-sm" required value="c_propertycode">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">ISO Unit<span>*</span></label>
                <select id="c_iso" name="c_iso" class="form-control input-sm" required>
                  <option value=''>- Choose -</option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <label class="control-label">ISO Number<span>*</span></label>
                <input type="text" id="c_isonum" name="c_isonum" class="form-control input-sm" required value="c_isonum">
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Office<span>*</span></label>
                <select id="c_office" name="c_office" class="form-control input-sm" required>
                  <option value=''>- Choose -</option>
                </select>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <label class="control-label">End-user<span>*</span></label>
                <input type="text" id="c_enduser" name="c_enduser" class="form-control input-sm" required value="c_enduser">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <label class="control-label">M.R. to<span>*</span></label>
                <input type="text" id="c_mrto" name="c_mrto" class="form-control input-sm" required value="c_enduser">
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <hr>

              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Processor Brand<span>*</span></label>
                <select id="c_prosmade" name="c_prosmade" class="form-control input-sm" required>
                  <option>- Choose -</option>
                  <option value="INTEL">INTEL</option>
                  <option value="AMD">AMD</option>
                </select>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Processor Model<span>*</span></label>
                <input type="text" id="c_prosmodel" name="c_prosmodel" class="form-control input-sm" required  value="c_enduser">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Processor Socket<span>*</span></label>
                <input type="text" id="c_prossocket" name="c_prossocket" class="form-control input-sm" required  value="c_enduser">
              </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label class="control-label">Storage Type<span>*</span></label>
                <select id="storagetype" name="storagetype" class="form-control input-sm" >
                  <option value="">- Choose -</option>
                  <option value="SSD" selected>SSD</option>
                  <option value="HDD">HDD</option>
                </select>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label class="control-label">Storage Brand<span>*</span></label>
                <input type="text" id="storagemade" name="storagemade" class="form-control input-sm"   value="c_enduser">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label class="control-label">Storage Capacity<span>*</span></label>
                <input type="text" id="storagecapacity" name="storagecapacity" class="form-control input-sm"   value="c_enduser">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label class="control-label">Storage Serial Number<span>*</span></label>
                <input type="text" id="storageserialnum" name="storageserialnum" class="form-control input-sm"   value="c_enduser">
              </div>
              <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                  <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;<span></span></label>
                <button type="button" id="btn_savestorage" name="btn_savestorage" class="btn btn-success input-sm"><i class="fa fa-plus"></i> ADD</button>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;<span></span></label>
                  <table id="table_storage" class="table table-bordered input-sm">
                      <thead>
                          <td><center>Storage<center></td>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <label class="control-label">RAM Type<span>*</span></label>
            <select id="ramtype" name="ramtype" class="form-control input-sm" >
              <option value="">- Choose -</option>
              <option value="SDRAM" >SDRAM</option>
              <option value="DDR1">DDR1</option>
              <option value="DDR2">DDR2</option>
              <option value="DDR3" selected>DDR3</option>
              <option value="DDR4">DDR4</option>
            </select>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <label class="control-label">RAM Brand<span>*</span></label>
            <input type="text" id="rammade" name="rammade" class="form-control input-sm"   value="c_enduser">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <label class="control-label">RAM Capacity<span>*</span></label>
            <input type="text" id="ramcapacity" name="ramcapacity" class="form-control input-sm"   value="c_enduser">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <label class="control-label">RAM Serial Number<span>*</span></label>
            <input type="text" id="ramserialnum" name="ramserialnum" class="form-control input-sm"   value="c_enduser">
          </div>
          <div class="col-lg-1 col-md-1col-sm-12 col-xs-12">
              <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;<span></span></label>
            <button type="button" id="btn_saveram" name="btn_saveram" class="btn btn-success input-sm"><i class="fa fa-plus"></i> ADD</button>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <label class="control-label">&nbsp;<span></span></label>
              <table id="table_ram" class="table table-bordered input-sm">
                  <thead>
                      <td><center>RAM<center></td>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
          </div>
        </div>

    </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Motherboard Brand<span>*</span></label>
              <input type="text" id="c_mboardmade" name="c_mboardmade" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Motherboard Model<span>*</span></label>
              <input type="text" id="c_mboardmodel" name="c_mboardmodel" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Motherboard Serial<span>*</span></label>
              <input type="text" id="c_mboradserialnum" name="c_mboradserialnum" class="form-control input-sm" required  value="c_enduser">
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Graphicscard Brand<span>*</span></label>
              <input type="text" id="c_graphicscardmade" name="c_graphicscardmade" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Graphicscard Model<span>*</span></label>
              <input type="text" id="c_graphicscardmodel" name="c_graphicscardmodel" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Graphicscard Capacity<span>*</span></label>
              <input type="text" id="c_graphicscardcapacity" name="c_graphicscardcapacity" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Graphicscard bit<span>*</span></label>
              <input type="text" id="c_graphicsbit" name="c_graphicsbit" class="form-control input-sm" required value="c_enduser" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Graphicscard Serial<span>*</span></label>
              <input type="text" id="c_graphicsserialnum" name="c_graphicsserialnum" class="form-control input-sm" required  value="c_enduser">
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Powersupply Brand<span>*</span></label>
              <input type="text" id="c_psupplymade" name="c_psupplymade" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
              <label class="control-label">Powersupply Wattage<span>*</span></label>
              <input type="text" id="c_psupplywattage" name="c_psupplywattage" class="form-control input-sm" required  value="c_enduser">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label class="control-label">Powersupply Serial<span>*</span></label>
              <input type="text" id="c_psupplyserialnum" name="c_psupplyserialnum" class="form-control input-sm" required  value="c_enduser">
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <label class="control-label">Monitor Brand<span>*</span></label>
                  <input type="text" id="c_monitormade" name="c_monitormade" class="form-control input-sm" required  value="c_enduser">
                </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Monitor Size<span>*</span></label>
                <input type="text" id="c_monitorsize" name="c_monitorsize" class="form-control input-sm" required  value="c_enduser">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Monitor Display<span>*</span></label>
                <input type="text" id="c_monitordisplay" name="c_monitordisplay" class="form-control input-sm" required  value="c_enduser">
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-2 col-md-2col-sm-6 col-xs-12">
                  <label class="control-label">KBoard Tye<span>*</span></label>
                  <select id="c_kboardtype" name="c_kboardtype" class="form-control input-sm">
                      <option value=''>- Choose -</option>
                      <option value="USB" selected>USB</option>
                      <option value="PS2">PS2</option>
                  </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <label class="control-label">KBoard Made<span>*</span></label>
                  <input type="text" id="c_kboardmade" name="c_kboardmade" class="form-control input-sm" required  value="c_enduser">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <label class="control-label">Mouse Tye<span>*</span></label>
                  <select id="c_mousetype" name="c_mousetype" class="form-control input-sm">
                      <option value=''>- Choose -</option>
                      <option value="USB" selected>USB</option>
                      <option value="PS2">PS2</option>
                  </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <label class="control-label">KBoard Made<span>*</span></label>
                  <input type="text" id="c_mousemade" name="c_mousemade" class="form-control input-sm" required  value="c_enduser">
                </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <label class="control-label">Operating System<span>*</span></label>
                  <input type="text" id="c_os" name="c_os" class="form-control input-sm" required  value="c_enduser">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <label class="control-label">O.S. Serial<span>*</span></label>
                  <input type="text" id="c_osserial" name="c_osserial" class="form-control input-sm" required  value="c_enduser">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <label class="control-label">IP Address<span>*</span></label>
                  <input type="text" id="c_ipaddress" name="c_ipaddress" class="form-control input-sm" required  value="c_enduser">
                </div>

                <div class="col-lg-2 col-md-2col-sm-6 col-xs-12">
                  <label class="control-label">Network Type<span>*</span></label>
                  <select id="c_network" name="c_network" class="form-control input-sm">
                      <option>- Choose -</option>
                      <option value="LOCAL">LOCAL</option>
                      <option value="INTERNET">INTERNET</option>
                      <option value="BOTH" selected>BOTH</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Funded by<span>*</span></label>
                <select id="c_sourceoffund" name="c_sourceoffund" class="form-control input-sm">
                    <option>- Choose -</option>
                    <option value="CITY GOVERNMENT" selected>CITY GOVERNMENT</option>
                    <option value="DONATION">DONATION</option>
                </select>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Unit Cost<span>*</span></label>
                <input type="text" id="c_cost" name="c_cost" class="form-control input-sm" required  value="c_enduser">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <label class="control-label">Supplier<span>*</span></label>
                <input type="text" id="c_supplier" name="c_supplier" class="form-control input-sm" required  value="c_supplier">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label class="control-label">Delivery Date<span>*</span></label>
                <input type="text" id="c_datedelivered" name="c_datedelivered" class="form-control input-sm" required  value="c_enduser">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <label class="control-label">Remarks<span>*</span></label>
              <textarea id="c_remarks" name="c_remarks" class="form-control input-sm" rows="4" value="c_enduser"> </textarea>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <hr>
              <button type="button" id="btn_savecomputer" name="btn_savecomputer" class="btn btn-success col-lg-2 col-md-3 col-sm-6 col-xs-12 input-sm"> <i class="fa fa-save"></i> SAVE</button>
            </div>
        </div>
          </div>
        </form>
          <!-- /form -->
        </div>
    </div>
  </div>
</div>
