<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0">Website Settings</h5>
    </div>

    <div class="card-body p-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('settings.update') }}">
            @csrf

            @foreach($settings as $setting)
                <div class="d-flex justify-content-between
                            align-items-center border-bottom py-3">

                    <div>
                        <label class="fw-semibold"
                               for="setting-{{ $setting->id }}">
                            {{ ucwords(str_replace(['.', '_'], ' ', $setting->key)) }}
                        </label>

                        <div class="text-muted small">
                            {{ $setting->description }}
                        </div>
                    </div>

                    <div class="form-check form-switch">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            role="switch"
                            id="setting-{{ $setting->id }}"
                            name="settings[{{ $setting->key }}]"
                            value="1"
                            @checked(old('settings.' . $setting->key, $setting->value))
                        >
                    </div>
                </div>
            @endforeach

            @error('settings')
            <div class="text-danger small mt-2">{{ $message }}</div>
            @enderror

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-check-lg me-2"></i>
                    Save Settings
                </button>
            </div>
        </form>

    </div>
</div>
