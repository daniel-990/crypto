const get = () => {
    let html = "";

    const print = document.getElementById('render');
    axios.get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false')
        .then(function(response) {
            // handle success
            const data = response.data;
            //console.log(response.data);
            
            //carga del sitio
            document.getElementById("cargando").style.visibility = "visible"; // show

            data.map((items) => {
                html = `
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-left"><img class="icono" src="${items.image}"/></p>
                                <b class="nombre-moneda">${items.id}</b> -
                                <span class="badge bg-warning text-dark">${items.symbol}</span>
                                <span class="badge bg-dark">${items.current_price} US$</span>
                            </div>
                        </div>
                    </div>
                `;

                print.innerHTML += html;
            });

        })
        .catch(function(error) {
            // handle error
            console.log(error);
        })
        .then(function() {
            // always executed
            //carga del sitio
            document.getElementById("cargando").style.display = "none"; // hide
        });
}

get();