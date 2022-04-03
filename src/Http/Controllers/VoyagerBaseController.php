<?php

namespace Joy\VoyagerConvertTo\Http\Controllers;

use Joy\VoyagerConvertTo\Http\Traits\ConvertToAction;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as TCGVoyagerBaseController;

class VoyagerBaseController extends TCGVoyagerBaseController
{
    use ConvertToAction;
}
