<?php include("server.php");?>

<style>
    .error{
        /* background: red; */
        padding: 0px;
        color: #ef9a9a;
        font-size: 15px;
    }
</style>

<?php if(count($errors)> 0):?>

<div class="error">
    <?php foreach($errors as $error): ?>
        <p><?php echo "$error"; ?></p>
    <?php endforeach ?>    
</div>

<?php endif ?>