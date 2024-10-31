<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Nastavenia';
$_['tab_order_status']              = 'Stav objednávky';

// Text
$_['text_extension']                = 'Rozšírenia';
$_['text_success']                  = 'Úspech: Údaje o platobnom module CardConnect boli upravené!';
$_['text_edit']                     = 'Upraviť CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Platba';
$_['text_refund']                   = 'Vrátenie';
$_['text_authorize']                = 'Autorizácia';
$_['text_live']                     = 'Živý';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Cron ešte nebol vykonaný';
$_['text_payment_info']             = 'Informácie o platbe';
$_['text_payment_method']           = 'Platobná metóda';
$_['text_card']                     = 'Karta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referencia';
$_['text_update']                   = 'Aktualizovať';
$_['text_order_total']              = 'Celková suma objednávky';
$_['text_total_captured']           = 'Celková suma zachytená';
$_['text_capture_payment']          = 'Zachytiť platbu';
$_['text_refund_payment']           = 'Vrátiť platbu';
$_['text_void']                     = 'Zrušiť';
$_['text_transactions']             = 'Transakcie';
$_['text_column_type']              = 'Typ';
$_['text_column_reference']         = 'Referencia';
$_['text_column_amount']            = 'Suma';
$_['text_column_status']            = 'Stav';
$_['text_column_date_modified']     = 'Dátum úpravy';
$_['text_column_date_added']        = 'Dátum pridania';
$_['text_column_update']            = 'Aktualizácia';
$_['text_column_void']              = 'Zrušiť';
$_['text_confirm_capture']          = 'Ste si istý, že chcete zachytiť platbu?';
$_['text_confirm_refund']           = 'Ste si istý, že chcete vrátiť platbu?';
$_['text_inquire_success']          = 'Dopyt bol úspešný';
$_['text_capture_success']          = 'Žiadosť o zachytenie bola úspešná';
$_['text_refund_success']           = 'Žiadosť o vrátenie bola úspešná';
$_['text_void_success']             = 'Žiadosť o zrušenie bola úspešná';

// Entry
$_['entry_merchant_id']             = 'ID predajcu';
$_['entry_api_username']            = 'API užívateľské meno';
$_['entry_api_password']            = 'API heslo';
$_['entry_token']                   = 'Tajný token';
$_['entry_transaction']             = 'Transakcia';
$_['entry_environment']             = 'Prostredie';
$_['entry_site']                    = 'Webová stránka';
$_['entry_store_cards']             = 'Uložiť karty';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Celková suma';
$_['entry_geo_zone']                = 'Geografická zóna';
$_['entry_status']                  = 'Stav';
$_['entry_logging']                 = 'Debug logovanie';
$_['entry_sort_order']              = 'Poradie triedenia';
$_['entry_cron_url']                = 'URL pre cron úlohy';
$_['entry_cron_time']               = 'Posledný beh cron úlohy';
$_['entry_order_status_pending']    = 'Čakajúce';
$_['entry_order_status_processing'] = 'Spracovávanie';

// Help
$_['help_merchant_id']              = 'ID predajcu vášho osobného účtu CardConnect.';
$_['help_api_username']             = 'Vaše užívateľské meno pre prístup k API CardConnect.';
$_['help_api_password']             = 'Vaše heslo pre prístup k API CardConnect.';
$_['help_token']                    = 'Zadajte náhodný token pre bezpečnosť alebo použite generovaný.';
$_['help_transaction']              = 'Vyberte „Platba“, aby ste okamžite zachytili platbu, alebo „Autorizácia“, aby ste ju museli schváliť.';
$_['help_site']                     = 'To určuje prvú časť URL API. Zmeňte iba v prípade pokynov.';
$_['help_store_cards']              = 'Ak chcete ukladať karty pomocou tokenizácie.';
$_['help_echeck']                   = 'Ak chcete ponúknuť možnosť platiť pomocou eCheck.';
$_['help_total']                    = 'Celková suma, ktorú musí objednávka dosiahnuť predtým, ako sa táto platobná metóda stane aktívnou. Musí byť hodnotou bez meny.';
$_['help_logging']                  = 'Povolením debugovania sa citlivé údaje zapíšu do log súboru. Vždy by ste mali vypnúť, pokiaľ nie sú poskytnuté iné pokyny.';
$_['help_cron_url']                 = 'Nastavte cron úlohu na volanie tejto URL, aby sa objednávky automaticky aktualizovali. Je navrhnutá na spustenie niekoľko hodín po poslednom zachytení v pracovný deň.';
$_['help_cron_time']                = 'Toto je posledný čas, kedy bola URL cron úlohy vykonaná.';
$_['help_order_status_pending']     = 'Stav objednávky, keď musí byť objednávka autorizovaná predajcom.';
$_['help_order_status_processing']  = 'Stav objednávky, keď sa objednávka automaticky zachytí.';

// Button
$_['button_inquire_all']            = 'Dopytovať všetko';
$_['button_capture']                = 'Zachytiť';
$_['button_refund']                 = 'Vrátiť';
$_['button_void_all']               = 'Zrušiť všetko';
$_['button_inquire']                = 'Dopytovať';
$_['button_void']                   = 'Zrušiť';

// Error
$_['error_permission']              = 'Upozornenie: Nemáte oprávnenie na úpravu platby CardConnect!';
$_['error_merchant_id']             = 'ID predajcu je povinné!';
$_['error_api_username']            = 'API užívateľské meno je povinné!';
$_['error_api_password']            = 'API heslo je povinné!';
$_['error_token']                   = 'Tajný token je povinný!';
$_['error_site']                    = 'Webová stránka je povinná!';
$_['error_amount_zero']             = 'Suma musí byť vyššia ako nula!';
$_['error_no_order']                = 'Žiadne zodpovedajúce informácie o objednávke!';
$_['error_invalid_response']        = 'Prijatá neplatná odpoveď!';
$_['error_data_missing']            = 'Chýbajúce údaje!';
$_['error_not_enabled']             = 'Modul nie je povolený!';