<div id="security" class="content-section d-none">
    <h2 class="mb-4">Security Settings</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Access Control
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="adminIP" class="form-label">Restrict Admin Access by IP</label>
                            <input type="text" class="form-control" id="adminIP" placeholder="192.168.1.1, 10.0.0.1">
                            <div class="form-text">Comma-separated list of IP addresses allowed to access admin panel</div>
                        </div>

                        <div class="mb-3">
                            <label for="loginAttempts" class="form-label">Max Login Attempts</label>
                            <input type="number" class="form-control" id="loginAttempts" value="5" min="1" max="20">
                        </div>

                        <div class="mb-3">
                            <label for="lockoutTime" class="form-label">Lockout Time (minutes)</label>
                            <input type="number" class="form-control" id="lockoutTime" value="30" min="1" max="1440">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="twoFactorAuth">
                            <label class="form-check-label" for="twoFactorAuth">Enable Two-Factor Authentication</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Security Settings</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Security Headers
                </div>
                <div class="card-body">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="xssProtection" checked>
                        <label class="form-check-label" for="xssProtection">XSS Protection</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="contentTypeOptions" checked>
                        <label class="form-check-label" for="contentTypeOptions">Prevent MIME Sniffing</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="hsts" checked>
                        <label class="form-check-label" for="hsts">HTTP Strict Transport Security (HSTS)</label>
                    </div>

                    <div class="mb-3">
                        <label for="csp" class="form-label">Content Security Policy</label>
                        <textarea class="form-control" id="csp" rows="3">default-src 'self'; script-src 'self' 'unsafe-inline';</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Apply Headers</button>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Security Logs
                </div>
                <div class="card-body">
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <strong>5 failed login attempts</strong> detected from IP 192.168.1.105
                    </div>
                    <div class="alert alert-success">
                        <i class="bi bi-shield-check me-2"></i>
                        <strong>Security scan completed</strong> - No vulnerabilities found
                    </div>
                    <button class="btn btn-outline-primary btn-sm">View All Logs</button>
                </div>
            </div>
        </div>
    </div>
</div>
