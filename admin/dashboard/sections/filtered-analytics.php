<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="panel panel-default card-view panel-refresh">
    <div class="refresh-container">
      <div class="la-anim-1"></div>
    </div>
    <div class="panel-heading">
      <div class="pull-left">
        <h6 class="panel-title txt-dark">Filtered Totals</h6>
      </div>
      <div class="pull-right">
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="panel-wrapper collapse in">
      <div class="panel-body">
        <p>Start Date: <input type="text" class="form-control date" id="sdate" name="sdate" onchange="get_filtered_results();" /></p>
        <br>
        <p>End Date: <input type="text" class="form-control date" id="edate" name="edate" onchange="get_filtered_results();" /></p>
        <hr>
        <u><h5>Results:</h5></u>
        <div id="filtered_results"></div>
      </div>
    </div>
  </div>
</div>