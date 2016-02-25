<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
      <label for="username" class="col-md-2 control-label">
         姓名
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="username" autofocus
               id="username" value="{{ $username }}">
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