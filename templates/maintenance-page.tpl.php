<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php print $language->language ?>"
      lang="<?php print $language->language ?>"
      dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>
<!-- If you want to change the language of the maintenance page just add
?lang=nl for example to the src of the iframe. -->
<iframe width="100%" height="100%" src="http://maintenance.one-agency.be/"
        frameborder="no" scrolling="no" name="maintenance"
        id="maintenance"></iframe>
</body>
