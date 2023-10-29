<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API  de Gerardo Alfredo Espinoza Portillo",
 *      description="API de ejemplo para la clase de Desarrollo de BackEnd y APIs",
 *      @OA\Contact(
 *          email="gerardoaespinoza15@gmail.com",
 *          name="Gerardo Alfredo Espinoza Portillo",
 *          url="https://localhost/api/"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 */


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
