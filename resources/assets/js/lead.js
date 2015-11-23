var Lead = function(){
    var root = this;
    this.data = {};

    this.init = function(formId){
        jQuery('[data-form-field]').change(function(){
            jQuery(this).removeClass('error');
        });
    }

    this.post = function(formId){
        //console.log(formId);
        var form = jQuery('form[data-form="'+formId+'"]');
        var fields = form.find('[data-form-field]');

        var error = false;

        fields.each(function(){

            var field = jQuery(this);
            var fieldName = field.attr('data-form-field');
            var fieldVal = field.val();

            if(fieldVal.length === 0 ){
                if( field.attr('data-necessary') == 'true' ){
                    error = true;
                    field.addClass('error');
                }
            }else{
                root.data[fieldName] = fieldVal;
            }

        });

        //console.log(root.data);

        if(!error){
            return true;
        }else{
            return false;
        }

    }

    this.send = function(){
        /*console.log(root.data);*/
        jQuery.ajax({
            url: 'lead.php',
            data: root.data,
            type: 'post',
            success: function(){
                /*alert("");*/
            }
        });
    }
}