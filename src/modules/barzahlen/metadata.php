<?php
/**
 * Barzahlen Payment Module (OXID eShop)
 *
 * NOTICE OF LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 of the License
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses/
 *
 * @copyright   Copyright (c) 2012 Zerebro Internet GmbH (http://www.barzahlen.de)
 * @author      Alexander Diebler
 * @license     http://opensource.org/licenses/GPL-3.0  GNU General Public License, version 3 (GPL-3.0)
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'barzahlen',
    'title' => 'Barzahlen',
    'description' => array(
        'de' => 'Barzahlen bietet Ihren Kunden die M&ouml;glichkeit, online bar zu bezahlen. Sie werden in Echtzeit &uuml;ber die Zahlung benachrichtigt und profitieren von voller Zahlungsgarantie und neuen Kundengruppen. Sehen Sie wie Barzahlen funktioniert: <a href="https://www.barzahlen.de/de/partner/funktionsweise" target="_blank" style="color: #60AC30;">https://www.barzahlen.de/de/partner/funktionsweise</a><br>
                <table>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_registrieren.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://partner.barzahlen.de/user/register/" style="color: #60AC30;" target="_blank">Noch nicht registriert?</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_handbuch.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://integration.barzahlen.de/de/shopsysteme/oxid/nutzerhandbuch-46" style="color: #60AC30;" target="_blank">Handbuch zur Integration</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_conversion.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://integration.barzahlen.de/assets/downloads/Integrationsleitfaden Barzahlen.de.pdf" style="color: #60AC30;" target="_blank">Conversion Optimierung</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_email.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="mailto:integration@barzahlen.de" style="color: #60AC30;">integration@barzahlen.de</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_telephone.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td>+49 (0)30 / 346 46 16 - 15</td>
                  </tr>
                </table>',
        'en' => 'Barzahlen let\'s your customers pay cash online. You get a payment confirmation in real-time and you benefit from our payment guarantee and new customer groups. See how Barzahlen works: <a href="https://www.barzahlen.de/en/partner/the-way-it-works" target="_blank" style="color: #60AC30;">https://www.barzahlen.de/en/partner/the-way-it-works</a><br>
                <table>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_registrieren.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://partner.barzahlen.de/user/register/" style="color: #60AC30;" target="_blank">Not yet registered?</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_handbuch.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://integration.barzahlen.de/en/shopsystems/oxid/user-manual-46" style="color: #60AC30;" target="_blank">User Manual</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_conversion.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="https://integration.barzahlen.de/assets/downloads/Integrationsleitfaden Barzahlen.de.pdf" style="color: #60AC30;" target="_blank">Conversion Optimization</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_email.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td><a href="mailto:integration@barzahlen.de" style="color: #60AC30;">integration@barzahlen.de</a></td>
                  </tr>
                  <tr>
                    <td><img src="https://integration.barzahlen.de/assets/img/tmp/icon_telephone.png" alt="" style="max-width: 16px; max-height: 16px;"></td>
                    <td>+49 (0)30 / 346 46 16 - 15</td>
                  </tr>
                </table>'
    ),
    'lang' => 'de',
    'thumbnail' => 'barzahlen-logo.png',
    'version' => '1.2.0',
    'author' => 'Cash Payment Solutions GmbH',
    'url' => 'https://www.barzahlen.de',
    'email' => 'support@barzahlen.de',
    'extend' => array(
        'payment'          => 'barzahlen/views/barzahlen_payment',
        'thankyou'         => 'barzahlen/views/barzahlen_thankyou',
        'oxpaymentgateway' => 'barzahlen/core/barzahlen_payment_gateway',
        'oxorder'          => 'barzahlen/core/barzahlen_order',
        'navigation'       => 'barzahlen/core/barzahlen_navigation'
    ),
    'files' => array(
        'barzahlen_callback'     => 'barzahlen/views/barzahlen_callback.php',
        'barzahlen_settings'     => 'barzahlen/views/barzahlen_settings.php',
        'barzahlen_transactions' => 'barzahlen/views/barzahlen_transactions.php'
    ),
    'blocks' => array(
        array('template' => 'page/checkout/payment.tpl',  'block' => 'select_payment',          'file' => 'page/checkout/payment/select_payment'),
        array('template' => 'page/checkout/payment.tpl',  'block' => 'checkout_payment_errors', 'file' => 'page/checkout/payment/checkout_payment_errors'),
        array('template' => 'page/checkout/thankyou.tpl', 'block' => 'checkout_thankyou_info',  'file' => 'page/checkout/thankyou/checkout_thankyou_info')
    ),
    'settings' => array(
        array('group' => 'bzSettings', 'name' => 'bzSandbox',         'type' => 'bool', 'value' => 'false'),
        array('group' => 'bzSettings', 'name' => 'bzShopId',          'type' => 'str',  'value' => ''),
        array('group' => 'bzSettings', 'name' => 'bzPaymentKey',      'type' => 'str',  'value' => ''),
        array('group' => 'bzSettings', 'name' => 'bzNotificationKey', 'type' => 'str',  'value' => ''),
        array('group' => 'bzSettings', 'name' => 'bzDebug',           'type' => 'bool', 'value' => 'false')
    ),
    'templates' => array(
        'barzahlen_settings.tpl' => 'barzahlen/out/admin/tpl/barzahlen_settings.tpl',
        'barzahlen_transactions.tpl' => 'barzahlen/out/admin/tpl/barzahlen_transactions.tpl'
    )
);