<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo $this->charset; ?>" />
<title><?php echo $this->title; ?> - Contao Open Source CMS <?php echo VERSION; ?></title>
<base href="<?php echo $this->base; ?>" />
<link rel="stylesheet" href="<?php
  $objCombiner = new Combiner();
  $objCombiner->add('system/themes/'. $this->theme .'/basic.css');
  $objCombiner->add('system/themes/'. $this->theme .'/popup.css');
  echo $objCombiner->getCombinedFile();
?>" media="all" />
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo TL_SCRIPT_URL; ?>system/themes/<?php echo $this->theme; ?>/iefixes.css?<?php echo VERSION .'.'. BUILD; ?>" media="screen" /><![endif]-->
<!--[if gte IE 8]><link rel="stylesheet" href="<?php echo TL_SCRIPT_URL; ?>system/themes/<?php echo $this->theme; ?>/ie8fixes.css?<?php echo VERSION .'.'. BUILD; ?>" media="screen" /><![endif]-->
</head>
<body>

<div id="container">
<div id="main">

<h1>File preview</h1>

<h2><?php echo $this->headline; ?></h2>

<table class="tl_help_table">
<tr>
  <td class="tl_label"><?php echo $this->label_ctime; ?>:</td>
  <td><?php echo $this->ctime; ?></td>
</tr>
<tr>
  <td class="tl_label"><?php echo $this->label_mtime; ?>:</td>
  <td><?php echo $this->mtime; ?></td>
</tr>
<tr>
  <td class="tl_label"><?php echo $this->label_atime; ?>:</td>
  <td><?php echo $this->atime; ?></td>
</tr>
<tr>
  <td class="tl_label"><?php echo $this->label_filesize; ?>:</td>
  <td><?php echo $this->filesize; ?></td>
</tr>
<tr>
  <td class="tl_label"><?php echo $this->label_path; ?>:</td>
  <td><?php echo $this->path; ?></td>
</tr>
<?php if ($this->src): ?>
<tr>
  <td class="tl_label"><?php echo $this->label_imagesize; ?>:</td>
  <td><?php echo $this->width; ?> x <?php echo $this->height; ?></td>
</tr>
<?php endif; ?>
</table>

<div id="download">
<img src="system/themes/<?php echo $this->theme; ?>/images/<?php echo $this->icon; ?>" width="18" height="18" alt="" class="mime_icon" /> <a href="<?php echo $this->href; ?>"><?php echo $this->download; ?></a>
</div>
<?php if ($this->isImage): ?>

<div id="preview">
<img src="<?php echo $this->src; ?>" width="<?php echo $this->width; ?>" height="<?php echo $this->height; ?>" alt="" />
</div>
<?php endif; ?>

</div>
</div>

</body>
</html>