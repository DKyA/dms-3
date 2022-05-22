<?php
    $rel = prepare_attributes($attributes, 'rel', 'rel=');
    $class = prepare_attributes($attributes, 'type', 'a-link--');
    $target = prepare_attributes($attributes, 'target', 'target=""');


    if (!isset($attributes['target'])) {
        $attributes['target'] = '';
    }
?>

<a href="<?=$attributes['href']?>" <?=$rel?> class="a-link <?=$class?>"><?=$data[0]?></a>