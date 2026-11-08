<?php

namespace App\Controllers;

use App\Models\Animal;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class AnimalController
 * Handles CRUD operations for animals in the shelter.
 *
 * @package App\Controllers
 */
class AnimalController extends BaseController
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
     * Displays all animals.
     *
     * @return Response The response object containing the rendered list of animals.
     */
    public function index(Request $request): Response
    {
        return $this->html(['animals' => Animal::getAll()]);
    }

    /**
     * Displays the form for adding a new animal.
     *
     * @return Response The response object containing the rendered form.
     */
    public function add(Request $request): Response
    {
        return $this->html(['animal' => new Animal()]);
    }

    /**
     * Displays the form for editing an existing animal.
     *
     * @return Response The response object containing the rendered form filled with the animal data.
     * @throws HttpException If the animal does not exist.
     */
    public function edit(Request $request): Response
    {
        return $this->html(['animal' => $this->findAnimal($request)]);
    }

    /**
     * Saves a new or an edited animal and redirects to the list of animals.
     *
     * @return Response The redirect response to the list of animals.
     * @throws HttpException If the edited animal does not exist or the request is not POST.
     */
    public function save(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }
        $animal = (int)$request->value('id') > 0 ? $this->findAnimal($request) : new Animal();
        $animal->setFromRequest($request);
        $animal->save();

        return $this->redirect($this->url('animal.index'));
    }

    /**
     * Deletes an animal and redirects to the list of animals.
     *
     * @return Response The redirect response to the list of animals.
     * @throws HttpException If the animal does not exist or the request is not POST.
     */
    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }
        $this->findAnimal($request)->delete();

        return $this->redirect($this->url('animal.index'));
    }

    /**
     * Loads the animal identified by the `id` request parameter.
     *
     * @throws HttpException If the animal does not exist.
     */
    private function findAnimal(Request $request): Animal
    {
        $animal = Animal::getOne((int)$request->value('id'));
        if ($animal === null) {
            throw new HttpException(404, 'Zviera neexistuje.');
        }
        return $animal;
    }
}
