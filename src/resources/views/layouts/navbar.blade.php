<section class="filemanager-bi-navbar">
    <!-- MAIN MENU -->
    <div id="mainMenu" class="main-menu left-navbar-item">
        <div id="autoNav" class="main-nav">
            <div class="responsiveNav">
                <!--  Upload START  -->
                    <button class="my-btn">
                        <i class="fas fa-upload"></i>
                        <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.upload_server') }}
                        </span>
                    </button>
            <!--  Upload END  -->
            </div>
            <div class="responsiveNav">
                <!--  Sub Folder START  -->
                    <button class="my-btn">
                        <i class="fas fa-folder-plus"></i>
                        <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.sub_folder') }} 1
                        </span>
                    </button>
            <!--  Upload END  -->
            </div>
            <div class="responsiveNav">
                <button class="my-btn">
                    <i class="fas fa-folder-plus"></i>
                    <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.sub_folder') }} 2
                        </span>
                </button>
            </div>
            <div class="responsiveNav">
                <button class="my-btn">
                    <i class="fas fa-folder-plus"></i>
                    <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.sub_folder') }} 3
                        </span>
                </button>
            </div>
            <div class="responsiveNav">
                <button class="my-btn">
                    <i class="fas fa-folder-plus"></i>
                    <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.sub_folder') }} 4
                        </span>
                </button>
            </div>
            <div class="responsiveNav">
                <button class="my-btn">
                    <i class="fas fa-folder-plus"></i>
                    <span class="left-navbar-item-text">
                            {{ trans('fm-translations::filemanager-bi.sub_folder') }} 5
                        </span>
                </button>
            </div>

            <div id="autoNavMore" class="auto-nav-more responsiveNav">
                <a href="#" class="more-my-btn">more</a>
                <div id="autoNavMoreList" class="auto-nav-more-list">

                </div>
            </div>
        </div>
    </div>


    <!-- MAIN MENU END -->




    <div class="right-navbar-item">
        <input type="text" class="form-control" placeholder="Süzgəc">
        <div>
            <i class="fas fa-cog"></i>
        </div>
    </div>
</section>
