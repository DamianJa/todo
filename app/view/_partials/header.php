<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Javascript files -->
    <script src="assets/js/app.js"></script>
    <script src="app/lib/npm/node_modules/jquery/dist/jquery.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <title>To do list</title>
</head>

<body>

<!-- Trigger the modal with a button -->
<div class="container">

    <div class="navbar navbar-light bg-light">

        <h1> To do list</h1>
        <?php
        if (!$auth->isLogged()) {
            header('HTTP/1.0 403 Forbidden');
            ?>
            <div class="btn-group-sm my-2 my-sm-0">
                <a class="btn-sm btn-dark" onClick='show_login_modal()' href="" role="button" data-toggle="modal" data-target="#loginModal">Login</a>
                <a class="btn-sm btn-danger" onClick='show_Register_modal()' href="" role="button" data-toggle="modal" data-target="#registerModal">Register</a>
            </div>
            <?php
        } else {
            ?>
            <a class="btn-sm btn-danger my-2 my-sm-0"  href="<?= BASE_URL ?>" role="button" data-toggle="modal" data-target="#registerModal">Register</a>
            <?php
        }
        ?>

    </div>


    <div class="row">
        <ul id="item-list" class="list-group col-sm-6">
            <?php
            foreach ($data as $value){
            ?>
            <li id="item" class="list-group-item">
                <?php echo $value["message"];
                    if ($auth->isLogged()) {
                ?>
                <div class="controls float-right">
                    <a class="btn-sm btn-dark" onClick='show_edit_modal()' href="" role="button" data-toggle="modal" data-target="#editModal">Edit</a>
                    <a class="btn-sm btn-danger" onClick='execute_delete()' href="" class="delete-link">&times;</a>
                </div>
                <?php
                    }
                ?>
            </li>
            <?php
            }
            ?>
        </ul>
        <form id="add-form" class="col-sm-6" action="<?= BASE_URL ?>/posts/create" method="post">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" rows="5" placeholder="is there something to do?"></textarea>
            </p>
            <p class="form-group submit-button">
                <input class="btn-sm btn-danger" type="submit" value="Add new todo">
            </p>
        </form>


    </div>
</div>