// checkout.js

document.addEventListener('DOMContentLoaded', function () {
    // Fetch and display order details on checkout
    updateCheckoutDetails();
});

function updateCheckoutDetails() {
    const orderItemDiv = document.getElementById('orderItem');
    const totalDiv = document.getElementById('total');
    const orderDetailsInput = document.getElementById('order_details');

    // Retrieve cart data from local storage
    const storedCart = localStorage.getItem('cart');
    const cart = storedCart ? JSON.parse(storedCart) : [];

    if (cart.length === 0) {
        orderItemDiv.innerHTML = "Your order details go here";
        totalDiv.innerHTML = "₹ 0.00";
    } else {
        let orderDetailsHTML = "";
        let orderTotal = 0;

        cart.forEach((item) => {
            const { title, price } = item;
            orderDetailsHTML += `
                <p><strong>${title}</strong> - ₹ ${price.toFixed(2)}</p>
            `;

            orderTotal += price;
        });

        orderItemDiv.innerHTML = orderDetailsHTML;
        totalDiv.innerHTML = `₹ ${orderTotal.toFixed(2)}`;

        // Update the hidden input field with the order details
        orderDetailsInput.value = JSON.stringify(cart);
    }
}

function placeOrder() {
    // Update the hidden input field with the total amount before placing the order
    const storedCart = localStorage.getItem('cart');
    const cart = storedCart ? JSON.parse(storedCart) : [];
    document.getElementById('order_total').value = cart.reduce((total, item) => total + item.price, 0);

    // For simplicity, you can redirect to the checkout page after updating the total
    window.location.href = "process_order.php";
}
