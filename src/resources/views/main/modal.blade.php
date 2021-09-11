
<!--  FILE UPLOAD START-->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-file-upload">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-lg">
        <div class="filemanager-bi-modal-header">
            <h4>{{ trans('fm-translations::filemanager-bi.upload_server') }}</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            <div class="filemanager-bi-dropzone">
                <div class="filemanager-bi-dropzone-form">
                    <input type="file" multiple>
                    <p>Dosyalarınızı buraya sürükleyin ya da seçmek için tıklayın!</p>
                </div>
                <div class="filemanager-bi-dropzone-result-text"></div>
                <div class="filemanager-bi-dropzone-result"></div>
            </div>
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn" onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  FILE UPLOAD END-->

<!--  ------------------------------------  -->
<!--  FILE MODAL START  -->
<!--  REMOVE SELECT FILES MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-remove-files-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4></h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body"></div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-remove-files-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE SELECT FILES MODAL END  -->

<!--  REMOVE ONLY ONE FILE MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-remove-only-one-file-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4></h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body"></div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-remove-only-one-file-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE ONLY ONE FILE MODAL END  -->
<!--  FILE MODAL END  -->



<!--  ------------------------------------  -->
<!--  FOLDER MODAL START  -->
<!--  REMOVE SELECT FOLDERS MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-remove-folders-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4></h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body"></div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-remove-folders-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE SELECT FOLDERS MODAL END  -->

<!--  REMOVE ONLY ONE FOLDER MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-remove-only-one-folder-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4></h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body"></div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-remove-only-one-folder-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE ONLY ONE FOLDER MODAL END  -->

<!--  ADD FOLDER MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-create-new-folder-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4>{{ trans('fm-translations::filemanager-bi.new_folder') }}</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            <label for="file-manager-bi-new-folder-name">{{ trans('fm-translations::filemanager-bi.new_folder_name') }}</label>
            <input id="file-manager-bi-new-folder-name" autocomplete="OFF" type="text" class="fm-bi-form-control mt-1">
            <!--  ERROR MSG  -->
            <div class="filemanager-bi-error mt-2"></div>
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-new-folder-create" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  ADD FOLDER MODAL END  -->

<!--  RENAME FOLDER MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="filemanager-bi-rename-folder-modal">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4>{{ trans('fm-translations::filemanager-bi.rename_folder') }}</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            <label for="file-manager-bi-rename-folder-name">{{ trans('fm-translations::filemanager-bi.new_folder_name') }}</label>
            <input id="file-manager-bi-rename-folder-name" autocomplete="OFF" type="text" class="fm-bi-form-control mt-1">
            <!--  ERROR MSG  -->
            <div class="filemanager-bi-error mt-2"></div>
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">
                {{ trans('fm-translations::filemanager-bi.cancle') }}
            </button>
            <button id="filemanager-bi-rename-folder-update" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  RENAME FOLDER MODAL END  -->

<!--  FOLDER MODAL END  -->

