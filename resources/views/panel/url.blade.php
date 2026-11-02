<div id="urls" class="content-section d-none">
    <h2 class="mb-4">URL Management</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Site URL Settings
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="siteUrl" class="form-label">Site URL</label>
                            <input type="url" class="form-control" id="siteUrl" value="https://www.example.com">
                        </div>
                        <div class="mb-3">
                            <label for="homeUrl" class="form-label">Home URL</label>
                            <input type="url" class="form-control" id="homeUrl" value="https://www.example.com">
                        </div>
                        <div class="mb-3">
                            <label for="adminUrl" class="form-label">Admin URL</label>
                            <input type="url" class="form-control" id="adminUrl" value="https://www.example.com/admin">
                        </div>
                        <button type="submit" class="btn btn-primary">Update URLs</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    URL Structure
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="permalink" class="form-label">Permalink Structure</label>
                            <select class="form-select" id="permalink">
                                <option selected>Plain</option>
                                <option>Day and name</option>
                                <option>Month and name</option>
                                <option>Numeric</option>
                                <option>Post name</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="urlSuffix" class="form-label">URL Suffix</label>
                            <input type="text" class="form-control" id="urlSuffix" placeholder=".html">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="forceTrailingSlash" checked>
                            <label class="form-check-label" for="forceTrailingSlash">Force trailing slash</label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="lowercaseUrls">
                            <label class="form-check-label" for="lowercaseUrls">Convert URLs to lowercase</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Structure</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
