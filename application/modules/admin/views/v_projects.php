
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
        <div class="x_panel">
        <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <table id="dt_projects" name="dt_projects" class="cell-border compact hover width-full">
              <thead>
                <tr>
                  <th><center>PERSONNEL</center></th>
                  <th><center>PROJECTS</center></th>
                  <th><center>STATUS</center></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <form id="frm_projects" name="frm_projects">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="max-height: 50px;">
              <label class="control-label">Care Of:</label>
              <input type="hidden" class="form-control" id="id" name="id">
              <select id="p_id" name="p_id" class="form-control input-sm">
                <option value="">- Choose -</option>
              </select>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <label class="control-label">Project</label>
              <input type="text" class="form-control input-sm" id="name" name="name">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Status</label>
              <select id="status" name="status" class="form-control input-sm">
                <option value="">- Choose -</option>
                <option value="DEVELOPMENT">DEVELOPMENT</option>
                <option value="ENHANCEMENT">ENHANCEMENT</option>
                <option value="TESTING">TESTING</option>
                <option value="DEPLOYED">DEPLOYED</option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Office:</label>
              <select id="office" name="office" class="form-control input-sm">
                <option value="">- Choose -</option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Start of Dev't:</label>
              <input type="text" class="form-control input-sm fdate" id="devstart" name="devstart" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <label class="control-label">Deadline:</label>
              <input type="text" class="form-control input-sm fdate" id="deadline" name="deadline" />
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"D>
              <label class="control-label">Remarks</label>
              <textarea id="remarks" name="remarks" class="form-control input-sm" rows="4" placeholder="Enter your remarks here.." />
              </textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <br/>
              <button type="submit" id="btn_save_newproject" class="btn btn-success col-lg-2 col-md-3 col-sm-12 col-xs-12 input-sm"><i class="fa fa-save"></i> Save</button>
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
