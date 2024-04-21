<?php 
    if(isset($_GET['id'])) {
        $sql = 'DELETE FROM `друзья` WHERE `id` =' .$_GET['id'];
        $res = mysqli_query($connect, $sql);
        if (mysqli_errno($connect)) echo mysqli_error($connect);
        $s = 'запись успешно удалена!';
    } 
    ?>

<div class='alert-success'>
    <p><?=$s;?></p>
</div> 

<?php if (isset($s)) :?>

<?php endif; ?>
<?php 
    $sql = 'SELECT `id`, `firstname`, LEFT(`name`, 1) name, LEFT(`lastname`,1) lastname FROM `друзья`';
    $res = mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) echo mysqli_error($connect);
?>

<?php

    while($row = mysqli_fetch_assoc($res)):?>
    <a href="index.php?p=delete&id=<?=$row['id'];?>"><?=$row['firstname'].' '.$row['name'].'.'.$row['lastname'].'.<br>';?></a>
<?php endwhile;?>    
