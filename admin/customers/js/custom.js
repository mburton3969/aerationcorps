setTimeout(function (){
    $('#pending_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
    $('#serviced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
    $('#invoiced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
		$('#deleted_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
  },1000);