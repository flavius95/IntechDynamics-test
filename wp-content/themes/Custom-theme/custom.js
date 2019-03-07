/*Function used to append html into modal body*/
function handleModal(html) {
    $('#mainModal').on('show.bs.modal', function (event) {
        var button = $(event.related);
        if ($(event.relatedTarget).hasClass('slider-item')) {
            var image = $(event.relatedTarget).find('img').get(0);
            html = '<img src="'+$(image).attr('src')+'" />';
        }

        $(".modal-body").html(html);
    });
}

/*Put show class on the dropdown*/
function customDropdown() {
    $('#categoriesDropdown').toggleClass("show");
}

/*Shows the dropdown categories*/
window.onclick = function (event) {
    if (!event.target.matches('.dropbutton')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/*An attempt to filter the category products list*/
function filterList(value) {
    var list = $('.products-select .category-item');
    $(list).fadeOut("fast");
    $(".products-select").find("li[data-category*=" + value +"]").each(function (i) {
        $(this).delay(200).slideDown("fast");
    });
}

/*Get the items that are checked and their image html for the pop-up modal*/
function showSelectedProducts() {
    if($('.products-select input[type="radio"]').is(":checked")){
        var items = $(".products-select .category-item");
        var productsHTML = "";
        for (var i = 0; i < items.length; i++) {
            var prods = $(items[i]).find('input[type="radio"]');
            for (var j = 0; j < prods.length; j++) {
                if($(prods[j]).is(':checked')) {
                    var image = $(items[i]).find('img').get(0);
                    productsHTML += '<img src="'+$(image).attr('src')+'" /><br/>';
                }
            }
        }
    } else {
        productsHTML = '<div>You must select at least one item.</div>';
    }

    handleModal(productsHTML);
    $("#mainModal").modal('show');
}

/*Append image html into modal body*/
$(document).ready(function () {
    handleModal();

    /*Change the text of the dropdown button*/
    $('.dropdown-content a').on('click', function(){
        var currentCat = $(this).text();
        var categ = $(this).attr("data-name");
        filterList(categ);
        $(".dropbutton").text(currentCat);
    });

    /*Filter products by categories*/
    $('select#products-select').change(function () {
        var filter = $(this).val()
        filterList(filter);
    });

    /*
    * Slider carousel with interval=false so that if we wanna make
    * it slide at some time interval
    * we can do so.
     */

    $('#recipeCarousel').carousel({
        interval: false
    })

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });


});

