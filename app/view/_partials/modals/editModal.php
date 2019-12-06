
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog" role="document">
        < class="modal-content">
            <div class="modal-header">
                <h4>Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE_URL ?>/posts/edit" method="post">

                <div class="modal-body">
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="editFrom-msg">Message:</label>
                        <textarea class="form-control" id="editFrom-msg" rows="5"></textarea>

                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-dark">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>