<div class="modal fade" tabindex="-1" id="login-modal" role="dialog" aria-labelledby="login-heading" aria-hidden="True" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-align-center">Login with PG-Life</h1>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <form class="login-form" id="login-form" method="post" action="api/login.php">
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input class="form-control" type="text" name="username" placeholder="Enter E-Mail/PhoneNumber" required>
                    </div>
                    <br>
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input class="form-control" type="password" name="password" id="login-password" placeholder="Enter Password" minlength="6" required>
                        <span class="input-group-text toggle-password" data-target="login-password">
                            <i class="fa-solid fa-eye toggle-icon"></i>
                        </span>
                    </div>
                    <br>
                    <div class="input-group form-group justify-content-center">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span>
                    Don't have an account?
                    <a href="#signup-modal" data-bs-toggle="modal" data-bs-dimiss="modal">SIGNUP</a>
                </span>
            </div>
        </div>
    </div>
</div>