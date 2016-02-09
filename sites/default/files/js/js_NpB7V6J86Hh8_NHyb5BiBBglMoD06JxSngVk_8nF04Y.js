/** This section is only needed once per page if manually copying **/
if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;
    var head            = document.getElementsByTagName('head')[0];
    var script          = document.createElement('script');
    script.type         = 'text/javascript';
    script.src          = 'http://offers.redcrackle.com/media/js/mautic-form.js';
    script.onload       = function() {
        MauticSDK.onLoad();
    };
    head.appendChild(script);
    var MauticDomain = 'http://offers.redcrackle.com';
    var MauticLang   = {
        'submittingMessage': "Please wait..."
    };
    var MauticFormValidations  = {};
    var MauticFormCallback = {};
}

/** This is needed for each form **/
MauticFormValidations['drupal7performanceoptimizationmoduleslistebookdownloadform'] = {
    'email': {
        type: 'email',
        name: 'email'
    },
    'company': {
        type: 'text',
        name: 'company'
    }
};

    /** This is needed for each form **/
    MauticFormValidations['drupal8tutorials'] = {
        'email': {
            type: 'email',
            name: 'email'
        },
    };

    /** This is needed for each form **/
    MauticFormValidations['performanceoptimizationservice'] = {
        'email': {
            type: 'email',
            name: 'email'
        },
    };

    /** This is needed for each form **/
    MauticFormValidations['objectorientedphpfordrupaldevelopers'] = {
        'email': {
            type: 'email',
            name: 'email'
        },
        'company': {
            type: 'text',
            name: 'company'
        },
    };

MauticFormCallback['drupal7performanceoptimizationmoduleslistebookdownloadform'] = {
    'onResponseEnd': function(response) {
        if (response.success) {
            jQuery('#modal-content').after(jQuery('.mauticform-message').html());
            jQuery('.modal-scroll').css('padding', '2em 1em 1em 1em').css('font-size', '1.6em');
            jQuery('#modal-content').hide();
            window.popupMessageShown = true;
            setTimeout(function () { Drupal.CTools.Modal.modal_dismiss(); }, 3000);
        }
    }
};

MauticFormCallback['drupal8tutorials'] = {
    'onResponseEnd': function(response) {
        if (response.success && !window.popupMessageShown) {
            jQuery('#modal-content', '.bounce-convert-custom-modal').after(jQuery('.mauticform-message', '.bounce-convert-custom-modal').html());
            jQuery('.modal-scroll', '.bounce-convert-custom-modal').css('padding', '2em 1em 1em 1em').css('font-size', '1.6em');
            jQuery('#modal-content', '.bounce-convert-custom-modal').hide();
            window.popupMessageShown = true;
            setTimeout(function () { Drupal.CTools.Modal.modal_dismiss(); }, 3000);
        }
    }
};
;
Drupal.ajax.prototype.commands = Drupal.ajax.prototype.commands || {};

Drupal.ajax.prototype.commands.mautic_form_popup = function(ajax, response, status) {
    var el = jQuery('#modal-content');
    var formId = el.attr('form-id');
    //var scriptSrc = "http://offers.redcrackle.com/index.php/form/generate.js?id=1"; //+ formId;
    //var script = jQuery(\'<script>\').attr(\'type\', \'text/javascript\').attr(\'src\', scriptSrc);
    //el.append(script);

    //jQuery.getScript(scriptSrc);

    //var script = 'document.write("\n\n<script type=\"text/javascript\">\n\n    /** This section is only needed once per page if manually copying **/\n    if (typeof MauticSDKLoaded == \'undefined\') {\n        var MauticSDKLoaded = true;\n        var head            = document.getElementsByTagName(\'head\')[0];\n        var script          = document.createElement(\'script\');\n        script.type         = \'text/javascript\';\n        script.src          = \'http://offers.redcrackle.com/media/js/mautic-form.js\';\n        script.onload       = function() {\n            MauticSDK.onLoad();\n        };\n        head.appendChild(script);\n        var MauticDomain = \'http://offers.redcrackle.com\';\n        var MauticLang   = {\n            \'submittingMessage\': \"Please wait...\"\n        }\n        var MauticFormValidations  = {};\n    }\n\n    /** This is needed for each form **/\n    MauticFormValidations[\'drupal7performanceoptimizationmoduleslistebookdownloadform\'] = {\n        \'email\': {\n            type: \'email\',\n            name: \'email\'\n        },\n        \'company\': {\n            type: \'text\',\n            name: \'company\'\n        },\n    };\n</script>\n\n\n<div id=\"mauticform_wrapper_drupal7performanceoptimizationmoduleslistebookdownloadform\" class=\"mauticform_wrapper\">\n    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"http://offers.redcrackle.com/index.php/form/submit?formId=1\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform\" data-mautic-form=\"drupal7performanceoptimizationmoduleslistebookdownloadform\">\n        <div class=\"mauticform-error\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_error\"></div>\n        <div class=\"mauticform-message\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_message\"></div>\n        <div class=\"mauticform-innerform\">\n\n            <div id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_email\"  class=\"mauticform-row mauticform-email mauticform-required\">\n                <label id=\"mauticform_label_drupal7performanceoptimizationmoduleslistebookdownloadform_email\" for=\"mauticform_input_drupal7performanceoptimizationmoduleslistebookdownloadform_email\" class=\"mauticform-label\">Email</label>\n                <input id=\"mauticform_input_drupal7performanceoptimizationmoduleslistebookdownloadform_email\" name=\"mauticform[email]\" value=\"\" class=\"mauticform-input\" type=\"email\" />\n                <span class=\"mauticform-errormsg\" style=\"display: none;\">Email field is required.</span>\n            </div>\n\n            <div id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_company\"  class=\"mauticform-row mauticform-text mauticform-required\">\n                <label id=\"mauticform_label_drupal7performanceoptimizationmoduleslistebookdownloadform_company\" for=\"mauticform_input_drupal7performanceoptimizationmoduleslistebookdownloadform_company\" class=\"mauticform-label\">Company</label>\n                <input id=\"mauticform_input_drupal7performanceoptimizationmoduleslistebookdownloadform_company\" name=\"mauticform[company]\" value=\"\" class=\"mauticform-input\" type=\"text\" />\n                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please enter the company you work for.</span>\n            </div>\n\n            <div id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_submit\"  class=\"mauticform-row mauticform-button-wrapper\">\n                <button type=\"submit\" name=\"mauticform[submit]\" id=\"mauticform_input_drupal7performanceoptimizationmoduleslistebookdownloadform_submit\" name=\"mauticform[submit]\" value=\"\" class=\"mauticform-button\" value=\"1\">Submit</button>\n            </div>\n\n            <input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_id\" value=\"1\" />\n            <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_return\" value=\"\" />\n            <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform_drupal7performanceoptimizationmoduleslistebookdownloadform_name\" value=\"drupal7performanceoptimizationmoduleslistebookdownloadform\" />\n\n        </div>\n    </form>\n</div>");';
    //var scriptActual = jQuery('<script>').attr('type', 'text/javascript').append(response.script);
    //var script = response.script;
    el.append(response.html);
    MauticSDK.onLoad();

    jQuery('#modal-throbber', el).remove();
    jQuery('#modal-title').html(response.title);

    //setTimeout(Drupal.CTools.Modal.modal_dismiss(), 3000);
}
;
