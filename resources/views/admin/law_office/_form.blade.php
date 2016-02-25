<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
      <label for="officeName" class="col-md-2 control-label">
         律所名称
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="officeName" autofocus
               id="officeName" value="{{ $officeName }}">
      </div>
    </div>
    <div class="form-group">
      <label for="telephone" class="col-md-2 control-label">
         联系电话
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="telephone"
               id="telephone" value="{{ $telephone }}">
      </div>
    </div>
    <div class="form-group">
      <label for="description" class="col-md-2 control-label">
        简介
      </label>
      <div class="col-md-10">
        <textarea class="form-control" name="description" rows="5"
                  id="description">{{ $description }}</textarea>
      </div>
    </div>
  </div>
</div>