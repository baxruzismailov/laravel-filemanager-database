<section id="filemanager-bi-navbar">

    <div class="my-row">
        <div class="my-col-md-10">
            <div id="left-navbar-item">
                <span class="filemanager-bi-menu-icon">
                    <i class="fas fa-align-justify"></i>
                </span>

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

            {{--                <div--}}
            {{--                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal3"--}}
            {{--                    title="{{ trans('fm-translations::filemanager-bi.sub_folder') }}">--}}
            {{--                    <i class="fas fa-folder-plus"></i>--}}
            {{--                </div>--}}

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
                <input id="filemanager-bi-filter" type="text" class="form-control"
                       placeholder="{{ trans('fm-translations::filemanager-bi.filter_placeholder') }}">
                <div title="{{ trans('fm-translations::filemanager-bi.settings') }}" id="filemanager-bi-setting-icon"
                     data-setting-status="0">
                    <i class="fas fa-cog"></i>
                </div>
            </div>
        </div>
    </div>


</section>
