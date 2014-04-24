<a href="index.php?controller=admin" class="admind">`</a>
<div id="login" class="header">
	<?php if ( $dura['error'] ) : ?>
	<div class="error">
		<?php echo $dura['error'] ?>
	</div>
	<?php endif ?>
	<div style="text-align: center;"><img style="margin:0 10px 0 0;" src="css/logo.png"></div>
	<form action="#" method="post">
		<center>
			<div class="field" style="margin-top:20px;">
				<p class="t_name">
					<label for="name">Username:</label><input type="textbox" name="name" value="" size="10" class="textbox">
				</p>
				<p class="t_pass">
					<label for="name">Password:</label><input type="textbox" name="name" value="" size="10" class="textbox">
				</p>
				<span class="button" style="margin-top:20px;">
					<input type="submit" name="login" value="<?php e(t("ENTER")) ?>" />
				</span>
			</div>

			<div id="t_extra">
				<ul class="icons">
					<?php foreach ( $dura['icons'] as $icon => $file ) : ?>
					<li>
					<label>
						<img src="<?php echo DURA_URL.'/css/'.$file ?>" />
						<input type="radio" name="icon" value="<?php echo $icon ?>" />
					</label>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
			<input type="hidden" name="token" value="<?php echo $dura['token'] ?>" />
		</center>
	</form>
</div>
