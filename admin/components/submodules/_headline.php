<?php
    if (!$attributes['level']) {
        $attributes['level'] = 1;
    }
?>

<h<?=$attributes['level']?>>
    <?=$data[0]?>
</h<?=$attributes['level']?>>
