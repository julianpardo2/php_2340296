var myModal;

function eliminar(id){
    //$('#exampleModal').modal();
	$('#deleteButton').html('<a class="btn btn-danger" onclick="deleteData('+id+')">Eliminar</a>');
    myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
}     
function deleteData(id){
  // do your stuffs with id
  $.ajax({
      url: 'eliminarCliente.php?pos='+id,
  }).done(function( msg ) {
    myModal.hide();
    window.location.href = 'clientes.php';
  });
}  