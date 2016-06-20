<!-- Button trigger modal
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
 -->
 
<!-- Modal is included from the header.php -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="myModalBody">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!---<button type="button" class="btn btn-primary">Save changes</button>--->
      </div>
    </div>
  </div>
</div>
 
<!-- Modal is included from the header.php -->
<div class="modal fade confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" class="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" class="myModalBody">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-4 pull-right" data-dismiss="modal">Delete</button>
		
        <button type="button" class="btn btn-secondary col-md-2 pull-right" style="margin-right: 10px;" data-dismiss="modal">Cancel</button>
        <!---<button type="button" class="btn btn-primary">Save changes</button>--->
      </div>
    </div>
  </div>
</div>