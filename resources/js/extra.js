// tootip
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });

$(document).ready(function () {
    var price = 100000;
    $('.paystack-1000').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').hide();
        $('.paystack-5000, .paystack-10000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('value', 100000);
    });

    $('.paystack-5000').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').hide();
        $('.paystack-1000, .paystack-10000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('value', 500000);
    });

    $('.paystack-10000').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').hide();
        $('.paystack-1000, .paystack-5000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('value', 1000000);
    });

    $('.paystack-50000').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').hide();
        $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-100000, .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('value', 5000000);
    });

    $('.paystack-100000').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').hide();
        $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-50000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('value', 10000000);
    });

    $('.paystack-other').click(function () {
        $(this).addClass('btn-success');
        $('.d-none-amount').show();
        $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-50000,  .paystack-100000').addClass('btn-outline-success').removeClass('btn-success');
        $('input.amount').attr('type', 'number');
        $amount = $('input.amount').attr() * 100;
        $('input.amount').attr('value', $amount);

    });
  })

// hover
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
