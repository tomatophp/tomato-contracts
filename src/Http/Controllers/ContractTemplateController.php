<?php

namespace TomatoPHP\TomatoContracts\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class ContractTemplateController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \TomatoPHP\TomatoContracts\Models\ContractTemplate::class;
    }

    /**
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
            view: 'tomato-contracts::contract-templates.index',
            table: \TomatoPHP\TomatoContracts\Tables\ContractTemplateTable::class
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \TomatoPHP\TomatoContracts\Models\ContractTemplate::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-contracts::contract-templates.create',
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoContracts\Models\ContractTemplate::class,
            validation: [
                            'name' => 'required|max:255|string',
            'body' => 'required',
            'placeholders' => 'nullable',
            'presets' => 'nullable'
            ],
            message: __('ContractTemplate updated successfully'),
            redirect: 'admin.contract-templates.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\ContractTemplate $model
     * @return View|JsonResponse
     */
    public function show(\TomatoPHP\TomatoContracts\Models\ContractTemplate $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-contracts::contract-templates.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\ContractTemplate $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoContracts\Models\ContractTemplate $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-contracts::contract-templates.edit',
        );
    }

    /**
     * @param Request $request
     * @param \TomatoPHP\TomatoContracts\Models\ContractTemplate $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \TomatoPHP\TomatoContracts\Models\ContractTemplate $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'name' => 'sometimes|max:255|string',
            'body' => 'sometimes',
            'placeholders' => 'nullable',
            'presets' => 'nullable'
            ],
            message: __('ContractTemplate updated successfully'),
            redirect: 'admin.contract-templates.index',
        );

         if($response instanceof JsonResponse){
             return $response;
         }

         return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\ContractTemplate $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\TomatoPHP\TomatoContracts\Models\ContractTemplate $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('ContractTemplate deleted successfully'),
            redirect: 'admin.contract-templates.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }
}
