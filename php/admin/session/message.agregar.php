<?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']):?>
        <div class="alert alert-<?php echo $_SESSION ['alert']['type']?>"> 
            <?php echo $_SESSION['alert']['message']; ?>
        </div>
        <?php unset($_SESSION['alert']);?>
    <?php endif; ?>