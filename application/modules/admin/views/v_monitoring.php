<?php $this->load->view('layouts/v_head.php'); ?>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <br/>
    <div class="col-lg-1">
      <label class="label-control" style="text-align: right !important;padding-top: 5px;padding-bottom: 2px;padding-left: 58px;">Desktop:</label>
    </div>
    <div class="col-lg-1">
      <label class="form-control input-sm">#</label>
    </div>
    <div class="col-lg-1">
      <label class="label-control" style="text-align: right !important;padding-top: 5px;padding-bottom: 2px;padding-left: 58px;">Laptop:</label>
    </div>
    <div class="col-lg-1">
      <label class="form-control input-sm">#</label>
    </div>
    <div class="col-lg-1">
      <label class="label-control" style="text-align: right !important;padding-top: 5px;padding-bottom: 2px;padding-left: 32px;">All in One:</label>
    </div>
    <div class="col-lg-1">
      <label class="form-control input-sm">#</label>
    </div>
    <div class="col-lg-1">
      <label class="label-control" style="text-align: right !important;padding-top: 5px;padding-bottom: 2px;padding-left: 58px;">Printer:</label>
    </div>
    <div class="col-lg-1">
      <label class="form-control input-sm">#</label>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
        <table id="dt_personnelmonitoring" name="dt_personnelmonitoring" class="row-border compact width-full">
          <thead>
            <tr>
              <td colspan="5"><center>SERVICES</center></td>
            </tr>
            <tr>
              <th><center>CONCERN</center></th>
              <th><center>OFFICE</center></th>
              <th><center>DATE</center></th>
              <th><center>STATUS</center></th>
              <th style="min-width:100px;"><center>IN Charge</center></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
      <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <table id="dt_projectmonitoring" name="dt_projectmonitoring" class="row-border compact width-full">
          <thead>
            <tr>
              <td colspan="3"><center>PROJECT DEVELOPMENT</center></td>
            </tr>
            <tr>
              <th style="min-width:100px;"><center>PERSONNEL</center></th>
              <th style="min-width:200px;"><center>PROJECTS</center></th>
              <th style="min-width:100px;"><center>STATUS</center></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <hr>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <table id="dt_systems" name="dt_systems" class="row-border compact width-full">
          <thead>
            <tr>
              <td colspan="2"><center>SYSTEM MONITORING</center></td>
            </tr>
            <tr>
              <th><center>SYSTEM NAME</center></th>
              <th><center>STATUS</center></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <table id="dt_personnellist" name="dt_personnellist" class="row-border compact width-full">
          <thead>
            <tr>
              <th style="min-width:150px;"><center>PERSONNEL</center></th>
              <th><center>STATUS</center></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>



    </div>
  </div>
</div>
<?php $this->load->view('layouts/v_footer.php'); ?>
