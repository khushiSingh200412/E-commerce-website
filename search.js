const data = [
    { name: "Kids", file: "kids.html" },
    { name: "Electronic", file: "electronics.html" },
    { name: "Beauty & health", file: "beauty.html" },
    { name: "Ethnic", file: "ethnic.html" },
    { name: "Women", file: "women.html" },
    { name: "Home and kitchen", file: "home.html" },
    { name: "Men", file: "men.html" },
    { name: "Accessories", file: "accessories.html" },
    { name: "Beauty Product", file: "beauty_products.html" },
    { name: "Home Decor", file: "homedecor.html" },
    { name: "Sarees", file: "sarees.html" },
    { name: "Jewellery", file: "jewellery.html" },
    { name: "hand made", file: "check.html" },
    
    
];

function search() {
    const searchInput = document.getElementById('searchInput');
    const searchTerm = searchInput.value.toLowerCase();

    const result = data.find(item => item.name.toLowerCase().includes(searchTerm));

    if (result) {
        openFile(result.file);
    } else {
        alert('File not found.');
    }
}

function openFile(fileName) {
    
    const filePath = fileName;
    window.location.href = filePath;
}


document.getElementById('searchInput').addEventListener('keyup', function(event) {
    if (event.key === 'Enter') {
        search();
    }
});
function goToCartPage() {
    // Redirect to the cart/checkout page
    window.location.href = 'cart.html'; // Replace 'checkout.html' with the actual path of your cart/checkout page
}
