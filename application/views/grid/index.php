<?php $this->load->load->view('templates/footer.php');?>
<script type="text/javascript">
	angular.module('gridApp', ['ui.grid']);
</script>

<style>
.grid {
  width: 800px;
  height: 250px;
}
.ui-grid-top-panel{
	height: 30px;
}

</style>

<div ng-app="gridApp">
	<div class="" ng-controller="GridController as ctrl">
		<h3>Grid </h3>
		
		<div id="grid1" ui-grid='{ data: ctrl.myData }' class="grid"></div>

	</div>
</div>




<script src="http://ui-grid.info/release/ui-grid.js"></script>
<link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css">


<script type="text/javascript" src="/CI/static/js/grid/gridService.js"></script>
<script type="text/javascript" src="/CI/static/js/grid/gridCtrl.js"></script>

