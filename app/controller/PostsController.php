<?php


class PostsController extends Controller
{
    public function __construct($db) {
        parent::__construct($db);

    }
    public function create($message) {

    }
    public function update($id, $message) {

    }
    public function delete($id) {

    }
    public function get_by_substring($subs) {

    }
    public function fetch_all() {
        try {
            return $this->db->query("SELECT * FROM post");
        }
        catch ( PDOException $e ) {
            return false;
        }
    }
}