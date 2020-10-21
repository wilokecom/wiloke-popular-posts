<?php


namespace ComingSoon\Controllers;


class EnqueueScriptController extends Controller
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueueScript']);
    }

    public function enqueueScript()
    {
        $oCurrentScreen = get_current_screen();
        if (strpos($oCurrentScreen->base, $this->menuSlug) !== false) {
        wp_enqueue_style('semantic-ui',COMINGSOON_URI.'assets/semantic-ui/semantic.min.css',[],COMINGSOON_VESION);
        wp_enqueue_script('semantic-ui',COMINGSOON_URI.'assets/semantic-ui/semantic.min.js',['jquery'],
            COMINGSOON_VESION,true);
        }

    }
}