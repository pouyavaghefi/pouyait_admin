<div id="redirects" class="content-section d-none">
    <h2 class="mb-4">URL Redirect Management</h2>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Redirect Rules</span>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addRedirectModal">
                <i class="bi bi-plus-circle me-1"></i> Add New Redirect
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Source URL</th>
                        <th>Destination URL</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>/old-page.html</td>
                        <td>/new-page</td>
                        <td><span class="badge bg-info">301 Permanent</span></td>
                        <td><span class="badge badge-active">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>/promo2022</td>
                        <td>/promotions/current</td>
                        <td><span class="badge bg-warning">302 Temporary</span></td>
                        <td><span class="badge badge-active">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>/temp-page</td>
                        <td>/under-construction</td>
                        <td><span class="badge bg-warning">302 Temporary</span></td>
                        <td><span class="badge badge-inactive">Inactive</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <h5>Recent Redirects</h5>
                <div class="redirect-rule">
                    <strong>/old-blog/post-1</strong> → <strong>/blog/new-post-title</strong>
                    <div class="text-muted small">Added on Mar 15, 2023</div>
                </div>
                <div class="redirect-rule">
                    <strong>/products/old-product</strong> → <strong>/products/new-version</strong>
                    <div class="text-muted small">Added on Mar 10, 2023</div>
                </div>
            </div>
        </div>
    </div>
</div>
