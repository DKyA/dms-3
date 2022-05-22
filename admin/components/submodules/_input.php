<?php
$names = "{$attributes['type']}-{$attributes['id']}";

$placeholder = (isset($attributes['placeholder'])) ? 'placeholder="'.$attributes['placeholder'].'"' : '';
$required = (isset($attributes['placeholder'])) ? 'placeholder="'.$attributes['placeholder'].'"' : '';

?>

<div class="c-input">
    <label for="<?=$names?>" class="c-input__label"><?=$data[0]?></label>
    <input type="<?=$attributes['type']?>" name="<?=$names?>" id="<?=$names?>" class="c-input__field c-input__field--<?=$attributes['type']?>" <?=$placeholder?> <?=$required?>>
</div>