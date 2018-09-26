<!DOCTYPE html>
<html lang="<?php echo $scLang; ?>"  prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php echo $scMetaCharset; ?>">
  <meta name="google-site-verification" content="<?php echo $scMetaGoogleSiteVerification; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="<?php echo $scMetaDescription; ?>">
  <meta name="Keywords" content="<?php echo $scMetaKeywords; ?>">
  <meta name="Copyright" content="<?php echo $scMetaCopyright; ?>">
  <!--Facebook-->
  <meta property="og:site_name" content="<?php echo $scMetaOgSiteName; ?>">
  <meta property="og:url" content="<?php echo $scMetaOgUrl; ?>">
  <meta property="og:type" content="<?php echo $scMetaOgType; ?>">
  <meta property="og:title" content="<?php echo $scMetaOgTitle; ?> | YourWebSiteName.com">
  <meta property="og:description" content="<?php echo $scMetaOgDescription; ?>">
  <!--Next image => SGV file is best scalable-->
  <meta property="og:image" content="<?php echo $scMetaOgImage; ?>.logo.svg">
  <!--Twitter meta-->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:description" content="<?php echo $scMetaDescription; ?>"/>
  <meta name="twitter:title" content="<?php echo $scMetaOgTitle; ?> | YourWebSiteName.com"/>
  <meta name="twitter:site" content="<?php echo $scTwitterSite; ?>"/>
  <meta name="twitter:domain" content="Brok3n"/>
  <meta name="twitter:image" content="<?php echo $scMetaOgImage; ?>.logo.png"/>
  <meta name="twitter:creator" content="<?php echo $scTwitterSite; ?>"/>
  <!--Pintrest meta-->
  <meta name="p:domain_verify" content="<?php echo $scPintrestKey; ?>"/>

  <title><?php echo $scTitle; ?> | YourWebSiteName.com</title>

  <!--css-->
  <link rel="stylesheet" href="/public/css/app.css">
</head>
<body>
<header>
  <nav>
    <ul>
      <li><a href="/en/<?php echo $scController.'/'.$scAction; ?>">En</a></li>
      <li><a href="/nl/<?php echo $scController.'/'.$scAction; ?>">Nl</a></li>
      <li><a href="/fr/<?php echo $scController.'/'.$scAction; ?>">Fr</a></li>
    </ul>
    <ul>
      <li><a href="/<?php echo $scLang; ?>/Home/index"><?php echo $trans['home']; ?></a></li>
      <li><a href="/<?php echo $scLang; ?>/About/index"><?php echo $trans['about']; ?></a></li>
      <li><a href="/<?php echo $scLang; ?>/Contact/index"><?php echo $trans['contact']; ?></a></li>
    </ul>
  </nav>
</header>
