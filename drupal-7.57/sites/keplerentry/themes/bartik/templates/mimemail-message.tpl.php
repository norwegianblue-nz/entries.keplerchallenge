<?php

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[module]--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $module: The sending module
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<!--[if !IE]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge" /><!--<![endif]-->
    <meta name="viewport" content="width=device-width" />
<title></title>
<!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);
</style>
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<!--<![endif]-->

<?php if ($css): ?>
<style type="text/css">
  <!--
  <?php print $css ?>
  -->
</style>
<?php endif; ?>
</head>

<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding full-padding">
<!--<![endif]-->

<body>
<table border="0" cellspacing="0" cellpadding="0" class="wrapper"><tr><td>
      <!--[if (mso)|(IE)]><table align="center" class="header" cellpadding="0" cellspacing="0"><tr><td style="width: 600px"><![endif]-->
  <div class="header layout" align="center" style="Margin-top:40px;Margin-bottom:27px;">
            <div align="center" id="email-header" class="logo-center"><img src="https://www.keplerchallenge.co.nz/sites/keplerchallenge.co.nz/themes/custom/keplerst/images/kepler-email-logo.png" alt="Kepler&#32;Challenge" width="240" style="max-width:240px"></div>
          </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->

      <!--[if (mso)|(IE)]><table align="center" class="main-body" cellpadding="0" cellspacing="0"><tr><td style="width: 600px"><![endif]-->
      <div class="layout">
        <div class="content" id="mimemail-body" <?php if ($module && $key): print 'class="'. $module .'-'. $key .'"'; endif; ?>>
          <?php print $body ?>

          <div style="text-align:center;margin:50px auto;">
            <a href="https://keplerchallenge.co.nz" height="48" class="button">Kepler Challenge Website</a>
          </div>
        </div>
      </div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->

<!--[if (mso)|(IE)]><table align="center" class="main-body" cellpadding="0" cellspacing="0"><tr><td style="width: 600px"><![endif]-->
<div  class="layout" style="background-color:#003c3c; height:50px;">&nbsp;</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]><table align="center" class="main-body" cellpadding="0" cellspacing="0"><tr><td style="width: 600px"><![endif]-->
<div  class="layout" style="background-color:#993300;height:150px;">&nbsp;</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->


</td></tr></table>
</body>
</html>
