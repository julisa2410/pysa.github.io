<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th></th>
            <th style="text-align:center">Nombre</th>
            <th style="text-align:center">Mostrar</th>
            <th style="text-align:center">Eliminar</th>
        </tr>
    </thead>
  <tbody>
    <?php
            include '../php/conexion.php';
            session_start();
            $sql = "SELECT * FROM table_file";
            $resultado = mysqli_query($conexion,$sql);

            while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?php echo $mostrar['id']; ?></td>
            <td><?php echo $mostrar['nombre']; ?></td>
            <td><a data-href="../php/mostrar.php?clave=<?php  
                echo $mostrar['id'] ?>" class="openPopup" data-toggle="modal">
                <i class="glyphicon glyphicon-download-alt"></i>
              </a>
            </td>
            <td><a data-href="../php/eliminar.php?id=<?php 
            echo $mostrar['id']; ?>"class="openPopup" data-toggle="modal">
            <i class="glyphicon glyphicon-trash"></i>

            </a></td>
        </tr>
        <?php
                
            }
        ?>
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" width="800" height="500">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mostrar Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="infor"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Aceptar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.openPopup').on('click',function(){
            var dataURL = $(this).attr('data-href')
            $('.infor').load(dataURL,function(){
                $("#myModal").modal({show:true});
            });
        });
    });
</script>