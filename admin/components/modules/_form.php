<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="c-form">
	<h1 class="c-form__headline"><?=$data[0]?></h1>
	<div class="c-form__body">
	<?php
		apply_modules($layout);
	?>
	</div>
</form>
