<li class="label-menu">
    SYSTEM MANAGEMENT
</li>

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::CURRENCY_VIEW, null, false) || has_permission(App\Repositories\Permission\Helpers\PermissionConstant::LANGUAGE_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'web-config' ? 'active' : ''}}">
    <a href="{{route('administrator.system.websiteConfig')}}" class="">
        <span class="menu-icon"><i data-feather="monitor"></i></span>
        <span class="menu-title">Website Config</span>
    </a>
</li>
@endif

<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'notification' ? 'active' : ''}}">
    <a href="{{route('administrator.system.notification')}}" class="">
        <span class="menu-icon"><i data-feather="bell"></i></span>
        <span class="menu-title">Notification Config</span>
    </a>
</li>

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::STAFF_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'staff' ? 'active' : ''}}">
    <a href="{{route('administrator.system.staff')}}" class="">
        <span class="menu-icon"><i data-feather="user"></i></span>
        <span class="menu-title">Staff Config</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::GENERAL_CONFIG_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'general-config' ? 'active' : ''}}">
    <a href="{{route('administrator.system.generalConfig')}}" class="">
        <span class="menu-icon"><i data-feather="settings"></i></span>
        <span class="menu-title">General Config</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PLATFORM_CONFIGURATION_VIEW, null, false))
    <li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'platform-config' ? 'active' : ''}}">
        <a href="{{route('administrator.system.platformConfig')}}" class="">
            <span class="menu-icon"><i data-feather="tablet"></i></span>
            <span class="menu-title">Platform Config</span>
        </a>
    </li>
@endif
