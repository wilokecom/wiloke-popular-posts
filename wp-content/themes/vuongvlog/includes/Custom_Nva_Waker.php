<?php


class Custom_Nva_Waker extends  Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="dropdown-menu">';
    }
        //<li class="dropdown-holder"><a href="index.html">Home</a>
    //                                                <ul class="hb-dropdown">
    //                                                    <li><a href="index.html">Home One</a></li>
    //                                                    <li><a href="index-2.html">Home Two</a></li>
    //                                                    <li><a href="index-3.html">Home Three</a></li>
    //                                                    <li><a href="index-4.html">Home Four</a></li>
    //                                                </ul>
    //                                            </li>
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $class_li= $class_a= '';
        //lấy các class tự sinh của wordpress
        $arr_wp_class_li=empty($item->classes)?array():(array) $item->classes;
        for ($i=0;$i<count($arr_wp_class_li);$i++){
            unset($arr_wp_class_li[$i]);
        }
        //add class
        array_push($arr_wp_class_li,'catmenu-dropdown megamenu-holder');
        $class_li=implode(' ',apply_filters('nav_menu_css_class',array_filter($arr_wp_class_li),$item,$args));

    }

    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '</ul>';
    }

}