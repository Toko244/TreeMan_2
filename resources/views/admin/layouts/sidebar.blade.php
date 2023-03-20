<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">


    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">
                    {{ auth()->user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="/{{ app()->getLocale() }}/admin/profile" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>{{ trans('admin.my_account') }}</span>
                    </a>


                    <!-- item-->
                    <a href="{{ route('logout', app()->getLocale()) }}" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>{{ trans('admin.logout') }}</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">{{ trans('admin.'.auth()->user()->type ) }}</p>
            <ul class="list-inline">


                <li class="list-inline-item">
                    <a href="{{ route('logout', app()->getLocale()) }}" class="text-custom">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <li class="menu-title">{{ trans('admin.website') }}</li>
                <li>
                    <a  href="/{{ app()->getLocale() }}/admin/submissions">
                        <i class="mdi  noti-icon {{ count($notifications) > 0 ? 'mdi-email pos-rel' : 'mdi-email-open'  }}">
                            @if (count($notifications) > 0 )
                            <span class="badge badge-danger rounded-circle noti-icon-badge sidebar-badge">{{ count($notifications) }}</span>

                            @endif
                        </i>
                        <span > {{ trans('admin.submissions') }} </span>
                    </a>
                </li>
                <li>
                    <a href="/{{ app()->getLocale() }}/admin/sections">
                        <i class="mdi mdi-view-list"></i>
                        <span> {{ trans('admin.sections') }} </span>
                    </a>
                </li>

                @if (auth()->user()->isType('admin'))
                <li>
                    <a href="/{{ app()->getLocale() }}/admin/languages/edit">
                        <i class="fas fa-language"></i>
                        <span> {{ trans('admin.languages') }} </span>
                    </a>
                </li>
                <li>
                    <a href="/{{ app()->getLocale() }}/admin/settings/edit">
                        <i class="mdi mdi-settings"></i>
                        <span> {{ trans('admin.settings') }} </span>
                    </a>
                </li>

                @endif

                @if (auth()->user()->isType('superuser'))
                <li class="menu-title">{{ trans('admin.cms') }}</li>

                <li>
                    <a href="/{{ app()->getLocale() }}/admin/users">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> {{ trans('admin.users') }} </span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->isType('admin'))
                <li>
                    <a  href="/{{ app()->getLocale() }}/admin/subscribers">
                        <i class="mdi mdi-account-multiple-outline noti-icon pos-rel">
                            @if ($unseenSubscribers > 0 )
                            <span class="badge badge-danger rounded-circle noti-icon-badge sidebar-badge">{{ $unseenSubscribers }}</span>

                            @endif
                        </i>
                        <span > {{ trans('admin.subscribers') }} </span>
                    </a>
                </li>

                @endif




            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
