window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 9000);

    var defaut = $('select[name="centre"]').val();

    if(defaut == 'Pharmacie' || defaut == 'CentreHospita') { 
        $('#lblNomCommercial').show();
        $('#nomCommercial').show();
       
        $('#choixTypeCentre').hide();
        $('#nom').hide();
        $('#prenom').hide();     
    } else {
        $('#nomCommercial').hide();
        $('#nom').show();
        $('#prenom').show();
        $('#email').show();
        $('#pwd').show(); 
    }

     
    $('select[name="centre"]').change(function() { // lorsqu'on change de valeur dans la liste

    var valeur = $(this).val(); // valeur sélectionnée
     
        if(valeur != '') { // si non vide

            if(valeur == 'Pharmacie' || valeur == 'CentreHospita') { 
              $('#nomCommercial').show();
              $('#choixTypeCentre').hide();
              $('#nom').hide();
              $('#prenom').hide();   
            } else {
              $('#nomCommercial').hide();
              $('#nom').show();
              $('#prenom').show();
              $('#email').show();
              $('#pwd').show();
            }
        }
    }); 