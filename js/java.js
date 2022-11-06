    var arrowdown = document.getElementById("fontawson");
    const cartheart = document.querySelectorAll(".cartheart");
    const buttoncart = document.querySelectorAll(".buttoncart");


    buttoncart.forEach(item => {
        item.addEventListener("click", function(e) {
            e.target.innerHTML = "Product added <i class='bi bi-check-circle'></i>";
            e.target.style.width = "45%";
            e.target.style.left = "51%";
            e.target.style.background = "rgba(37, 103, 169,.8)";
        });
    });

    window.onscroll = function() {

        if (window.pageYOffset > 500) {
            arrowdown.style.display = 'block';
        } else {
            arrowdown.style.display = 'none';

        };
    };

    arrowdown.onclick = function() {
        window.scrollTo(0, 0);
    };


    cartheart.forEach(item => {
        item.addEventListener("click", function(e) {
            e.target.classList.toggle('large');
        });

    });


    // function click() {
    //     var Request;
    //     if (window.XMLHttpRequest) {
    //         Request = new XMLHttpRequest();
    //     } else {
    //         Request = new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     Request.onreadystatechange = myDate;

    //     Request.open("GET", "select.php", true);
    //     Request.send();

    // }
    // click();

    // function myDate() {
    //     var div = document.getElementById("tbody");
    //     if (this.readyState == 4 && this.status == 200) {
    //         div.innerHTML = this.responseText;
    //     } else if (this.readyState > 0 && this.readyState < 4) {
    //         div.innerHTML = "<div> Wait....! </div>"
    //     } else {
    //         div.innerHTML = "<div>error.........!   </div>"
    //     }
    // }
    // document.getElementById("butt").onclick = click;

    // function insert() {
    //     var Request;
    //     var name = document.getElementById("name").value;
    //     var age = document.getElementById("age").value;
    //     var phone = document.getElementById("phone").value;
    //     if (window.XMLHttpRequest) {
    //         Request = new XMLHttpRequest();
    //     } else {
    //         Request = new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     Request.onreadystatechange = function myDate() {
    //         var div = document.getElementById("tbody");
    //         click();
    //         document.getElementById("name").value = "";
    //         document.getElementById("age").value = "";
    //         document.getElementById("phone").value = "";
    //         if (this.readyState == 4 && this.status == 200) {
    //             div.innerHTML = this.responseText;
    //         } else if (this.readyState > 0 && this.readyState < 4) {
    //             div.innerHTML = "<div> Wait....! </div>"
    //         } else {
    //             div.innerHTML = "<div>error.........!   </div>"
    //         }
    //     }


    //     Request.open("POST", "insert.php", true);
    //     Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     Request.send("name=" + name +
    //         "&age=" + age +
    //         "&phone=" + phone
    //     );
    //     return false;
    // };