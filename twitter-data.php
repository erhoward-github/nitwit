<h1>Twitter Data</h1>

<form name="twitterDataForm" class="form-horizontal">

  <div class="form-group">
    <label for="keywords" class="col-sm-2 control-label">Keywords</label>    
    <div class="col-sm-10">
    <input type="text" class="form-control" id="keywords" data-ng-model="userDataModel.keywords" placeholder="Enter keywords">
    </div>
  </div>
  
  <div class="form-group">
    <label for="limitTo" class="col-sm-2 control-label">Limit To</label>    
    <div class="col-sm-10">
    <input type="number" class="form-control" id="Limit To" data-ng-model="userDataModel.limitTo" placeholder="Enter maximum number">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button data-ng-click="getData();" class="btn btn-default">Search</button>
    </div>
  </div>
  
</form>

<div data-ng-show="systemError" class="alert alert-danger" role="alert">{{message}}</div>
<div data-ng-show="userError" class="alert alert-warning" role="alert">{{message}}</div>
<div data-ng-show="working" class="alert alert-info" role="alert">{{message}}</div>

<div class="table-responsive" data-ng-if="gotData">
<table class="table table-condensed table-hover table-bordered table-striped table-condensed">
<thead>
<tr><th>Key</th><th>Value</th></tr>
</thead>
<tbody>
<tr data-ng-repeat="(key,value) in twitterDataModel.hashtags" data-ng-if ="$index < userDataModel.limitTo || userDataModel.limitTo === 0">
<td>{{key}}</td>
<td>{{value}}</td>
</tr>
</tbody>
</table>
</div>
