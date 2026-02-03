<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Firmas - Capybara SEO</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* ESTILOS GENERALES */
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #1f1f1f;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #0b2c3d;
            font-size: 24px;
            margin-bottom: 25px;
            border-bottom: 2px solid #009fe3;
            padding-bottom: 10px;
        }

        /* FORMULARIO */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        @media (max-width: 600px) {
            .form-grid { grid-template-columns: 1fr; }
        }

        .label {
            font-size: 12px;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* BOTONES */
        .actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        button {
            padding: 12px 24px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
        }

        button:active { transform: scale(0.98); }

        #btnCreateSignature { background-color: #009fe3; color: white; }
        #btnCreateSignature:hover { background-color: #007bb1; }

        #btnCopySignature { background-color: #0b2c3d; color: white; }
        #btnCopySignature:hover { background-color: #16435a; }

        /* PREVISUALIZACIÓN */
        #preview-area {
            margin-top: 40px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        h3 { color: #333; }
        
        #signature-wrapper {
            background: white;
            padding: 20px;
            border: 1px dashed #ccc;
            display: inline-block;
            margin-top: 10px;
            overflow-x: auto;
            max-width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Configuración de Firma</h1>
    
    <div class="form-grid">
        <div>
            <div class="label">Nombre y Apellido</div>
            <input type="text" id="txtName" value="Nombre Apellido" placeholder="Ej. Juan Pérez">
        </div>
        
        <div>
            <div class="label">Cargo</div>
            <select id="txtTitle">
                <option value="CEO">CEO</option>
                <option value="Jefe de Proyectos">Jefe de Proyectos</option>
                <option value="Key Account Manager">Key Account Manager</option>
                <option value="Finanzas y RRHHs">Finanzas y RRHHs</option>
                <option value="Ejecutiva Comercial">Ejecutiva Comercial</option>
                <option value="SEO Copywriter">SEO Copywriter</option>
            </select>
        </div>

        <div>
            <div class="label">Teléfono (Opcional)</div>
            <input type="text" id="txtPhone" placeholder="+51 ... (Dejar vacío para usar fijo)">
        </div>
    </div>

    <div class="actions">
        <button id="btnCreateSignature">🔄 Actualizar Vista Previa</button>
        <button id="btnCopySignature">📋 Copiar Firma</button>
    </div>

    <div id="preview-area">
        <h3>Vista Previa:</h3>
        <div id="signature-wrapper">
            <!-- INICIO CÓDIGO DE FIRMA -->
            <div id="signature">
                <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif; color:#1f1f1f; background-image:url('https://seo.pe/wp-content/uploads/fondo-scaled.jpg'); background-repeat:no-repeat; background-position:right bottom; background-size:cover;">
                  <tr>
                
                    <!-- ISOTIPO -->
                    <td style="padding-right:40px; padding-left: 10px; vertical-align:middle;">
                      <img src="https://seo.pe/wp-content/uploads/Isotipo-scaled.png" width="180" style="display:block; border:0;" alt="Capybara">
                    </td>
                
                    <!-- DATOS -->
                    <td style="border-left:4px solid #009fe3; padding:70px 50px 20px 24px; vertical-align:top;">
                
                      <!-- NOMBRE -->
                      <div id="sigName" style="font-size:18px; font-weight:bold; line-height:1.2; margin-bottom:2px;">
                        Nombre Apellido
                      </div>
                
                      <!-- CARGO -->
                      <div id="sigTitle" style="font-size:14px; color:#555; margin-bottom:10px;">
                        CEO
                      </div>
                
                      <!-- LINEA -->
                      <table cellpadding="0" cellspacing="0" width="60" style="margin-bottom:14px;">
                        <tr>
                          <td style="height:3px; background:#0b2c3d;"></td>
                        </tr>
                      </table>
                
                      <!-- LISTA CON ICONOS -->
                      <table cellpadding="0" cellspacing="0" style="font-size:13px; line-height:1.8; margin-top:6px;">
                        
                        <tr>
                          <td width="26" valign="top">
                            <img src="https://seo.pe/wp-content/uploads/telefono.png" width="50" style="display:block;">
                          </td>
                          <td>
                            <a href="tel:+51949435029" id="tel-link" style="color:#1f1f1f; text-decoration:none;">
                              <span id="tel">+51 949 435 029</span>
                            </a>
                          </td>
                        </tr>
                
                        <tr>
                          <td valign="top">
                            <img src="https://seo.pe/wp-content/uploads/web.png" width="50" style="display:block;">
                          </td>
                          <td>
                            <a href="https://seo.pe" id="sigURL" style="color:#1f1f1f; text-decoration:none;">
                              seo.pe
                            </a>
                          </td>
                        </tr>
                
                        <tr>
                          <td valign="top">
                            <img src="https://seo.pe/wp-content/uploads/ubicacion.png" width="50" style="display:block;">
                          </td>
                          <td id="addr">
                            Martín de Murua 150 Of. 1307<br>
                            Plexus Centro Empresarial<br>
                            San Miguel, Lima
                          </td>
                        </tr>
                
                      </table>
                
                    </td>
                
                    <!-- LOGO + REDES -->
                    <td style="border-left:4px solid #009fe3; padding-left:24px; padding-right:20px; vertical-align:middle;">
                
                      <table cellpadding="0" cellspacing="0" border="0" align="center">
                        <tr>
                          <td align="center" style="padding-bottom:14px;">
                            <img src="https://seo.pe/wp-content/uploads/Logotipo.png" width="200" style="display:block; border:0;" alt="Capybara SEO">
                          </td>
                        </tr>
                
                        <tr>
                          <td style="font-size:0; line-height:0; text-align:center;">
                            <table cellpadding="0" cellspacing="0" border="0" align="center">
                              <tr>
                                <td style="padding-right:2px;">
                                  <a href="https://www.facebook.com/capybaraseo/" style="display:inline-block; line-height:0;">
                                    <img src="https://seo.pe/wp-content/uploads/facebook.png" width="70" style="display:block; border:0;">
                                  </a>
                                </td>
                                <td style="padding-right:2px;">
                                  <a href="https://www.twitter.com/capybaraseo" style="display:inline-block; line-height:0;">
                                    <img src="https://seo.pe/wp-content/uploads/twitter.png" width="70" style="display:block; border:0;">
                                  </a>
                                </td>
                                <td style="padding-right:2px;">
                                  <a href="https://pe.linkedin.com/company/capybara-seo" style="display:inline-block; line-height:0;">
                                    <img src="https://seo.pe/wp-content/uploads/LinkedIn.png" width="70" style="display:block; border:0;">
                                  </a>
                                </td>
                                <td>
                                  <a href="https://www.instagram.com/capybaraseo" style="display:inline-block; line-height:0;">
                                    <img src="https://seo.pe/wp-content/uploads/instagram.png" width="70" style="display:block; border:0;">
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                
                    </td>
                
                  </tr>
                </table>
            </div>
            <!-- FIN CÓDIGO DE FIRMA -->
        </div>
    </div>
</div>

<script>
    /* LÓGICA DE JAVASCRIPT */
    
    // Configuración base
    var defaultData = {
        tel: '+51 949 435 029',
        addr: 'Martín de Murua 150 Of. 1307<br>Plexus Centro Empresarial<br>San Miguel, Lima'
    };

    var urlTemplate = 'https://seo.pe/?utm_source=firma&utm_medium=firma&utm_campaign={name}';

    function buildShortName(name) {
        // Genera un nombre limpio para la URL (sin acentos, sin espacios)
        return name.toLowerCase()
            .normalize("NFD").replace(/[\u0300-\u036f]/g, "")
            .replace(/\s+/g, '');
    }

    function createSignature() {
        var name  = $('#txtName').val();
        var title = $('#txtTitle').val();
        var phone = $('#txtPhone').val().trim();
        
        // 1. Actualizar Textos
        $('#sigName').text(name);
        $('#sigTitle').text(title);
        
        // 2. Actualizar Dirección (interpreta HTML para el <br>)
        $('#addr').html(defaultData.addr);
        
        // 3. Lógica de Teléfono
        var finalPhone = (phone.length > 0) ? phone : defaultData.tel;
        var cleanPhone = finalPhone.replace(/\s+/g, ''); // Quitar espacios para el link tel:
        
        $('#tel').text(finalPhone);
        $('#tel-link').attr('href', 'tel:' + cleanPhone);
        
        // 4. Actualizar URL con UTM
        var cleanName = buildShortName(name);
        var finalUrl = urlTemplate.replace("{name}", cleanName);
        $('#sigURL').attr('href', finalUrl);
    }

    async function copySignature() {
        // Asegurar que los datos estén frescos
        createSignature();

        const signatureNode = document.getElementById("signature");
        
        // Selección visual para que el usuario sepa qué se está copiando
        const range = document.createRange();
        range.selectNode(signatureNode);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);

        try {
            // Usar Clipboard API moderna
            // Esto copia tanto el HTML (con estilos) como el texto plano
            const blobHtml = new Blob([signatureNode.innerHTML], { type: 'text/html' });
            const blobText = new Blob([signatureNode.innerText], { type: 'text/plain' });
            
            const data = [new ClipboardItem({ 
                'text/html': blobHtml, 
                'text/plain': blobText 
            })];
            
            await navigator.clipboard.write(data);
            
            // Feedback Visual en el botón
            const btn = $('#btnCopySignature');
            const originalText = btn.text();
            btn.text('¡Copiado Exitosamente! ✅').css('background-color', '#28a745');
            
            // Revertir el botón después de 2 segundos
            setTimeout(() => {
                btn.text(originalText).css('background-color', '#0b2c3d');
                window.getSelection().removeAllRanges(); // Quitar selección visual
            }, 2000);

        } catch (err) {
            console.error("Error al copiar: ", err);
            // Fallback (navegadores antiguos)
            document.execCommand("copy");
            alert("Copiado al portapapeles (Modo compatibilidad).");
        }
    }

    $(document).ready(function() {
        // Asignar eventos a los botones
        $('#btnCreateSignature').click(createSignature);
        $('#btnCopySignature').click(copySignature);
        
        // Actualizar firma al presionar Enter en los inputs
        $('input').on('keypress', function (e) {
            if(e.which === 13) createSignature();
        });

        // Generar firma inicial al cargar la página
        createSignature();
    });
</script>

</body>
</html>