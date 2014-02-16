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
  'id'           => 'barzahlen',
  'title'        => 'Barzahlen',
  'description'  => array(
    'de' => 'Barzahlen bietet Ihren Kunden die Möglichkeit, online bar zu bezahlen. Sie werden in Echtzeit über die Zahlung benachrichtigt und profitieren von voller Zahlungsgarantie und neuen Kundengruppen. Sehen Sie wie Barzahlen funktioniert: <a href="http://www.barzahlen.de/partner/funktionsweise" target="_blank" style="color: #63A924;">http://www.barzahlen.de/partner/funktionsweise</a>',
    'en' => 'Barzahlen let\'s your customers pay cash online. You get a payment confirmation in real-time and you benefit from our payment guarantee and new customer groups. See how Barzahlen works: <a href="http://www.barzahlen.de/partner/funktionsweise" target="_blank" style="color: #63A924;">http://www.barzahlen.de/partner/funktionsweise</a>'
  ),
  'lang' => 'de',
  'thumbnail'    => 'barzahlen-logo.png',
  'version'      => '1.1.1',
  'author'       => 'Zerebro Internet GmbH',
  'url'          => 'http://www.barzahlen.de',
  'email'        => 'support@barzahlen.de',
  'extend'       => array(
    'payment'          => 'barzahlen/views/barzahlen_payment',
    'thankyou'         => 'barzahlen/views/barzahlen_thankyou',
    'oxpaymentgateway' => 'barzahlen/core/barzahlen_payment_gateway'
  ),
  'files' => array(
    'barzahlen_callback' => 'barzahlen/views/barzahlen_callback.php',
    'barzahlen_settings' => 'barzahlen/views/barzahlen_settings.php',
    'barzahlen_transactions' => 'barzahlen/views/barzahlen_transactions.php'
  ),
  'blocks' => array(
    array('template' => 'page/checkout/payment.tpl',  'block' => 'select_payment',          'file' => 'page/checkout/payment/select_payment'),
    array('template' => 'page/checkout/payment.tpl',  'block' => 'checkout_payment_errors', 'file' => 'page/checkout/payment/checkout_payment_errors'),
    array('template' => 'page/checkout/thankyou.tpl', 'block' => 'checkout_thankyou_info',  'file' => 'page/checkout/thankyou/checkout_thankyou_info')
  ),
  'settings' => array(
    array('group' => 'main', 'name' => 'sandbox',         'type' => 'bool', 'value' => 'false'),
    array('group' => 'main', 'name' => 'shopId',          'type' => 'str',  'value' => ''),
    array('group' => 'main', 'name' => 'paymentKey',      'type' => 'str',  'value' => ''),
    array('group' => 'main', 'name' => 'notificationKey', 'type' => 'str',  'value' => ''),
    array('group' => 'main', 'name' => 'debug',           'type' => 'bool', 'value' => 'false')
  ),
  'templates' => array(
    'barzahlen_settings.tpl' => 'barzahlen/out/admin/tpl/barzahlen_settings.tpl',
    'barzahlen_transactions.tpl' => 'barzahlen/out/admin/tpl/barzahlen_transactions.tpl'
  )
);