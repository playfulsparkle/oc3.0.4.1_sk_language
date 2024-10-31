<?php
// Text
$_['text_new_card']                     = '+ Pridať novú kartu';
$_['text_loading']                      = 'Načítava sa... Prosím čakajte...';
$_['text_card_details']                 = 'Podrobnosti o karte';
$_['text_saved_card']                   = 'Použiť uloženú kartu:';
$_['text_card_ends_in']                 = 'Plaťte existujúcou %s kartou, ktorá končí na XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Číslo karty:';
$_['text_card_expiry']                  = 'Platnosť karty (MM/RR):';
$_['text_card_cvc']                     = 'Bezpečnostný kód karty (CVC):';
$_['text_card_zip']                     = 'PSČ karty:';
$_['text_card_save']                    = 'Uložiť kartu pre budúce použitie?';
$_['text_trial']                        = '%s každých %s %s na %s platieb, potom ';
$_['text_recurring']                    = '%s každých %s %s';
$_['text_length']                       = ' na %s platieb';
$_['text_cron_subject']                 = 'Zhrnutie CRON úlohy Square';
$_['text_cron_message']                 = 'Tu je zoznam všetkých CRON úloh vykonaných vašou rozšírením Square:';
$_['text_squareup_profile_suspended']   = ' Vaše opakované platby boli pozastavené. Prosím, kontaktujte nás pre ďalšie informácie.';
$_['text_squareup_trial_expired']       = ' Vaša skúšobná doba vypršala.';
$_['text_squareup_recurring_expired']   = ' Vaše opakované platby vypršali. Toto bola vaša posledná platba.';
$_['text_cron_summary_token_heading']   = 'Obnovenie prístupového tokenu:';
$_['text_cron_summary_token_updated']   = 'Prístupový token bol úspešne aktualizovaný!';
$_['text_cron_summary_error_heading']   = 'Chyby transakcie:';
$_['text_cron_summary_fail_heading']    = 'Zlyhané transakcie (Profily pozastavené):';
$_['text_cron_summary_success_heading'] = 'Úspešné transakcie:';
$_['text_cron_fail_charge']             = 'Profil <strong>#%s</strong> nebolo možné zaťažiť sumou <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Profil <strong>#%s</strong> bol zaťažený sumou <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/RR';
$_['text_default_squareup_name']        = 'Kreditná / Debetná karta';
$_['text_token_issue_customer_error']   = 'Momentálne máme technické problémy s naším platobným systémom. Prosím, skúste to znova neskôr.';
$_['text_token_revoked_subject']        = 'Váš prístupový token Square bol odobraný!';
$_['text_token_revoked_message']        = "Prístup rozšírenia platby Square k vášmu účtu Square bol odobraný cez ovládací panel Square. Musíte overiť svoje prihlasovacie údaje v nastaveniach rozšírenia a pripojiť sa znova.";
$_['text_token_expired_subject']        = 'Váš prístupový token Square vypršal!';
$_['text_token_expired_message']        = "Prístupový token rozšírenia platby Square, ktorý ho spája s vaším účtom Square, vypršal. Musíte overiť svoje prihlasovacie údaje a CRON úlohu v nastaveniach rozšírenia a pripojiť sa znova.";

// Error
$_['error_browser_not_supported']       = 'Chyba: Platobný systém už nepodporuje váš webový prehliadač. Prosím, aktualizujte ho alebo použite iný.';
$_['error_card_invalid']                = 'Chyba: Karta je neplatná!';
$_['error_squareup_cron_token']         = 'Chyba: Prístupový token sa nedal obnoviť. Prosím, pripojte svoje rozšírenie Square Payment cez administrátorský panel OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Upozornenie: Je povolený testovací režim! Transakcie sa budú zdať, že prešli, ale žiadne poplatky nebudú vykonané.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Transakcia karty bola autorizovaná, ale ešte nebola zrealizovaná.';
$_['squareup_status_comment_captured']      = 'Transakcia karty bola autorizovaná a následne zrealizovaná (t.j. dokončená).';
$_['squareup_status_comment_voided']        = 'Transakcia karty bola autorizovaná a následne zrušená (t.j. zrušená).';
$_['squareup_status_comment_failed']        = 'Transakcia karty zlyhala.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Krajina platobnej adresy nie je platná. Prosím, upravte ju a skúste to znova.';
$_['squareup_override_error_shipping_address.country']      = 'Krajina dodacej adresy nie je platná. Prosím, upravte ju a skúste to znova.';
$_['squareup_override_error_email_address']                 = 'Váš e-mailový adresa zákazníka nie je platná. Prosím, upravte ju a skúste to znova.';
$_['squareup_override_error_phone_number']                  = 'Váš telefónny číslo zákazníka nie je platné. Prosím, upravte ho a skúste to znova.';
$_['squareup_error_field']                                  = ' Pole: %s';