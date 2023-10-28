
for (let i = 0; i < noticiasData.length; i++) {
    const title = noticiasData[i].titulo;
    const urlToImage = noticiasData[i].fotos;
    const publishedAt = noticiasData[i].fecha_publicacion;
    const name = "Nombre Fuente"; 

    
    let h2 = document.createElement("h2");
    h2.textContent = title;

    let img = document.createElement("img");
    img.setAttribute("src", urlToImage);

    let info_item = document.createElement("div");
    info_item.className = "info-item";

    let fecha = document.createElement("span");
    fecha.className = "fecha";
    fecha.textContent = publishedAt;

    let fuente = document.createElement("span");
    fuente.className = "fuente";
    fuente.textContent = name;

    info_item.appendChild(fecha);
    info_item.appendChild(fuente);

    let item = document.createElement("div");
    item.className = "item";
    item.appendChild(h2);
    item.appendChild(img);
    item.appendChild(info_item);

    document.querySelector(".container-noticias").appendChild(item);
}

