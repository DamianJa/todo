<?php


class AuthsController extends Controller
{
    private $auth_config;
    private $auth;

    public function __construct($db) {
        parent::__construct($db);
        $this->auth_config = new PHPAuth\Config($db);
        $this->auth = new PHPAuth\Auth($db, $this->auth_config);
    }

    /**
     * Logged In
     *
     * Is a user logged in?
     *
     * @return bool
     */
    function logged_in()
    {
        global $auth, $auth_config;

        return
            isset($_COOKIE[$this->auth_config->cookie_name]) &&
            $this->auth->checkSession($_COOKIE[$this->auth_config->cookie_name]);
    }



    /**
     * Do Login
     *
     * Create cookie after logging in
     *
     * @param   array  $data
     * @return  bool
     */
    function do_login( $data )
    {


        return setcookie(
            $this->auth_config->cookie_name,
            $data['hash'],
            $data['expire'],
            $this->auth_config->cookie_path,
            $this->auth_config->cookie_domain,
            $this->auth_config->cookie_secure,
            $this->auth_config->cookie_http
        );
    }



    /**
     * Do Logout
     *
     * Log the user out
     *
     * @return bool
     */
    function do_logout()
    {
        if ( ! $this->logged_in() ) return true;



        return $this->auth->logout( $_COOKIE[$this->auth_config->cookie_name] );
    }



    /**
     * Get user
     *
     * Grab data for the logged in user
     *
     * @param  integer  $user_id
     * @return bool|mixed
     */
    function get_user( $user_id = 0 )
    {


        if ( ! $user_id && logged_in() ) {
            $user_id = $this->auth->getSessionUID($_COOKIE[$this->auth_config->cookie_name]) ?: 0;
        }

        return (object) $this->auth->getUser( $user_id );
    }



    /**
     * Can Edit
     *
     * True if this post was written by the logged in user
     *
     * @param  mixed  $post
     * @return bool
     */
    function can_edit( $post )
    {
        // must be logged in
        if ( ! $this->logged_in() ) {
            return false;
        }

        return true;
    }
}