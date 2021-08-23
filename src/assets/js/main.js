$(function () {
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

/*   REMOVE RIGHT NAVBAR INFO START   */
function removeNavbarRightInfo() {
    $('#filemanager-bi-information-right').html('');
}
/*   REMOVE RIGHT NAVBAR INFO END   */


/*   FILE NAVBAR FUNCTION START   */
function addNavbarToolsButton() {
    /*   DELETE BUTTON   */
    $('.filemanager-bi-select-navbar-file-box').append(`<div id="filemanager-bi-delete-select-file"
        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#remove-files-modal"
         title="${deleteAllFileTranslate}">
        <i class="fas fa-trash-alt"></i>
    </div>`);
}

function removeNavbarToolsButton() {
    /*   DELETE BUTTONS   */
    $('#filemanager-bi-delete-select-file').remove();
}
/*   FILE NAVBAR FUNCTION END   */




/*   FOLDER NAVBAR FUNCTION START   */
function addNavbarFolderToolsButton() {
    /*   DELETE BUTTON   */
    $('.filemanager-bi-select-navbar-folder-box').append(`<div id="filemanager-bi-delete-select-folder"
        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#remove-folders-modal"
         title="${deleteAllFolderTranslate}">
      <i class="fas fa-trash"></i>
    </div>`);
}

function removeNavbarFolderToolsButton() {
    /*   DELETE BUTTONS   */
    $('#filemanager-bi-delete-select-folder').remove();
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

var mobileItems = document.querySelectorAll('#filemanager-bi-slide-out .filemanager-bi-nav-mobile .filemanager-bi-main-menu li.filemanager-bi-menu-item-has-children');
[].forEach.call(mobileItems, function (el) {
    var i = document.createElement('i');
    i.setAttribute('class', 'filemanager-bi-mobile-arrows fas fa-caret-right');
    el.appendChild(i);
});

var li_i = document.querySelectorAll('li.filemanager-bi-menu-item-has-children i.filemanager-bi-mobile-arrows');
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


$(document).on('click', '.filemanager-bi-main-menu-item-container', function () {

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
            removeNavbarToolsButton();
        } else {

            $('#filemanager-bi-information-right').html(selectFileTranslate + ' - ' + $('.select-file-active').length);
        }

    } else {
        removeNavbarToolsButton();
        addNavbarToolsButton();
        $(this).parent('.filemanager-bi-content-item-box').addClass('select-file-active');
        $(this).html('<i class="fas fa-check"></i>');
        $('#filemanager-bi-information-right').html(selectFileTranslate + ' - ' + $('.select-file-active').length);

    }
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
            $('#filemanager-bi-information-right').html(selectFileTranslate + ' - ' + $('.select-file-active').length);

            removeNavbarToolsButton();
            addNavbarToolsButton();
        } else {
            $(this).removeClass('select-file-active');
            selectFiles.html('');
            $('#filemanager-bi-information-right').html('');

            removeNavbarToolsButton();
        }


    })


})
/*   SELECT ALL FILE END   */


/*   DELETE SELECT FILE START   */
$(document).on('click', '#filemanager-bi-delete-select-file', function () {
    const selectActiveFile = $('.select-file-active');

    if (selectActiveFile.length == 1) {
        $('#remove-files-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFiletextTranslate+'</h4><br>' + selectActiveFile.attr('data-file-name'));
    } else {
        $('#remove-files-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFiletextTranslate+'</h4><br>' + selectFileTranslate + ' - ' + selectActiveFile.length);
    }



})

$(document).on('click','#remove-files-modal-success',function (){
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
    $('#remove-only-one-file-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFiletextTranslate+'</h4><br>' + thisFile.attr('data-file-name'));

})

$(document).on('click','#remove-only-one-file-modal-success',function (){

    const activeFile = $('.only-one-file-active');

    //Check files ID & Ajax Post
    var dataFileID = activeFile.attr('data-file-id');

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFileID
    // console.log(dataFileID);

    const selectActiveFile = $('.select-file-active');
    if(selectActiveFile.length != 0){
        $('#filemanager-bi-information-right').html(selectFileTranslate + ' - ' + $('.select-file-active').length);
    }else {
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

            $('#filemanager-bi-information-right').html(selectFolderTranslate + ' - ' + $('.select-folder-active').length);
        }

    } else {
        removeNavbarFolderToolsButton();
        addNavbarFolderToolsButton();
        $(this).parent('.filemanager-bi-content-item-folder-box').addClass('select-folder-active');
        $(this).html('<i class="fas fa-check"></i>');
        $('#filemanager-bi-information-right').html(selectFolderTranslate + ' - ' + $('.select-folder-active').length);

    }
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
            $('#filemanager-bi-information-right').html(selectFolderTranslate + ' - ' + $('.select-folder-active').length);

            removeNavbarFolderToolsButton();
            addNavbarFolderToolsButton();
        } else {
            $(this).removeClass('select-folder-active');
            selectFolders.html('');
            $('#filemanager-bi-information-right').html('');

            removeNavbarFolderToolsButton();
        }


    })


})
/*   SELECT ALL FOLDER END   */

/*   DELETE SELECT FOLDER START   */
$(document).on('click', '#filemanager-bi-delete-select-folder', function () {

    const selectActiveFolder = $('.select-folder-active');

    if (selectActiveFolder.length == 1) {
        $('#remove-folders-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFoldertextTranslate+'</h4><br>' + selectActiveFolder.attr('data-folder-name'));
    } else {
        $('#remove-folders-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFoldertextTranslate+'</h4><br>' + selectFolderTranslate + ' - ' + selectActiveFolder.length);
    }



})

$(document).on('click','#remove-folders-modal-success',function (){
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
    $('#remove-only-one-folder-modal').find('.filemanager-bi-modal-body').html('<h4>'+deleteFoldertextTranslate+'</h4><br>' + thisFolder.attr('data-folder-name'));

})

$(document).on('click','#remove-only-one-folder-modal-success',function (){

    const activeFolder = $('.only-one-folder-active');

    //Check files ID & Ajax Post
    var dataFolderID = activeFolder.attr('data-folder-id');

    //Bunu ajaxla qarshi terefe gondereceysen
    // dataFolderID
    // console.log(dataFolderID);

    const selectActiveFolder = $('.select-folder-active');
    if(selectActiveFolder.length != 0){
        $('#filemanager-bi-information-right').html(selectFolderTranslate + ' - ' + $('.select-folder-active').length);
    }else {
        removeNavbarRightInfo();
    }
    filemanagerModalClose()
})
/*   DELETE ONLY ONE FOLDER END   */
