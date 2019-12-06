<?php


include 'app/config.php';



$data = $posts->fetch_all();



include_once "_partials/header.php";
include_once "_partials/footer.php";

include_once "_partials/modals/editModal.php";
include_once "_partials/modals/loginModal.php";
include_once "_partials/modals/registerModal.php";