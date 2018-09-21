<?php $this->load->view('layouts/v_head.php'); ?>
<div class="row touch-screen">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <table id="dt_personnel" name="dt_personnel" class="table display table-bordered">
          <thead>
            <td><center>PERSONNEL NAME</center></td>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <table id="dt_office" name="dt_office" class="table display table-bordered">
          <thead>
            <td><center>OFFICE</center></td>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <table id="dt_concern" name="dt_concern" class="table display table-bordered">
          <thead>
            <td><center>CONCERN</center></td>
          </thead>
          <tbody>
            <tr data-concern="HARDWARE"><td>HARDWARE</td></tr>
            <tr data-concern="SOFTWARE"><td>SOFTWARE</td></tr>
            <tr data-concern="NETWORK"><td>NETWORK</td></tr>
            <tr data-concern="SYSTEM"><td>SYSTEM</td></tr>
          </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <br/>
        <br/>
        <br/>
        <br/>
        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success btn-lg" id="btn_save_service" name="btn_save_service"><i class="fa fa-save"></i> SAVE</button>
    </div>
  </div>
</div>
<?php $this->load->view('layouts/v_footer.php'); ?>
