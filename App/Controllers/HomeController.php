<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class HomeController
 * Handles actions related to the shelter application pages.
 *
 * This controller includes actions that are accessible to all users, including a landing page and an adoption
 * page.
 *
 * @package App\Controllers
 */
class HomeController extends BaseController
{
    /**
     * Authorizes controller actions based on the specified action name.
     *
     * In this implementation, all actions are authorized unconditionally.
     *
     * @param string $action The action name to authorize.
     * @return bool Returns true, allowing all actions.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Displays the landing page of the shelter.
     *
     * @return Response The response object containing the rendered HTML for the landing page.
     */
    public function index(Request $request): Response
    {
        return $this->html();
    }

    /**
     * Displays the adoption page.
     *
     * @return Response The response object containing the rendered HTML for the adoption page.
     */
    public function adopcie(Request $request): Response
    {
        return $this->html();
    }
}
