<?php
include('functions.php');
$json = file_get_contents('data.json');
$data = json_decode($json,1);

foreach($data as $task)
{
    ?>

    <tr>
        <td><?= $task['name'] ?></td>
        <td><?php echo date_nice($task['date_start']) ?></td>
        <td><?php echo date_nice($task['date_end']) ?></td>
        <td>Data</td>
        <td><button class="btn btn-primary"><?php echo i('stop'); ?></button></td>
        <td><button class="btn btn-danger"><?php echo i('times'); ?></button></td>
    </tr>
<?php } ?>
