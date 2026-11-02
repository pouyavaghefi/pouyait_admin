<div class="modal fade" id="addRedirectModal" tabindex="-1" aria-labelledby="addRedirectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRedirectModalLabel">Add New Redirect</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="sourceUrl" class="form-label">Source URL</label>
                        <input type="text" class="form-control" id="sourceUrl" placeholder="/old-page.html">
                    </div>
                    <div class="mb-3">
                        <label for="destinationUrl" class="form-label">Destination URL</label>
                        <input type="text" class="form-control" id="destinationUrl" placeholder="/new-page">
                    </div>
                    <div class="mb-3">
                        <label for="redirectType" class="form-label">Redirect Type</label>
                        <select class="form-select" id="redirectType">
                            <option value="301">301 - Permanent Redirect</option>
                            <option value="302">302 - Temporary Redirect</option>
                            <option value="307">307 - Temporary Redirect (Preserve Method)</option>
                        </select>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="redirectActive" checked>
                        <label class="form-check-label" for="redirectActive">Active</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Redirect</button>
            </div>
        </div>
    </div>
</div>
