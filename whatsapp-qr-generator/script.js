jQuery(document).ready(function($) { 
    $('#wqrg-generate').on('click', function() { 
        var phone   = $('#wqrg-phone').val().trim(); 
        var message = $('#wqrg-message').val().trim(); 
 
        if (!phone) { 
            alert('Veuillez entrer un numéro WhatsApp.'); 
            return; 
        } 
 
        $.ajax({ 
            url: wqrg_ajax.ajax_url, 
            type: 'POST', 
            dataType: 'json', 
            data: { 
                action: 'wqrg_generate_qr_code', 
                phone: phone, 
                message: message, 
                nonce: wqrg_ajax.nonce 
            }, 
            success: function(response) { 
                if (response.success) { 
                    $('#wqrg-qrcode').html('<img src="' + response.data.qr_url + '" alt="QR Code WhatsApp">'); 
                } else { 
                    alert(response.data.message); 
                } 
            }, 
            error: function() { 
                alert('Erreur lors de la génération du QR Code.'); 
            } 
        }); 
    }); 
}); 
  

 