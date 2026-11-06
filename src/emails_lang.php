<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systémové aktualizácie k dispozícii';
$lang['emails_updates_available_message'] = <<<EOT
Dobrý deň,

boli zistené nové aktualizácie systému pre {site_anchor}.

Tieto aktualizácie môžu obsahovať opravy zabezpečenia, vylepšenia výkonu alebo nové funkcie.
Odporúčame ich čo najskôr skontrolovať.

Dostupné aktualizácie môžete skontrolovať a spravovať v administrátorskom paneli:
{link}

Ak ste aktualizácie už skontrolovali alebo nainštalovali, nie je potrebné vykonávať žiadne ďalšie kroky.

Toto je automatická systémová správa odoslaná {site_name}.
Na tento e-mail neodpovedajte.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktivácia účtu';
$lang['emails_account_activation_request_message'] = <<<EOT
Dobrý deň {name},

Ďakujeme za registráciu na {site_anchor}. Váš účet bol vytvorený a musí byť aktivovaný, ako ho začnete používať.

Ak chcete aktivovať svoj účet, kliknite na nasledujúci odkaz alebo ho skopírujte a vložte do svojho prehliadača:
{link}

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nový aktivačný odkaz';
$lang['emails_account_activation_resend_message'] = <<<EOT
Dobrý deň {name},

Nedávno ste si vyžiadali nový aktivačný odkaz na {site_anchor}, pretože váš účet nebol aktívny.
Ak chcete aktivovať svoj účet, kliknite na nasledujúci odkaz alebo ho skopírujte a vložte do svojho prehliadača:
{link}

Ak ste to nevyžiadali, nie je potrebné ďalšie konanie.

Táto akcia bola vyžiadaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Účet aktivovaný';
$lang['emails_account_activation_success_message'] = <<<EOT
Dobrý deň {name},

Váš účet na {site_anchor} bol úspešne aktivovaný. Teraz sa môžete kedykoľvek <a href="{login_url}" target="_blank" rel="noopener">prihlásiť</a>.

Dúfame, že si pobyt užijete, prijmite naše srdečné pozdravy.

-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Účet čaká na schválenie';
$lang['emails_account_approval_pending_message'] = <<<EOT
Dobrý deň, {name},

Ďakujeme, že ste sa k nám pripojili na {site_anchor}. Váš účet bol vytvorený, ale pred aktiváciou vyžaduje schválenie administrátorom.
Ospravedlňujeme sa za tento kľúčový krok, ale je to len z bezpečnostných dôvodov.

Až bude váš účet schválený, dostanete potvrdzovací e-mail.

Dúfame, že si váš pobyt užijete. Prosím, prijmite naše srdečné pozdravy.

-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Účet schválený';
$lang['emails_account_approval_success_message'] = <<<EOT
Dobrý deň, {name},

Skvelé správy! Váš účet na {site_anchor} bol práve schválený.

Teraz sa môžete prihlásiť a okamžite začať používať svoj účet:
{link}

Sme radi, že ste s nami.

-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Účet obnovený';
$lang['emails_account_restored_message'] = <<<EOT
Dobrý deň, {name},

Tento e-mail potvrdzuje, že váš účet na {site_anchor} bol úspešne obnovený.

Vitajte späť a dúfame, že si tento váš pobyt užijete.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Vitajte na {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Dobrý deň, {name},

Väčšina ľudí má po registrácii na ich stránke naozaj dlhé uvítacie e-mailové sekvencie.

Dobrá správa: my nie sme ako väčšina ľudí.
Ale napriek tomu vás chceme privítať a poďakovať, že ste sa k nám pripojili na {site_anchor}.

Dúfame, že si váš pobyt užijete. Prosím, prijmite naše srdečné pozdravy.

-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Žiadosť o zmenu e-mailu';
$lang['emails_email_change_request_message'] = <<<EOT
Dobrý deň, {name},

Tento e-mail ste dostali, pretože sme obdržali žiadosť o zmenu e-mailovej adresy pre váš účet na {site_anchor}.

Ak si prajete pokračovať, kliknite na nasledujúci odkaz alebo ho skopírujte a vložte do svojho prehliadača:
{link}

Ak ste nežiadali o zmenu e-mailovej adresy, nie je potrebné vykonať žiadne ďalšie kroky.

Táto akcia bola vyžiadaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-mailová adresa zmenená';
$lang['emails_email_change_success_message'] = <<<EOT
Dobrý deň, {name},

Tento e-mail potvrdzuje, že vaša e-mailová adresa používaná na {site_anchor} bola úspešne zmenená.

Ak ste nevykonali túto akciu, prosím, kontaktujte nás čo najskôr, aby sme vyriešili tento problém.

Táto akcia bola vykonaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Upozornenie na neúspešné prihlásenie';
$lang['emails_login_alert_failure_message'] = <<<EOT
Dobrý deň, {name},

Niekto nedávno použil nesprávne heslá, aby sa pokúsil prihlásiť do vášho {site_name} účtu.

Dátum servera: {date}
Zariadenie: {browser}, {platform}
IP adresa: {ip_link}

Ak toto neboli vy, nemajte obavy, ich pokus o prihlásenie nebol úspešný.

Ak toto boli vy a nepamätáte si heslo, kliknite na odkaz nižie na jeho obnovenie:
{reset_link}

Ak máte problémy s prihlásením do svojho účtu, kontaktujte náš tím alebo požiadajte o odkaz na prihlásenie jedným kliknutím.

-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Oznámenie o úspešnom prihlásení';
$lang['emails_login_alert_success_message'] = <<<EOT
Dobrý deň, {name},

Posielame vám tento e-mail po úspešnom prihlásení do vášho {site_name} účtu.

Dátum servera: {date}
Zariadenie: {browser}, {platform}
IP adresa: {ip_link}

Ak ste sa prihlásili vy, môžete tento e-mail bezpečne ignorovať.

Ak ste sa neprihlásili, okamžite si zmeňte heslo, aby ste si ochránili svoj účet.

Akékoľvek pomoc, kontaktujte náš podporný tím.

-- Tím {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Rýchly odkaz na prihlásenie';
$lang['emails_login_magic_link_message'] = <<<EOT
Dobrý deň, {name},

Požiadali ste o prihlásenie jedným kliknutím do svojho účtu na {site_anchor}.

Kliknite na odkaz nižie alebo ho skopírujte a vložte do svojho prehliadača a budete okamžite prihlásení:
{link}

Tento odkaz vyprší za 15 minút. Ak ste o to nežiadali, prosím, ignorujte tento e-mail.

Táto akcia bola vyžiadaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Dvojfaktorové overenie';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Dobrý deň, {name},

Váš dvojfaktorový autentifikačný kód je: <strong>{code}</strong>

Dvojfaktorovú autentifikáciu môžete kedykoľvek vypnúť v nastaveniach svojho účtu.

Táto akcia bola vykonaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Žiadosť o obnovenie hesla';
$lang['emails_password_change_request_message'] = <<<EOT
Dobrý deň, {name},

Tento e-mail ste dostali, pretože sme obdržali žiadosť o obnovenie hesla pre váš účet na {site_anchor}.

Ak si prajete pokračovať, kliknite na nasledujúci odkaz alebo ho skopírujte a vložte do svojho prehliadača:
{link}

Ak ste nežiadali o obnovenie hesla, nie je potrebné vykonať žiadne ďalšie kroky.

Táto žiadosť bola odoslaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Heslo bolo úspešne zmenené';
$lang['emails_password_change_success_message'] = <<<EOT
Dobrý deň, {name},

Tento e-mail potvrdzuje, že vaše heslo na {site_anchor} bolo úspešne zmenené. Teraz sa môžete <a href="{login_url}" target="_blank" rel="noopener">prihlásiť</a> pomocou nového hesla.

Ak ste nevykonali túto akciu, prosím, kontaktujte nás čo najskôr, aby sme vyriešili tento problém.

Táto akcia bola vykonaná z tejto IP adresy: {ip_link}.

S pozdravom,
-- Tím {site_name}.
EOT;
