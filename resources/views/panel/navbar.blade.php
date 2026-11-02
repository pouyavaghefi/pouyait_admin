<nav class="topbar d-flex align-items-center justify-content-between gap-3">
    <div class="d-flex align-items-center gap-3">
        <button id="sidebarToggle" type="button" class="btn btn-light d-lg-none" aria-label="Toggle navigation" aria-controls="appSidebar" aria-expanded="false"><i class="bi bi-list fs-5"></i></button>
        <div><h5 class="fw-bold mb-0">@yield('page_title', 'Dashboard')</h5><small class="text-secondary">PouyaIT Control Center</small></div>
    </div>
    <div class="d-flex align-items-center gap-2 gap-md-3">
        <a class="btn btn-outline-secondary btn-sm d-none d-sm-inline-flex align-items-center gap-2" href="https://pouyait.nl" target="_blank" rel="noopener noreferrer"><i class="bi bi-globe"></i> View Site</a>
        @auth
            <div class="dropdown">
                <button type="button" class="btn btn-light d-flex align-items-center gap-2 border-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="rounded-circle bg-primary text-white d-inline-flex justify-content-center align-items-center fw-bold" style="width:34px;height:34px">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    <span class="d-none d-md-inline small fw-semibold">{{ auth()->user()->name }}</span>
                    <i class="bi bi-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                    <li><span class="dropdown-header">{{ auth()->user()->email }}</span></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="{{ route('signout') }}"><i class="bi bi-box-arrow-right me-2"></i> Sign Out</a></li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
