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
      <label for="professional_field" class="col-md-2 control-label">
         专业领域
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="professional_field"
               id="professional_field" value="{{ $professional_field }}">
      </div>
    </div>
    <div class="form-group">
      <label for="certified_no" class="col-md-2 control-label">
         执业证号
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="certified_no"
               id="certified_no" value="{{ $certified_no }}">
      </div>
    </div>
    <div class="form-group">
      <label for="certified_ages" class="col-md-2 control-label">
         执业年限
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="certified_ages"
               id="certified_ages" value="{{ $certified_ages }}">
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
    <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-primary btn-lg"
                name="action" value="continue">
          <i class="fa fa-floppy-o"></i>
          保存 - 并继续添加
        </button>
        <button type="submit" class="btn btn-success btn-lg"
                name="action" value="finished">
          <i class="fa fa-floppy-o"></i>
          保存 - 并返回列表
        </button>
      </div>
    </div>
  </div>
</div>