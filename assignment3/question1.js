window.onload = function() {
 prepareListener();
}

function prepareListener() {
 var droppy;
 droppy = document.getElementById("pickaCustomer");
 droppy.addEventListener("change",getProduct);
}

function getProduct() {
this.form.submit();
}
