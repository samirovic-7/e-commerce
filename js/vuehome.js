    var app = new Vue({

        el: "#app",
        data: {
            price: document.getElementById("price").innerHTML,
            amount: 1

        },
        computed: {
            total: function() {
                return this.price * this.amount;
            }
        }
    });