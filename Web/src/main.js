for (var i = 1; i < universitas.length; i++) {
    document.getElementById("select1").innerHTML += `
    <option value="${i}">${universitas[i].title}</option>
    `;
    document.getElementById("select2").innerHTML += `
    <option value="${i}">${universitas[i].title}</option>
    `;
    document.getElementById("select3").innerHTML += `
    <option value="${i}">${universitas[i].title}</option>
    `;
}
// perubahan disini harus sama dengan yang ada di file html
function item1(a) {
    var select1 = document.getElementById("select1").value;
    if (a == select1) {
        // document.getElementById("img1").src = universitas[a].image
        document.getElementById("univ1").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi1").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank1").innerHTML = universitas[a].wrld_rank
        // jangan lupa bikin tabel di index.html
        document.getElementById("teaching1").innerHTML = universitas[a].teaching
        document.getElementById("research1").innerHTML = universitas[a].research
        document.getElementById("citation1").innerHTML = universitas[a].citation
        document.getElementById("outlook1").innerHTML = universitas[a].int_outlook

    } 
    // else {
    //     document.getElementById("select1").selectedIndex = 0;
    //     document.getElementById("img1").src = universitas[0].image
    //     document.getElementById("univ1").innerHTML = ""
    //     document.getElementById("lokasi1").innerHTML = ""
    //     document.getElementById("wrld_rank").innerHTML = ""

    // }
}

function item2(a) {
    var select2 = document.getElementById("select2").value;
    if (a == select2) {
        // document.getElementById("img2").src = universitas[a].image
        document.getElementById("univ2").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi2").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank2").innerHTML = universitas[a].wrld_rank
        document.getElementById("teaching2").innerHTML = universitas[a].teaching
        document.getElementById("research2").innerHTML = universitas[a].research
        document.getElementById("citation2").innerHTML = universitas[a].citation
        document.getElementById("outlook2").innerHTML = universitas[a].int_outlook
        
    } else {
        document.getElementById("select3").selectedIndex = 0;
        document.getElementById("img3").src = universitas[0].image
        document.getElementById("price3").innerHTML = ""
        document.getElementById("desc3").innerHTML = ''
        document.getElementById("brand3").innerHTML = ""

    }
}
function item3(a) {
    var select3 = document.getElementById("select3").value;
    if (a == select3) {
        // document.getElementById("img2").src = universitas[a].image
        document.getElementById("univ3").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi3").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank3").innerHTML = universitas[a].wrld_rank
        document.getElementById("teaching3").innerHTML = universitas[a].teaching
        document.getElementById("research3").innerHTML = universitas[a].research
        document.getElementById("citation3").innerHTML = universitas[a].citation
        document.getElementById("outlook3").innerHTML = universitas[a].int_outlook
    } else {
        document.getElementById("select3").selectedIndex = 0;
        document.getElementById("img3").src = universitas[0].image
        document.getElementById("price3").innerHTML = ""
        document.getElementById("desc3").innerHTML = ''
        document.getElementById("brand3").innerHTML = ""

    }
}