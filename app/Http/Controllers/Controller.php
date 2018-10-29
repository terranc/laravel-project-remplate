<?php

namespace App\Http\Controllers;

use App\Traits\JsonResponseTrait;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use JsonResponseTrait;

    public function __construct() {

    }
    protected function buildFailedValidationResponse(Request $request, array $errors) {
        return $this->error($errors);
    }
    public function phpinfo() {
        echo phpinfo();
        exit;
    }
}
