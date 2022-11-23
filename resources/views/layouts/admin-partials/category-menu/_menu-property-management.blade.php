@if (
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_OTHER_ROOM_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_MANAGEMENT_FEE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_BUILDING_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_POOL_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_OTHER_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_CONSTRUCTION_COST_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_SUPPLY_COST_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_INVESTMENT_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_SALES_CALCULATION_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_AREA_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_EXPENSES_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::CONTACT_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::APPOINTMENT_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::CUSTOMER_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::SCHEDULE_VIEW, null, false)
)
<li class="label-menu">
    PROPERTY MANAGEMENT
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::CONTACT_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'contact' ? 'active' : ''}}">
    <a href="{{route('administrator.property.contact')}}" class="">
        <span class="menu-icon"><i data-feather="phone"></i></span>
        <span class="menu-title">Contact</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'property' ? 'active' : ''}}">
    <a href="{{route('administrator.property.property')}}" class="">
        <span class="menu-icon"><i data-feather="home"></i></span>
        <span class="menu-title">Property</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::APPOINTMENT_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'appointment' ? 'active' : ''}}">
    <a href="{{route('administrator.property.appointment')}}" class="">
        <span class="menu-icon"><i data-feather="clock"></i></span>
        <span class="menu-title">Appointment</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::CUSTOMER_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'customer' ? 'active' : ''}}">
    <a href="{{route('administrator.property.customer')}}" class="">
        <span class="menu-icon"><i data-feather="user-check"></i></span>
        <span class="menu-title">Customer</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::SCHEDULE_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'schedule' ? 'active' : ''}}">
    <a href="{{route('administrator.property.schedule')}}" class="">
        <span class="menu-icon"><i data-feather="calendar"></i></span>
        <span class="menu-title">Schedule</span>
    </a>
</li>
@endif

@if (
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_OTHER_ROOM_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_MANAGEMENT_FEE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_BUILDING_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_POOL_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_OTHER_TYPE_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_CONSTRUCTION_COST_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_SUPPLY_COST_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_INVESTMENT_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_SALES_CALCULATION_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_AREA_VIEW, null, false) ||
    has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PROPERTY_EXPENSES_VIEW, null, false)
)
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'property-config' ? 'active' : ''}}">
    <a href="{{route('administrator.property.config')}}" class="">
        <span class="menu-icon"><i data-feather="settings"></i></span>
        <span class="menu-title">Property Config</span>
    </a>
</li>
@endif
