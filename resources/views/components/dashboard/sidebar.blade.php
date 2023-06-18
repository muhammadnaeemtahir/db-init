<aside id="sidebarMenu" class="min-vh-100 col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <nav>
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                    Articles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('events.log') ? 'active' : '' }}" href="{{ route('events.log') }}">
                        <span data-feather="database" class="align-text-bottom"></span>
                        Events Log
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('firewall') ? 'active' : '' }}" href="{{ route('firewall') }}">
                        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                        Firewall
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('areas') ? 'active' : '' }}" href="{{ route('areas') }}">
                        <span data-feather="codesandbox" class="align-text-bottom"></span>
                        Areas
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

@push('js')
<!-- feather icons CDN -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>

<!-- feather icons execute -->
<script>
    feather.replace({"aria-hidden": "true"});
</script>
@endpush