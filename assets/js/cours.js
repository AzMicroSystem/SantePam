
<script> 
    var defaut = $('select[name="centre"]').val();
    alert(defaut);

    if(defaut == 'Pharmacie' || defaut == 'CentreHospita') { 
        $('#nomCommercial').show();
        $('#nom').hide();
        $('#prenom').hide();       
    } else {
        $('#nomCommercial').hide();
        $('#nom').show();
        $('#prenom').show();
        $('#email').show();
        $('#pwd').show();   
    } alert("yahhhh");
    

     
    $('select[name="centre"]').change(function() { // lorsqu'on change de valeur dans la liste

    var valeur = $(this).val(); // valeur sélectionnée
     
        if(valeur != '') { // si non vide

            if(valeur == 'Pharmacie' || valeur == 'CentreHospita') { 
                alert(valeur);
                $('#nomCommercial').show();
                $('#nom').hide();
            	$('#prenom').hide();   
            } else {
                alert(valeur);
            	$('#nomCommercial').hide();
            	$('#nom').show();
            	$('#prenom').show();
            	$('#email').show();
            	$('#pwd').show();
            }
        }
    });

 
</script>

