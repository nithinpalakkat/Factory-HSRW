// preparing language file
var aLangKeys=new Array();
aLangKeys['en']=new Array();
aLangKeys['de']=new Array();

aLangKeys['en']['text1']='PHPSession Variable Test 1';
aLangKeys['en']['text2']='Hello Nithin, How is HTML?';
aLangKeys['en']['text3']='next page';
aLangKeys['en']['text4']='English';
aLangKeys['en']['text5']='German';
aLangKeys['en']['text6']='PHPSession Variable Test second page';
aLangKeys['en']['text7']='HTML is quite easy to study and Nithin is doing good.';
aLangKeys['en']['text8']='last page';


aLangKeys['de']['text1']='PHPSession Variablentest 1';
aLangKeys['de']['text2']='Hallo Nithin, wie geht es HTML?';
aLangKeys['de']['text3']='Nächste Seite';
aLangKeys['de']['text4']='Englisch';
aLangKeys['de']['text5']='Deutsche';
aLangKeys['de']['text6']='PHPSession Variable Test zweite Seite';
aLangKeys['de']['text7']='HTML ist ziemlich einfach zu lernen und Nithin geht es gut.';
aLangKeys['de']['text8']='letzte Seite';


$(document).ready(function() {

    // onclick behavior
    $('.lang').click( function() {
        var lang = $(this).attr('id'); // obtain language id
        jQuery('languageSelector').load('session.php?lanuagekey='+lang);
        
        // translate all translatable elements
        $('.tr').each(function(i){
          $(this).text(aLangKeys[lang][ $(this).attr('key') ]);
        });

    } );

});