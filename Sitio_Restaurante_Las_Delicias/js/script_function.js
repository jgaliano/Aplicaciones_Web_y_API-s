let stockDesayunos = [
    {id: 1, nombre: "Panqueques", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 40, img: '../media/Desayuno/Desayuno_1.jpg'},
    {id: 2, nombre: "Desayuno Griego", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 50, img: '../media/Desayuno/Desayuno_2.jpg'},
    {id: 3, nombre: "Desayuno Chapin", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 45, img: '../media/Desayuno/Desayuno_3.jpg'},
    {id: 4, nombre: "Omelette", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 55, img: '../media/Desayuno/Desayuno_4.jpg'},
    {id: 5, nombre: "Desayuno Salvadoreño", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 35, img: '../media/Desayuno/Desayuno_5.jpg'},
    {id: 6, nombre: "Desayuno Suizo", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 50, img: '../media/Desayuno/Desayuno_6.jpg'}
];

let stockAlmuerzos = [
    {id: 1, nombre: "Alfredo Pomodora", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 45, img: '../media/Almuerzo/Almuerzo_1.jpg'},
    {id: 2, nombre: "Buffalo-Ranch Chicken", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1,ntidad: 1, precio: 55, img: '../media/Almuerzo/Almuerzo_2.jpg'},
    {id: 3, nombre: "Super Especial Camarón", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 65, img: '../media/Almuerzo/Almuerzo_3.jpg'},
    {id: 4, nombre: "Cheeseburger Pizza", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 40, img: '../media/Almuerzo/Almuerzo_4.jpg'},
    {id: 5, nombre: "Cheese Lovers", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 60, img: '../media/Almuerzo/Almuerzo_5.jpg'},
    {id: 6, nombre: "Chicken Ranch", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3",cantidad: 1, precio: 50, img: '../media/Almuerzo/Almuerzo_6.jpg'}
];

let stockCenas = [
    {id: 1, nombre: "Chilaquiles Verdes", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 50, img: '../media/Cena/Cena_1.jpg'},
    {id: 2, nombre: "Molletes Mexicanos", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 45, img: '../media/Cena/Cena_2.jpg'},
    {id: 3, nombre: "Lunch Burguer", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 40, img: '../media/Cena/Cena_3.jpg'},
    {id: 4, nombre: "Toast de Aguacate", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 55, img: '../media/Cena/Cena_4.jpg'},
    {id: 5, nombre: "Sandwich Montecristo", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 60, img: '../media/Cena/Cena_5.jpg'},
    {id: 6, nombre: "Carpaccio de Aguacate", ingrediente_1: "I1", ingrediente_2: "I2", ingrediente_3: "I3", cantidad: 1, precio: 70, img: '../media/Cena/Cena_6.jpg'}
];



let cAlimentos = document.querySelector('.contenedorProdcutos');
//Variables carrito de compras
const carrito = document.querySelector('#ver-carrito')
let carritoConpras = [];// Inicializamod el carrito vacío
const cabeceraCarrito = document.querySelector("#cabezera-carrito");
const contadorCarrito = document.querySelector("#contador-carrito");
const precioTotalCarrito = document.querySelector("#precio-total-carrito");

// // Almacenar información en el localstorage
document.addEventListener('DOMContentLoaded', () => {
    if(localStorage.getItem('carritoConpras')){
        carritoConpras = JSON.parse(localStorage.getItem('carritoConpras'));
        actulaizarCarritoCompras();
    }
})


stockDesayunos.forEach((desayuno) => {
    let div = document.createElement("div");
    div.classList.add("desayuno");
    // div.id = 'cambio_1';
    div.innerHTML = `
    <img src=${desayuno.img}>
    <h2>${desayuno.nombre}</h2>
    <p><strong>Ingredientes: </strong> ${desayuno.ingrediente_1 + ", " + desayuno.ingrediente_2 + " y " + desayuno.ingrediente_3}</p>
    <p><strong>Precio: </strong>Q. ${desayuno.precio}</p>
    <button id="agregarcarrito${desayuno.id}" class="btn-agregar"><ion-icon name="add-outline" class="icon"></ion-icon></button>
    `
    cAlimentos.appendChild(div)
    //Carrito
    //capturar los datos mediane el boton
    const boton = document.getElementById(`agregarcarrito${desayuno.id}`);
    boton.addEventListener('click', () => {
        agregaralcarrito(desayuno.id);
    })
})

stockAlmuerzos.forEach((almuerzo) => {
    let div = document.createElement("div");
    div.classList.add("almuerzo");
    // div.id = 'cambio_2';
    div.setAttribute('style', 'display: none')
    div.innerHTML = `
    <img src=${almuerzo.img}>
    <h2>${almuerzo.nombre}</h2>
    <p><strong>Ingredientes: </strong> ${almuerzo.ingrediente_1 + ", " + almuerzo.ingrediente_2 + " y " + almuerzo.ingrediente_3}</p>
    <p><strong>Precio: </strong>Q. ${almuerzo.precio}</p>
    <button id="agregarcarrito${almuerzo.id}" class="btn-agregar"><ion-icon name="add-outline" class="icon"></ion-icon></button>
    `
    cAlimentos.appendChild(div)
})

stockCenas.forEach((cena) => {
    let div = document.createElement("div");
    div.classList.add("cena");
    // div.id = 'cambio_3';
    div.setAttribute('style', 'display: none')
    div.innerHTML = `
    <img src=${cena.img}>
    <h2>${cena.nombre}</h2>
    <p><strong>Ingredientes: </strong> ${cena.ingrediente_1 + ", " + cena.ingrediente_2 + " y " + cena.ingrediente_3}</p>
    <p><strong>Precio: </strong>Q. ${cena.precio}</p>
    <button id="agregarcarrito${cena.id}" class="btn-agregar"><ion-icon name="add-outline" class="icon"></ion-icon></button>
    `
    cAlimentos.appendChild(div)
})

function selectDesayuno(){
    var space = document.getElementById("inv1");
    var space2 = document.getElementById("inv2");
    var space3 = document.getElementById("inv3");
    var tiempo_mostrar_1 = document.querySelectorAll(".desayuno");
    var tiempo_mostrar_2 = document.querySelectorAll(".almuerzo");
    var tiempo_mostrar_3 = document.querySelectorAll(".cena");

    space.style.backgroundColor = "rgba(72, 35, 25, 0.671)";
    space2.style.backgroundColor = "rgb(72, 35, 25)";
    space3.style.backgroundColor = "rgb(72, 35, 25)";

    tiempo_mostrar_1.forEach(function(div){
        div.removeAttribute("style")
        div.style.display = "visible";
    })
    tiempo_mostrar_2.forEach(function(div){
        div.style.display = "none"
    })
    tiempo_mostrar_3.forEach(function(div){
        div.style.display = "none"
    })
}

function selectAlmuerzo(){
    var space = document.getElementById("inv1");
    var space2 = document.getElementById("inv2");
    var space3 = document.getElementById("inv3");
    var tiempo_mostrar_1 = document.querySelectorAll(".desayuno");
    var tiempo_mostrar_2 = document.querySelectorAll(".almuerzo");
    var tiempo_mostrar_3 = document.querySelectorAll(".cena");
    space.style.backgroundColor = "rgb(72, 35, 25)";
    space2.style.backgroundColor = "rgba(72, 35, 25, 0.671)";
    space3.style.backgroundColor = "rgb(72, 35, 25)";

    tiempo_mostrar_1.forEach(function(div){
        div.style.display = "none"
    })
    tiempo_mostrar_2.forEach(function(div){
        div.removeAttribute("style")
        div.style.display = "visible"
    })
    tiempo_mostrar_3.forEach(function(div){
        div.style.display = "none"
    })
}

function selectCena(){
    var space = document.getElementById("inv1");
    var space2 = document.getElementById("inv2");
    var space3 = document.getElementById("inv3");
    var tiempo_mostrar_1 = document.querySelectorAll(".desayuno");
    var tiempo_mostrar_2 = document.querySelectorAll(".almuerzo");
    var tiempo_mostrar_3 = document.querySelectorAll(".cena");
    space.style.backgroundColor = "rgb(72, 35, 25)";
    space2.style.backgroundColor = "rgb(72, 35, 25)";
    space3.style.backgroundColor = "rgba(72, 35, 25, 0.671)";
    tiempo_mostrar_1.forEach(function(div){
        div.style.display = "none"
    })
    tiempo_mostrar_2.forEach(function(div){
        div.style.display = "none"
    })
    tiempo_mostrar_3.forEach(function(div){
        div.removeAttribute("style")
        div.style.display = "visible"
    })
}


//CARRITO


const agregaralcarrito =(IdProducto) => {
    // comprobar si el elemento ya existe en el carrito
    const existeProducto = carritoConpras.some (prod => prod.id === IdProducto);

    if(existeProducto){
        const prod = carritoConpras.map(prod =>{
            if(prod.id === IdProducto){
                prod.cantidad++;
            }
        })
    }
    else{
        const item = stockDesayunos.find((prod) => prod.id === IdProducto);
        carritoConpras.push(item);
        console.log(carritoConpras)
    }
    actulaizarCarritoCompras();
}

const actulaizarCarritoCompras = () => {

    carrito.innerHTML = "";
    cabeceraCarrito.innerHTML = "";

    //Inicicio cavecera carrito
    const cabecera = document.createElement("div");
    cabecera.classList.add('cabeceraCarrito')
    cabecera.innerHTML = `
    <p></p>
    
    `
    // este bototn se encuentra en la parte superior
    // <button onclick = "cerrarCarrito()" class="btn-cerrar"></button>
    cabeceraCarrito.appendChild(cabecera)
    //Fin cabecera carrito

    // Inicio contador carr-ito
    const contCarrito = document.createElement('div');
    contCarrito.innerHTML = `
    <p>0</p>
    `
    contadorCarrito.appendChild(contCarrito)
    // FIn contador carrito

    //Inicio precio total carrito
    const total = document.createElement('div');
    total.innerHTML = `
    <p>0</p>
    `
    precioTotalCarrito.appendChild(total)
    // Fin precio total carrito


    carritoConpras.forEach((prod) => {
        const div = document.createElement('div');
        div.classList.add("detalles-carrito");
        div.innerHTML = `
        <p class="shop">${prod.nombre}</p>
        <p class="shop">Precio: Q${prod.precio}</p>
        <button onclick ="eliminardelcarrito(${prod.id})" class="btn-eliminar"><ion-icon name="trash-outline" class="icon"></ion-icon></button>
        <p class="shop">Cantidad: ${"\n" + prod.cantidad}</p>
        
        `
        carrito.appendChild(div);

        localStorage.setItem('carritoConpras', JSON.stringify(carritoConpras));
})
    contadorCarrito.innerText = carritoConpras.length;
    let x = contadorCarrito;
    precioTotalCarrito.innerHTML = carritoConpras.reduce((subtotal, prod) => subtotal + prod.precio *  prod.cantidad, 0)
}

const eliminardelcarrito = (IdProducto) => {
    const elemento = carritoConpras .find((prod) => prod.id === IdProducto);
    const indice = carritoConpras.indexOf(elemento);
    carritoConpras.splice(indice, 1);
    actulaizarCarritoCompras();
}