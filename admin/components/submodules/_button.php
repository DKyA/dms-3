<?php

    $type = '';
    if($attributes['type'] == 'submit'){
        $type = 'type="submit"';
    }

?>


<div class="c-button c-button--<?=$attributes['type']?>">
    <button <?=$type?> class="c-button__self"><?=$data[0]?></button>
</div>