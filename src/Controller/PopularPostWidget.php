<?php


namespace popularPosts\Controller;


use popularPosts\core\App;
use popularPosts\Model\PopularPostsModel;
use WP_Widget;

class PopularPostWidget extends WP_Widget
{
    public $data = ['title' => '','topView'=>'5','select'=>'thisOne'];

    //thong tin widget
    public function __construct()
    {
        parent::__construct('popularPost_Widget', 'Popular Posts', [
            'description' => 'Top popular post'
        ]);
    }

    //thiet truong nhap lieu
    public function form($aInstance)
    {
        $aInstance = wp_parse_args($aInstance, $this->data);

        ?>
        <div class="widget-group">
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>"
                   id="<?php echo $this->get_field_id('title'); ?>"
                   value="<?php echo esc_attr($aInstance['title']); ?>">
            <label for="<?php echo $this->get_field_id('topView'); ?>">Top View</label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('topView'); ?>"
                   id="<?php echo $this->get_field_id('topView'); ?>"
                   value="<?php echo esc_attr($aInstance['topView']); ?>">
            <label for="<?php echo $this->get_field_id('select'); ?>">Option Order By:</label>
            <select class="widefat" name="<?php echo $this->get_field_name('select'); ?>" id="<?php echo $this->get_field_id('select'); ?>">
                <?php
                $data=App::get('config/app')['option'];
                foreach ($data as $row){
                    ?>
                    <option <?php if($aInstance['select']==$row['value']){echo "selected=\"selected\"";} ?> value="<?=$row['value']?>"><?=$row['name']?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <?php

    }

    // luu du lieu from
    public function update($aNewInstance, $aOldInstance)
    {

        $aInstance = $aOldInstance;
        foreach ($aNewInstance as $key => $val) {
            $aInstance[$key] = strip_tags($val);
        }
        return $aInstance;
    }

    // hien thi widget ra ben ngaoi
    public function widget($aAtts, $aInstance)
    {
        echo $aAtts['before_widget'];
        if (!empty($aInstance['title'])) {
            echo $aAtts['before_title'] . $aInstance['title'] . $aAtts['after_title'];
        }
        if (is_single()) {
            echo '<ul>';
           $data=PopularPostsModel::selectTopView($aInstance['topView'],$aInstance['select']);
            foreach ($data as $values) {
                ?>
                <li><a href="<?=$values['guid']?>"><?=$values['post_title']?></a></li>
                <?php
            }
            echo '</ul>';
        }
        echo $aAtts['after_widget'];
    }
}