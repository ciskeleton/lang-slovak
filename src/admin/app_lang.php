<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenty';
$lang['admin_content'] = 'Obsah';
$lang['admin_database_backup'] = 'Zálohy databázy';
$lang['admin_extensions'] = 'Rozšírenia';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Pomoc';
$lang['admin_languages'] = 'Jazyky';
$lang['admin_logs'] = 'Systémové záznamy';
$lang['admin_media'] = 'Knižnica médií';
$lang['admin_modules'] = 'Moduly';
$lang['admin_plugins'] = 'Pluginy';
$lang['admin_reports'] = 'Záznam aktivít';
$lang['admin_settings'] = 'Systémové nastavenia';
$lang['admin_sysinfo'] = 'Informácie o systéme';
$lang['admin_system'] = 'Systém';
$lang['admin_system_firewall'] = 'Systémový firewall';
$lang['admin_themes'] = 'Témy';
$lang['admin_updates'] = 'Aktualizácie systému';
$lang['admin_users'] = 'Používatelia';
$lang['admin_view_site'] = 'Zobraziť stránku';
$lang['per_page'] = 'Na stránku';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Ďakujeme za vytvorenie s <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Žiadne aktívne položky.} other{<b>#</b> z <b>%s</b> položiek je aktívnych.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Inštalovať';
$lang['admin_install_error'] = 'Inštalácia balíka zlyhala.';
$lang['admin_install_error_com'] = 'Inštalácia zlyhala: %s';
$lang['admin_install_location_app'] = 'Iba táto aplikácia';
$lang['admin_install_location_core'] = 'Všetky aplikácie';
$lang['admin_install_location_select'] = '&#151; Vyberte umiestnenie &#151;';
$lang['admin_install_success'] = 'Balík bol úspešne nainštalovaný.';
$lang['admin_install_upload'] = 'Nahrať';
$lang['admin_install_upload_error'] = 'Nahratie balíka zlyhalo.';
$lang['admin_install_upload_success'] = 'Balík bol úspešne nahratý.';
$lang['admin_install_upload_tip'] = 'Nainštalujte balík nahratím jeho súboru <b>.zip</b> sem.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nepodarilo sa vyčistiť staré záložné súbory.';
$lang['admin_database_backup_clean_success'] = '%d záložných súborov zmazaných. %d miesta na disku uvoľnené.';
$lang['admin_database_backup_create'] = 'Vytvoriť zálohu';
$lang['admin_database_backup_create_confirm'] = 'Naozaj chcete teraz vytvoriť zálohu?';
$lang['admin_database_backup_create_error'] = 'Nepodarilo sa vytvoriť záložný súbor. Uistite sa, že priečinok <b>%s</b> je zapisovateľný.';
$lang['admin_database_backup_create_success'] = 'Záložný súbor databázy <b>%s</b> bol úspešne vytvorený.';
$lang['admin_database_backup_delete_confirm'] = 'Naozaj chcete zmazať tieto záložné súbory?';
$lang['admin_database_backup_delete_error'] = 'Nepodarilo sa zmazať vybrané záložné súbory.';
$lang['admin_database_backup_delete_success'] = 'Záložné súbory boli úspešne zmazané.';
$lang['admin_database_backup_download_error'] = 'Nepodarilo sa stiahnuť vybraný záložný súbor.';
$lang['admin_database_backup_download_success'] = 'Záložný súbor bol úspešne stiahnutý.';
$lang['admin_database_backup_lock_confirm'] = 'Naozaj chcete uzamknúť tieto záložné súbory?';
$lang['admin_database_backup_lock_error'] = 'Nepodarilo sa uzamknúť vybrané záložné súbory.';
$lang['admin_database_backup_lock_success'] = 'Záložné súbory boli úspešne uzamknuté.';
$lang['admin_database_backup_locked_error'] = 'Nepodarilo sa zmazať uzamknuté záložné súbory.';
$lang['admin_database_backup_missing_error'] = 'Záložný súbor nebol nájdený.';
$lang['admin_database_backup_unlock_confirm'] = 'Naozaj chcete odomknúť tieto záložné súbory?';
$lang['admin_database_backup_unlock_error'] = 'Nepodarilo sa odomknúť vybrané záložné súbory.';
$lang['admin_database_backup_unlock_success'] = 'Záložné súbory boli úspešne odomknuté.';
$lang['admin_database_prune'] = 'Vyčistiť';
$lang['admin_database_prune_confirm'] = 'Naozaj chcete vyčistiť databázu? Pri vykonaní sa vytvorí záloha.';
$lang['admin_database_prune_error'] = 'Nepodarilo sa vyčistiť databázu.';
$lang['admin_database_prune_next'] = 'Ďalšie vyčistenie: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Databáza bola úspešne vyčistená.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Zmazať záznamy';
$lang['admin_logs_delete_confirm'] = 'Naozaj chcete zmazať vybrané súbory záznamov?';
$lang['admin_logs_delete_error'] = 'Nepodarilo sa zmazať súbory záznamov.';
$lang['admin_logs_delete_success'] = 'Súbory záznamov boli úspešne zmazané.';
$lang['admin_logs_error_disabled'] = 'Zaznamenávanie momentálne nie je povolené.';
$lang['admin_logs_error_empty'] = 'Neboli nájdené žiadne záznamy.';
$lang['admin_logs_error_missing'] = 'Súbor záznamov sa nepodarilo nájsť alebo bol prázdny.';
$lang['admin_logs_tip'] = 'Zaznamenávanie môže rýchlo vytvoriť veľmi veľké súbory. Pre živé stránky zvážte zmazanie starých.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Naozaj chcete zmazať vybrané e-maily?';
$lang['admin_emails_delete_error'] = 'Nepodarilo sa zmazať vybrané e-maily.';
$lang['admin_emails_delete_success'] = 'Vybrané e-maily boli úspešne zmazané.';
$lang['admin_emails_email_from'] = 'Odoslané od';
$lang['admin_emails_mail_queue'] = 'Fronta e-mailov';
$lang['admin_emails_mailer'] = 'Hromadný e-mail';
$lang['admin_emails_search'] = 'Hľadať e-maily podľa predmetu alebo obsahu...';
$lang['admin_emails_send_error'] = 'Nepodarilo sa zaradiť e-mail do fronty. Skúste to znova.';
$lang['admin_emails_send_none'] = 'Žiadni používatelia nevyhovujú vašim vybraným kritériám.';
$lang['admin_emails_send_success'] = 'E-mail bol zaradený do fronty a čoskoro bude odoslaný.';
$lang['admin_emails_send_to_banned'] = 'Odoslať zakázaným používateľom.';
$lang['admin_emails_send_to_deleted'] = 'Odoslať zmazaným používateľom.';
$lang['admin_emails_send_to_disabled'] = 'Odoslať neaktívnym používateľom.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Pridať používateľa';
$lang['admin_users_all_users'] = 'Všetci používatelia';
$lang['admin_users_ban_confirm'] = 'Ste si istý, že chcete zakázať prístup vybraným používateľom?';
$lang['admin_users_ban_error'] = 'Nie je možné zakázať prístup vybraným používateľom.';
$lang['admin_users_ban_success'] = 'Vybraným používateľom bol úspešne zakázaný prístup.';
$lang['admin_users_delete_confirm'] = 'Ste si istý, že chcete odstrániť vybraných používateľov?';
$lang['admin_users_delete_error'] = 'Nie je možné odstrániť vybraných používateľov.';
$lang['admin_users_delete_success'] = 'Vybraní používatelia boli úspešne odstránení.';
$lang['admin_users_disable_confirm'] = 'Ste si istý, že chcete deaktivovať vybraných používateľov?';
$lang['admin_users_disable_error'] = 'Nie je možné deaktivovať vybraných používateľov.';
$lang['admin_users_disable_success'] = 'Vybraní používatelia boli úspešne deaktivovaní.';
$lang['admin_users_edit'] = 'Upraviť používateľa';
$lang['admin_users_edit_error'] = 'Nepodarilo sa aktualizovať používateľa.';
$lang['admin_users_edit_success'] = 'Používateľ bol úspešne aktualizovaný.';
$lang['admin_users_enable_confirm'] = 'Ste si istý, že chcete aktivovať vybraných používateľov?';
$lang['admin_users_enable_error'] = 'Nie je možné aktivovať vybraných používateľov.';
$lang['admin_users_enable_success'] = 'Vybraní používatelia boli úspešne aktivovaní.';
$lang['admin_users_groups'] = 'Skupiny';
$lang['admin_users_lock_confirm'] = 'Naozaj chcete uzamknúť vybraných používateľov?';
$lang['admin_users_lock_error'] = 'Nepodarilo sa uzamknúť vybraných používateľov.';
$lang['admin_users_lock_success'] = 'Vybraní používatelia boli úspešne uzamknutí.';
$lang['admin_users_logged'] = 'Prihlásení používatelia';
$lang['admin_users_manage'] = 'Spravovať používateľov';
$lang['admin_users_remove_confirm'] = 'Ste si istý, že chcete trvalo odstrániť vybraných používateľov a všetky ich údaje?';
$lang['admin_users_remove_error'] = 'Nie je možné trvalo odstrániť vybraných používateľov a všetky ich údaje.';
$lang['admin_users_remove_success'] = 'Vybraní používatelia a všetky ich údaje boli úspešne odstránené.';
$lang['admin_users_restore_confirm'] = 'Ste si istý, že chcete obnoviť vybraných používateľov?';
$lang['admin_users_restore_error'] = 'Nie je možné obnoviť vybraných používateľov.';
$lang['admin_users_restore_success'] = 'Vybraní používatelia boli úspešne obnovení.';
$lang['admin_users_search'] = 'Hľadať podľa mena, používateľského mena alebo e-mailu...';
$lang['admin_users_unban_confirm'] = 'Ste si istý, že chcete zrušiť zákaz prístupu vybraným používateľom?';
$lang['admin_users_unban_error'] = 'Nie je možné zrušiť zákaz prístupu vybraným používateľom.';
$lang['admin_users_unban_success'] = 'Zákaz prístupu vybraným používateľom bol úspešne zrušený.';
$lang['admin_users_unlock_confirm'] = 'Naozaj chcete odomknúť vybraných používateľov?';
$lang['admin_users_unlock_error'] = 'Nepodarilo sa odomknúť vybraných používateľov.';
$lang['admin_users_unlock_success'] = 'Vybraní používatelia boli úspešne odomknutí.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for activity log section.
 */
$lang['admin_reports_clear'] = 'Vymazať záznamy';
$lang['admin_reports_clear_confirm'] = 'Naozaj chcete vymazať záznamy akcií?';
$lang['admin_reports_clear_error'] = 'Nepodarilo sa vymazať záznamy akcií.';
$lang['admin_reports_clear_success'] = 'Záznamy akcií boli úspešne vymazané.';
$lang['admin_reports_latest_actions'] = 'Najnovšie akcie';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for media library section.
 */
$lang['admin_media_delete_confirm'] = 'Naozaj chcete zmazať vybrané súbory?';
$lang['admin_media_delete_error'] = 'Nepodarilo sa zmazať súbory.';
$lang['admin_media_delete_success'] = 'Súbory boli úspešne zmazané.';
$lang['admin_media_file_delete_error'] = 'Nepodarilo sa zmazať súbor.';
$lang['admin_media_file_delete_success'] = 'Súbor bol úspešne zmazaný.';
$lang['admin_media_file_update_error'] = 'Nepodarilo sa aktualizovať súbor.';
$lang['admin_media_file_update_success'] = 'Súbor bol úspešne aktualizovaný.';
$lang['admin_media_search'] = 'Hľadať podľa názvu, popisu alebo názvu súboru...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Žiadne aktívne moduly.} other{<b>#</b> z <b>%s</b> modulov je aktívnych.}';
$lang['admin_modules_add'] = 'Pridať modul';
$lang['admin_modules_delete_confirm'] = 'Naozaj chcete zmazať modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nepodarilo sa zmazať modul.';
$lang['admin_modules_delete_success'] = 'Modul bol úspešne zmazaný.';
$lang['admin_modules_disable_all_confirm'] = 'Naozaj chcete deaktivovať všetky moduly?';
$lang['admin_modules_disable_all_error'] = 'Nepodarilo sa deaktivovať všetky moduly.';
$lang['admin_modules_disable_all_success'] = 'Všetky moduly boli úspešne deaktivované.';
$lang['admin_modules_disable_confirm'] = 'Naozaj chcete deaktivovať modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nepodarilo sa deaktivovať modul.';
$lang['admin_modules_disable_success'] = 'Modul bol úspešne deaktivovaný.';
$lang['admin_modules_enable_all_confirm'] = 'Naozaj chcete aktivovať všetky moduly?';
$lang['admin_modules_enable_all_error'] = 'Nepodarilo sa aktivovať všetky moduly.';
$lang['admin_modules_enable_all_success'] = 'Všetky moduly boli úspešne aktivované.';
$lang['admin_modules_enable_confirm'] = 'Naozaj chcete aktivovať modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nepodarilo sa aktivovať modul.';
$lang['admin_modules_enable_success'] = 'Modul bol úspešne aktivovaný.';
$lang['admin_modules_install_confirm'] = 'Naozaj chcete nainštalovať tento modul?';
$lang['admin_modules_install_error'] = 'Inštalácia modulu zlyhala.';
$lang['admin_modules_install_success'] = 'Modul bol úspešne nainštalovaný.';
$lang['admin_modules_install_tip'] = 'Moduly pridávajú nové funkcie a funkčnosť vašej stránke. Prezrite si dostupné moduly v <a href="%s" target="_blank" rel="noopener">adresári modulov</a> alebo nahrajte jeden ako <b>.zip</b> balíček.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Žiadne aktívne pluginy.} other{<b>#</b> z <b>%s</b> pluginov je aktívnych.}';
$lang['admin_plugins_add'] = 'Pridať plugin';
$lang['admin_plugins_delete_confirm'] = 'Naozaj chcete zmazať plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nepodarilo sa zmazať plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin bol úspešne zmazaný.';
$lang['admin_plugins_disable_all_confirm'] = 'Naozaj chcete deaktivovať všetky pluginy?';
$lang['admin_plugins_disable_all_error'] = 'Nepodarilo sa deaktivovať všetky pluginy.';
$lang['admin_plugins_disable_all_success'] = 'Všetky pluginy boli úspešne deaktivované.';
$lang['admin_plugins_disable_confirm'] = 'Naozaj chcete deaktivovať plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nepodarilo sa deaktivovať plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin bol úspešne deaktivovaný.';
$lang['admin_plugins_enable_all_confirm'] = 'Naozaj chcete aktivovať všetky pluginy?';
$lang['admin_plugins_enable_all_error'] = 'Nepodarilo sa aktivovať všetky pluginy.';
$lang['admin_plugins_enable_all_success'] = 'Všetky pluginy boli úspešne aktivované.';
$lang['admin_plugins_enable_confirm'] = 'Naozaj chcete aktivovať plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nepodarilo sa aktivovať plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin bol úspešne aktivovaný.';
$lang['admin_plugins_install_confirm'] = 'Naozaj chcete nainštalovať tento plugin?';
$lang['admin_plugins_install_error'] = 'Inštalácia pluginu zlyhala.';
$lang['admin_plugins_install_success'] = 'Plugin bol úspešne nainštalovaný.';
$lang['admin_plugins_install_tip'] = 'Pluginy rozširujú existujúce funkcie o extra možnosti alebo integrácie. Inštalujte z <a href="%s" target="_blank" rel="noopener">adresára pluginov</a> alebo nahrajte <b>.zip</b> súbor.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for themes management section.
 */
$lang['admin_themes_add'] = 'Pridať tému';
$lang['admin_themes_delete_confirm'] = 'Naozaj chcete zmazať tému: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nepodarilo sa zmazať tému.';
$lang['admin_themes_delete_error_active'] = 'Nemôžete zmazať aktuálne aktívnu tému.';
$lang['admin_themes_delete_success'] = 'Téma bola úspešne zmazaná.';
$lang['admin_themes_disable_confirm'] = 'Naozaj chcete deaktivovať tému: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Tému sa nepodarilo deaktivovať.';
$lang['admin_themes_disable_success'] = 'Téma bola úspešne deaktivovaná.';
$lang['admin_themes_enable_confirm'] = 'Naozaj chcete aktivovať tému: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nepodarilo sa aktivovať tému.';
$lang['admin_themes_enable_success'] = 'Téma bola úspešne aktivovaná.';
$lang['admin_themes_install_confirm'] = 'Naozaj chcete nainštalovať túto tému?';
$lang['admin_themes_install_error'] = 'Inštalácia témy zlyhala.';
$lang['admin_themes_install_success'] = 'Téma bola úspešne nainštalovaná.';
$lang['admin_themes_install_tip'] = 'Témy menia vzhľad a rozloženie vašej stránky. Vyberte z <a href="%s" target="_blank" rel="noopener">knižnice tém</a> alebo nahrajte <b>.zip</b> súbor na inštaláciu vlastnej.';
$lang['admin_themes_none_tip'] = 'Táto aplikácia beží bez motívu. Nainštalujte motív, aby ste prispôsobili verejné rozhranie.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Nepodarilo sa aktualizovať umiestnenia menu.';
$lang['admin_menus_assign_success'] = 'Umiestnenia menu boli úspešne aktualizované.';
$lang['admin_menus_header'] = 'K dispozícii je <b>%s</b> umiestnení menu.';
$lang['admin_menus_location'] = 'Umiestnenie';
$lang['admin_menus_locations'] = 'Umiestnenia menu';
$lang['admin_menus_manage'] = 'Spravovať menu';
$lang['admin_menus_menu'] = 'Priradené menu';
$lang['admin_menus_none'] = '&#151; Žiadne &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Pridať jazyk';
$lang['admin_languages_default_confirm'] = 'Naozaj chcete urobiť tento jazyk predvoleným jazykom stránky?';
$lang['admin_languages_default_error'] = 'Nepodarilo sa zmeniť predvolený jazyk.';
$lang['admin_languages_default_error_nochange'] = 'Tento jazyk je už predvolený.';
$lang['admin_languages_default_success'] = 'Predvolený jazyk bol úspešne zmenený.';
$lang['admin_languages_disable_all_confirm'] = 'Naozaj chcete deaktivovať všetky jazyky?';
$lang['admin_languages_disable_all_error'] = 'Nepodarilo sa deaktivovať všetky jazyky.';
$lang['admin_languages_disable_all_success'] = 'Všetky jazyky boli úspešne deaktivované.';
$lang['admin_languages_disable_confirm'] = 'Naozaj chcete deaktivovať jazyk: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nepodarilo sa deaktivovať jazyk.';
$lang['admin_languages_disable_error_default'] = 'Predvolený jazyk nie je možné deaktivovať.';
$lang['admin_languages_disable_error_nochange'] = 'Tento jazyk je už deaktivovaný.';
$lang['admin_languages_disable_success'] = 'Jazyk bol úspešne deaktivovaný.';
$lang['admin_languages_enable_all_confirm'] = 'Naozaj chcete aktivovať všetky jazyky?';
$lang['admin_languages_enable_all_error'] = 'Nepodarilo sa aktivovať všetky jazyky.';
$lang['admin_languages_enable_all_success'] = 'Všetky jazyky boli úspešne aktivované.';
$lang['admin_languages_enable_confirm'] = 'Naozaj chcete aktivovať jazyk: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nepodarilo sa aktivovať jazyk.';
$lang['admin_languages_enable_error_nochange'] = 'Tento jazyk je už aktivovaný.';
$lang['admin_languages_enable_success'] = 'Jazyk bol úspešne aktivovaný.';
$lang['admin_languages_install_confirm'] = 'Naozaj chcete nainštalovať tento jazyk?';
$lang['admin_languages_install_error'] = 'Inštalácia jazyka zlyhala.';
$lang['admin_languages_install_success'] = 'Jazyk bol úspešne nainštalovaný.';
$lang['admin_languages_install_tip'] = 'Jazyky pridávajú preklady pre rozhranie a obsah vašej stránky. Prezrite si dostupné jazyky v <a href="%s" target="_blank" rel="noopener">adresári jazykov</a> alebo nahrajte balík <b>.zip</b> a nainštalujte si vlastný.';
$lang['admin_languages_tip'] = 'Aktivujte, deaktivujte a nastavte predvolený jazyk stránky. Aktivované jazyky sú dostupné návštevníkom stránky.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Balík už existuje.';
$lang['package_archive_download_failed'] = 'Nepodarilo sa stiahnuť archív balíka.';
$lang['package_backup_create_error'] = 'Nepodarilo sa vytvoriť zálohu balíka.';
$lang['package_backup_dir_failed'] = 'Nepodarilo sa vytvoriť záložný adresár %s';
$lang['package_backup_missing'] = 'Záložný súbor neexistuje.';
$lang['package_backup_path_error'] = 'Cestu k záložnému súboru sa nepodarilo vyriešiť.';
$lang['package_backup_request_invalid'] = 'Neplatná požiadavka na zálohu.';
$lang['package_backup_restore_error'] = 'Nepodarilo sa obnoviť zálohu balíka.';
$lang['package_catalog_type_unknown'] = 'Neznámy typ katalógu.';
$lang['package_checksum_error'] = 'Overenie kontrolného súčtu (checksum) balíka zlyhalo.';
$lang['package_copy_files_error'] = 'Nepodarilo sa skopírovať súbory balíka do cieľa.';
$lang['package_copy_updates_error'] = 'Nepodarilo sa skopírovať aktualizačné súbory do cieľa.';
$lang['package_dest_dir_failed'] = 'Nepodarilo sa vytvoriť cieľový adresár %s';
$lang['package_destination_error'] = 'Cieľ balíka sa nepodarilo vyriešiť.';
$lang['package_download_dir_failed'] = 'Nepodarilo sa vytvoriť adresár na sťahovanie %s';
$lang['package_download_empty'] = 'Stiahnutie balíka vrátilo prázdnu odpoveď.';
$lang['package_download_request_invalid'] = 'Neplatná požiadavka na stiahnutie balíka.';
$lang['package_extract_failed'] = 'Nepodarilo sa rozbaliť ZIP %s';
$lang['package_invalid_lang_files'] = 'Neplatný jazyk — chýbajú požadované jazykové súbory aplikácie.';
$lang['package_invalid_lang_structure'] = 'Neplatný jazyk — chýbajú adresáre admin a/alebo ci3.';
$lang['package_invalid_missing_info'] = 'Neplatný %s: chýba „info.php“.';
$lang['package_invalid_module_structure'] = 'Neplatný modul — chýbajú požadované adresáre config a/alebo controllers.';
$lang['package_invalid_plugin_boot'] = 'Neplatný plugin — chýba "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Neplatný plugin — pluginy nesmú obsahovať kontroléry ani pohľady (views).';
$lang['package_invalid_theme_boot'] = 'Neplatná téma — chýba "boot.php".';
$lang['package_invalid_theme_views'] = 'Neplatná téma — chýba adresár views.';
$lang['package_no_root_dir'] = 'Balík neobsahuje koreňový adresár.';
$lang['package_not_downloadable'] = 'Balík nie je verejne stiahnuteľný.';
$lang['package_not_in_registry'] = 'Balík nie je k dispozícii vo verejnom registri.';
$lang['package_request_invalid'] = 'Neplatná požiadavka na balík.';
$lang['package_rollback_request_invalid'] = 'Neplatná požiadavka na vrátenie zmien (rollback).';
$lang['package_root_mismatch'] = 'Koreňový adresár archívu balíka nezodpovedá %s';
$lang['package_single_root_required'] = 'Balík musí obsahovať presne jeden koreňový adresár.';
$lang['package_source_error'] = 'Zdroj balíka sa nepodarilo vyriešiť.';
$lang['package_system_core_restricted'] = 'Systémové komponenty nie je možné inštalovať ako balíky.';
$lang['package_temp_dir_failed'] = 'Nepodarilo sa vytvoriť dočasný adresár %s';
$lang['package_type_unknown'] = 'Neznámy typ balíka.';
$lang['package_update_request_invalid'] = 'Neplatná požiadavka na aktualizáciu balíka.';
$lang['package_update_root_mismatch'] = 'Koreňový adresár archívu aktualizácie nezodpovedá %s.';
$lang['package_upload_dir_failed'] = 'Nepodarilo sa vytvoriť adresár na nahrávanie %s';
$lang['package_url_invalid'] = 'Neplatná adresa URL distribúcie balíka.';
$lang['package_write_failed'] = 'Nepodarilo sa zapísať balík do %s';
$lang['package_zip_not_found'] = 'ZIP balík neexistuje: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nové aktualizácie sú k dispozícii!';
$lang['update_backup_error'] = 'Nepodarilo sa vytvoriť zálohu existujúceho balíka. Aktualizácia bola prerušená.';
$lang['update_check_disabled'] = 'Automatické kontroly aktualizácií sú zakázané. Povoľte ich na zobrazenie aktualizácií.';
$lang['update_check_error'] = 'Kontrolu aktualizácií nie je možné spustiť v tejto chvíli.';
$lang['update_check_success'] = 'Kontrola aktualizácií úspešne dokončená.';
$lang['update_install_error'] = 'Balík sa nepodarilo nainštalovať. Predchádzajúca verzia bola zachovaná.';
$lang['update_install_success'] = 'Balík bol úspešne aktualizovaný na najnovšiu verziu.';
$lang['update_interval_3days'] = 'Každé 3 dni';
$lang['update_interval_biweekly'] = 'Každé 2 týždne';
$lang['update_interval_daily'] = 'Každý deň';
$lang['update_interval_monthly'] = 'Raz za mesiac';
$lang['update_interval_weekly'] = 'Raz za týždeň';
$lang['update_not_available'] = 'Vaša webová stránka je aktuálna.';
$lang['update_rollback_error'] = 'Nepodarilo sa obnoviť predchádzajúcu verziu. Môže byť potrebný manuálny zásah.';
$lang['update_rollback_success'] = 'Predchádzajúca verzia bola úspešne obnovená.';
$lang['updates_available'] = 'Dostupné aktualizácie';
$lang['updates_check_now'] = 'Skontrolovať teraz';
$lang['updates_check_now_confirm'] = 'Ste si istí, že chcete skontrolovať aktualizácie teraz?';
$lang['updates_current_version'] = 'Aktuálna verzia';
$lang['updates_enable'] = 'Povoliť aktualizácie';
$lang['updates_last_check'] = 'Posledná kontrola: %s';
$lang['updates_latest_version'] = 'Najnovšia verzia';
$lang['updates_next_check'] = 'Ďalšia naplánovaná kontrola: %s';
$lang['updates_previous_version'] = 'Predchádzajúca verzia';
$lang['updates_recent'] = 'Nedávno aktualizované';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Zablokovanie zadanej IP adresy zlyhalo.';
$lang['admin_firewall_ban_success'] = 'IP adresa bola úspešne zablokovaná.';
$lang['admin_firewall_block_ip'] = 'Zablokovať IP adresu';
$lang['admin_firewall_delete_confirm'] = 'Naozaj chcete odblokovať vybrané IP adresy?';
$lang['admin_firewall_delete_error'] = 'Odblokovanie vybraných IP adries zlyhalo.';
$lang['admin_firewall_delete_success'] = 'Vybrané IP adresy boli úspešne odblokované.';
$lang['admin_firewall_duration'] = 'Trvanie zákazu';
$lang['admin_firewall_permanent'] = 'Trvalý';
$lang['admin_firewall_reason'] = 'Dôvod zákazu';
$lang['admin_firewall_tip'] = 'Prehliadajte a spravujte IP adresy zablokované firewallem kvôli opakovaným priestupkom alebo podozrivej aktivite.';

// Settings
$lang['404_ban_duration'] = 'Trvanie blokovania 404';
$lang['404_threshold'] = 'Limit 404';
$lang['uri_ban_duration'] = 'Trvanie blokovania URI';
$lang['uri_strike_threshold'] = 'Limit URI';
