<?php

namespace App\Twill\Capsules\Enquiries\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class EnquiryRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
