<div class="card">
    <div class="card-header">
        Frogs
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Colour</th>
                <th scope="col">Weight</th>
                <th scope="col">Hatch Date</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

                <?php
                $sn=0;
                foreach ($frogs as $frog) {
                    ?>
                <tr>

                <th scope="row"><?php echo $sn+1;?></th>
                <td><?php echo $frog["colour"];?></td>
                <td><?php echo $frog["weight"]; ?></td>

                <td><?php echo date('F j, Y',strtotime($frog["hatch_date"]));?></td>
                <td><?php echo $frog["description"]; ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="<?php echo $frog["id"] ?>" data-bs-target="#editModal">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" onclick="deleteFrog(<?php echo $frog["id"] ?>)">
                        Delete
                    </button>
                </td>
                </tr>
                    <?php
                $sn++;
                }?>


            </tbody>
        </table>
    </div>
</div>
