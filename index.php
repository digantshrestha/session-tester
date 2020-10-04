<?php include_once('shared/header.php')?>

    <?php if(!isset($_SESSION['username'])): ?>
        <form action="includes/inc.login.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    <?php else: ?>

        <form action="includes/inc.logout.php" method="POST">
            <button type="submit" name="logout" class="btn btn-primary">Logout</button>
        </form>

    <?php endif; ?>

<?php include_once('shared/footer.php')?>

            
        