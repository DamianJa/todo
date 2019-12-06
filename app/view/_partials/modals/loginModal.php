<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h4>Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE_URL ?>/users/login" method="post">
                <div class="modal-body">
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="loginForm-email">Your email</label>
                        <input type="email" name="email" id="loginForm-email" required="required" class="form-control validate">

                    </div>

                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="loginForm-psw">Your password</label>
                        <input type="password" name="password" id="loginForm-psw" required="required" class="form-control validate">

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-dark">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>