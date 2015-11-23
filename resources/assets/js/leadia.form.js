function __(data){
    if( typeof( console ) != 'undefined' ){
        console.log(data);
    }
}

//
// LeadiaForm Class
//

var LeadiaForm = function(params){

    var root = this;

    var errorCallback = false;
    var successCallback = false;

    var submitUrl = false;

    this.data = {};

    //
    // Constructor
    //

    this.init = function(params){

        root.submitUrl = params['url'];
        root.successCallback = params['success'];
        root.errorCallback = params['error'];
        root.callbacks = params['callbacks'];

        //root.data['question'] = '';

        // Triggered on submiting a form, may be a part of a form

        jQuery(document).on('submit', '[data-form]', function(event){
            event.preventDefault();
            root.post(jQuery(this));
        });

        // Remove error class from modified input

        jQuery(document).on('change', '[data-form-field]', function(){
            jQuery(this).removeClass('error');
        });

        // Go to step

        jQuery(document).on('click', '[data-goto-step]', function(){
            var step = jQuery(this).data('goto-step');
            root.goto(step);
        });

        jQuery('[data-form-submit]').removeAttr('disabled');

        // Geo Location

        jQuery('[data-geo-location]').each(function(){
            var city_input = jQuery(this);
            var city_input_wrong = jQuery('<div>').addClass('wrong-geolocation').html('изменить <span>&times;</span>');

            jQuery.ajax({
                url: './geo.php',
                success: function(city){

                    if( typeof(city) != 'undefined' && city.length > 0 && city != 'null' && city.charCodeAt(0) != 65279 /* Zero */ ){
                        city_input.val(city);
                        city_input.attr("disabled", "disabled");
                        city_input.after(city_input_wrong);
                    }
                }
            });

            city_input_wrong.on('click', function(){
                city_input_wrong.hide();
                city_input.removeAttr('disabled');
                city_input.val('');
                city_input.focus();
            });
        });
    };

    //
    // Calling constructor
    //

    this.init(params);

    //
    // Validate Form
    //

    this.post = function(form){

        var fields = form.find('[data-form-field]');
        var nextStep = form.data('next-step');
        var error = false;

        fields.each(function(){

            var field = jQuery(this);
            var fieldName = field.data('form-field');
            var fieldVal = field.val();

            if(typeof(root.data[fieldName]) == 'undefined'){

                if(fieldVal.length){ // If valid field

                    root.data[fieldName] = fieldVal;

                    var field_desc = field.data('form-field-desc');
                    if(typeof(field_desc) != 'undefined'){
                        root.data['question'] += ' ' + field_desc + ': ' + fieldVal + ' ';
                    }


                }else{
                    if( field.data('necessary') ){
                        error = true;
                        field.addClass('error');
                    }
                }
            }


        });

        // Going to the next step

        if( !error ){

            try {
                var target = form.data('target');
            } catch (e) {
            }

            try {
                var callback = form.data('callback');
                console.log('Callback: '+callback);
                root.callbacks[callback]();
            } catch (e) {
            }

            // If this is the last step, send the lead

            if( form.data('send-lead') ){

                // Prepare form data

                var additional_fields = ['userid', 'subaccount', 'client_ip', 'template', 'product'];

                for( field in additional_fields ){
                    var field_val = jQuery('body').data(field)
                    if( typeof( field_val ) != 'undefined' && field_val.length > 0 ){
                        root.data[field] = field_val;
                    }
                }

                if(jQuery('body').data('user-id'))
                    root.data['userid'] = jQuery('body').data('user-id');
                if(jQuery('body').data('subaccount'))
                    root.data['subaccount'] = jQuery('body').data('subaccount');
                if(jQuery('body').data('client-ip'))
                    root.data['client_ip'] = jQuery('body').data('client-ip');

                //root.data['userid'] = jQuery('body').data('user-id');
                //root.data['subaccount'] = jQuery('body').data('subaccount');
                //root.data['client_ip'] = jQuery('body').data('client_ip');
                //root.data['template'] = jQuery('body').data('template');
                //root.data['product'] = jQuery('body').data('product');

                root.send();

                jQuery('[data-form-submit]').attr('disabled', 'disabled');

            }else{
                root.goto(nextStep); // Go to next step
            }

        }

        return error;

    }

    // Send Lead

    this.send = function(){

        __(root.data);
        jQuery.ajax({
            url: root.submitUrl,
            data: root.data,
            type: 'post',
            success: root.successCallback
        });
    }

    // Go To Step

    this.goto = function(step){
        jQuery('.step').removeClass('active');
        jQuery('[data-step="'+step+'"]').addClass('active');
        //if (step==='finish') window.location.replace(thank_you_url);
        if (step==='finish') window.parent.location.replace(thank_you_url); // Из iframe перезагружаем родительскую страницу.
    }
}