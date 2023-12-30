document.addEventListener("DOMContentLoaded", function () {
    var seller__card = document.querySelectorAll(".product__card");

    // Function to handle each seller card
    function handleSellerCard(card) {
        var quantityInput = card.querySelector('.qtygroup__input');
        var increaseButton = card.querySelector('.qtygroup__btn--inc');
        var decreaseButton = card.querySelector('.qtygroup__btn--dec');
        var addToCartButton = card.querySelector(".seller__btn--cart");
        var totalQuantity = parseInt(quantityInput.value);

        // Add click event listener for the increase button
        increaseButton.addEventListener('click', function () {

            if (totalQuantity < 10) {
                totalQuantity++;
                quantityInput.value = totalQuantity;
            }
        });

        // Add click event listener for the decrease button
        decreaseButton.addEventListener('click', function () {
            if (totalQuantity > 1) {
                totalQuantity--;
                quantityInput.value = totalQuantity;
            }
        });

        // Add click event listener for the "Add to Cart" button
        if(addToCartButton != null) {
            addToCartButton.addEventListener('click', function () {
                alert("totalQuantity " +  totalQuantity);
            });
        }
    }

    // Iterate over each seller card and call the handling function
    for (var i = 0; i < seller__card.length; i++) {
        handleSellerCard(seller__card[i]);
    }
});
