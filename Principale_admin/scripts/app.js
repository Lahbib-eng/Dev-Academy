$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('.loader').show();

    loadData();

    // Search in etudiant list
    $('#search').keyup(function(e) {
        var keyWord = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(keyWord) > -1);
        });
    });

});

//load data from DB function
function loadData() {
    // console.log("en load");
    var row;
    $.ajax({
        type: "GET",
        url: './api/etudiant.api.php',
        data: {
            mode: 'load',
        },
        dataType: 'json',
        success: function(data) {
            // row = JSON.stringify(data);
            row = data;
        }
    }).done(function() {
        for (let i = 0; i < row.length; i++) {
            let ligne = '<tr>';
            ligne += '<td>' + i + '</td>';
            ligne += '<td>' + row[i].nom_prenom + '</td>';
            ligne += '<td>' + row[i].num_carte + '</td>';
            ligne += '<td>' + row[i].cin + '</td>';
            ligne += '<td>' + row[i].email + '</td>';
            ligne += '<td>' + row[i].tel + '</td>';
            ligne += '<td>'+'<form action="acepte.php" method="post"><input type="radio" name="Acp" value="'+row[i].email +'">'+'Acepter'+'<br>'+'<input type="radio" name="Acp" value="'+row[i].cin+'">Refusé';
            ligne += '<input type="submit" name="submit" value="Confirme" class="btn btn-danger btn-md float-right"></form></td>';
            ligne += '</tr>';
            $('#listetudiant').append(ligne);
        }
    })

    $(document).ajaxComplete(function() {
        $('.loader').hide();
    })
}

//Add new etudiant
$('#btValider').click(function() {
    let nom = $('#nom').val();
    let prenom = $('#prenom').val();
    let dateN = $('#dateN').val();
    let adresse = $('#adresse').val();
    let tel = $('#tel').val();

    $.ajax({
        type: "POST",
        url: './api/etudiant.api.php',
        data: {
            mode: 'insert',
            nom: nom,
            prenom: prenom,
            dataN: dateN,
            adresse: adresse,
            tel: tel,
        },
        success: function() {
            swal('Nouveau etudiant', 'ajoutée avec succés', 'success')
                .then(() => {
                    location.reload();
                });
        }
    });

})

//Edit etudiant
function editetudiant(id) {
    $('#idEdit').val(id);
    let row;
    $.ajax({
        type: "GET",
        url: "./api/etudiant.api.php",
        data: {
            mode: 'loadOne',
            id: id,
        },
        dataType: 'json',
        success: function(response) {
            row = response;
        }
    }).done(function() {
        $('#nomEdit').val(row.nom);
        $('#prenomEdit').val(row.prenom);
        $('#dateNEdit').val(row.datenaissance);
        $('#adresseEdit').val(row.adresse);
        $('#telEdit').val(row.tel);
    });
}

// Update etudiant
$('#btUpdateetudiant').click(function() {
    let id = $('#idEdit').val();
    let nom = $('#nomEdit').val();
    let prenom = $('#prenomEdit').val();
    let dateN = $('#dateNEdit').val();
    let adresse = $('#adresseEdit').val();
    let tel = $('#telEdit').val();

    $.ajax({
        type: "POST",
        url: './api/etudiant.api.php',
        data: {
            id: id,
            nom: nom,
            prenom: prenom,
            dataN: dateN,
            adresse: adresse,
            tel: tel,
            mode: 'update',
        },
        success: function() {
            swal('Editer etudiant', 'Mise à jour effectuée avec succés', 'success')
                .then(() => {
                    location.reload();
                });
        }
    });

})

// Delete etudiant
function deleteetudiant(id) {
    swal({
            title: "Etes-vous certain?",
            text: "Vous êtes sur le point de supprimer un etudiant !",
            icon: "warning",
            buttons: ["Annuler", "Confirmer"],
        })
        .then((willCancel) => {
            if (willCancel) {
                $.ajax({
                    type: "POST",
                    url: "./api/etudiant.api.php",
                    data: {
                        mode: 'delete',
                        id: id,
                    },
                    success: function() {
                        swal('Supprimé !', 'Compte etudiant supprimé avec succées', 'success')
                            .then(() => {
                                location.reload();
                            });
                    },
                })
            } else {
                swal("Le compte etudiant n'a pas été supprimée");
            }
        });
}


$(".btn btn-danger btn-md float-right").click(function(){
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});});
