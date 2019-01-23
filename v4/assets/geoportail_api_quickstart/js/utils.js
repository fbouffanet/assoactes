/*
 * Copyright (c) 2008-2011 Institut Geographique National France, released under the
 * BSD license.
 */

if (window.__Geoportal$timer===undefined) {
    var __Geoportal$timer= null;
}

/**
 * Function: checkApiLoading
 * Assess that needed classes have been loaded.
 *
 * Parameters:
 * retryClbk - {Function} function to call if any of the expected classes
 * is missing.
 * clss - {Array({String})} list of classes to check.
 *
 * Returns:
 * {Boolean} true when all needed classes have been loaded, false otherwise.
 */
function checkApiLoading(retryClbk,clss) {
    if (__Geoportal$timer!=null) {
        //clearTimeout: cancels the timer "__Geoportal$timer" before its end
        //clearTimeout: annule le minuteur "__Geoportal$timer" avant sa fin
        window.clearTimeout(__Geoportal$timer);
         __Geoportal$timer= null;
    }

    /**
    * It may happen that the init function is executed before the API is loaded
    * Addition of a timer code that waits 300 ms before running the init function
    *
    * Il se peut que l'init soit exécuté avant que l'API ne soit chargée
    * Ajout d'un code temporisateur qui attend 300 ms avant de relancer l'init
    */
    var f;
    for( var i=0, l= clss.length; i<l; i++) {
        try {
            eval('var f='+clss[i]);
        } catch (e) {
            f= undefined;
        }
        if (typeof(f)==='undefined') {
             __Geoportal$timer= window.setTimeout(retryClbk, 300);
            return false;
        }        
    }
    return true;
}

var Geoportal$translations= {
    'new.instance.failed':
    {
        
        'en':"Map creation failed",
       
        'fr':"Création de la carte échouée"
    },
    'legal':
    {

        'en':"Terms of Use",
     
        'fr':"Mentions Légales"
    },
    'example_jscode':
    {
       
        'en':"See the example's JavaScript code",
       
        'fr':"Voir le code Javascript de l'exemple"
       
    }
};

/**
 * Function: translate
 * Allow changing current language in the web page.
 *
 * Parameters:
 * eids - {Array({String})} list of DOM elements id whose content is i18n's
 *      governed. ['example_title', 'example_explain', 'example_jscode',
 *      'legal' ] is prepended.
 * vwrs - {Array({String}) list of variable names of type
 *      {<Geoportal.Viewer>} that handle the i18n "changelang" events.
 */
function translate(eids, vwrs) {
    Geoportal.Lang.add(Geoportal$translations);

    if (!eids) {
        eids= [];
    }
    eids.unshift('example_title');
    eids.unshift('example_explain');
    eids.unshift('example_jscode');
    eids.unshift('legal');

    var eids$i18n= function() {
        var e= null;
        for (var i= 0, l= eids.length; i<l; i++) {
            e= OpenLayers.Util.getElement(eids[i]);
            if (e) {
                var t= e.getAttribute('type');
                if (t && t.match(/^button$/i)) {
                    e.value= OpenLayers.i18n(eids[i]);
                } else {
                    e.innerHTML= OpenLayers.i18n(eids[i]);
                }
            }
        }
    };
    eids$i18n();

    var slct= OpenLayers.Util.getElement('gpChooseLang');
    if (slct) {
        slct.onchange= function() {
            //Changing the map's language
            if (vwrs) {
                var v;
                for (var i= 0, l= vwrs.length; i<l; i++) {
                    try {
                        eval('var v= '+vwrs[i]);
                    } catch (e) {
                        v= undefined;
                    }
                    if (v) {
                        v.getMap().setLocale(this.options[this.selectedIndex].value);
                    }
                }
            } else {
                if (window.viewer!=undefined &&
                    typeof(Geoportal)=='object' && typeof(Geoportal.Viewer)!='undefined' &&
                    (viewer instanceof Geoportal.Viewer)) {
                    viewer.getMap().setLocale(this.options[this.selectedIndex].value);
                } else {
                    // minimum API:
                    OpenLayers.Lang.setCode(this.options[this.selectedIndex].value);
                }
            }

            //Translation of expressions due to the languages's change which has been made
            //Traduction des expressions suite au changement de langue effectué (i18n= internationalisation)
            eids$i18n();
            this.blur();
        };
        //Retrieval of the default language (the one of the Web browser's installation)
        //Récupération de la langue par défaut(celle d'installation du butineur Web)
        var language= OpenLayers.Lang.getCode();
        var re= new RegExp("^"+language);
        //Search in the change language form of the langage that best matches
        //the web browser's language.  This language is selected
        //
        //Recherche dans le formulaire de la langue qui correspond au mieux à la
        //langue du butineur Web.  Cette dernière est selectionnée
        for (var i= 0; i<slct.options.length; i++) {
            if (slct.options[i].value.match(re)) {
                slct.options[i].selected= true;
            }
        }
    }
}
