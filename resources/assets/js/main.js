(function($, baseUrl) {
    $(document).ready(function () {
        $.ajaxSetup({type: 'POST'});

        var validatorOptions = {
            feedbackIcons: {
                valid: 'fa fa-check',
                invalid: 'fa fa-remove',
                validating: 'fa fa-cog fa-spin'
            },
            fields: {
                from_email: {
                    validators: {
                        notEmpty: {
                            message: 'A valid email is required'
                        },
                        email: {
                            message: 'The value is not a valid email address'
                        }
                    }
                },
                from_name: {
                    validators: {
                        notEmpty: {
                            message: 'A valid name or nickname is required'
                        },
                        stringLength: {
                            max: 25,
                            message: 'Your name should be less than 25 characters'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter a subject'
                        },
                        stringLength: {
                            max: 120,
                            message: 'The subject must be less than 120 characters'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter a message'
                        },
                        stringLength: {
                            max: 500,
                            message: 'The message must be less than 500 characters'
                        }
                    }
                }
            }
        };

        var $form = $('#contact-form');

        $form.submit(function(e) {
            e.preventDefault();
            return false;
        });
        $form.bootstrapValidator(validatorOptions)
            .on('success.form.bv', function(e) {
                e.preventDefault();

                var contactForm = $(e.currentTarget);

                $('#loading').removeClass('hide');
                $.ajax({
                    url: baseUrl + '/contact',
                    data: contactForm.serialize(),
                    success: function(response) {
                        $('#loading').addClass('hide');
                        console.log(response.status, response.data);
                        if (response.status === 'success') {
                            $('#alert').text(response.data).addClass('success').removeClass('hide');
                        }
                    }
                });
            });
    });
})(jQuery, URL);

