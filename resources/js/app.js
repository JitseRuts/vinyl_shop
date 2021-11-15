require('./bootstrap');

// Make 'VinylShop' accessible inside the HTML pages
import VinylShop from "./vinylShop";
window.VinylShop = VinylShop;
// Run the hello() function
VinylShop.hello();

$('[required]').each(function () {
    $(this).closest('.form-group')
        .find('label')
        .append('<sup class="text-danger mx-1">*</sup>');
});
