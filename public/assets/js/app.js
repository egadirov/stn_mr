

$(document).ready(function () {

  // Toggle left sidebar menu.
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
  });

  // Add active class to menu item on click.
  $("li").click(function(){
    if (!$(this).hasClass("active")) {
      $("li.active").removeClass("active");
      $(this).addClass("active");
    }
  });


  var
    classesSelect = $("#class_select"),
    productsSelect = $("#product_types_select"),
    categoriesSelect = $("#categories_select")


  classesSelect.change(function () {
    removeOptions(productsSelect);
    removeOptions(categoriesSelect);

    let childElements = $(this).find(':selected').data("select")

    if (childElements === undefined) return;

    productsSelect.removeAttr('disabled')

    addOptions(productsSelect, childElements);
  });

  productsSelect.change(function () {
    removeOptions(categoriesSelect);

    let childElements = $(this).find(':selected').data("select")

    if (childElements === undefined) return;

    categoriesSelect.removeAttr('disabled')

    addOptions(categoriesSelect, childElements);
  });


  function addOptions(target, options) {
    options.map((option) => {
      var res = Object.values(option).filter((em) => typeof em === 'object')[0]
      target.append($('<option>')
        .val(option.id)
        .text(option.name)
        .attr('data-select', res !== undefined ? JSON.stringify(res) : '')
      )
    })
  }

  function removeOptions(target) {
    // $(target).empty().append($('<option>').text('--').attr('disabled', 'disabled'))
    $(target).empty().append($('<option>').text('--'))
  }

  function getDataAttr() {
    let childElements = $(this).find(':selected').data("select")

    if (childElements === undefined) return;

  }
});

