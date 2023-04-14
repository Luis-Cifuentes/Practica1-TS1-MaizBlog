let datosJSON = document.getElementById("datosJSON").textContent;
let datosObtenido = JSON.parse(datosJSON);
const $grafica = document.querySelector('#grafica');
let etiquetas = [];
let valores = [];
datosObtenido.forEach(obj => { // iterar sobre los objetos en el arreglo
  etiquetas.push(obj.nombre_dept); // agregar el segundo atributo al nuevo arreglo
});
datosObtenido.forEach(obj => { // iterar sobre los objetos en el arreglo
    valores.push((parseFloat(obj.produccion)*100).toFixed(2)); // agregar el segundo atributo al nuevo arreglo
});
const ETIQUETAS = etiquetas;
const DATOS = {
    label: 'Porcentaje de Produccion',
    data: valores,
    backgroundColor: [
        'red',
        'blue',
        'green',
        'yellow',
        'orange',
        'purple',
        'pink',
        'brown',
        'gray',
        'black',
        'teal',
        'magenta'
    ].slice(0, valores.length)
};

new Chart($grafica, {
    type: 'pie',
    data: {
        labels: ETIQUETAS,
        datasets: [DATOS],
    },
});

