<?php

namespace App\Twill\Capsules\Enquiries\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Enquiries\Repositories\Behaviours\HandleEnquiries;
use App\Twill\Capsules\Enquiries\Models\Enquiry;

class EnquiryRepository extends ModuleRepository
{
    use HandleFiles;
    use HandleEnquiries;

    public function __construct(Enquiry $model)
    {
        $this->model = $model;
    }
}
