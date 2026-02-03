var countries = { 
    pe: {
        url: 'peru',      
        tel: '+51 949 435 029',    
        addr: 'Martín de Murua 150 Of. 1307<br>San Miguel, Lima',  
        maps: 'https://g.page/capybara-seo?share'
    }
};

var urlTemplate = 'https://seo.pe/?utm_source=firma&utm_medium=firma&utm_campaign={name}';

function onInit() {
    $('#btnCreateSignature').click(createSignature);
    $('#btnCopySignature').click(copySignature);
}

async function copySignature() {
    const signatureNode = document.getElementById("signature");
    
    // Selección visual
    const range = document.createRange();
    range.selectNode(signatureNode);
    const selection = window.getSelection();
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Clipboard API moderna para mantener estilos HTML y fondo
        const blob = new Blob([signatureNode.innerHTML], { type: 'text/html' });
        const data = [new ClipboardItem({ 'text/html': blob, 'text/plain': signatureNode.innerText })];
        
        await navigator.clipboard.write(data);
        
        // Feedback en el botón
        const btn = $('#btnCopySignature');
        const originalText = btn.text();
        btn.text('¡Copiado con éxito!');
        setTimeout(() => btn.text(originalText), 2000);
        
    } catch (err) {
        // Fallback para navegadores antiguos
        document.execCommand("copy");
        console.error("Error al copiar con API moderna, usando fallback.", err);
    }
}

function buildShortName(name) {
    name = name.toLowerCase()
        .normalize("NFD").replace(/[\u0300-\u036f]/g, "") // Quita acentos
        .replace(/\s+/g, ''); // Quita espacios
    return name;
}

function createSignature() {
    var name  = $('#txtName').val();
    var title = $('#txtTitle').val();
    var email = $('#txtEmail').val();
    var phone = $('#txtPhone').val().trim();
    var countryCode = $("input[name='optPais']:checked").val() || 'pe';
    
    // Datos básicos
    $('#sigName').text(name);
    $('#sigTitle').text(title);
    
    // Configuración por país
    var country = countries[countryCode] || countries.pe;
    
    // Dirección con soporte de HTML para el <br>
    $('#addr').html(country.addr);
    
    // Teléfono
    var telDisplay = phone.length != 0 ? phone : country.tel;
    $('#tel').text(telDisplay);
    $('#tel-link').attr('href', 'tel:' + telDisplay.replace(/\s+/g, ''));
    
    // URL con UTM Tracking
    var url = urlTemplate.replace("{name}", buildShortName(name));
    $('#sigURL').attr('href', url).text('seo.pe');

    // Enlace de mapas (opcional si quieres aplicarlo al <td> de dirección)
    $('#maps').attr('href', country.maps);
}

$(document).ready(onInit);