<?php 


include("db.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM tareas WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        $title = $row['titulo'];
        $description = $row['descripcion'];
        $date = $row['fecha'];

    }

}
    if(isset($_POST['update'])){

        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $query = "UPDATE tareas SET titulo = '$title', descripcion = '$description', fecha='$date' WHERE id = '$id' ";
        mysqli_query($conn, $query);

        header("Location: index.php");

    }
    

?>

<?php include("includes/header.php") ?>
<?php include("includes/footer.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Actualiza titulo">
                    </div>

                    <br>

                    <div class="form_group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Actualizar descripcion"> <?php echo $description;?></textarea>
                    </div>

                    <br>

                    <div class="form-group">
                        <input type="text" name="date" value="<?php echo $date; ?>" class="form-control" placeholder="Actualiza Fecha">
                    </div>

                    <br>

                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>

                </form>
            </div>

        </div>
    </div>


</div>