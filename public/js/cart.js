class Cart {
    constructor() {
        this.cartData = JSON.parse(this.getCookie('cart')) || {};
        this.cartEl = document.querySelector(".cart__badge");
        this.cartEl.innerText = this.getQuantity();
    }

    getQuantity() {
        let quantityArr = Object.values(this.cartData);
        let total = quantityArr.reduce((total, curr) => total += curr, 0)
        return total;
    }

    addProduct(productId, quantity) {
        if (isNaN(productId) === false && isNaN(quantity) === false) {
            this.cartData[productId] = (this.cartData[productId] || 0) + quantity;
            this.saveCart();
        }
    }

    updateProduct(productId, quantity) {
        if (isNaN(productId) === false && isNaN(quantity) === false) {
            this.cartData[productId] = quantity;
            this.saveCart();
        }
    }

    deleteProduct(productId) {
        if (isNaN(productId) === false) {
            delete this.cartData[productId];
            this.saveCart();
        }
    }

    saveCart() {
        this.setCookie('cart', JSON.stringify(this.cartData));
        this.cartEl.innerText = this.getQuantity();
    }

    getCookie(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    setCookie(name, value) {
        document.cookie = name + '=' + value + '; path=/';
    }
}
