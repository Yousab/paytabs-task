$(document).ready(() => {

    jQuery(function ($) {

        $(document).on('change', '.categories-dropdown select', function () {
            var categoryName = $(this).children("option").filter(":selected").text();
            var select = this;

            $.ajax({
                url: BASE_URL + "category/sub/" + $(this).val(),
            })
                .done(function (data) {
                    var html = '';
                    var categories = JSON.parse(data).categories;

                    //Remove html data if event is triggered on previous dropdown
                    if ($(select).parent().siblings().length) {
                        $(select).parent().nextAll('div').remove();
                    }

                    if (categories.length) {
                        html = '<div data-animate="fadeInUp" class="col-lg-4 categories-dropdown animated fadeInUp">';
                        html += '<h3 class="heading mb-3 text-400">' + categoryName + '</h3>';
                        html += '<select class="form-control select-lg mb-3" name="parent_category">';
                        html += '<option selected>Select Category</option>';
                        categories.forEach(category => {
                            html += '<option value="' + category.id + '">' + category.name + '</option>'
                        });
                        html += '<div>';
                    } else {
                        html = '<div data-animate="fadeInUp" class="col-lg-12 categories-dropdown animated fadeInUp">';
                        html += '<h5>There is no other sub-categories</h5></div>'
                    }
                    $(select).parent().after(html);
                });
        });
    });

});
