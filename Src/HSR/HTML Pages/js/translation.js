// preparing language file
var aLangKeys=new Array();
aLangKeys['en']=new Array();
aLangKeys['de']=new Array();

aLangKeys['en']['home']='Home';
aLangKeys['en']['about']='About Us';
aLangKeys['en']['products']='Products';
aLangKeys['en']['contacts']='Contacts';
aLangKeys['en']['signin']='Signin';

aLangKeys['de']['home']='Home';
aLangKeys['de']['about']='Über Uns';
aLangKeys['de']['products']='Produkt';
aLangKeys['de']['contacts']='Kontakt';
aLangKeys['de']['signin']='Anmelden';



$(document).ready(function() {

    // onclick behavior
    $('.lang').click( function() {
        var lang = $(this).attr('id'); // obtain language id

        // translate all translatable elements
        $('.tr').each(function(i){
          $(this).text(aLangKeys[lang][ $(this).attr('key') ]);
        });

    } );

});