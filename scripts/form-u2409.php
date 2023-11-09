<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Форма Домашняя Übermittlung',
	'heading' => 'Neue Formularübermittlung',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Aktiviert',
		'checkbox_unchecked' => 'Nicht aktiviert',
		'submitted_from' => 'Von Website übermitteltes Formular: %s',
		'submitted_by' => 'Besucher-IP-Adresse: %s',
		'too_many_submissions' => 'Zu viele Sendungen in letzter Zeit von dieser IP',
		'failed_to_send_email' => 'E-Mail konnte nicht gesendet werden',
		'invalid_reCAPTCHA_private_key' => 'Ungültiger privater reCAPTCHA-Schlüssel.',
		'invalid_reCAPTCHA2_private_key' => 'Ungültiger privater reCAPTCHA 2.0-Schlüssel.',
		'invalid_reCAPTCHA2_server_response' => 'Ungültige private reCAPTCHA 2.0-Server-Reaktionszeit.',
		'invalid_field_type' => 'Unbekannter Feldtyp „%s“.',
		'invalid_form_config' => 'Die Konfiguration im Feld „%s“ ist ungültig.',
		'unknown_method' => 'Unbekannte Serveranfragemethode'
	),
	'email' => array(
		'from' => 'daniel@stel-multimedia.de',
		'to' => 'daniel@stel-multimedia.de'
	),
	'fields' => array(
		'custom_U2414' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Feld „Name“ ist erforderlich.'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Feld „Email“ ist erforderlich.',
				'format' => 'Die E-Mail-Adresse in Feld „Email“ ist ungültig.'
			)
		),
		'custom_U2418' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U2410' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Feld „Custom“ ist erforderlich.'
			)
		)
	)
);

process_form($form);
?>
