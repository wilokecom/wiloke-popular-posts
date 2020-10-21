<?php


namespace ComingSoon\Controllers;


use ComingSoon\Helpers\App;
use ComingSoon\Helpers\Input;

class menuController extends Controller
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenus']);
    }

    public function registerMenus()
    {
        add_menu_page(
            'Coming Soon',
            'Coming Soon',
            'administrator',
            $this->menuSlug,
            [$this, 'menuSettings']
        );
    }

    public function deepClean($value)
    {
        global $wpdb;
        if (!is_array($value)) {
            return $wpdb->_real_escape($value);
        }

        return array_map([$this, 'deepClean'], $value);
    }

    private function saveData()
    {

        if (!isset($_POST['comingsoon'])) {
            return false;
        }
        global $wpdb;

        $aValues = [];
        if (isset($_FILES)) {
            $allowed =array('image/png','image/jpg','image/gif','image/jpeg');
            $data=$_FILES['comingsoon'];
            if (in_array(strtolower($data['type']['logo']), $allowed)) {
                // Neu co trong dinh dang cho phep, tach lay phan mo rong
                $ext = substr(strrchr($data['name']['logo'], '.'), 1);
                $renamed = uniqid(rand(), true) . '.' . "$ext";
                $NameIMG = $renamed;
                if (!move_uploaded_file($data['tmp_name']['logo'], COMINGSOON_PATH."assets/upload/" . $renamed)) {
                    $errors[] = "loi";
                }
                // Xoa file da duoc upload va ton tai trong thu muc tam
                if (isset($data['tmp_name']['logo']) && is_file($data['tmp_name']['logo']) && file_exists($data['tmp_name']['logo'])) {
                    unlink($data['tmp_name']['logo']);
                }
            }
            $aValues['logo']=$NameIMG;
        }

        foreach ($_POST['comingsoon'] as $key => $value) {
            $aValues[$wpdb->_real_escape($key)] = $this->deepClean($value);
        }

        update_option($this->optionKey, $aValues);
    }


    public function menuSettings()
    {
        $this->saveData();
        $aValues = get_option($this->optionKey);
        ?>
        <form action="<?php add_query_arg(['page' => $this->menuSlug], admin_url('admin.php')); ?>" method="POST"
              class="ui form" enctype="multipart/form-data">
            <?php
            foreach (App::get('config/settings.php') as $aField) {
                switch ($aField['type']) {
                    case 'input':
                        $value = isset($aValues[$aField['singleName']]) ? $aValues[$aField['singleName']] :
                            $aField['value'];
                        Input::render($aField, $value);
                        break;
                    case 'select':
                        $value = isset($aValues[$aField['singleName']]) ? $aValues[$aField['singleName']] :
                            $aField['value'];
                        Input::renderSelect($aField, $value);
                        break;
                    case 'file':
                        $values = isset($aValues[$aField['singleName']]) ? $aValues[$aField['singleName']] :
                            $aField['value'];
                        Input::renderFile($aField, $values);
                        break;
                }
            }
            ?>

            <button class="ui button" type="submit">Submit</button>
        </form>

        <?php
    }

}