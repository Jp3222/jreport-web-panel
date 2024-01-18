<thead>
    <tr>
        <th>ID</th>
        <th>Texto</th>
        <th>Registro</th>
        <th>Herramientas</th>
    </tr>
</thead>
<tbody>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="test_edit.php" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" name="campo_test" class="form-control" id="campo_test" placeholder="ejemplo xddd">
                            <label for="campo_test">texto</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <input type="submit" class="btn btn-primary" name="xd" value="save">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
    $query = "SELECT * FROM test";
    $result_tasks = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['texto']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-marker"></i>
                    <?php
                    $_SESSION['edit'] = $row['id'];
                    ?>
                </button>
                <a href="test_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
</tbody>