document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.getElementById('cart-items');
    const clearCartButton = document.getElementById('clear-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    clearCartButton.addEventListener('click', clearCart);

    function addToCart(event) {
        const productItem = event.target.parentNode;
        const productId = productItem.dataset.id;
        const productName = productItem.dataset.name;
        const productPrice = productItem.dataset.price;

        const cartItem = document.createElement('li');
        cartItem.innerHTML = `${productName} - $${productPrice} <button class="remove-from-cart" data-id="${productId}">Remove</button>`;
        cartItemsContainer.appendChild(cartItem);

        // Save to cart in backend (you would send an AJAX request to the server to update the cart)
    }

    // Event delegation for dynamically added remove buttons
    cartItemsContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-from-cart')) {
            const itemId = event.target.dataset.id;
            const itemToRemove = document.querySelector(`[data-id="${itemId}"]`);
            itemToRemove.remove();

            // Remove from cart in backend (send AJAX request to the server)
        }
    });

    function clearCart() {
        cartItemsContainer.innerHTML = '';

        // Clear cart in backend (send AJAX request to the server to clear the cart)
    }
});
