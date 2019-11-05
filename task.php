<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<nav class="navbar navbar-dark  bg-primary ">
    <div class="container">
        <?php if (isset($_SESSION['usuario'])) : ?>
            <a class="navbar-brand " href="index.php">PROYECTO TAREAS</a> <span class="text-light h5  medium mt-2">BIENVENIDO: <?= $_SESSION['usuario']['user'] ?><a href="cerrar.php" class="text-danger h4">
                    <i class="fas fa-window-close"></i>
                </a></span>
        <?php endif; ?>
    </div>
</nav>


<main class="container p-4 ">
    <div class="row">
        <div class="col-md-3">
            <!-- MENSAJES DE ALERTAS -->

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            } ?>

            <!-- AGREGAR TAREAS-->

            <div class="card card-body mt-5">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo de la tarea" required autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
                    </div>
                    <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
                </form>
            </div>
        </div>
        <?php
        $query = "SELECT * FROM task";
        $result_tasks = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <div class="col-md-3 mt-5">
                <div class="card">

                    <div class="card-header bg-light">
                        <div class="h3 text-center"><span><?php echo $row['title']; ?></span></div>
                    </div>
                    <div class="card-body bg-light">

                        <p class="card-text"><?php echo $row['description']; ?></p>
                    </div>
                    <div class="card-footer text-muted bg-light text-right">
                        <div></div>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</main>

<?php include('includes/footer.php'); ?>