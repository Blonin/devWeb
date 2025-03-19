function ajout(object, stock){
    var qty=parseInt(document.getElementById(object).innerHTML);
    if(( qty < Number(stock)) && (qty >= 0 )){
        qty++;
        document.getElementById(object).innerHTML= qty;
    }
}

function moins(object, stock){
    var qty=parseInt(document.getElementById(object).innerHTML);
    if(( qty <= Number(stock)) && (qty > 0 )){
        qty--;
        document.getElementById(object).innerHTML= qty;
    }
}

function display() {
    var element = document.getElementsByClassName("stock");
    console.log(element);
    for (let i = 0; i < element.length; i++) {
        if (element[i].style.display ==="none") {
            element[i].style.display ="block"
        } else {
            element[i].style.display ="none"
        }        
    }
}

