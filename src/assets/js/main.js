$(function () {
    $('#filemanager-bi').show();

    var windowHeight = $(window).height() - 100;
    $('.filemanager-bi-container').css('height', windowHeight + 'px')

    $(window).resize(function () {
        windowHeight = $(window).height() - 100;
        $('.filemanager-bi-container').css('height', windowHeight + 'px')
    });
})


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


// LEFT MENU START

var mobileItems = document.querySelectorAll('#filemanager-bi-slide-out .filemanager-bi-nav-mobile .filemanager-bi-main-menu li.filemanager-bi-menu-item-has-children');
[].forEach.call(mobileItems, function(el){
    var i = document.createElement('i');
    i.setAttribute('class','filemanager-bi-mobile-arrows fas fa-caret-right');
    el.appendChild(i);
});

var li_i = document.querySelectorAll('li.filemanager-bi-menu-item-has-children i.filemanager-bi-mobile-arrows');
[].forEach.call(li_i, function(el){
    el.addEventListener('click', function(){
        if(this.className.indexOf('fa-caret-right') != -1){
            this.classList.remove("fa-caret-right");
            this.classList.add("fa-caret-down");
        }else{
            this.classList.remove("fa-caret-down");
            this.classList.add("fa-caret-right");
        }

        var ul = this.parentNode.querySelectorAll('ul')[0];
        ul.style.display = ul.offsetParent === null ? 'block' : 'none';

    });
});


$(document).on('click','.filemanager-bi-main-menu-item-container',function (){

    $('.filemanager-bi-main-menu ul li .filemanager-bi-main-menu-item-container').removeClass('filemanager-bi-mobile-menu-active')
    $(this).addClass('filemanager-bi-mobile-menu-active');
    $('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').removeClass('fa-folder-open');
    $('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').addClass('fa-folder');

    $('.filemanager-bi-mobile-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').removeClass('fa-folder');
    $('.filemanager-bi-mobile-menu-active').find('.filemanager-bi-main-menu-item-left .filemanager-bi-main-menu-item-folder i').addClass('fa-folder-open');


})



// LEFT MENU END

