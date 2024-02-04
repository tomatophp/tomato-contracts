<?php

namespace App\Http\Controllers\Admin;

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
        $this->model = \App\Models\Contract::class;
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
            view: 'admin.contracts.index',
            table: \App\Tables\ContractTable::class
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
            model: \App\Models\Contract::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'admin.contracts.create',
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
            model: \App\Models\Contract::class,
            validation: [
                            'user_id' => 'required|exists:users,id',
            'approved_by_id' => 'nullable|exists:users,id',
            'account_id' => 'nullable|exists:accounts,id',
            'employee_id' => 'nullable|exists:users,id',
            'project_id' => 'nullable|exists:projects,id',
            'type' => 'required|max:255|string',
            'title' => 'nullable|max:255|string',
            'body' => 'nullable',
            'is_active' => 'nullable',
            'is_completed' => 'nullable',
            'is_approved' => 'nullable',
            'placeholders' => 'nullable'
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
     * @param \App\Models\Contract $model
     * @return View|JsonResponse
     */
    public function show(\App\Models\Contract $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'admin.contracts.show',
        );
    }

    /**
     * @param \App\Models\Contract $model
     * @return View
     */
    public function edit(\App\Models\Contract $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'admin.contracts.edit',
        );
    }

    /**
     * @param Request $request
     * @param \App\Models\Contract $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \App\Models\Contract $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'user_id' => 'sometimes|exists:users,id',
            'approved_by_id' => 'nullable|exists:users,id',
            'account_id' => 'nullable|exists:accounts,id',
            'employee_id' => 'nullable|exists:users,id',
            'project_id' => 'nullable|exists:projects,id',
            'type' => 'sometimes|max:255|string',
            'title' => 'nullable|max:255|string',
            'body' => 'nullable',
            'is_active' => 'nullable',
            'is_completed' => 'nullable',
            'is_approved' => 'nullable',
            'placeholders' => 'nullable'
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
     * @param \App\Models\Contract $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\App\Models\Contract $model): RedirectResponse|JsonResponse
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