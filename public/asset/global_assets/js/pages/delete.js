$(document).ready(function(){
	$(document).on('click', '#delete_item', function(e){
		e.preventDefault();
		var row = $(this).data('id');
		swal({
		  title: "Are you sure?",
		  text: "Once deleted, it will deleted all related Data!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		    $('#delete-form-'+row).submit();
		  } else {
		    swal("Your imaginary file is safe!");
		  }
		});

	})
})