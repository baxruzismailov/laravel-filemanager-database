<section class="filemanager-bi-navbar">
    <div class="left-navbar-item">
        <!--  Upload START  -->
        <button class="btn">
            <i class="fas fa-upload"></i>
            <span class="left-navbar-item-text">
                {{ trans('fm-translations::filemanager-bi.upload_server') }}
            </span>
        </button>
        <!--  Upload END  -->

        <!--  Sub Folder START  -->
        <button class="btn">
            <i class="fas fa-folder-plus"></i>
            <span class="left-navbar-item-text">
                {{ trans('fm-translations::filemanager-bi.sub_folder') }}
            </span>
        </button>
        <!--  Upload END  -->


    </div>
    <div class="right-navbar-item">
        <input type="text" class="form-control" placeholder="Süzgəc">
        <div>
            <i class="fas fa-cog"></i>
        </div>
    </div>
</section>
