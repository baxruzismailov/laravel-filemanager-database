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

//REMOVE RIGHT NAVBAR INFO
function removeNavbarRightInfo() {
    $('#filemanager-bi-information-right').html('');
}

function addNavbarToolsButton() {
    /*   DELETE BUTTON   */
    $('#left-navbar-item').append(`<div id="filemanager-bi-delete-select-file"
        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#remove-files-modal"
         title="${deleteAllFileTranslate}">
        <i class="fas fa-trash-alt"></i>
    </div>`);
}

function removeNavbarToolsButton() {
    /*   DELETE BUTTONS   */
    $('#filemanager-bi-delete-select-file').remove();
}

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
