<?php //$this->load->load->view('templates/header.php');?>
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


		<form method="post" name="userForm" id="create_student_info_frm" ng-submit="ctrl.addStudent(userForm.$valid)" novalidate>

			<div class="form-group" ng-class="{ 'has-error' : userForm.title.$invalid && !userForm.title.$pristine }">
			    <label for="title">Title</label>
			    <input type="text" name="title" ng-model="ctrl.studentObj.title" required/><br />
			    <p ng-show="userForm.title.$invalid && !userForm.title.$pristine" class="help-block">Title is required.</p>
			</div>

			<div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
			    <label for="text">Text</label>
			    <textarea name="text" ng-model="ctrl.studentObj.name" required></textarea><br />
			    <p ng-show="userForm.text.$invalid && !userForm.text.$pristine" class="help-block">Text is required.</p>
			</div>

		    <!-- <input type="submit" name="submit" value="Create news item" /> -->
		    <button type="submit" class="btn btn-primary">Create news item</button>

		</form>

	</div>
</div>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="http://ui-grid.info/release/ui-grid.js"></script>
<link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css">


<script type="text/javascript" src="/CI/static/js/grid/gridService.js"></script>
<script type="text/javascript" src="/CI/static/js/grid/gridCtrl.js"></script>

