<li class="label-menu pt-0">
    CONTENT MANAGEMENT
</li>
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == '' ? 'active' : ''}}">
    <a href="{{route('administrator.dashboard')}}" class="">
        <span class="menu-icon"><i data-feather="grid"></i></span>
        <span class="menu-title">Dashboard</span>
    </a>
</li>

<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'homepage' ? 'active' : ''}}">
    <a href="{{route('administrator.content.homepage')}}" class="">
        <span class="menu-icon"><i data-feather="home"></i></span>
        <span class="menu-title">Homepage</span>
    </a>
</li>

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::PAGE_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'page' ? 'active' : ''}}">
    <a href="{{route('administrator.content.pages')}}" class="">
        <span class="menu-icon"><i data-feather="layout"></i></span>
        <span class="menu-title">Pages</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::BLOG_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'blog' && request()->segment(3) != 'category' ? 'active' : ''}}">
    <a href="{{route('administrator.content.blogs')}}" class="">
        <span class="menu-icon"><i data-feather="book"></i></span>
        <span class="menu-title">Blogs</span>
    </a>
</li>
@endif

@if (has_permission(App\Repositories\Permission\Helpers\PermissionConstant::MENU_VIEW, null, false))
<li class="{{request()->segment(1) == 'administrator' && request()->segment(2) == 'menu' ? 'active' : ''}}">
    <a href="{{route('administrator.content.menu')}}" class="">
        <span class="menu-icon"><i data-feather="clipboard"></i></span>
        <span class="menu-title">Menus</span>
    </a>
</li>
@endif

