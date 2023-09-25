// Vente toast


$('.toast').toast(option);

$(document).ready(function () {
    alert("Settings page was loaded");
});

function text() {
    toastr.success("{{session('message')}}");
}






function deleteRow(id) {
    // body...
    table = document.getElementById("tableramses");
    var index = (document.getElementById(id).parentElement).parentElement.rowIndex;
    var p = parseFloat(document.getElementById('prixx').innerHTML) - parseFloat(table.rows[index].cells[2].innerHTML) * parseInt(table.rows[index].cells[1].innerHTML);
    document.getElementById('prixx').innerHTML = p;
    table.deleteRow(index);

}



function addVente(id_client) {
    //alert(id_client);
    if (id_client != 0){
        document.querySelector('#mode').innerHTML = "<select class='select2 select2-success form-control' data-dropdown-css-class='select2-success' id='mode' onchange='methode()'>" +
        "<option value='need'>Choisir un mode paiement</option>" +
        "<option value='credit'>Credit/Avance</option>" +
        "<option value='solde'>Solde</option>" +
        "<option value='espece'>Espece</option>" +
        "</select>";
    document.getElementById('reste').innerHTML = 0.0;
    document.getElementById('credit').style.display = "none";
    }

    var id = document.getElementById('basile').value;
    var quantite = document.getElementById('quantite').value;
    var prix = document.getElementById('prix').value;
    if (id === "all" || quantite.trim() === "" || prix.trim() === "") {
        document.getElementById('error').innerHTML = "Erreur Remplissage";
    } else {
        prix = parseFloat(prix);
        if (Number.isNaN(prix) || prix < 0) {
            document.getElementById('error').innerHTML = "veuillez entrez un Montant valide";
        } else {

            var sel = document.getElementById('basile');
            var designation = sel.options[sel.selectedIndex].text;
            var table = document.getElementById("tableramses");
            for (var i = table.rows.length - 1; i >= 1; i--) {
                var p = 0;
                if (designation === table.rows[i].cells[0].innerHTML) {
                    var restestock = table.rows[i].cells[5].innerHTML - table.rows[i].cells[1].innerHTML;
                    if (restestock >= quantite) {
                        table.rows[i].cells[1].innerHTML = parseInt(table.rows[i].cells[1].innerHTML) + parseInt(quantite);
                        for (var i = table.rows.length - 1; i >= 1; i--) {
                            p = p + parseFloat(table.rows[i].cells[2].innerHTML) * parseInt(table.rows[i].cells[1].innerHTML);
                        }
                        document.getElementById('prixx').innerHTML = p;
                        document.getElementById('prixt').innerHTML = p;
                        return;
                    }
                    Swal.fire({
                        icon: 'error',
                        title: "ce produit ne reste plus que" + ' ' + restestock,
                        //title: 'une erreur s\'est produite',
                        showConfirmButton: true,
                        timer: 50000
                    }).then((result) => {
                        //window.location.href = '/vente/initvente';
                    });
                    //document.getElementById('error').innerHTML = "ce produit ne reste plus que" + ' ' + restestock;
                    return;

                }
            }

            document.getElementById('error').innerHTML = "";

            var data = {
                "_token": $('input[name=_token]').val(),
                "produit": id,
                "quantite": quantite,
            }
            $.ajax({
                type: "POST",
                url: "vente/ajouterPagnier",
                data: data,
                success: function (response) {
                    if (response.produit === 'erreur') {
                        Swal.fire({
                            icon: 'error',
                            title: "ce produit ne reste plus que" + ' ' + response.quantite,
                            //title: 'une erreur s\'est produite',
                            showConfirmButton: true,
                            timer: 3000
                        }).then((result) => {
                            //window.location.href = '/vente/initvente';
                        });
                        return;
                        //document.getElementById('error').innerHTML = "ce produit ne reste plus que" + ' ' + response.quantite;

                    } else {
                        var row = table.insertRow(1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);

                        cell1.innerHTML = designation;
                        //cell2.innerHTML = '<input type="number" class="form-control" min="1" value =' + quantite + '>';
                        cell2.innerHTML = quantite;
                        cell3.innerHTML = prix;
                        cell4.innerHTML = response.produit.date_expiration;
                        cell6.innerHTML = response.quantite;
                        cell6.style.display = "none";
                        id = id + 20000;
                        cell5.innerHTML = '<button id=' + id + ' type="button" onclick="deleteRow(' + id + ')" class="btn btn-danger btn-sm  deleted_element" title="Delete Commande"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
                        var p = 0;
                        for (var k = table.rows.length - 1; k >= 1; k--) {
                            p = p + parseFloat(table.rows[k].cells[2].innerHTML) * parseInt(table.rows[k].cells[1].innerHTML);
                        }
                        document.getElementById('prixx').innerHTML = p;
                        document.getElementById('prixt').innerHTML = p;
                    }
                }
            });

        }
    }

}




function showReste(objet) {
    // body...
    var reste = parseFloat(document.getElementById('reste').innerHTML);
    var prix = parseFloat(document.getElementById('prixx').innerHTML);
    var montant = parseFloat(objet.value);
    if (Number.isNaN(prix) || prix <= 0 || Number.isNaN(montant) || montant < 0) {
        Swal.fire({
            icon: 'error',
            title: "entrez un montant valide(verifier le prix total)",
            //title: 'une erreur s\'est produite',
            showConfirmButton: true,
            timer: 50000
        }).then((result) => {
            //window.location.href = '/admin/vente/' + response.id;
        });
        document.getElementById('sendv').style.display = "none";
        document.getElementById('erreurmontant').innerHTML = "entrez un montant valide(verifier le prix total)";
    } else if (montant > prix) {
        document.getElementById('sendv').style.display = "none";
        document.getElementById('erreurmontant').innerHTML = "vous ne pouvez pas entrer un montant superieur au prix total";
    } else {
        document.getElementById('sendv').style.display = "block";
        document.getElementById('erreurmontant').innerHTML = "";
        document.getElementById('reste').innerHTML = (montant - prix) * -1;
    }
}


function saveVente(id_client) {

    // body...
    var prixp = parseFloat(document.getElementById('prixx').innerHTML);
    if (Number.isNaN(prixp)) {
        Swal.fire({
            icon: 'error',
            title: 'verifier le montant de la vente',
            //title: 'une erreur s\'est produite',
            showConfirmButton: true,
            timer: 50000
        }).then((result) => {
            //window.location.href = '/admin/vente/' + response.id;
        });
        document.getElementById('sendv').style.display = "none";
        return;
    } else {
        document.getElementById('sendv').style.display = "block";
    }
    var reste;
    if (id_client != 0) {

        reste = parseFloat(document.getElementById('reste').innerHTML);
    } else {

        reste = parseFloat(document.getElementById('prixt').innerHTML);
    }
    var mode = document.getElementById("mode").value;
    if (mode === "need") {
        Swal.fire({
            icon: 'error',
            title: "Selectionner un mode de paiement",
            //title: 'une erreur s\'est produite',
            showConfirmButton: true,
            timer: 50000
        }).then((result) => {
            //window.location.href = '/admin/vente/' + response.id;
        });
        return;
    }

    var produit = [];
    var table = document.getElementById("tableramses");
    for (var i = table.rows.length - 1; i >= 1; i--) {
        produit.push({
            produit: table.rows[i].cells[0].innerHTML,
            quantite: table.rows[i].cells[1].innerHTML,
            prix: table.rows[i].cells[2].innerHTML,
            peremption: table.rows[i].cells[3].innerHTML,
        });
    }
    var vente = {
        "client": id_client,
        "prixTotal": prixp,
        "mode": mode,
        "reste": reste,

    };

    var data = {
        "_token": $('input[name=_token]').val(),
        "produit": produit,
        "vente": vente
    }
    console.log(data);

    $.ajax({
        type: "POST",
        url: "/vente/vente/produit",
        data: data,
        success: function (response) {
            console.log(response['status']);
            Swal.fire({
                icon: 'success',
                title: response['status'],
                showConfirmButton: true,
                timer: 2000
            }).then((result) => {
                window.location.href = '/vente/' + response.id;
            });
        },
        error: function (response) {
            console.log(response['status']);
            Swal.fire({
                icon: 'error',
                title: 'une erreur s\'est produite',
                showConfirmButton: true,
                timer: 2000
            }).then((result) => {
                //window.location.href = '/admin/vente/' + response.id;
            });
        }

    });
    console.log(data);
    return false;
}

function methode() {
    var select = document.getElementById('mode').value;
    var reste = document.getElementById("reste");
    var soldeClient = parseFloat(document.getElementById("montantClient").value);
    var prix = parseFloat(document.getElementById("prixx").innerHTML);
    if (select === "espece") {
        document.getElementById('sendv').style.display = "block";
        credit.style.display = "none";
        reste.innerHTML = 0.0;
    }
    if (select == "solde") {
        document.getElementById('sendv').style.display = "block";
        credit.style.display = "none";
        if (soldeClient > prix) {
            reste.innerHTML = 0.0;
        } else {
            reste.innerHTML = (soldeClient - prix) * -1;
        }
    }
    if (select === "credit") {
        document.getElementById('sendv').style.display = "block";
        credit.style.display = "inline-block";
        credit.value = 0;
        reste.innerHTML = prix;
    }
}

function getPrix() {
    var selectedId = document.getElementById('basile').value;
    $.ajax({
        type: "GET",
        url: "/admin/produits/" + selectedId,
        success: function (response) {
            console.log(response.produit);
            document.getElementById('prix').value = response.produit.Prix_Vente_Min;
        }
    });

}

function getPrixx() {
    var selectedId = document.getElementById('design').value;
    $.ajax({
        type: "GET",
        url: "/admin/produits/" + selectedId,
        success: function (response) {
            console.log(response.produit);
            document.getElementById('prix').value = response.produit.Prix_Vente_Max;
        }
    });
}

function getPrice() {
    var selectedId = document.getElementById('basile').value;
    $.ajax({
        type: "GET",
        url: "/admin/produits/" + selectedId,
        success: function (response) {
            console.log(response.produit);
            document.getElementById('prix').value = response.produit.prix_vente_min;
        }
    });
}
