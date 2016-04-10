<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
      <label for="title" class="col-md-2 control-label">
          标题
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="title" autofocus
               id="title" value="{{ $title }}">
      </div>
    </div>
    
    <div class="form-group">
      <label for="content" class="col-md-2 control-label">
        内容
      </label>
      <div class="col-md-10">
        <textarea class="form-control" name="content" rows="5"
                  id="content">{{ $content }}</textarea>
      </div>
    </div>
  </div>
</div>