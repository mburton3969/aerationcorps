setTimeout(function (){
    $('#pending_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]],
        "pageLength": 25
    } );
    $('#serviced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]],
        "pageLength": 25
    } );
    $('#invoiced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]],
        "pageLength": 25
    } );
		$('#deleted_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]],
        "pageLength": 25
    } );
  },1000);