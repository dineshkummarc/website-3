<?php
/**
 * DokuWiki Template for volkszaehler.org
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Steffen Vogel <info@steffenvogel.de>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php echo strip_tags($conf['title'])?> - wiki -
		<?php tpl_pagetitle()?>
	</title>
	<?php tpl_metaheaders()?>
	<link rel="shortcut icon" href="<?php echo tpl_getFavicon() ?>" />
</head>
<body>
	<div class="wrapper">
		<?php html_msgarea()?>
		<?php include(dirname(__FILE__).'/header.html')?>

		<div class="dokuwiki">
			<div class="stylehead">
				<div class="bar" id="bar__top">
					<div class="container_12">
						<div class="bar-left" id="bar__topleft">
							<?php if($conf['youarehere']){?>
								<div class="breadcrumbs">
									<?php tpl_youarehere() ?>
								</div>
							<?php }?>
						</div>
						<div class="bar-right" id="bar__topright">
							<?php tpl_searchform()?>
						</div>
					</div>
				</div>
			</div>

<?php tpl_flush()?>

			<div class="page container_12">
				<?php tpl_content()?>
			</div>

			<div class="push"></div>
		</div><!-- dokuwiki -->
	</div><!-- wrapper -->

	<div class="dokuwiki">
		<div class="container_12">
			<div class="meta">
				<div class="user">
					<?php tpl_userinfo()?>
				</div>
				<div class="doc">
					<?php tpl_pageinfo()?>
				</div>
			</div>
		</div>

<?php tpl_flush()?>

		<div class="stylefoot">
			<div class="bar" id="bar__bottom">
				<div class="container_12">
					<div class="bar-left" id="bar__bottomleft">
						<?php tpl_button('login')?>
					        <?php tpl_button('admin')?>
					        <?php tpl_button('profile')?>
					        <?php tpl_button('subscribe')?>
					</div>
					<div class="bar-right" id="bar__bottomright">
 					        <?php tpl_button('edit')?>
					        <?php tpl_button('history')?>
					        <?php tpl_button('recent')?>
					        <?php tpl_button('index')?>
					        <?php tpl_button('revert')?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- dokuwiki -->

<?php include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
