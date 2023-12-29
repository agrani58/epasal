document.addEventListener("DOMContentLoaded", function () {
    var seller__card = document.querySelectorAll(".seller__card");
console.log(2);
    // Iterate over each seller card
    for (var i = 0; i < seller__card.length; i++) {
        // Use a function to create a closure for each iteration
        // Find the input and buttons within the current seller card
        var card = seller__card[i];
        var quantityInput = card.querySelector('.qtygroup__input');
        var increaseButton = card.querySelector('.qtygroup__btn--inc');
        var decreaseButton = card.querySelector('.qtygroup__btn--dec');
        var addToCartButton = card.querySelector(".seller__btn--cart");

        // Add click event listener for the increase button
        increaseButton.addEventListener('click', function () {
            var totalQuantity = parseInt(quantityInput.value);

            if (totalQuantity < 10) {
                // Increase the input value by 1
                totalQuantity++;
                quantityInput.value = totalQuantity;
            }
        });

        // Add click event listener for the decrease button
        decreaseButton.addEventListener('click', function () {
            var totalQuantity = parseInt(quantityInput.value);

            // Ensure the input value is greater than 1 before decreasing
            if (totalQuantity > 1) {
                // Decrease the input value by 1
                totalQuantity--;
                quantityInput.value = totalQuantity;
            }
        });

        // Add click event listener for the "Add to Cart" button
        addToCartButton.addEventListener('click', function () {
            // Calculate and log the total quantity
            var totalQuantity = parseInt(quantityInput.value);
            console.log("totalQuantity", totalQuantity);
        });
    }
});
