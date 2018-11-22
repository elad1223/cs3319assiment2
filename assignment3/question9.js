window.onload = function() {
 prepareListener();
}

function prepareListener() {
 var droppy;
 droppy = document.getElementById("pickaProduct");
 droppy.addEventListener("change",getProduct);
}

function getProduct() {
this.form.submit();
}
