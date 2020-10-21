<?php


namespace ComingSoon\Helpers;


class Input
{
    public static function render($aField, $aValue = '')
    {
        $aField = wp_parse_args(
            $aField,
            [
                'label' => '',
                'variation' => 'text',
                'placeholder' => 'Nhập Giá Trị',
                'name' => '',
                'id' => ''
            ]
        );
        ?>
        <div class="field">
            <?php if (!empty($aField['label'])) : ?>
                <label><?php echo esc_html($aField['label']); ?></label>
            <?php endif; ?>
            <input type="<?php echo esc_attr($aField['variation']); ?>"
                   name="<?php echo esc_attr($aField['name']); ?>"
                   placeholder="<?php echo esc_attr($aField['placeholder']); ?>"
                   value="<?php echo esc_attr($aValue); ?>">
        </div>
        <?php
    }
    public static function renderSelect($aField, $aValue = '')
    {
        $aField = wp_parse_args(
            $aField,
            [
                'label' => '',
                'numberOption' => 1,
                'name' => '',
                'numberOptionStar' => 1,
            ]
        );
        ?>
        <div class="field">
        <?php if (!empty($aField['label'])) : ?>
            <label><?=esc_html($aField['label'])?></label>
        <?php endif;?>
            <select class="ui fluid dropdown" name="<?php echo esc_attr($aField['name']); ?>">
                <option value="<?php echo esc_attr($aValue); ?>"><?php echo esc_attr($aValue); ?></option>
                <?php for ($aField['numberOptionStar'];$aField['numberOptionStar']<=$aField['numberOption'];$aField['numberOptionStar']++): ?>
                <option value="<?=$aField['numberOptionStar']?>"><?=$aField['numberOptionStar']?></option>
                <?php endfor; ?>
            </select>
        </div>
        <?php
    }
    public static function renderFile($aField, $aValue = '')
    {
        $aField = wp_parse_args(
            $aField,
            [
                'label' => '',
                'variation' => 'file',
                'name' => '',
                'id' => ''
            ]
        );
        ?>
        <div class="field">
            <?php if (!empty($aField['label'])) : ?>
                <label><?php echo esc_html($aField['label']); ?></label>
            <?php endif; ?>
            <input type="<?php echo esc_attr($aField['variation']); ?>"
                   name="<?php echo esc_attr($aField['name']); ?>">
            <div class="ui small image">
                <img class="ui Small circular image" src="<?=COMINGSOON_URI.'assets/upload/'.$aValue?>">
            </div>
        </div>
        <?php
    }
}