
<html>
<head>
<title>Generador de firmas</title>
<meta name="robots" content="noindex"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="site.css?v=10" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<h1>Parámetros de firma</h1>
<div class="label">Nombre</div>
<div class="editor"><input type="text" id="txtName" name="txtName" ></div>
<div class="label">Cargo</div>
<!--<div class="editor"><input type="text" id="txtTitle" name="txtTitle" ></div>-->
<div class="editor"><select id="txtTitle" name="txtTitle" >
    <option value="Ejecutivo de Cuentas">Ejecutivo de Cuentas</option>
    <option value="Ejecutivo de Diseño y Desarrollo Web">Ejecutivo de Diseño y Desarrollo Web</option>
    <option value="Desarrollo Web">Desarrollo Web</option>
    <option value="Contabilidad y RRHH">Contabilidad y RRHH</option>
    <option value="Director de Contenidos">Director de Contenidos</option>
    <option value="Gestor de Contenidos">Gestor de Contenidos</option>
    <option value="Jefe de Proyectos">Jefe de Proyectos</option>
    <option value="Ejecutivo Comercial">Ejecutiva Comercial</option>
    <option value="CEO">CEO</option>
</select></div>
<div class="label">Email</div>
<div class="editor"><input type="text" id="txtEmail" name="txtEmail" ></div>
<div class="label">Teléfono (opcional)</div>
<div class="editor"><input type="text" id="txtPhone" name="txtPhone" ></div>
<div class="label">Empresa</div>
<div class="editor">
<!-- <input type="radio" value="optND" name="optEmpresa" checked="checked">Norte Digital<br /> -->
<input type="radio" value="optDC" name="optEmpresa" checked="checked">Capybara SEO<br />
<!--<input type="radio" value="optSS" name="optEmpresa" >Sales Solution<br />-->
</div>
<div class="label">País</div>
<div class="editor">
<!--<input type="radio" value="cl" name="optPais" checked="checked">Chile<br />
<input type="radio" value="ar" name="optPais">Argentina<br />
<input type="radio" value="br" name="optPais">Brasil<br />
<input type="radio" value="co" name="optPais">Colombia<br />
<input type="radio" value="mx" name="optPais">México<br />-->
<input type="radio" value="pe" name="optPais" checked="checked">Perú<br />
</div>
<div class="actions">
<button id="btnCreateSignature">Crear Firma</button>
</div>
<hr>
<h1>Firma generada</h1>
<div id="signature">
  <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif; color:#1f1f1f; background-image:url('https://seo.pe/wp-content/uploads/fondo-scaled.jpg'); background-repeat:no-repeat; background-position:right bottom; background-size:cover;">
    <tr>
      <td style="padding-right:40px; vertical-align:middle;">
        <img src="https://seo.pe/wp-content/uploads/Isotipo-scaled.png" width="180" style="display:block; border:0;" alt="Capybara">
      </td>

      <td style="border-left:4px solid #009fe3; padding:70px 50px 20px 24px; vertical-align:top;">
        <div id="sigName" style="font-size:18px; font-weight:bold; line-height:1.2; margin-bottom:2px;">Nombre Apellido</div>
        <div id="sigTitle" style="font-size:14px; color:#555; margin-bottom:10px;">Digital Account Manager</div>

        <table cellpadding="0" cellspacing="0" width="60" style="margin-bottom:14px;">
          <tr><td style="height:3px; background:#0b2c3d;"></td></tr>
        </table>

        <table cellpadding="0" cellspacing="0" style="font-size:13px; line-height:1.8; margin-top:6px;">
          <tr>
            <td width="26" valign="top"><img src="https://seo.pe/wp-content/uploads/telefono.png" width="50" style="display:block;"></td>
            <td><a href="tel:+51949435029" id="tel-link" style="color:#1f1f1f; text-decoration:none;"><span id="tel">+51 949 435 029</span></a></td>
          </tr>
          <tr>
            <td valign="top"><img src="https://seo.pe/wp-content/uploads/web.png" width="50" style="display:block;"></td>
            <td><a href="https://seo.pe" id="sigURL" style="color:#1f1f1f; text-decoration:none;">seo.pe</a></td>
          </tr>
          <tr>
            <td valign="top"><img src="https://seo.pe/wp-content/uploads/ubicacion.png" width="50" style="display:block;"></td>
            <td id="addr">Martín de Murua 150 Of. 1307<br>San Miguel, Lima</td>
          </tr>
        </table>
      </td>

      <td style="border-left:4px solid #009fe3; padding-left:24px; vertical-align:middle;">
        <table cellpadding="0" cellspacing="0" border="0" align="center">
          <tr>
            <td align="center" style="padding-bottom:14px;">
              <img src="https://seo.pe/wp-content/uploads/Logotipo.png" id="logo-image" width="200" style="display:block; border:0;" alt="Capybara SEO">
            </td>
          </tr>
          <tr>
            <td style="font-size:0; line-height:0; text-align:center;">
              <table cellpadding="0" cellspacing="0" border="0" align="center">
                <tr>
                  <td style="padding-right:2px;"><a href="https://www.facebook.com/capybaraseo/" style="display:inline-block;"><img src="https://seo.pe/wp-content/uploads/facebook.png" width="70" style="display:block; border:0;"></a></td>
                  <td style="padding-right:2px;"><a href="https://www.twitter.com/capybaraseo" style="display:inline-block;"><img src="https://seo.pe/wp-content/uploads/twitter.png" width="70" style="display:block; border:0;"></a></td>
                  <td style="padding-right:2px;"><a href="https://pe.linkedin.com/company/capybara-seo" style="display:inline-block;"><img src="https://seo.pe/wp-content/uploads/LinkedIn.png" width="70" style="display:block; border:0;"></a></td>
                  <td><a href="https://www.instagram.com/capybaraseo" style="display:inline-block;"><img src="https://seo.pe/wp-content/uploads/instagram.png" width="70" style="display:block; border:0;"></a></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<div class="actions">
<button id="btnCopySignature">Copiar firma al portapapeles</button>
</div>
</body>
</html>