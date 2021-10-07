<section id="filemanager-bi-navbar">

    <div class="my-row">
        <div class="my-col-md-10">
            <div id="left-navbar-item">
                <span class="filemanager-bi-menu-icon">
                    <i class="fas fa-align-justify"></i>
                </span>

                <!--  UPLOAD SERVER  -->
                <div
                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                    data-modal="#filemanager-bi-file-upload"
                    title="{{ trans('fm-translations::filemanager-bi.upload_server') }}"
                >
                    <i class="fas fa-upload"></i>
                </div>

                <!--  NEW FOLDER  -->
                <div
                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                    data-modal="#filemanager-bi-create-new-folder-modal"
                    title="{{ trans('fm-translations::filemanager-bi.new_folder') }}">
                    <i class="fas fa-folder-plus"></i>
                </div>


                <!--  SELECT ALL FOLDER START  -->
                <span class="filemanager-bi-select-navbar-folder-box"></span>
                <!--  SELECT ALL FOLDER END  -->

                <!--  SELECT ALL FILE START  -->
                <span class="filemanager-bi-select-navbar-file-box"></span>
                <!--  SELECT ALL FILE END  -->


            </div>
        </div>
        <div class="my-col-md-2">
            <div id="right-navbar-item">
                <span class="filemanager-bi-menu-icon">
                    <i class="fas fa-align-justify"></i>
                </span>
                <span id="filemanager-bi-filter-type">
                    <!--  ARCHIVE  -->
                   <div title="{{ trans('fm-translations::filemanager-bi.archives') }}" class="filemanager-bi-filter-type-archive">
                            <i class="far fa-file-archive"></i>
                    </div>
                    <!--  DOCUMENT  -->
                   <div title="{{ trans('fm-translations::filemanager-bi.documents') }}" class="filemanager-bi-filter-type-document">
                          <i class="fas fa-file-word"></i>
                   </div>
                    <!--  IAMGES  -->
                    <div title="{{ trans('fm-translations::filemanager-bi.images') }}" class="filemanager-bi-filter-type-image">
                         <i class="fas fa-camera-retro"></i>
                    </div>
                    <!--  VIDEO  -->
                    <div title="{{ trans('fm-translations::filemanager-bi.videos') }}" class="filemanager-bi-filter-type-video">
                           <i class="fas fa-film"></i>
                    </div>
                    <!--  AUDIO  -->
                    <div title="{{ trans('fm-translations::filemanager-bi.audios') }}" class="filemanager-bi-filter-type-audio">
                       <i class="fas fa-music"></i>
                    </div>
                </span>
                <input id="filemanager-bi-filter" type="text" class="fm-bi-form-control"
                       placeholder="{{ trans('fm-translations::filemanager-bi.filter_placeholder') }}">

                <div class="right-navbar-remove-filters">
                    <div title="{{ trans('fm-translations::filemanager-bi.settings') }}" id="filemanager-bi-all-filters-remove">
                        <i class="fas fa-times"></i>
                    </div>
                    <div title="{{ trans('fm-translations::filemanager-bi.settings') }}" id="filemanager-bi-setting-icon"
                         data-setting-status="0">
                        <i class="fas fa-cog"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
