@section('styles')
<link rel="stylesheet" type="text/css" href="/assets/css/dropzone.min.css">
@endsection

	<form id="addPhotoForm" action="foobar" method="POST" class="dropzone">
		{{ csrf_field() }}
	</form>

@section('scripts')
<script type="text/javascript" src="/assets/js/dropzone.min.js"></script>
<script>
  Dropzone.options.addPhotoForm = {
    paramName: 'photo',
    maxFilesize: 3,
    acceptedFiles: '.jpg, .jpeg, .png, .gif, .bmp'
  }
</script>
@endsection