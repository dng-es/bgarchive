<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
function ini_page_header ($ini_conf) { }
function ini_page_body ($ini_conf){
?>
<div id="login-container">
<h1>Acceso restringido</h1>
<p>Introduzca su usuario y contrase&ntilde;a para acceder:</p>
<form method="post" action="" name="form-login" id="form-login">
<label>Usuario:</label>
<input type="text" name="form-login-user" id="form-login-user" size="30" />
<label>Contrase&ntilde;a</label>
<input type="password" name="form-login-password" id="form-login-password" size="30" />
<input type="submit" value="Entrar" class="yui-btn" />
</form>
</div>
<?php } ?>