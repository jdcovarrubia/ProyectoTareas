<?php include ("db.php") ?>

<?php include ("includes/header.php")?>

    <div class="row">

        <div class="col-md-4" >

            <?php if(isset ($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <strong>Se ha guardado su tarea!</strong> La tarea fue guardada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php } session_unset(); ?>

            <div class="card card-body">
                <form action="save-task.php" method="POST">

                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Titulo de la tarea" autofocus>
                </div>

                <br>

                <div class="form-group">
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de la tarea"></textarea>
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="Inserta la fecha" autofocus>
                </div>

                <br>

                <input type="submit" class="btn btn-success btn-block" name="save-task" value="Guardar Tarea">

                </form>


            </div>


        </div>

        <div class="col-md-8">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Consulta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM tareas";

                        $result_tarea = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tarea)){ ?>

                        <tr>
                            <td><?php echo $row['titulo']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['fecha']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>

                                </a>

                                <a href="delete-task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>                                
                                </a>

                            </td>
                        </tr>

                        <?php }?>


                    </tbody>

                </table>

        </div>

    </div>
<?php include ("includes/footer.php")?>