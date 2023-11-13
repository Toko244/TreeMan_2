<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <center>
                <div class="user-box">
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end" style="color: white;">
                        <span>{{ auth()->user()->name }}</span>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true" style="">
                        <div class="menu-item px-5">
                            <a href="/{{ app()->getLocale() }}/admin/profile"
                                class="menu-link-2 px-5">{{ trans('admin.my_account') }}</a>
                        </div>
                        <div class="menu-item px-5">
                            <a href="{{ route('logout', app()->getLocale()) }}"
                                class="menu-link-2 px-5">{{ trans('admin.logout') }}</a>
                        </div>
                    </div>
                    <p class="text-muted">{{ trans('admin.'.auth()->user()->type ) }}</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('logout', app()->getLocale()) }}" class="text-custom">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </center>
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">{{ trans('admin.website') }}</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <a href="/{{ app()->getLocale() }}/admin/submissions">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-envelope-open"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.submissions') }}</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <a href="/{{ app()->getLocale() }}/admin/sections">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-bars"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.sections') }}</span>
                    </a>
                </div>
                @if (auth()->user()->isType('admin'))
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <a href="/{{ app()->getLocale() }}/admin/languages/edit">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-language"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.languages') }}</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                    <!--begin:Menu link-->
                    <a href="/{{ app()->getLocale() }}/admin/settings/edit">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-gear"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.settings') }}</span>
                    </a>
                </div>
                @endif

                @if (auth()->user()->isType('superuser'))
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">{{ trans('admin.cms') }}</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <a href="/{{ app()->getLocale() }}/admin/users">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-user"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.users') }}</span>
                    </a>
                </div>
                @endif

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <a href="/{{ app()->getLocale() }}/admin/subscribers">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-solid fa-users"></i>
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ trans('admin.subscribers') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
