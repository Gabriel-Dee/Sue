<!-- check if redirection comes with session error and error message -->
<?php if(isset($_SESSION['error'])) :?>
    <div class="error">
        <?php echo $_SESSION['error'] ?>
    </div>
<?php endif ?>
<?php unset($_SESSION['error']) ?>

<!-- //check if redirection comes with session success and success message -->
<?php if(isset($_SESSION['success'])) :?>
    <div class="error">
      <?php echo $_SESSION['success'] ?>
    </div>
<?php endif ?>
<?php unset($_SESSION['success']) ?>
