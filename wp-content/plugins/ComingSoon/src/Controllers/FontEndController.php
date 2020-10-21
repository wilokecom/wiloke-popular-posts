<?php


namespace ComingSoon\Controllers;


class FontEndController extends Controller
{
    public function __construct()
    {
        add_action('template_redirect', [$this, 'maybeRedirectToComingSoon']);
    }

    public function maybeRedirectToComingSoon()
    {
        if(!is_user_logged_in()){
            $aOptions = get_option($this->optionKey);
            include (COMINGSOON_PATH . 'src/Views/Index.php');
            die;
        }
    }

}