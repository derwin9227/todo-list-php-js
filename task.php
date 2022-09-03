<table>
        <thead>
            <tr>
                <th>N</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $i=1; while ($row = mysqli_fetch_array($tasks)){ ?>
                <tr>
                <td><?php echo $i ?></td>
                <td class="task"><?php echo $row['task']; ?> </td>
                <td class="delete">
                    <a href="index.php?del_task=<?php echo $row['id']; ?>">X</a>
                </td>
                <td class="edit">
                    <a onclick="editar(<?php echo $row['id']?>)">E</a>
                </td>
            </tr>
            <?php $i++;} ?>
        </tbody>
</table>