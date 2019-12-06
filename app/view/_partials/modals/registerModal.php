<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h4>Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/users/register" id="registerForm" method="post">
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="registerForm-email">Your email</label>
                        <input type="email" name="email" id="registerForm-email" required="required" class="form-control validate">

                    </div>

                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="registerFrom-psw">Your password</label>
                        <input type="password" name="password" id="registerFrom-psw" required="required" class="form-control validate">

                    </div>

                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="registerFrom-repsw">Repeat password</label>
                        <input type="password" name="repassword" id="registerFrom-repsw" required="required" class="form-control validate">

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input id="submit" onclick="form_submit() " type="submit"  class="btn btn-outline-danger"></input>
                </div>
            </form>
        </div>
    </div>
</div>