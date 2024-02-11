<?php

namespace TomatoPHP\TomatoContracts\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class ContractController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \TomatoPHP\TomatoContracts\Models\Contract::class;
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
            view: 'tomato-contracts::contracts.index',
            table: \TomatoPHP\TomatoContracts\Tables\ContractTable::class
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
            model: \TomatoPHP\TomatoContracts\Models\Contract::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-contracts::contracts.create',
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
            model: \TomatoPHP\TomatoContracts\Models\Contract::class,
            validation: [
                            'user_id' => 'required|exists:users,id',
            'contract_template_id' => 'required|exists:contract_templates,id',
            'account_id' => 'nullable|exists:accounts,id',
            'employee_id' => 'nullable|exists:employees,id',
            'project_id' => 'nullable|exists:projects,id',
            'country_id' => 'nullable|exists:countries,id',
            'city_id' => 'nullable|exists:cities,id',
            'area_id' => 'nullable|exists:areas,id',
            'currency_id' => 'nullable|exists:currencies,id',
            'approved_by_id' => 'nullable|exists:users,id',
            'is_active' => 'nullable',
            'is_completed' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'notes' => 'nullable',
            'is_approved' => 'nullable'
            ],
            message: __('Contract updated successfully'),
            redirect: 'admin.contracts.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\Contract $model
     * @return View|JsonResponse
     */
    public function show(\TomatoPHP\TomatoContracts\Models\Contract $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-contracts::contracts.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\Contract $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoContracts\Models\Contract $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-contracts::contracts.edit',
        );
    }

    /**
     * @param Request $request
     * @param \TomatoPHP\TomatoContracts\Models\Contract $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \TomatoPHP\TomatoContracts\Models\Contract $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'user_id' => 'sometimes|exists:users,id',
            'contract_template_id' => 'sometimes|exists:contract_templates,id',
            'account_id' => 'nullable|exists:accounts,id',
            'employee_id' => 'nullable|exists:employees,id',
            'project_id' => 'nullable|exists:projects,id',
            'country_id' => 'nullable|exists:countries,id',
            'city_id' => 'nullable|exists:cities,id',
            'area_id' => 'nullable|exists:areas,id',
            'currency_id' => 'nullable|exists:currencies,id',
            'approved_by_id' => 'nullable|exists:users,id',
            'is_active' => 'nullable',
            'is_completed' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'notes' => 'nullable',
            'is_approved' => 'nullable'
            ],
            message: __('Contract updated successfully'),
            redirect: 'admin.contracts.index',
        );

         if($response instanceof JsonResponse){
             return $response;
         }

         return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoContracts\Models\Contract $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\TomatoPHP\TomatoContracts\Models\Contract $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('Contract deleted successfully'),
            redirect: 'admin.contracts.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }
}
