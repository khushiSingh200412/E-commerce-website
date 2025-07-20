// Retrieve order details from local storage
const orderDetails = JSON.parse(localStorage.getItem('orderDetails'));

// Display order details
document.getElementById('orderDetails').innerHTML = orderDetails.map((item) => {
    return `
        <div class='order-item'>
            <img class='order-img' src='${item.image}'>
            <p>${item.title}</p>
            <h2>$ ${item.price}.00</h2>
        </div>
    `;
}).join('');
