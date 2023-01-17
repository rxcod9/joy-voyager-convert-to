<?php

namespace Joy\VoyagerConvertTo\Http\Controllers;

use Joy\VoyagerConvertTo\Http\Traits\ConvertToAction;
use Joy\VoyagerCore\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class VoyagerBaseController extends BaseVoyagerBaseController
{
    use ConvertToAction;
}
