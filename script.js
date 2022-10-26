const SHEET_ID = "1RmCxXrjvBK2RG3h_uf6IPbzSbnuOEaN9HPXuhO34JW4";
const ACCESS_TOKEN = "ya29.a0Aa4xrXPql-igcXxHi6JaLxDPS3LJXJVEYdneFOWshaPwuceQ4PqQCNVpLM0RgRzjIioUqYU9A0UKfgZtdp-CK_c4795qe7A89jy2je-Uq-d3sH_Ay6hOTnDwoLyeqQ5oJ5IhQjO8ddW-ehjrXwU9WzQW24i-aCgYKATASARASFQEjDvL90lr2uvMzo6pu3NXoq010-Q0163";

fetch(
  // Obtenemos los datos de la planilla, de la hoja hojaMenu, columnas A y B desde la segunda fila
  `https://sheets.googleapis.com/v4/spreadsheets/${SHEET_ID}/values/almuerzo!A2:D11`,
  {
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${ACCESS_TOKEN}`,
    },
  }
//esperamos el response
)
.then(function (response) {    
    //esperamos el json del response para poder utilizarlo
    response.json().then(
        function (data) {
            const values = data.values;
            // Obtenemos el elemento del dom
            const lista = document.getElementById("lista-menu");
            for (let i = 0; i < values.length; i++) {
                // Div que va a contener los datos del producto
                const producto = document.createElement("div");
                producto.className =  "menu-item";

                // Nombre del producto
                const itemProducto = document.createElement("span");
                itemProducto.className = "item producto","col";
                itemProducto.innerHTML = values[i][0]; 

                //Sabor
                const itemSabor = document.createElement("span");
                itemSabor.className = "item sabor","col";
                itemSabor.innerHTML = values[i][2];

                //Precio
                const itemPrecio = document.createElement("span");
                itemPrecio.className = "item precio","col";
                itemPrecio.innerHTML = values[i][3];
                
                // Agregamos todos los elementos al div de producto
                producto.appendChild(itemProducto);
                producto.appendChild(itemPrecio);
                producto.appendChild(itemSabor);

                // Agregamos el producto a la lista
                lista.appendChild(producto);
            }
        }
    );
}
);

