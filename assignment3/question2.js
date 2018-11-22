
window.onload = function() {
 prepareListener();
}

function prepareListener() {
 var radio1;
 radio1 = document.getElementsByName("orderby");
//for(var i=0;i<2;i++)
// if(this.order>=0)
// { radio1[this.order].checked=true;}
 radio1[0].addEventListener('change',function(){getOrder(0,this.form);});
 radio1[1].addEventListener('change',function(){getOrder(1,this.form);});


var radio2;
 radio2 = document.getElementsByName("AtoZ");
//for(var i=0;i<2;i++)
//{
// if(this.acces>=0)
//{radio2[this.acces].checked=true;}
 radio2[0].addEventListener('change',function(){getAccen(0,this.form);});
 radio2[1].addEventListener('change',function(){getAccen(1,this.form);});

//alert("done");
}

function getOrder(id,form){
this.order=id;
if(this.acces>=0)
{
form.submit();
//getProduct();
}
}

function getAccen(id,form){
this.acces=id;
if(this.order>=0)
{
form.submit();
}
}
