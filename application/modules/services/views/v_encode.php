<?php $this->load->view('layouts/v_head.php'); ?>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <hr>
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
            <tr data-concern="Hardware"><td>Hardware</td></tr>
            <tr data-concern="Software"><td>Software</td></tr>
            <tr data-concern="Network"><td>Network</td></tr>
            <tr data-concern="System"><td>System</td></tr>
          </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success btn-lg" id="btn_save" name="btn_save"><i class="fa fa-save"></i> SAVE</button>
    </div>
  </div>
</div>
<?php $this->load->view('layouts/v_footer.php'); ?>
