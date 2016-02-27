@if(session()->has('flash_message'))

	<script type="text/javascript">
	    swal({
	        title: "{{ session('flash_message.title') }}",   
	        text: "{{ session('flash_message.message') }}",
	        type: "{{ session('flash_message.level') }}",   
	        confirmButtonText: "明白了！" 
	        // timer: 2000,
	        // showConfirmButton: false
	    });
	</script>

@endif

@if(session()->has('flash_message_overlay'))

	<script type="text/javascript">
	    swal({
	        title: "{{ session('flash_message_overlay.title') }}",   
	        text: "{{ session('flash_message_overlay.message') }}",
	        type: "{{ session('flash_message_overlay.level') }}",   
	        confirmButtonText: "明白了！" 
	        // timer: 2000,
	        // showConfirmButton: false
	    });
	</script>

@endif