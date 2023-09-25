function alertRamsesNon() {
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    })
}

function deleteStory(path) {
    let day = document.getElementById('delete').value;
    if (day.trim() === "") {
        document.getElementById('errorspan').style = "display: inline;";
        return;
    } else {
        document.getElementById('errorspan').style = "display: none;";
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        })

        swalWithBootstrapButtons.fire({
            title: "Confirmer La Suppression des historiques de plus de " + day + " jour(s)?",
            text: "Cette action est irreversible!",
            icon: 'warning',
            width: 600,
            padding: '3em',
            backdrop: `
            rgba(68,68,68,0.7)
            `
            ,

            showCancelButton: true,
            confirmButtonText: 'Oui, Supprimer!',
            cancelButtonText: 'Non!',
            reverseButtons: true
        }).then((result) => {

            if (result.isConfirmed) {
                var data = {};
                path += "/" + day;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "DELETE",
                    url: path,
                    data: data,
                    success: function (response) {
                        swalWithBootstrapButtons.fire(
                            response['status'],
                            '....',
                            'success',
                        ).then((result) => {
                            location.reload();
                        });
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Annulé',
                    'Suppression annulée',
                    'error'
                )
            }
        });
    }
}

function alertDeleteElement(id, path) {
    // body...
    // alert(path);
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })

    swalWithBootstrapButtons.fire({
        title: 'Confirmer La Suppression?',
        text: "Cette action est irreversible!",
        icon: 'warning',
        width: 600,
        padding: '3em',
        backdrop: `
        rgba(68,68,68,0.7)
        `
        ,

        showCancelButton: true,
        confirmButtonText: 'Oui, Supprimer!',
        cancelButtonText: 'Non!',
        reverseButtons: true
    }).then((result) => {

        if (result.isConfirmed) {
            var data = {
                // "_token": $('input[name=_token]').val(),
                "id": id,
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                url: path,
                data: data,
                success: function (response) {
                    swalWithBootstrapButtons.fire(
                        response['status'],
                        '....',
                        'success',
                    ).then((result) => {
                        if (response['type'] !== 'error') {
                            location.reload();
                        }
                    });
                }
            });
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Annulé',
                'Suppression annulée',
                'error'
            )
        }
    });

}



$(document).ready(function () {
    $('.js-example-basic-multiple').select2({
        width: 'resolve'
    });
});



$(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('.dateramses').attr('min', maxDate);
});


// function isTel() {
//   var values = document.getElementsByClassName("numero");
//   for (var i = values.length - 1; i >= 0; i--) {
//     if(values[i].value !== null && !('/^(237)?(6|2)(5|6|7|8|9)[0-9]{7}$/'.test(values[i].values))){
//       alert('correct');

//     }
//   }
//   return false;
// }

$(document).ready(function () {
    $("#success-alert").hide();
    $("#myWish").click(function showAlert() {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function () {
            $("#success-alert").slideUp(500);
        });
    });
});



function addEvenement() {
    // body...
    var title = document.getElementById('title').value;
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var background = document.getElementById('background').value;
    if (title.trim() === "" || start.trim() === "") {
        document.getElementById('error').innerHTML = "Remplissez tout les champs marquer en rouge";
    }

    var data = {
        "_token": $('input[name=_token]').val(),
        "title": title,
        "start": start,
        "end": end,
        'backgroundColor': background, //red
        'borderColor': background, //red
        'allDay': 1
    }

    $.ajax({
        type: "POST",
        url: '/admin/addEvent',
        data: data,
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: response['status'],
                showConfirmButton: true,
                timer: 4000
            }).then((result) => {
                location.reload();
            });
        }
    });
}




var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Valider";
    } else {
        document.getElementById("nextBtn").innerHTML = "Suivant";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm())
        return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "" && y[i].required) {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}


function display(index) {
    var div = document.getElementById('select-client');
    if (index === 1)
        div.style.display = 'inline-block';
    else
        div.style.display = 'none';


}

function paiement() {
    var mode = document.getElementById('mode');
    var espece = document.getElementById('paiement');
    if (mode.value === 'espece'){
        espece.style.display = 'inline-block';
    }else{
        espece.style.display = 'none';
    showResteSolde();
    }
}



function showResteSolde() {
    // body...
    var reste = parseFloat(document.getElementById('reste').innerHTML);
    var prix = parseFloat(document.getElementById('prixx').innerHTML);
    var montant = parseFloat(document.getElementById('montantClient').value);
    if (montant > prix) {
        document.getElementById('reste').innerHTML = '0.0';
    } else {
        document.getElementById('reste').innerHTML = montant - prix;
    }
    console.log(montant);
}

