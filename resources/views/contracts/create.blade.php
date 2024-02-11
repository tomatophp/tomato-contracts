<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.create')}} {{__('Contract')}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.contracts.store')}}" method="post">
        
          <x-splade-select :label="__('User id')" :placeholder="__('User id')" name="user_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Contract template id')" :placeholder="__('Contract template id')" name="contract_template_id" remote-url="/admin/contract_templates/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Account id')" :placeholder="__('Account id')" name="account_id" remote-url="/admin/accounts/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Employee id')" :placeholder="__('Employee id')" name="employee_id" remote-url="/admin/employees/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Project id')" :placeholder="__('Project id')" name="project_id" remote-url="/admin/projects/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Country id')" :placeholder="__('Country id')" name="country_id" remote-url="/admin/countries/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('City id')" :placeholder="__('City id')" name="city_id" remote-url="/admin/cities/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Area id')" :placeholder="__('Area id')" name="area_id" remote-url="/admin/areas/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Currency id')" :placeholder="__('Currency id')" name="currency_id" remote-url="/admin/currencies/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Approved by id')" :placeholder="__('Approved by id')" name="approved_by_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-checkbox :label="__('Is active')" name="is_active" label="Is active" />
          <x-splade-checkbox :label="__('Is completed')" name="is_completed" label="Is completed" />
          <x-splade-input :label="__('Date')" :placeholder="__('Date')" name="date" date />
          <x-splade-input :label="__('Time')" :placeholder="__('Time')" name="time" time="{ time_24hr: false }" />
          <x-tomato-admin-rich :label="__('Notes')" name="notes" :placeholder="__('Notes')" autosize />
          <x-splade-checkbox :label="__('Is approved')" name="is_approved" label="Is approved" />

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button secondary :href="route('admin.contracts.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
