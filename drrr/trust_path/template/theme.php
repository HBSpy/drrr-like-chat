<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
	<head>
		<meta charset="UTF-8">
		<title><?php e(t(DURA_TITLE)) ?> - <?php e(t(DURA_SUBTITLE)) ?></title>
		<meta name="keywords" content="关键字" />
		<meta name="description" content="描述" />
		<link href="<?php echo DURA_URL; ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery-ui.min.js"></script>
		<script type="text/javascript">
			var duraUrl = "<?php e(DURA_URL) ?>";
			var GlobalMessageMaxLength = <?php e(DURA_MESSAGE_MAX_LENGTH) ?>;
			var useComet = <?php e(DURA_USE_COMET) ?>;
		</script>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/translator.js"></script>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/language/<?php e(Dura::$language) ?>.js"></script>
		<?php if ( Dura::$controller == 'room' ) : ?>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.sound.js"></script>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.corner.js"></script>
		<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.chat.js"></script>
		<?php endif ?>
		<?php if ( file_exists(DURA_TEMPLATE_PATH.'/header.html') ) require(DURA_TEMPLATE_PATH.'/header.html'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
	</head>

	<body>
		<div id="body">
			<?php e($content) ?>
		</div>
	</body>
</html>
