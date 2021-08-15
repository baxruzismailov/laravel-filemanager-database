$(function (){
    $('#filemanager-bi').show();

    var windowHeight = $(window).height() - 100;
    $('.filemanager-bi-container').css('height',windowHeight+'px')

    $( window ).resize(function() {
         windowHeight = $(window).height() - 100;
        $('.filemanager-bi-container').css('height',windowHeight+'px')
    });
})



/*   MODAL START   */
// Initialize All Required DOM Elements
var modalOverlay = '';
const modalOpen = document.querySelector(".modalOpen");
const modalClose = document.querySelector(".modalClose");


function filemanagerModalOpen(clickID){
    modalOverlay = document.querySelector(clickID);
    modalOverlay.classList.add("visible");
    let modalOverlayClass = document.querySelector(".modalOverlayClass");
    modalOverlayClass.innerHTML = clickID;
}


// Initialize Close Modal by Click Button


function filemanagerModalClose(){
    modalOverlayClass();
}


// Initialize Close Modal by Click Outside
window.addEventListener("click", (e) => {
    if (e.target === modalOverlay) {
        modalOverlayClass();
    }
});

function modalOverlayClass(){
    let modalOverlayClass = document.querySelector(".modalOverlayClass").innerHTML;
    modalOverlay = document.querySelector(modalOverlayClass);
    modalOverlay.classList.remove("visible");
    document.querySelector(".modalOverlayClass").innerHTML = '';
}
/*   MODAL END   */


// MAIN MENU
const $mainMenu = $("#mainMenu");
const $autoNav = $("#autoNav");
const $autoNavMore = $("#autoNavMore");
const $autoNavMoreList = $("#autoNavMoreList");
autoNavMore = () => {
    let childNumber = 2;

    if ($(window).width() >= 300) {
        // GET MENU AND NAV WIDTH
        const $menuWidth = $mainMenu.width();
        const $autoNavWidth = $autoNav.width();
        if ($autoNavWidth > $menuWidth) {
            // CODE FIRES WHEN WINDOW SIZE GOES DOWN
            $autoNav
                .children(`.responsiveNav:nth-last-child(${childNumber})`)
                .prependTo($autoNavMoreList);
            autoNavMore();
        } else {
            // CODE FIRES WHEN WINDOW SIZE GOES UP
            const $autoNavMoreFirst = $autoNavMoreList
                .children(".responsiveNav:first-child")
                .width();
            // CHECK IF ITEM HAS ENOUGH SPACE TO PLACE IN MENU
            if ($autoNavWidth + $autoNavMoreFirst < $menuWidth) {
                $autoNavMoreList.children(".responsiveNav:first-child").insertBefore($autoNavMore);
            }
        }
        if ($autoNavMoreList.children().length > 0) {
            $autoNavMore.show();
            childNumber = 2;
        } else {
            $autoNavMore.hide();
            childNumber = 1;
        }
    }
};
// INIT
$(function (){
    autoNavMore();
})


$( window ).resize(function() {
    autoNavMore();
    // console.log($( window ).width());
});
// MAIN MENU END

