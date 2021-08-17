<section class="filemanager-bi-navbar">

    <div class="my-row">
        <div class="my-col-md-10">
            <div class="left-navbar-item">
                <div
                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal1"
                    title="{{ trans('fm-translations::filemanager-bi.upload_server') }}"
                >
                    <i class="fas fa-upload"></i>
                </div>
                <div
                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal2"
                    title="{{ trans('fm-translations::filemanager-bi.sub_folder') }}">
                    <i class="fas fa-folder-plus"></i>
                </div>
                <div
                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal3"
                    title="{{ trans('fm-translations::filemanager-bi.sub_folder') }}">
                    <i class="fas fa-folder-plus"></i>
                </div>
            </div>
        </div>
        <div class="my-col-md-2">
            <div class="right-navbar-item">
                <input type="text" class="form-control" placeholder="Süzgəc">
                <div>
                    <i class="fas fa-cog"></i>
                </div>
            </div>
        </div>
    </div>







</section>
