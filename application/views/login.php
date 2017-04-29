<div class="col-sm-6 col-sm-offset-3 form-box">
    <div class="form-top">
        <div class="form-top-left">
            <h3>Login Admin Divren Komputer</h3>
            <p>Masukan username dan password:</p>
        </div>
        <div class="form-top-right">
            <i class="fa fa-plus-square"></i>
        </div>
    </div>
    <div class="form-bottom">
        <form action="auth" method="post">
            <form role="form" action="" method="post" class="login-form">
                <div class="form-group">
                    <label class="sr-only" for="form-username">Username</label>
                    <input type="text" name="username" placeholder="Username..." autofocus required class="form-username form-control" id="form-username">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="password" placeholder="Password..." required class="form-password form-control" id="form-password">
                </div>
                <button type="submit" class="btn">Masuk</button>
                <br>
                <a href="lupapassword.php"> &nbsp Lupa Password</a>
            </form>
    </div>
</div>