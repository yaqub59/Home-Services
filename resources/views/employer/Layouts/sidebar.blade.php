<div class="bg-light shadow-sm p-3 rounded-4" style="min-height: 100vh;">
    <div class="list-group list-group-flush">

        <!-- Dashboard -->
        <a href="{{ route('home') }}"
           class="list-group-item list-group-item-action d-flex align-items-center gap-2 rounded {{ Route::currentRouteName() == 'home' ? 'active text-white bg-primary' : '' }}">
            <img src="{{ asset('assets/img/icon/sidebar-icon-01.svg') }}" alt="Dashboard" width="20">
            Dashboard
        </a>

        <!-- Service Providers -->
        <a href="{{ route('request.index') }}"
           class="list-group-item list-group-item-action d-flex align-items-center gap-2 rounded {{ Route::currentRouteName() == 'request.index' ? 'active text-white bg-primary' : '' }}">
            <img src="{{ asset('assets/img/icon/sidebar-icon-06.svg') }}" alt="Service Providers" width="20">
            Service Providers
        </a>

        <!-- Requests -->
        <a href="{{ route('reviews') }}"
           class="list-group-item list-group-item-action d-flex align-items-center gap-2 rounded {{ Route::currentRouteName() == 'reviews' ? 'active text-white bg-primary' : '' }}">
            <img src="{{ asset('assets/img/icon/sidebar-icon-04.svg') }}" alt="Requests" width="20">
            Requests
        </a>

    </div>
</div>
