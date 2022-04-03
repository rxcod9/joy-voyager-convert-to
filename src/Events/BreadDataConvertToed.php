<?php

namespace Joy\VoyagerConvertTo\Events;

use Illuminate\Queue\SerializesModels;
use TCG\Voyager\Models\DataType;

class BreadDataConvertToed
{
    use SerializesModels;

    public $dataType;

    public $data;

    public function __construct(DataType $dataType, $data)
    {
        $this->dataType = $dataType;

        $this->data = $data;

        // event(new BreadDataChanged($dataType, $data, 'ConvertToed'));
    }
}
