<div class="navbar-custom">
    <button class="button-menu-mobile open-left" type="button" onclick="return settingSidebar()">
        <i data-feather="menu"></i>
    </button>

    <div class="dropdown d-block ml-2 Pd-lg-block">
        <h5 class="f-w-400 title-of-page">
            @yield('title-nav')
        </h5>
    </div>

    <ul class="list-unstyled topbar-menu d-flex align-items-center float-right mb-0 ml-auto mr-2">
{{--        <li class="dropdown  d-sm-block d-none">--}}
{{--            <button class="btn btn-primary-brand-blue dropdown-toggle hide-arrow" role="button" id="dropdownMenuCreate"--}}
{{--                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                <i data-feather="plus"></i> Create New--}}
{{--            </button>--}}

{{--            <div class="dropdown-menu topbar-dropdown-menu" aria-labelledby="dropdownMenuCreate">--}}
{{--                <a class="dropdown-item profile-item" href="{{route('administrator.property.contact')}}/add">--}}
{{--                    <span class="icon"><i data-feather="phone"></i> </span> Contact--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" onclick="return actionAddProperty()" href="#">--}}
{{--                    <span class="icon"><i data-feather="home"></i></span> Property--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" href="{{route('administrator.system.staff')}}/add">--}}
{{--                    <span class="icon"><i data-feather="user"></i></span> Staff Employee--}}
{{--                </a>--}}

{{--                <a class="dropdown-item profile-item" onclick="return actionAddCurrency()" href="#">--}}
{{--                    <span class="icon"><i data-feather="repeat"></i></span> Multi Currency--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" onclick="return actionAddLanguage()" href="#">--}}
{{--                    <span class="icon"><i data-feather="globe"></i></span> Multi Language--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <li class="dropdown ml-4 mr-4 d-sm-block d-none" id="read-notification">--}}
{{--            <a href="#" class="text-neutral-100 dropdown-toggle hide-arrow svg-28" role="button" id="dropdownMenuNotification"--}}
{{--               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                <i data-feather="bell"></i>--}}
{{--                <div class="badge header-bell-badge badge-tint-300 badge-new-notification"></div>--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu topbar-dropdown-menu mt-4"--}}
{{--                 style="width: 300px;"--}}
{{--                 id="global-notification"--}}
{{--                 aria-labelledby="dropdownMenuNotification">--}}
{{--                <a class="dropdown-item notify-item" href="{{route('administrator.profile')}}">--}}
{{--                    <i class="icon fa fa-user-circle"></i> Coming Soon!--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" onclick="return actionAddLanguage()" href="#">--}}
{{--                    <span class="icon"><i data-feather="globe"></i></span> Multi Language--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </li>--}}

        <li class="dropdown">
            <a class="align-items-center text-neutral-100 d-flex dropdown-toggle" data-toggle="dropdown"
               href="javascript:void(0);" role="button" id="dropdownMenuProfile"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="thumbnail-wrapper circular d32">
{{--                    <img src="{{('/images/avatar_small2x.jpeg')}}" alt="">--}}
                    <img src="https://ui-avatars.com/api/?name=Admin&background=000&color=fff" alt="">
{{--                    <img src="{{optional(profile())->photoUrl() ? optional(profile())->photoUrl() : '/images/avatar_small2x.jpeg'}}" alt="">--}}
                </div>

            </a>

            <div class="dropdown-menu topbar-dropdown-menu"
                 aria-labelledby="dropdownMenuProfile">
{{--                 <a class="dropdown-item profile-item">--}}
{{--                    <i></i> Version {{ ENV('APP_VERSION') }}--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" href="{{ENV('APP_WEBSITE_URL')}}" target="_blank">--}}
{{--                    <i class="icon fa fa-globe"></i> Go To Website--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" href="https://drive.google.com/file/d/19Kz-HgczUvr7oAvNmq81SveUoju-SGuC/view?usp=sharing" target="_blank">--}}
{{--                    <i class="icon fa fa-cloud-download"></i> VBM Property Apps--}}
{{--                </a>--}}
{{--                <a class="dropdown-item profile-item" href="{{route('administrator.profile')}}">--}}
{{--                    <i class="icon fa fa-user-circle"></i> My Profile--}}
{{--                </a>--}}
                <a class="dropdown-item profile-item" id="logout-btn"
                   href="javascript:void(0);">
                    <i class="icon fa fa-sign-out"></i> Log Out
                </a>
            </div>
        </li>
    </ul>
</div>

<form id="logout-form" class="d-none"
      action="{{route('logout')}}"
      method="post">
    {{csrf_field()}}
</form>

@push('child-page-controller')
<script>
    $(document).ready(function () {
        $('#logout-btn').on('click', function (e) {
            e.preventDefault();
            $('#logout-form').submit();
        });
    });

    function settingSidebar() {
        let isDesktop = window.matchMedia('(min-width: 1440px)').matches
        let isMobileSide = window.matchMedia('(max-width: 1024px)').matches

        if (isDesktop) {
            const elementBody = document.querySelector("body");
            const elementNavbar = document.querySelector(".navbar-custom");
            const elementContent = document.querySelector(".page-container");
            const classes = elementBody.classList;
            classes.toggle("body-wp-small");
            elementNavbar.classList.toggle("body-wp-small");
            elementContent.classList.toggle("body-wp-small");
        } else if (isMobileSide) {
            const bodyElement = document.querySelector('body');
            const overlay = document.querySelector('.overlay-sidebar');
            const elementSidebar = document.querySelector(".page-sidebar");
            overlay.classList.toggle('overlay-active')
            elementSidebar.classList.toggle('sidebar-full')
            bodyElement.classList.toggle('body-hide-overlay')
        }
    }

    function removeOverlay(){
        const bodyElement = document.querySelector('body');
        const overlayActive = document.querySelector('.overlay-sidebar.overlay-active');
        const elementSidebar = document.querySelector(".page-sidebar");
        overlayActive.classList.remove('overlay-active')
        elementSidebar.classList.remove('sidebar-full')
        bodyElement.classList.remove('body-hide-overlay')
    }
</script>
@endpush
