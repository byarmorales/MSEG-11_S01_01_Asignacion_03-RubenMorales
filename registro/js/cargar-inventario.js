$('#ddlTipoArticulo').val(0);
  		   	recargarLista();
  			$('#ddlTipoArticulo').change(function(){
  				recargarLista();
  			});
});

function recargarListaInventario(){
  			$.ajax({
  				type:"POST",
  				url:"datos-inventario.php",
  				data:"id_TipoArticulo=" + $('#ddlTipoArticulo').val(),
  				success:function(r){
  					$('#cantidad').html(r);
  				}
  			});
  		}
