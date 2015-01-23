<?php

namespace Omnipay\Payflow\Message;

/**
 * Payflow Void Request
 */
class VoidRequest extends AuthorizeRequest
{
    protected $action = 'V';

    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();

        $data['TENDER'] = 'C';
        $data['ORIGID'] = $this->getTransactionReference();

        return $data;
    }
}
