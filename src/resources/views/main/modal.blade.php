<!--  MODAL 1  -->
<div class="filemanager-bi-modal-overlay" id="testmodal1">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-lg">
        <div class="filemanager-bi-modal-header">
            <h4>Yeni ad</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            Lorem ipsum dolor sit amet.
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn my-btn-danger" onclick="filemanagerModalClose()">Imtina et</button>
            <button class="my-btn my-btn-success">tetbiq et</button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>

<!--  MODAL 2 -->
<div class="filemanager-bi-modal-overlay" id="testmodal2">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-md">
        <div class="filemanager-bi-modal-header">
            <h4>Yeni ad</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            Lorem ipsum dolor sit amet.
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn my-btn-warning" onclick="filemanagerModalClose()">Imtina et</button>
            <button class="my-btn my-btn-success">tetbiq et</button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>

<!--  MODAL 3  -->
<div class="filemanager-bi-modal-overlay" id="testmodal3">
    <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
        <div class="filemanager-bi-modal-header">
            <h4>Yeni ad</h4>
            <div class="headerClose" onclick="filemanagerModalClose()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="filemanager-bi-modal-body">
            Lorem ipsum dolor sit amet.
        </div>
        <div class="filemanager-bi-modal-footer">
            <button class="my-btn " onclick="filemanagerModalClose()">Imtina et</button>
            <button class="my-btn my-btn-success">tetbiq et</button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>

<!--  ------------------------------------  -->
<!--  FILE MODAL START  -->
<!--  REMOVE SELECT FILES MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="remove-files-modal">
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
            <button id="remove-files-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE SELECT FILES MODAL END  -->

<!--  REMOVE ONLY ONE FILE MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="remove-only-one-file-modal">
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
            <button id="remove-only-one-file-modal-success" class="my-btn my-btn-success">
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
<div class="filemanager-bi-modal-overlay" id="remove-folders-modal">
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
            <button id="remove-folders-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE SELECT FOLDERS MODAL END  -->

<!--  REMOVE ONLY ONE FOLDER MODAL START  -->
<div class="filemanager-bi-modal-overlay" id="remove-only-one-folder-modal">
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
            <button id="remove-only-one-folder-modal-success" class="my-btn my-btn-success">
                {{ trans('fm-translations::filemanager-bi.success') }}
            </button>
        </div>

    </div>
    <div class="modalOverlayClass"></div>
</div>
<!--  REMOVE ONLY ONE FOLDER MODAL END  -->
<!--  FOLDER MODAL END  -->
