<x-layouts.base>
    @if(in_array(request()->route()->getName(), ['dashboard', 'profile', 'profile-example', 'users', 'bootstrap-tables', 'transactions', 'woodworking', 'woodworking-sort', 'woodworking-create',
    'woodworking-load', 'woodworking-check', 'users', 'users-create',
    'buttons',
    'forms', 'modals', 'notifications', 'typography', 'upgrade-to-pro']))    
       
    {{-- Nav --}}
    @include('layouts.nav')
    {{-- SideNav --}}
    @include('layouts.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('layouts.topbar')
        @yield('content')
    </main>

    @elseif(in_array(request()->route()->getName(), ['register', 'register-example', 'login', 'login-example',
    'forgot-password', 'forgot-password-example', 'reset-password','reset-password-example']))
    @yield('content')
    {{ $slot }}

    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))

    {{ $slot }}

    @endif

</x-layouts.base>