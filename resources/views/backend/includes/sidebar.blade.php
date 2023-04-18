<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('backend.dashboard') }}" class="waves-effect">
                        <i class="ri-home-4-fill"></i>
                        <span>@lang('backend.dashboard')</span>
                    </a>
                </li>
                <li class="menu-title">@lang('backend.site-setting')</li>
                <li>
                    <a href="{{ route('backend.products.index') }}" class="waves-effect">
                        <i class="fas fa-wine-glass-alt"></i>
                        <span>@lang('backend.products')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.services.index') }}" class="waves-effect">
                        <i class="fas fa-wine-glass-alt"></i>
                        <span>@lang('backend.services')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.about.index') }}" class="waves-effect">
                        <i class="fas fa-info"></i>
                        <span>@lang('backend.about')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.categories.index') }}" class="waves-effect">
                        <i class="fas fa-bars"></i>
                        <span>@lang('backend.categories')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.site-languages.index') }}" class="waves-effect">
                        <i class="fas fa-language"></i>
                        <span>@lang('backend.languages')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.orders') }}" class="waves-effect">
                        <i class="ri-contacts-fill"></i>
                        <span>@lang('backend.create-order')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.contact-us.index') }}" class="waves-effect">
                        <i class="ri-contacts-fill"></i>
                        <span>@lang('backend.contact-us')</span>
                    </a>
                </li>
                {{--                    <li>--}}
                {{--                        <a href="{{ route('backend.newsletter.index') }}" class="waves-effect">--}}
                {{--                            <i class="fas fa-user-friends"></i>--}}
                {{--                            <span>@lang('backend.subscribers')</span>--}}
                {{--                        </a>--}}
                {{--                    </li>--}}
                <li>
                    <a href="{{ route('backend.settings.index') }}" class="waves-effect">
                        <i class="ri-settings-2-fill"></i>
                        <span>@lang('backend.settings')</span>
                    </a>
                </li>
                <li class="menu-title">@lang('backend.seo-settings')</li>
                <li>
                    <a href="{{ route('backend.seo.index') }}" class="waves-effect">
                        <i class="fas fa-tags"></i>
                        <span>@lang('backend.tags')</span>
                    </a>
                </li>
                <li class="menu-title">@lang('backend.ap-setting')</li>

                <li>
                    <a href="{{ route('backend.users.index') }}" class=" waves-effect">
                        <i class="ri-account-circle-fill"></i>
                        <span>@lang('backend.users')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.permissions.index') }}" class=" waves-effect">
                        <i class="ri-lock-2-fill"></i>
                        <span>@lang('backend.permissions')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.givePermission') }}" class=" waves-effect">
                        <i class="ri-lock-unlock-fill"></i>
                        <span>@lang('backend.give-permission')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.report') }}" class="waves-effect">
                        <i class="fas fa-file"></i>
                        <span>@lang('backend.report')</span>
                    </a>
                </li>
                <li class="menu-title">@lang('backend.user-setting')</li>
                <li>
                    <a href="{{ route('backend.my-informations.index') }}" class=" waves-effect">
                        <i class="ri-information-fill"></i>
                        <span>@lang('backend.informations')</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
