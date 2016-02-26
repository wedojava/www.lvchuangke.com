<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
      <label for="caseTitle" class="col-md-2 control-label">
         案例名称
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="caseTitle" autofocus
               id="caseTitle" value="{{ $caseTitle }}">
      </div>
    </div>
    <div class="form-group">
      <label for="lawyer" class="col-md-2 control-label">
         辩护律师
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="lawyer"
               id="lawyer" value="{{ $lawyer }}">
      </div>
    </div>
    <div class="form-group">
      <label for="lawOffice" class="col-md-2 control-label">
        承办律所
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="lawOffice"
               id="lawOffice" value="{{ $lawOffice }}">
      </div>
    </div>
    <div class="form-group">
      <label for="caseDetail" class="col-md-2 control-label">
          案例简介
      </label>
      <div class="col-md-10">
        <textarea class="form-control" name="caseDetail" rows="5"
                  id="caseDetail">{{ $caseDetail }}</textarea>
      </div>
    </div>
  </div>
</div>