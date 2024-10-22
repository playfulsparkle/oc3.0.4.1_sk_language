<?php
// Text
$_['text_title']                = 'Klarna faktúra - Plaťte do 14 dní';
$_['text_terms_fee']            = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']         = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']           = 'Klarna faktúra vyžaduje niektoré dodatočné informácie predtým, ako môžu spracovať vašu objednávku.';
$_['text_male']                 = 'Muži';
$_['text_female']               = 'Ženy';
$_['text_year']                 = 'Rok';
$_['text_month']                = 'Mesiac';
$_['text_day']                  = 'Deň';
$_['text_comment']              = 'ID faktúry Klarna: %s. ' . "\n" . '%s/%s: %.4f';
$_['text_terms_description']    = 'Odovzdaním údajov potrebných na spracovanie nákupu na faktúru a na overenie identity a bonity súhlasím s podmienkami Klarna. Môj <a href="https://online.klarna.com/consent_de.yaws" target="_blank" rel="external noopener noreferrer">súhlas</a> môžem kedykoľvek odvolať s účinnosťou do budúcnosti.';

// Entry
$_['entry_gender']              = 'Pohlavie';
$_['entry_pno']                 = 'Osobné číslo';
$_['entry_dob']                 = 'Dátum narodenia';
$_['entry_phone_no']            = 'Telefónne číslo';
$_['entry_street']              = 'Ulica';
$_['entry_house_no']            = 'Číslo domu';
$_['entry_house_ext']           = 'Prípadné doplnenie domu';
$_['entry_company']             = 'Číslo registra spoločnosti';

// Help
$_['help_pno']                  = 'Prosím, zadajte svoje číslo sociálneho zabezpečenia.';
$_['help_phone_no']             = 'Prosím, zadajte svoje telefónne číslo.';
$_['help_street']               = 'Prosím, majte na pamäti, že doručenie je možné iba na registrovanú adresu pri platbe cez Klarna.';
$_['help_house_no']             = 'Prosím, zadajte číslo svojho domu.';
$_['help_house_ext']            = 'Prosím, uveďte tu prípadné doplnenie domu. Napr. A, B, C, Červená, Modrá atď.';
$_['help_company']              = 'Prosím, zadajte registračné číslo vašej spoločnosti.';

// Error
$_['error_deu_terms']          = 'Musíte súhlasiť s pravidlami ochrany osobných údajov Klarna (Datenschutz)';
$_['error_address_match']       = 'Fakturačná a dodacia adresa musia súhlasiť, ak chcete používať Klarna faktúru';
$_['error_network']             = 'Pri pokuse o pripojenie k Klarna došlo k chybe. Prosím, skúste to znova neskôr.';