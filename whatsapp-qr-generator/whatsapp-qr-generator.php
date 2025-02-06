<?php 
/* 
Plugin Name: WhatsApp QR Code Generator 
Plugin URI:  
Description: Un plugin WordPress pour générer un QR Code WhatsApp. 
Version: 1.0
Author: Fitia Princia
Author URI: 
License: GPL2 
*/ 
 
if (!defined('ABSPATH')) { 
    exit; // Sécurité : empêche l'accès direct 
} 
 
// Définition de la classe principale du plugin 
class WhatsAppQRGenerator { 
 
    public function __construct() { 
        // Chargement des scripts et styles 
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']); 
         
        // Shortcodes pour le QR Code 
        add_shortcode('whatsapp_qr', [$this, 'generate_qr_code']); 
         
        // Gestion AJAX 
        add_action('wp_ajax_wqrg_generate_qr_code', [$this, 'generate_qr_code_ajax']); 
        add_action('wp_ajax_nopriv_wqrg_generate_qr_code', [$this, 'generate_qr_code_ajax']); 
    } 
 
    public function enqueue_scripts() { 
        wp_enqueue_style('wqrg-style', plugins_url('style.css', __FILE__)); 
        wp_enqueue_script('wqrg-script', plugins_url('script.js', __FILE__), ['jquery'], null, true); 
 
        wp_localize_script('wqrg-script', 'wqrg_ajax', [ 
            'ajax_url' => admin_url('admin-ajax.php'), 
            'nonce'    => wp_create_nonce('wqrg_nonce') 
        ]); 
    } 
 
    // Génération du QR Code via un shortcode 
    public function generate_qr_code($atts) { 
        $atts = shortcode_atts( 
            array( 
                'phone'   => '',  
                'message' => 'Hello! Contact me on WhatsApp.', 
            ),  
            $atts 
        ); 
 
        if (empty($atts['phone'])) { 
            return '<p style="color:red;">Veuillez spécifier un numéro WhatsApp dans le shortcode.</p>'; 
        } 
 
        // Supprimer le "+" pour générer un lien valide

        $phone = str_replace('+', '', $atts['phone']);

        $url = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://wa.me/' . $phone . '?text=' . urlencode($atts['message']);

        return '<img src="' . esc_url($url) . '" alt="QR Code WhatsApp">'; 
    } 
 
    // Génération du QR Code via AJAX 
    public function generate_qr_code_ajax() { 
        check_ajax_referer('wqrg_nonce', 'nonce'); 
 
        $phone   = sanitize_text_field($_POST['phone'] ?? ''); 
        $message = sanitize_textarea_field($_POST['message'] ?? ''); 
 
        if (empty($phone)) { 
            wp_send_json_error(['message' => 'Numéro requis'], 400); 
        } 
 
        $url = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://wa.me/' . $phone . '?text=' . urlencode($message); 
        wp_send_json_success(['qr_url' => $url]); 
    } 
} 
 
// Initialisation du plugin 
new WhatsAppQRGenerator(); 
  

 