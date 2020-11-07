<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


class Model_Invoice extends Box_Model
{
    const STATUS_PAID   = 'paid';
    const STATUS_UNPAID = 'unpaid';
    const STATUS_REFUNDED = 'refunded';
    const STATUS_CANCELED = 'canceled';
}