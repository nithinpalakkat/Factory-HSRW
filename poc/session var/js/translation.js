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
        checkLanguageCookieAndLoadLanguage(lang);
    } );

});

function loadSavedCookieLanguageTranslation() {
    var langCode = getCookie("language");
    checkLanguageCookieAndLoadLanguage(langCode);
}


function loadLanguageTranslationForCode(langCode) {
    // translate all translatable elements
    $('.tr').each(function(i){
      $(this).text(aLangKeys[langCode][ $(this).attr('key') ]);
    });
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkLanguageCookieAndLoadLanguage(newLangCode) {
    var langCode = getCookie("language");
    if (langCode == "") {
        langCode = "en";
    }
    
    if (langCode != newLangCode) {
        langCode = newLangCode;
        setCookie("language", langCode, 2);
    }
    
    loadLanguageTranslationForCode(langCode);
} 