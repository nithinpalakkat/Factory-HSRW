// preparing language file
var aLangKeys=new Array();
aLangKeys['en']=new Array();
aLangKeys['de']=new Array();

aLangKeys['en']['home']='Home';
aLangKeys['en']['about']='About Us';
aLangKeys['en']['products']='Products';
aLangKeys['en']['contacts']='Contacts';
aLangKeys['en']['signin']='Signin';
aLangKeys['en']['descptnhead']='Best Designs Ever';
aLangKeys['en']['descptn1']='Are you looking for a good product design?';
aLangKeys['en']['descptn2']='Then you definitely need to try our products.';
aLangKeys['en']['descptn3']='Select our design, Make your product.';
aLangKeys['en']['button']='MAKE YOUR PRODUCTS';
aLangKeys['en']['aboutus']='About Us';
aLangKeys['en']['aboutusp1']='This website is a part of a thesis work namely "Industry 4.0: A Mobile and Modular Lean Factory in Focus with MES and Value Chain". Industry 4.0, The fourth industrial revolution is a collective evolution from the past manufacturing industry trends. The industry requires more flexible and cost effective manufacturing system, which can adapt to any requirements. Industry 4.0 uses Cyber-Physical-Systems (CPS) and Internet of Things (IoT) to automatize and communicate between manufacturing systems, logistics, etc.';
aLangKeys['en']['aboutusp2']='Master thesis is to demonstrate and educate students to understand different aspects of an Industry 4.0 model lean factory. A movable and compact factory can be taken into class or any place for demonstration. Smart factory Consists of an IoT platform, which communicates systems inside the factory. Thesis demonstrates a small value chain of a product called Ring Holder and manufacturing execution system(MES) in an Industry 4.0 lean factory concept.';
aLangKeys['en']['PH1']='Select Your Bottom Part:';
aLangKeys['en']['PH2']='Select Your Top Part:';
aLangKeys['en']['ND1']='Select Design:';
aLangKeys['en']['ND2']='Select Design:';
aLangKeys['en']['NC1']='Select Colour:';
aLangKeys['en']['NC2']='Select Colour:';
aLangKeys['en']['QT1']='Quantity:';
aLangKeys['en']['BTN']='Proceed to Cart';
aLangKeys['en']['contacts']='Contacts';
aLangKeys['en']['FBO']='Order Number';
aLangKeys['en']['FB']='FeedBack';
aLangKeys['en']['FBSUB']='Send';
aLangKeys['en']['SI']='Sign In';
aLangKeys['en']['SIUN']='User Name';
aLangKeys['en']['SIP']='Password';
aLangKeys['en']['SIBTN']='Sign In';
aLangKeys['en']['DD']='Delivery Address';
aLangKeys['en']['DDSDP']='Select a delivery point:';
aLangKeys['en']['DDSDP1']='DELIVERY POINT: A';
aLangKeys['en']['DDSDP2']='DELIVERY POINT: B';
aLangKeys['en']['DDSDP3']='DELIVERY POINT: C';
aLangKeys['en']['DDSDP4']='DELIVERY POINT: D';
aLangKeys['en']['YC']='Your Cart';
aLangKeys['en']['CYO']='Confirm Your Order';


aLangKeys['de']['home']='Home';
aLangKeys['de']['about']='Über Uns';
aLangKeys['de']['products']='Produkte';
aLangKeys['de']['contacts']='Kontakte';
aLangKeys['de']['signin']='Anmelden';
aLangKeys['de']['descptnhead']='Beste Designs überhaupt';
aLangKeys['de']['descptn1']='Sind Sie auf der Suche nach einem guten Produktdesign?';
aLangKeys['de']['descptn2']='Dann müssen Sie unbedingt unsere Produkte ausprobieren';
aLangKeys['de']['descptn3']='Wählen Sie unser Design, Bilden Sie Ihr Produkt.';
aLangKeys['de']['button']='BILDEN SIE IHRE PRODUKTE';
aLangKeys['de']['aboutus']='Über Uns';
aLangKeys['de']['aboutusp1']='Diese Website ist Teil einer Masterarbeit mit dem Titel "Industrie 4.0: Eine mobile und modulare Lean Factory im Fokus mit MES und Wertschöpfungskette". Industrie 4.0, Die vierte industrielle Revolution ist eine kollektive Evolution aus den Trends der verarbeitenden Industrie. Die Industrie erfordert ein flexibleres und kostengünstigeres Fertigungssystem, das sich an alle Anforderungen anpassen kann. Industrie 4.0 nutzt Cyber-Physical-Systems (CPS) und Internet of Things (IoT) zur Automatisierung und Kommunikation zwischen Fertigungssystemen, Logistik u.s.w.';
aLangKeys['de']['aboutusp2']='Die Masterarbeit soll Studenten demonstrieren und erziehen, um verschiedene Aspekte einer Industrie-4.0-Modell-Lean-Factory zu verstehen. Eine bewegliche und kompakte Fabrik kann in die Klasse oder an irgendeinen Platz zur Demonstration gebracht werden. Smart Factory Besteht aus einer IoT-Plattform, die Systeme innerhalb der Fabrik kommuniziert. Die Masterarbeit zeigt eine kleine Wertschöpfungskette eines Produkts mit der Bezeichnung Ring Holder und Manufacturing Execution System(MES)in einem Lean Factory-Konzept der Industrie 4.0.';
aLangKeys['de']['PH1']='Wählen Sie Ihr unteres Teil:';
aLangKeys['de']['PH2']='Wählen Sie Ihren oberen Teil:';
aLangKeys['de']['ND1']='Wählen Sie Design:';
aLangKeys['de']['ND2']='Wählen Sie Design:';
aLangKeys['de']['NC1']='Wählen Sie Farbe:';
aLangKeys['de']['NC2']='Wählen Sie Farbe:';
aLangKeys['de']['QT1']='Menge:';
aLangKeys['de']['BTN']='Weiter zum Warenkorb';
aLangKeys['de']['contacts']='Kontakte';
aLangKeys['de']['FBO']='Bestellnummer';
aLangKeys['de']['FB']='FeedBack';
aLangKeys['de']['FBSUB']='Senden';
aLangKeys['de']['SI']='Anmelden';
aLangKeys['de']['SIUN']='Benutzername';
aLangKeys['de']['SIP']='Kennwort';
aLangKeys['de']['SIBTN']='Anmelden';
aLangKeys['de']['DD']='Lieferung Adresse';
aLangKeys['de']['DDSDP']='Wählen Sie einen Lieferpunkt:';
aLangKeys['de']['DDSDP1']='LIEFERPUNKT: A';
aLangKeys['de']['DDSDP2']='LIEFERPUNKT: B';
aLangKeys['de']['DDSDP3']='LIEFERPUNKT: C';
aLangKeys['de']['DDSDP4']='LIEFERPUNKT: D';
aLangKeys['de']['YC']='Ihre Warenkorb';
aLangKeys['de']['CYO']='Bestätigung Ihre Bestellung';



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