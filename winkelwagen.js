document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsList = document.querySelector('.cart-items');
    const cartTotal = document.getElementById('cart-total');
    const paymentButton = document.getElementById('payment-button');
    const paymentForm = document.getElementById('payment-form');

    let cart = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const product = button.closest('.product');
            const productId = product.getAttribute('data-id');
            const productName = product.querySelector('h2').innerText;
            const productPrice = parseFloat(product.querySelector('p').innerText.slice(1));

            addToCart(productId, productName, productPrice);
            updateCartUI();
        });
    });

    function addToCart(id, name, price) {
        const existingItem = cart.find(item => item.id === id);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({
                id: id,
                name: name,
                price: price,
                quantity: 1
            });
        }
    }

    function updateCartUI() {
        cartItemsList.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const listItem = document.createElement('li');
            listItem.classList.add('cart-item');
            listItem.innerHTML = `
                <span>${item.name} x ${item.quantity}</span>
                <span>€${(item.price * item.quantity).toFixed(2)}</span>
            `;
            cartItemsList.appendChild(listItem);

            total += item.price * item.quantity;
        });

        cartTotal.innerText = total.toFixed(2);
    }

    paymentButton.addEventListener('click', function () {
        if (cart.length > 0) {
            // Hier een meer geavanceerde validatie uitvoeren voor de betaalgegevens.
            if (validatePaymentForm()) {
                const confirmation = confirm(`Totale bedrag: €${cartTotal.innerText}\nWilt u doorgaan met de betaling?`);

                if (confirmation) {
                    alert('Betaling geslaagd! Bedankt voor uw aankoop.');
                    // Hier verdere stappen kunnen ondernemen voor de echte betalingsverwerking.
                    // Bijvoorbeeld: het verzenden van de bestelling naar de server voor verwerking.
                    // Voor een echte implementatie zou je een betalingsgateway en serverzijde code moeten toevoegen.
                } else {
                    alert('Betaling geannuleerd.');
                }
            }
        } else {
            alert('Winkelwagen is leeg. Voeg producten toe voordat u gaat betalen.');
        }
    });

    function validatePaymentForm() {
        // Voer hier de validatie uit voor naam, bankgegevens, adres, en kortingscode.
        // Hier kun je bijvoorbeeld regex-patronen gebruiken voor het valideren van bankgegevens.
        // Voor een echte implementatie is het raadzaam om serverzijde validatie te gebruiken.
        const name = document.getElementById('name').value.trim();
        const cardNumber = document.getElementById('card-number').value.trim();
        const address = document.getElementById('address').value.trim();

        if (!name || !cardNumber || !address) {
            alert('Vul alle vereiste velden in.');
            return false;
        }

        return true;
    }
});

