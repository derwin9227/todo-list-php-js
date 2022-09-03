<?php 
if(isset($_GET["search"])){?>
        <div class="divEdit">
            <table>
                <thead>
                    Search
                    <tr>
                        <th>N</th>
                        <th>Task</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $search=$_GET["search"];
                        $query=mysqli_query($db,"SELECT * FROM tasks WHERE task LIKE '%$search%'") ;
                        $i=1;
                        while ($row = mysqli_fetch_array($query)){ 
                    ?>
                        <tr>
                        <td><?php echo $i ?></td>
                        <td class="task"><?php echo $row['task']; ?></td>
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
        </div>
    <?php 
}