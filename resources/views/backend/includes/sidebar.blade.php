<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">

    </div>
    <!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link class="c-sidebar-nav-link" :href="route('admin.dashboard')" :active="activeClass(Route::is('admin.dashboard'), 'c-active')" icon="c-sidebar-nav-icon cil-speedometer" :text="__('Dashboard')" />
        </li>
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
<!--sidebar-->