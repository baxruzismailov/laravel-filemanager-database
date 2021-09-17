/*   AJAX SETUP   */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(function () {
    /*   URL TYPE   */
    const currentUrlType = $(window.parent.document).find(FILEMANAGER_BI_ID).attr('src');
    const urlTypeSplit = currentUrlType.split('/');
    const urlType = urlTypeSplit.pop();
    if(urlType == 'image' || urlType == 'media'){
        localStorage.setItem('filemanager_bi_url_type', urlType);
    }else {
        localStorage.setItem('filemanager_bi_url_type', 'all_files');
    }


    /*   REMOVE CUT FOLDER   */
    localStorage.removeItem('filemanager_bi_cut_folders_id');

    $('#filemanager-bi').show();

    var windowHeight = $(window).height() - 100;
    var windowHeightContentContainer = $(window).height() - 190;
    $('#filemanager-bi-container').css('height', windowHeight + 'px')
    $('#filemanager-bi-content-container').css('height', windowHeightContentContainer + 'px')

    $(window).resize(function () {
        windowHeight = $(window).height() - 100;
        $('#filemanager-bi-container').css('height', windowHeight + 'px')
        var windowHeightContentContainer = $(window).height() - 190;
        $('#filemanager-bi-content-container').css('height', windowHeightContentContainer + 'px')
    });

    $('.filemanager-bi-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').removeClass('fa-folder');
    $('.filemanager-bi-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').addClass('fa-folder-open');

})

function filemanagerBiGetFolders(){
    $.ajax({
        type: "POST",
        url: FILE_MANAGER_BI_GET_FOLDERS_ROUTE,
        data: {data:true},
        dataType: 'JSON',
        success: function (response) {
            if (response.success) {
                $('#filemanager-bi-left-menu .filemanager-bi-main-menu ul').html(response.folders)
                $('#filemanager-bi-cut-menu .filemanager-bi-main-menu ul').html(response.folders)
                filemanagerBiFoldersItem();
            }

        }
    });
}

/*   LOCAL STORAGE START   */
function filemanagerForSetLocalStorage() {
    let filemanagerCurrentFolder = localStorage.getItem('filemanager_bi_current_folder');
    if (filemanagerCurrentFolder == null) {
        localStorage.setItem('filemanager_bi_current_folder', 0);
    } else {
        let localStorageCurrentFolder = localStorage.getItem('filemanager_bi_current_folder');
        $.ajax({
            type: "POST",
            url: FILEMANAGER_BI_SET_CURRENT_FOLDER_LOCAL_STORAGE_ROUTE,
            data: {folderID: localStorageCurrentFolder},
            dataType: 'JSON',
            success: function (response) {
                if (response.error) {
                    //IF IS NOT FOLDER
                    localStorage.setItem('filemanager_bi_current_folder', 0);
                }

            }
        })
    }

}

function filemanagerForGetLocalStorage() {
    let filemanagerCurrentFolder = localStorage.getItem('filemanager_bi_current_folder');
    if (filemanagerCurrentFolder == null) {
        localStorage.setItem('filemanager_bi_current_folder', 0);
        return 0;
    } else {
        return parseInt(filemanagerCurrentFolder);
    }
}

filemanagerForSetLocalStorage();

/*   LOCAL STORAGE END   */

function filemanagerBiErrorMsg(option = true, name = '',) {

    if (option == true) {
        $('.filemanager-bi-modal-body .filemanager-bi-error').html(name);
        $('.filemanager-bi-modal-body .filemanager-bi-error').show();
    } else {
        $('.filemanager-bi-modal-body .filemanager-bi-error').html(name);
        $('.filemanager-bi-modal-body .filemanager-bi-error').hide();
    }

}

function filemanagerBiInputsValEmpty() {
    $('.filemanager-bi-modal-body input').val('');
}

$(document).on('click', '.filemanager-bi-modal-body input', function () {
    filemanagerBiErrorMsg(false);
})


/*   REMOVE RIGHT NAVBAR INFO START   */
function removeNavbarRightInfo() {
    $('#filemanager-bi-information-right').html('');
}

/*   REMOVE RIGHT NAVBAR INFO END   */


/*   FILE NAVBAR FUNCTION START   */
function addNavbarToolsButton() {
    /*   DELETE BUTTON   */
    $('.filemanager-bi-select-navbar-file-box').append(`
          <!--  SELECT ALL FILE START  -->
        <div id="filemanager-bi-select-all"
             title="${FILE_MANAGER_BI_SELECT_ALL_FILE_TRANSLATE}">
            <i class="fas fa-check-double"></i>
        </div>
        <!--  FILE REMOVE  -->
        <div id="filemanager-bi-delete-select-file"
        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#filemanager-bi-remove-files-modal"
         title="${FILE_MANAGER_BI_DELETE_ALL_FILE_TRANSLATE}">
        <i class="fas fa-trash-alt"></i>
    </div>`);
}

function removeNavbarFileToolsButton() {
    /*   DELETE BUTTONS   */
    $('.filemanager-bi-select-navbar-file-box').html('');
}

function hideCheckboxFile() {
    let selectFolderActive = $('.select-folder-active');

    if (selectFolderActive.length > 0) {
        $('.filemanager-bi-select-file').hide();
    } else {
        $('.filemanager-bi-select-file').show();
    }

}

/*   FILE NAVBAR FUNCTION END   */


/*   FOLDER NAVBAR FUNCTION START   */
function addNavbarFolderToolsButton() {
    /*   DELETE BUTTON   */
    $('.filemanager-bi-select-navbar-folder-box').prepend(`
         <!--  SELECT ALL FOLDER START  -->
                <div id="filemanager-bi-select-folder-all"
                title="${FILE_MANAGER_BI_SELECT_ALL_FOLDER_TRANSLATE}">
                        <i class="fas fa-check-double"></i>
                    </div>
        <!--  SELECT FOLDER REMOVE  -->
        <div id="filemanager-bi-delete-select-folder"
                onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#filemanager-bi-remove-folders-modal"
                 title="${FILE_MANAGER_BI_DELETE_ALL_FOLDER_TRANSLATE}">
             <i class="fas fa-trash-alt"></i>
            </div>
         <!-- SELECT FOLDER CUT  -->
        <div id="filemanager-bi-cut-select-folder"
                 title="${FILE_MANAGER_BI_CUT_FOLDER_TRANSLATE}">
             <i  class="fas fa-cut"></i>
            </div>
`);
}

function removeNavbarFolderToolsButton() {
    /*   DELETE BUTTONS   */
    $('.filemanager-bi-select-navbar-folder-box').html('');
}

/*   REMOVE BUTTON   */
function removeFileManagerBiNavbarButton(buttonID) {
    $('#' + buttonID).remove();
}

function hideCheckboxFolder() {
    let selectFileActive = $('.select-file-active');

    if (selectFileActive.length > 0) {
        $('.filemanager-bi-select-folder').hide();
    } else {
        $('.filemanager-bi-select-folder').show();
    }

}

/*   FOLDER NAVBAR FUNCTION END   */


/*   MODAL START   */
// Initialize All Required DOM Elements
var modalOverlay = '';
const modalOpen = document.querySelector(".modalOpen");
const modalClose = document.querySelector(".modalClose");


function filemanagerModalOpen(clickID) {
    modalOverlay = document.querySelector(clickID);
    modalOverlay.classList.add("visible");
    let modalOverlayClass = document.querySelector(".modalOverlayClass");
    modalOverlayClass.innerHTML = clickID;
}


// Initialize Close Modal by Click Button
function filemanagerModalClose() {
    modalOverlayClass();
}


// Initialize Close Modal by Click Outside
window.addEventListener("click", (e) => {
    if (e.target === modalOverlay) {
        modalOverlayClass();
    }
});

function modalOverlayClass() {
    let modalOverlayClass = document.querySelector(".modalOverlayClass").innerHTML;
    modalOverlay = document.querySelector(modalOverlayClass);
    modalOverlay.classList.remove("visible");
    document.querySelector(".modalOverlayClass").innerHTML = '';

    /*   REMOVE ERRROR MESAGES AND INPUT VAL   */
    filemanagerBiErrorMsg(false);
    filemanagerBiInputsValEmpty();
}

/*   MODAL END   */


/*   LEFT MENU START   */

$(document).on('click', '.filemanager-bi-menu-icon', function () {
    let lefMenuStatus = $('#filemanager-bi-left-menu').attr('data-menu-status');
    if (lefMenuStatus == 0) {
        $('#filemanager-bi-left-menu').attr('data-menu-status', '1');
        $('#filemanager-bi-left-menu').show();
    } else {
        $('#filemanager-bi-left-menu').attr('data-menu-status', '0');
        $('#filemanager-bi-left-menu').hide();
    }

})

function filemanagerBiFoldersItem(){
    $('.filemanager-bi-left-menu-arrows').remove();
    let filemanagerBiFoldersItem = document.querySelectorAll('#filemanager-bi-left-menu-container .filemanager-bi-main-menu li.filemanager-bi-menu-item-has-children');
    [].forEach.call(filemanagerBiFoldersItem, function (el) {
        let i = document.createElement('i');
        i.setAttribute('class', 'filemanager-bi-left-menu-arrows fas fa-caret-right');
        el.appendChild(i);
    });

    let li_i = document.querySelectorAll('li.filemanager-bi-menu-item-has-children i.filemanager-bi-left-menu-arrows');
    [].forEach.call(li_i, function (el) {
        el.addEventListener('click', function () {
            if (this.className.indexOf('fa-caret-right') != -1) {
                this.classList.remove("fa-caret-right");
                this.classList.add("fa-caret-down");
            } else {
                this.classList.remove("fa-caret-down");
                this.classList.add("fa-caret-right");
            }

            var ul = this.parentNode.querySelectorAll('ul')[0];
            ul.style.display = ul.offsetParent === null ? 'block' : 'none';

        });
    });
}

filemanagerBiFoldersItem();


$(document).on('click', '#filemanager-bi-left-menu .filemanager-bi-main-menu-item-container', function () {

    $('.filemanager-bi-main-menu ul li .filemanager-bi-main-menu-item-container').removeClass('filemanager-bi-menu-active')
    $(this).addClass('filemanager-bi-menu-active');
    $('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').removeClass('fa-folder-open');
    $('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').addClass('fa-folder');

    $('.filemanager-bi-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').removeClass('fa-folder');
    $('.filemanager-bi-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').addClass('fa-folder-open');


})


/*   LEFT MENU END   */


/*   SETTINGS START   */
$(document).on('click', '#filemanager-bi-setting-icon', function () {
    $(this).attr('data-menu-status', '1');
    $('#filemanager-bi-settings').show();
})

$(document).on('click', '#filemanager-bi-settings .filemanager-bi-settings-header i', function () {
    $('#filemanager-bi-setting-icon').attr('data-menu-status', '0');
    $('#filemanager-bi-settings').hide();
})
/*   SETTINGS END   */


/*  SELECT FILE START   */
$(document).on('click', '.filemanager-bi-select-file', function () {

    var selectActiveBox = $(this).parent('.select-file-active');


    if (selectActiveBox.length == 1) {

        $(this).parent('.filemanager-bi-content-item-box').removeClass('select-file-active');
        $(this).html('');
        if ($('.select-file-active').length == 0) {
            removeNavbarRightInfo();
            removeNavbarFileToolsButton();
        } else {

            $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FILE_TRANSLATE + ' - ' + $('.select-file-active').length);
        }

    } else {
        removeNavbarFileToolsButton();
        addNavbarToolsButton();
        $(this).parent('.filemanager-bi-content-item-box').addClass('select-file-active');
        $(this).html('<i class="fas fa-check"></i>');
        $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FILE_TRANSLATE + ' - ' + $('.select-file-active').length);

    }

    /*   IF FILE SELECT -> HIDE FOLDER   */
    hideCheckboxFolder();
})
/*  SELECT FILE END   */


/*   SELECT ALL FILE START   */
$(document).on('click', '#filemanager-bi-select-all', function () {
    let selectAllFile = $('.filemanager-bi-content-item-box');
    var selectActiveBox = $('.select-file-active');


    selectAllFile.each(function (index, el) {

        var selectFiles = $(this).find('.filemanager-bi-select-file');


        if (selectActiveBox.length != selectAllFile.length) {
            $(this).addClass('select-file-active');
            selectFiles.html('<i class="fas fa-check"></i>');
            $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FILE_TRANSLATE + ' - ' + $('.select-file-active').length);

            removeNavbarFileToolsButton();
            addNavbarToolsButton();
        } else {
            $(this).removeClass('select-file-active');
            selectFiles.html('');
            $('#filemanager-bi-information-right').html('');

            removeNavbarFileToolsButton();
        }


    })

    /*   IF FILE SELECT -> HIDE FOLDER   */
    hideCheckboxFolder();
})
/*   SELECT ALL FILE END   */


/*   DELETE SELECT FILE START   */
$(document).on('click', '#filemanager-bi-delete-select-file', function () {
    const selectActiveFile = $('.select-file-active');

    if (selectActiveFile.length == 1) {
        $('#filemanager-bi-remove-files-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FILE_TRANSLATE + '</h4><br>' + selectActiveFile.attr('data-file-name'));
    } else {
        $('#filemanager-bi-remove-files-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FILE_TRANSLATE + '</h4><br>' + FILE_MANAGER_BI_SELECT_FILE_TRANSLATE + ' - ' + selectActiveFile.length);
    }


})

$(document).on('click', '#filemanager-bi-remove-files-modal-success', function () {
    const selectActiveFile = $('.select-file-active');

    //Check files ID & Ajax Post
    var dataFilesID = [];
    selectActiveFile.each(function () {
        const filesID = $(this).attr('data-file-id');
        dataFilesID.push(filesID);
        // $(this).remove();
    });

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFilesID
    console.log(dataFilesID);

    // removeNavbarRightInfo();
    // filemanagerModalClose()
})
/*   DELETE SELECT FILE END   */


/*   DELETE ONLY ONE FILE START   */
$(document).on('click', '.filemanager-bi-delete-one-file', function () {
    const thisFile = $(this).closest('.filemanager-bi-content-item-box');
    $('.filemanager-bi-content-item-box').removeClass('only-one-file-active');
    thisFile.addClass('only-one-file-active');
    $('#filemanager-bi-remove-only-one-file-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FILE_TRANSLATE + '</h4><br>' + thisFile.attr('data-file-name'));

})

$(document).on('click', '#filemanager-bi-remove-only-one-file-modal-success', function () {

    const activeFile = $('.only-one-file-active');

    //Check files ID & Ajax Post
    var dataFileID = activeFile.attr('data-file-id');

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFileID
    // console.log(dataFileID);

    const selectActiveFile = $('.select-file-active');
    if (selectActiveFile.length != 0) {
        $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FILE_TRANSLATE + ' - ' + $('.select-file-active').length);
    } else {
        removeNavbarRightInfo();
    }
    filemanagerModalClose()
})
/*   DELETE ONLY ONE FILE END   */


/*   ------------------------------------------------------   */

/*  SELECT FOLDER START   */
$(document).on('click', '.filemanager-bi-select-folder', function () {

    var selectActiveBox = $(this).parent('.select-folder-active');


    if (selectActiveBox.length == 1) {


        $(this).parent('.filemanager-bi-content-item-folder-box').removeClass('select-folder-active');
        $(this).html('');
        if ($('.select-folder-active').length == 0) {
            removeNavbarRightInfo();
            removeNavbarFolderToolsButton();
        } else {
            $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE + ' - ' + $('.select-folder-active').length);
        }

    } else {
        removeNavbarFolderToolsButton();
        addNavbarFolderToolsButton();
        $(this).parent('.filemanager-bi-content-item-folder-box').addClass('select-folder-active');
        $(this).html('<i class="fas fa-check"></i>');
        $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE + ' - ' + $('.select-folder-active').length);

    }

    /*   IF FOLDER SELECT -> HIDE FILES   */
    hideCheckboxFile();
})
/*  SELECT FOLDER END   */


/*   SELECT ALL FOLDER START   */
$(document).on('click', '#filemanager-bi-select-folder-all', function () {
    let selectAllFolder = $('.filemanager-bi-content-item-folder-box');
    var selectActiveBox = $('.select-folder-active');


    selectAllFolder.each(function (index, el) {

        var selectFolders = $(this).find('.filemanager-bi-select-folder');


        if (selectActiveBox.length != selectAllFolder.length) {
            $(this).addClass('select-folder-active');
            selectFolders.html('<i class="fas fa-check"></i>');
            $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE + ' - ' + $('.select-folder-active').length);

            removeNavbarFolderToolsButton();
            addNavbarFolderToolsButton();
        } else {
            $(this).removeClass('select-folder-active');
            selectFolders.html('');
            $('#filemanager-bi-information-right').html('');

            removeNavbarFolderToolsButton();
        }


    })

    /*   IF FOLDER SELECT -> HIDE FILES   */
    hideCheckboxFile();

})
/*   SELECT ALL FOLDER END   */

/*   DELETE SELECT FOLDER START   */
$(document).on('click', '#filemanager-bi-delete-select-folder', function () {

    const selectActiveFolder = $('.select-folder-active');

    if (selectActiveFolder.length == 1) {
        $('#filemanager-bi-remove-folders-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FOLDER_TRANSLATE + '</h4><br>' + selectActiveFolder.attr('data-folder-name'));
    } else {
        $('#filemanager-bi-remove-folders-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FOLDER_TRANSLATE + '</h4><br>' + FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE + ' - ' + selectActiveFolder.length);
    }


})

$(document).on('click', '#filemanager-bi-remove-folders-modal-success', function () {
    const selectActiveFolder = $('.select-folder-active');

    //Check folders ID & Ajax Post
    var dataFoldersID = [];
    selectActiveFolder.each(function () {
        const foldersID = $(this).attr('data-folder-id');
        dataFoldersID.push(foldersID);
        // $(this).remove();
    });

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFoldersID
    console.log(dataFoldersID);

    // removeNavbarRightInfo();
    // filemanagerModalClose()
})
/*   DELETE SELECT FOLDER END   */


/*   DELETE ONLY ONE FOLDER START   */
$(document).on('click', '.filemanager-bi-delete-one-folder', function () {
    const thisFolder = $(this).closest('.filemanager-bi-content-item-folder-box');
    $('.filemanager-bi-content-item-folder-box').removeClass('only-one-folder-active');
    thisFolder.addClass('only-one-folder-active');
    $('#filemanager-bi-remove-only-one-folder-modal').find('.filemanager-bi-modal-body').html('<h4>' + FILE_MANAGER_BI_DELETE_FOLDER_TRANSLATE + '</h4><br>' + thisFolder.attr('data-folder-name'));

})

$(document).on('click', '#filemanager-bi-remove-only-one-folder-modal-success', function () {

    const activeFolder = $('.only-one-folder-active');

    //Check files ID & Ajax Post
    var dataFolderID = activeFolder.attr('data-folder-id');

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFolderID
    console.log(dataFolderID);

    const selectActiveFolder = $('.select-folder-active');
    if (selectActiveFolder.length != 0) {
        $('#filemanager-bi-information-right').html(FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE + ' - ' + $('.select-folder-active').length);
    } else {
        removeNavbarRightInfo();
    }
    filemanagerModalClose()
})
/*   DELETE ONLY ONE FOLDER END   */

/*   CREATE NEW FOLDER START   */

$(document).on('click', '#filemanager-bi-new-folder-create', function () {
    const filemanagerNewFolderName = $('#file-manager-bi-new-folder-name').val();
    filemanagerForSetLocalStorage();

    if (filemanagerNewFolderName.length == 0) {
        filemanagerBiErrorMsg(true, 'Error bash verdi');
    } else {
        filemanagerBiErrorMsg(false);
        let data = {
            folderID: filemanagerForGetLocalStorage(),
            folderName: filemanagerNewFolderName
        };

        clearTimeout(CREATE_NEW_FOLDER_TIME_OUT);
        createNewFolderFileManaerBi(data);
    }


})

var CREATE_NEW_FOLDER_TIME_OUT,
    REMOVE_EFFECT_BOX_FILEMANAGER_BI;

function createNewFolderFileManaerBi(data) {
    CREATE_NEW_FOLDER_TIME_OUT = setTimeout(function () {

        $.ajax({
            type: "POST",
            url: FILE_MANAGER_BI_CREATE_NEW_FOLDER_ROUTE,
            data: data,
            dataType: 'JSON',
            success: function (response) {
                if (response.success) {
                    createNewFolderBoxFileManagerBi(response)
                    filemanagerBiInputsValEmpty();
                    filemanagerModalClose();
                } else {
                    console.log('Xeta');
                    filemanagerForSetLocalStorage();
                }

            }
        })

    }, 300);

}

function removeEffectBoxFilemanagerBi() {
    REMOVE_EFFECT_BOX_FILEMANAGER_BI = setTimeout(function () {

        $('.filemanager-bi-effect-box').removeClass('filemanager-bi-effect-box');

    }, 3000);
}

function createNewFolderBoxFileManagerBi(response) {
    /*   ADD FOLDER BOX   */
    $(".filemanager-bi-content-item-folder-box").first().before(`
                                        <div class="filemanager-bi-content-item-folder-box filemanager-bi-effect-box"
                     data-folder-id="${response.folder.id}"
                     data-folder-name="${response.folder.name}"
                >
                    <!--  SELECT FILE  -->
                    <div class="filemanager-bi-select-folder"></div>

                    <div class="filemanager-bi-content-item-folder-image">
                        <img src="${response.folder.folder_img}" alt="${response.folder.name}">
                    </div>
                    <div class="filemanager-bi-content-item-folder-info-mobile">
                        <div>${response.folder.name}</div>
                        <div>${response.folder.created_at}</div>
                        <div>${FILEMANAGER_FOLDER_COUNT_FILE_TRANSLATE}</div>
                    </div>
                    <div class="filemanager-bi-content-item-folder-name filemanager-bi-effect-box">${response.folder.name}</div>
                    <!-- FOLDER TOOLS  -->
                    <div class="filemanager-bi-content-item-folder-tools filemanager-bi-effect-box">
                        <i title="${FILEMANAGER_BI_EDIT_BUTTON_TEXT_TRANSLATE}" class="far fa-edit"></i>
                        <i
                            title="${FILEMANAGER_BI_DELETE_BUTTON_TEXT_TRANSLATE}"
                            class="far fa-trash-alt filemanager-bi-delete-one-folder"
                            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                            data-modal="#filemanager-bi-remove-only-one-folder-modal"
                        ></i>
                    </div>
                </div>
                    `);

    /*   REMOVE EFFECT   */
    clearTimeout(REMOVE_EFFECT_BOX_FILEMANAGER_BI);
    removeEffectBoxFilemanagerBi();

}

/*   CREATE NEW FOLDER END   */


/*   RENAME FODLER NAME START   */
/*   CONTEXT MENU RENAME ICON   */
$(document).on('click', '.filemanager-bi-context-menu-rename', function () {
    let filemanagerBiRenameFolderName = $('.select-folder-context-active').find('.filemanager-bi-content-item-folder-name').text();
    let filemanagerBiFolderID = $('.select-folder-context-active').attr('data-folder-id');

    $('#file-manager-bi-rename-folder-name').val(filemanagerBiRenameFolderName);
    $('#filemanager-bi-rename-folder-update').attr('data-update-folder-id', filemanagerBiFolderID);

})

/*   BOX RENAME ICON   */
$(document).on('click', '.filemanager-bi-menu-rename', function () {
    const thisFolder = $(this).closest('.filemanager-bi-content-item-folder-box');
    $('.filemanager-bi-content-item-folder-box').removeClass('only-one-folder-active');
    thisFolder.addClass('only-one-folder-active');

    let filemanagerBiRenameFolderName = thisFolder.find('.filemanager-bi-content-item-folder-name').text();
    let filemanagerBiFolderID = $('.only-one-folder-active').attr('data-folder-id');

    $('#file-manager-bi-rename-folder-name').val(filemanagerBiRenameFolderName);
    $('#filemanager-bi-rename-folder-update').attr('data-update-folder-id', filemanagerBiFolderID);


})


/*   MODAL   */
$(document).on('click', '#filemanager-bi-rename-folder-update', function () {
    let filemanagerBiFolderID = $(this).attr('data-update-folder-id');
    let filemanagerBiNewFolderName = $('#file-manager-bi-rename-folder-name').val();

    clearTimeout(FILEAMANGER_BI_RENAME_FOLDER_NAME);
    filemanagerBiRenameFolderName(filemanagerBiFolderID, filemanagerBiNewFolderName);

})


var FILEAMANGER_BI_RENAME_FOLDER_NAME;

function filemanagerBiRenameFolderName(folderID, folderName) {
    FILEAMANGER_BI_RENAME_FOLDER_NAME = setTimeout(function () {

        $.ajax({
            type: "POST",
            url: FILE_MANAGER_BI_RENAME_FOLDER_NAME_ROUTE,
            data: {
                folderID: folderID,
                folderName: folderName,
                currentFolder: localStorage.getItem('filemanager_bi_current_folder')
            },
            dataType: 'JSON',
            success: function (response) {
                if (response.success) {

                    $(".filemanager-bi-content-item-folder-box[data-folder-id='" + folderID + "']").find('.filemanager-bi-content-item-folder-name').text(response.fodlerName);

                    /*   REMOVE EFFECT   */
                    $(".filemanager-bi-content-item-folder-box[data-folder-id='" + folderID + "']").addClass('filemanager-bi-effect-box');
                    $(".filemanager-bi-content-item-folder-box[data-folder-id='" + folderID + "']").find('.filemanager-bi-content-item-folder-name').addClass('filemanager-bi-effect-box');

                    clearTimeout(REMOVE_EFFECT_BOX_FILEMANAGER_BI);
                    removeEffectBoxFilemanagerBi();
                    filemanagerModalClose()

                } else {
                    /*   ERROR   */
                    filemanagerBiErrorMsg(true, response.msg);

                }

            }
        })

    }, 300);

}


/*   RENAME FODLER NAME END   */


/*   CUT FOLDER START   */
$(document).on('click', '.filemanager-bi-context-menu-cut', function () {
    const thisFolder = $(this).closest('.filemanager-bi-content-item-folder-box');
    let folderID = thisFolder.attr('data-folder-id');

    localStorage.setItem('filemanager_bi_cut_folders_id', JSON.stringify([folderID]))

    $('#filemanager-bi-warning-menu-folder').hide();
    $('#filemanager-bi-info-cut-folder').hide();
    $('#filemanager-bi-cut-menu').show();

    filemanagerModalOpen('#filemanager-bi-cut-folders-modal');


})

function filemanagerBiSuccessMsg(msgText){
    $('#filemanager-bi-info-cut-folder').append(`<div class="filemanager-bi-success-msg">${msgText}</div>`);
}

function filemanagerBiErrorMsg(msgText){
    $('#filemanager-bi-info-cut-folder').append(`<div class="filemanager-bi-error-msg">${msgText}</div>`);
}


/*   CUT FOLDER ACTIVE START   */
$(document).on('click', '#filemanager-bi-cut-menu .filemanager-bi-main-menu-item-container', function () {
    $('#filemanager-bi-cut-menu  ul li .filemanager-bi-main-menu-item-container').removeClass('filemanager-bi-cut-folder-active')
    $(this).addClass('filemanager-bi-cut-folder-active');

    $('#filemanager-bi-modal-back-cut-folder').show();
    $('#filemanager-bi-warning-menu-folder').show();
    $('#filemanager-bi-cut-menu').hide();

})
/*   CUT FOLDER ACTIVE END   */


/*   CUT FOLDER BACK BUTTON START   */
$(document).on('click','#filemanager-bi-modal-back-cut-folder',function (){
    $(this).hide();
    $('#filemanager-bi-warning-menu-folder').hide();
    $('#filemanager-bi-cut-menu').show();
});
/*   CUT FOLDER BACK BUTTON END   */


$(document).on('click','#filemanager-bi-auto-rename',function (){
    let folderID = $('#filemanager-bi-cut-menu .filemanager-bi-cut-folder-active').attr('data-folder-id');
    clearTimeout(FILE_MANAGER_BI_CUT_FOLDER);
    setFileManagerCutFolder(1,folderID);
})

$(document).on('click','#filemanager-bi-next-folder',function (){
    let folderID = $('#filemanager-bi-cut-menu .filemanager-bi-cut-folder-active').attr('data-folder-id');
    clearTimeout(FILE_MANAGER_BI_CUT_FOLDER);
    setFileManagerCutFolder(2,folderID);
})

var FILE_MANAGER_BI_CUT_FOLDER;

function setFileManagerCutFolder(type,folderID) {
    FILE_MANAGER_BI_CUT_FOLDER = setTimeout(function () {


        $.ajax({
            type: "POST",
            url: FILE_MANAGER_BI_CUT_FOLDER_ROUTE,
            data: {
                type:type,
                cut_folder_id:localStorage.getItem('filemanager_bi_cut_folders_id'),
                folderID:folderID,
                current_folder:localStorage.getItem('filemanager_bi_current_folder')
            },
            dataType: 'JSON',
            success: function (response) {

                $('#filemanager-bi-info-cut-folder').html('');
                $('#filemanager-bi-modal-back-cut-folder').hide();

                if (response.success) {
                    console.log(response);

                    if(!response.msg.error){


                        if(response.msg.success_cut_folder.length !== 0){
                            response.msg.success_cut_folder.forEach(function (value){
                                $('.filemanager-bi-content-item-folder-box[data-folder-id="'+value+'"]').remove();
                            })
                        }

                        //COUNT FODLERS AND FILES
                        $('#filemanager-bi-information-left #filemanager-bi-folders-and-files-count').html(response.msg.folders_and_files_count);
                        let successMsg = FILE_MANAGER_BI_SUCCESS_CUT_FOLDERS_TRANSLATE+''+response.msg.success_cut_folder.length;
                        filemanagerBiSuccessMsg(successMsg);
                        $('#filemanager-bi-info-cut-folder').show();
                        $('#filemanager-bi-warning-menu-folder').hide();
                    }else {


                        $('#filemanager-bi-info-cut-folder').html('');
                        if(response.msg.exists_cut_folder){
                            let countSuccessFolder = 0;
                            if(response.msg.success_cut_folder.length !== 0){
                                response.msg.success_cut_folder.forEach(function (value){
                                    if(response.msg.error_cut_folder_id != value){
                                        $('.filemanager-bi-content-item-folder-box[data-folder-id="'+value+'"]').remove();
                                        countSuccessFolder = countSuccessFolder+1;
                                    }

                                })
                            }

                            //COUNT FODLERS AND FILES
                            $('#filemanager-bi-information-left #filemanager-bi-folders-and-files-count').html(response.msg.folders_and_files_count);

                            console.log(countSuccessFolder);
                            if(!response.msg.sub_folder_error || countSuccessFolder > 0){

                                let successMsg = FILE_MANAGER_BI_SUCCESS_CUT_FOLDERS_TRANSLATE+''+countSuccessFolder;
                                filemanagerBiSuccessMsg(successMsg);
                            }

                        }

                        if(response.msg.not_cut_folder && !response.msg.exists_cut_folder){
                            filemanagerBiErrorMsg(response.msg.error_text);
                        }

                        if(response.msg.not_exists_folder){
                            filemanagerBiErrorMsg(response.msg.error_text);
                        }

                        if(response.msg.sub_folder_error){
                            filemanagerBiErrorMsg(response.msg.error_text);
                        }

                        $('#filemanager-bi-info-cut-folder').show();
                        $('#filemanager-bi-warning-menu-folder').hide();

                    }



                    filemanagerBiGetFolders();
                    localStorage.removeItem('filemanager_bi_cut_folders_id');
                }



            }
        })

    }, 300);

}


/*   CUT FOLDER END   */


/*   FILES WIDTH & HEIGTH START  */
function filemanagerDetectedImageUrlSize(URL, callback) {
    let image = new Image();
    image.src = URL;
    image.onload = function () {
        let result = this.width + 'x' + this.height;
        callback(result);
    };
}

/*   FILES WIDTH & HEIGTH END  */


/*   MOUSE RIGHT CLICK START   */

$(document).on('contextmenu', '.filemanager-bi-content-item-folder-box', function (event) {
    $('.filemanager-bi-content-item-folder-box').removeClass('select-folder-context-active');
    $('.filemanager-bi-content-item-folder-box').removeClass('filemanagerBicontextMenuActive');
    $('.filemanager-bi-context-menu').hide();

    /*   BOX X & BOX Y   */
    $(this).find('.filemanager-bi-context-menu').css('top', event.pageY);
    $(this).find('.filemanager-bi-context-menu').css('left', event.pageX);
    $(this).find('.filemanager-bi-context-menu').show();


    $(this).addClass('filemanagerBicontextMenuActive');
    $(this).addClass('select-folder-context-active');
    return false;
})


$(document).on('click', function () {
    $('.filemanager-bi-context-menu').hide();
    $('.filemanager-bi-content-item-folder-box').removeClass('filemanagerBicontextMenuActive');
    $('.filemanager-bi-content-item-folder-box').removeClass('select-folder-context-active');
});

$(window.parent.document).on('click', function () {
    $('.filemanager-bi-context-menu').hide();
    $('.filemanager-bi-content-item-folder-box').removeClass('filemanagerBicontextMenuActive');
    $('.filemanager-bi-content-item-folder-box').removeClass('select-folder-context-active');
});

/*   MOUSE RIGHT CLICK END   */

/*   GET HOME PAGE START   */
var GET_FILEMANAGER_BI_HOME_PAGE;

function getHomePageFileManagerBi() {
    GET_FILEMANAGER_BI_HOME_PAGE = setTimeout(function () {

        $.ajax({
            type: "POST",
            url: FILEMANAGER_BI_GET_HOME_PAGE_ROUTE,
            data: {data: true},
            dataType: 'JSON',
            success: function (response) {
                if (response.success) {

                    console.log(response);

                    response.files.forEach(function (value) {


                        filemanagerDetectedImageUrlSize(value.url, function (result) {
                            console.log(result);
                        });


                    })
                } else {
                    console.log('Xeta');
                    filemanagerForSetLocalStorage();
                }

            }
        })

    }, 300);

}

$(document).on('click', '#filemanager-bi-get-home', function () {
    clearTimeout(GET_FILEMANAGER_BI_HOME_PAGE);
    getHomePageFileManagerBi();
})
/*   GET HOME PAGE END   */


/*   -------------------------------------------------------------------------------------------------   */

/*   DROPZONE FILE UPLOAD START   */

function fileIcon(name) {
    if (name.match(/\.png|gif|webp/)) {
        return 'png'
    }

    if (name.match(/\.jpe?g/)) {
        return 'jpg'
    } else if (name.match(/\.zip|rar/)) {
        return 'zip'
    } else if (name.match(/\.mp4/)) {
        return 'mp4'
    } else if (name.match(/\.mp3/)) {
        return 'mp3'
    } else if (name.match(/\.pdf/)) {
        return 'pdf'
    } else if (name.match(/\.txt/)) {
        return 'txt'
    }
    return 'doc'
}

function fileUpload(index) {
    const {file, el} = files[index]

    // console.log(file);

    if (file.size > FILEMANAGER_BI_MAX_UPLOAD_SIZE) {
        el.classList.add('error');
        el.querySelector('.error-text').innerText = 'Yüklenen dosya büyüklüğü fazla geldi hacı!';

        if (index + 1 < files.length) {
            fileUpload(index + 1)
        } else {
            resultText.innerText = `Dosyalar başarıyla yüklendi`
            resultText.classList.add('success')
        }

    } else {
        const formData = new FormData()
        formData.append('file_name', file);
        formData.append('test', 'mamed');

        el.classList.add('current')
        resultText.classList.remove('success')
        resultText.innerText = `Dosyalar yükleniyor.. (${index + 1}/${files.length})`

        const request = new XMLHttpRequest()

        request.addEventListener('error', function () {
            el.classList.add('error');
            el.querySelector('.error-text').innerText = 'Dosya yükleme işlemi iptal edildi.';
        });

        request.addEventListener('load', function () {
            const response = JSON.parse(this.response);
            /*   ERROR MSG   */
            if (response.data.error) {
                el.classList.add('error');
                el.querySelector('.error-text').innerText = response.data.msg;
            }

            //PREVIEW
            if (file.type == 'image/jpeg' || file.type == 'image/png') {
                el.querySelector('.icon img').setAttribute('src', 'data:image/jpeg;base64,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')
            }

            if (response.data.success) {
                el.classList.remove('current')
                el.classList.add('success')
            }


            console.log(response);

            if (index + 1 < files.length) {
                fileUpload(index + 1)
            } else {
                // yükleme işlemi bitmiş
                resultText.innerText = `Dosyalar başarıyla yüklendi`
                resultText.classList.add('success')
            }
        })

        request.upload.addEventListener('progress', function (e) {
            let percent = (e.loaded / e.total) * 100;
            el.querySelector('.bar span').style.width = percent + '%';
            el.querySelector('.percent-view').innerHTML = Math.ceil(percent) + '%';
        })

        //AJAX SEND
        request.open('POST', FILEMANAGER_BI_UPLOAD_FILE_ROUTE);
        request.setRequestHeader('X-CSRF-TOKEN', FILEMANAGER_BI_CSRF_TOKEN);
        request.send(formData);


    }

}

function abortUpload(btn) {
    const parent = btn.closest('.file')
    parent.classList.add('aborted');
    files = files.filter(({file, el}) => el !== parent)
}

const fileInput = document.querySelector('.filemanager-bi-dropzone-form input'),
    dropzoneForm = document.querySelector('.filemanager-bi-dropzone-form'),
    result = document.querySelector('.filemanager-bi-dropzone-result'),
    resultText = document.querySelector('.filemanager-bi-dropzone-result-text');

let files = [];

dropzoneForm.addEventListener('dragenter', () => dropzoneForm.classList.add('active'));
['dragleave', 'drop'].forEach(method => {
    dropzoneForm.addEventListener(method, () => dropzoneForm.classList.remove('active'))
})

fileInput.addEventListener('change', function () {
    files = [];
    [...this.files].map(file => {
        const item = document.createElement('div');
        item.className = 'file';
        item.innerHTML = `<div class="icon">
            <img class="preview" src="/vendor/file-manager-bi/images/extensions/${fileIcon(file.name)}.png">
        </div>
        <div class="file-inner">
            <div class="title">${file.name}</div>
            <div class="bar">
                <span style="width: 0%"></span>
            </div>
            <div class="percent-view"></div>
            <div class="error-text"></div>
            <button onclick="abortUpload(this)" class="abort-btn">Yüklemeyi İptal Et</button>
        </div>`
        result.appendChild(item);
        files.push({
            file,
            el: item
        })
    })
    fileUpload(0)
})
/*   DROPZONE FILE UPLOAD END   */
