<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title', 'Dashboard') | PouyaIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --side:#111827; --accent:#4f46e5; --page:#f3f5f9; }
        body { background:var(--page); color:#182230; font-family:system-ui,-apple-system,"Segoe UI",sans-serif; }
        .app-sidebar { position:fixed; inset:0 auto 0 0; width:248px; background:var(--side); color:#fff; z-index:1040; padding:24px 14px; overflow-y:auto; }
        .brand { display:flex; align-items:center; gap:12px; color:white; text-decoration:none; padding:6px 12px 26px; font-size:1.1rem; font-weight:750; }
        .brand-icon { display:grid; place-items:center; width:38px; height:38px; border-radius:11px; background:var(--accent); }
        .side-label { font-size:.7rem; letter-spacing:.1em; text-transform:uppercase; color:#94a3b8; padding:12px 13px 8px; }
        .side-link { display:flex; align-items:center; gap:12px; padding:11px 13px; border-radius:10px; color:#cbd5e1; text-decoration:none; margin:3px 0; font-size:.92rem; }
        .side-link:hover,.side-link.active { background:#273449; color:white; }
        .side-link i { font-size:1.1rem; }
        .app-main { margin-left:248px; min-height:100vh; padding:22px 30px 40px; }
        .topbar { border:1px solid #e9edf3; background:white; border-radius:15px; padding:13px 18px; }
        .panel-card { border:1px solid #e7ebf1; border-radius:16px; background:white; box-shadow:0 3px 15px rgba(15,23,42,.025); }
        .metric-icon { width:44px; height:44px; display:grid; place-items:center; border-radius:12px; background:#eef2ff; color:var(--accent); font-size:1.3rem; }
        .metric-value { font-size:1.8rem; font-weight:750; line-height:1.25; }
        .btn-brand { background:var(--accent); border-color:var(--accent); color:white; }
        .btn-brand:hover { background:#4338ca; border-color:#4338ca; color:white; }
        .mobile-backdrop { display:none; }
        @media(max-width:991.98px) {
            .app-sidebar { transform:translateX(-100%); transition:transform .2s ease; }
            .app-sidebar.is-open { transform:translateX(0); }
            .app-main { margin-left:0; padding:14px 14px 30px; }
            .mobile-backdrop.is-open { display:block; position:fixed; inset:0; background:rgba(0,0,0,.45); z-index:1039; }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="mobile-backdrop" id="sidebarBackdrop"></div>
    <aside class="app-sidebar" id="appSidebar" aria-label="Main navigation">
        <a href="{{ route('dashboard') }}" class="brand"><span class="brand-icon"><i class="bi bi-grid-1x2-fill"></i></span><span>PouyaIT <span class="fw-normal text-white-50">Admin</span></span></a>
        <div class="side-label">Overview</div>
        <a class="side-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <div class="side-label mt-3">Website</div>
        <a class="side-link {{ request()->routeIs('redirections') ? 'active' : '' }}" href="{{ route('redirections') }}"><i class="bi bi-signpost-split"></i> Redirects</a>
        <a class="side-link {{ request()->routeIs('urls') ? 'active' : '' }}" href="{{ route('urls') }}"><i class="bi bi-link-45deg"></i> URLs</a>
        <a class="side-link {{ request()->routeIs('settings') ? 'active' : '' }}" href="{{ route('settings') }}"><i class="bi bi-sliders"></i> Settings</a>
        <a class="side-link {{ request()->routeIs('security') ? 'active' : '' }}" href="{{ route('security') }}"><i class="bi bi-shield-lock"></i> Security</a>
        <div class="side-label mt-3">External</div>
        <a class="side-link" href="https://pouyait.nl" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-up-right"></i> Open Website</a>
    </aside>
    <main class="app-main">
        @include('panel.navbar')
        <div class="mt-4">@yield('wrapper')</div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            const sidebar = document.getElementById('appSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            const toggle = document.getElementById('sidebarToggle');
            function setOpen(open) {
                sidebar.classList.toggle('is-open', open);
                backdrop.classList.toggle('is-open', open);
                toggle?.setAttribute('aria-expanded', String(open));
            }
            toggle?.addEventListener('click', () => setOpen(!sidebar.classList.contains('is-open')));
            backdrop?.addEventListener('click', () => setOpen(false));
        })();
    </script>
    @stack('scripts')
</body>
</html>
