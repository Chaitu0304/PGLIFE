<div class="modal fade" tabindex="-1" id="signup-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-align-center">SignUp with PG-Life</h1>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="api/sign_up.php">
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text"  name="fullname" class="form-control" placeholder="Fullname" required>
                    </div>
                    <br>
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" minlength="10" maxlength="10" required>
                    </div>
                    <br>
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="input-group form-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        
                        <input type="password" name="password" id="signup-password" class="form-control" placeholder="Password" minlength="6" required>
                        <span type="button" class="input-group-text toggle-password" data-target="signup-password">
                            <i class="fa-solid fa-eye toggle-icon" ></i>
                        </span>
                    </div>
                    <br>
                    <div class="input-group form-group justify-content-center">
                        <button class="btn btn-outline-success" type="submit">CREATE ACCOUNT</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span >Already have an account?
                    <a href="#login-modal" data-bs-toggle="modal" data-bs-dismiss="modal">LOGIN</a>
                </span>
            </div>
        </div>
    </div>
</div>