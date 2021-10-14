function color(elemento){
    var colores = ["red", "yellow"],
        cuenta = Number(elemento.dataset.cuenta);
    
    if (cuenta + 1 <= colores.length - 1){
        cuenta++;
    }
    else{
        cuenta = 0;
    }
    
    elemento.style.background = colores[cuenta];
    elemento.dataset.cuenta = cuenta;
}