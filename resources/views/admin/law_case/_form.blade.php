<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
      <label for="nickname" class="col-md-2 control-label">
         姓名
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nickname" autofocus
               id="nickname" value="{{ $nickname }}">
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
      <label for="email" class="col-md-2 control-label">
         电子邮件
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="email"
               id="email" value="{{ $email }}">
      </div>
    </div>
    <div class="form-group">
      <label for="QQ" class="col-md-2 control-label">
        QQ
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="QQ"
               id="QQ" value="{{ $QQ }}">
      </div>
    </div>
    <div class="form-group">
      <label for="detail" class="col-md-2 control-label">
        案情简介
      </label>
      <div class="col-md-10">
        <textarea class="form-control" name="detail" rows="5"
                  id="detail">{{ $detail }}</textarea>
      </div>
    </div>
  </div>
</div>