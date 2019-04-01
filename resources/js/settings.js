const _token = $('meta[name="csrf-token"]').attr('content');

export function githubSwitch() {
    $('#githubSwitch').on('change', function () {

        $.post({
            url: "/settings/editLinks",
            data: {
                for: $('#personGithub').val(),
                active: $('#githubSwitch').is(':checked'),
                _token
            },
            success: function (results) {
            }
        });

    })
}


export function stackOverflowSwitch() {
    $('#stackOverflowSwitch').on('change', function () {

        $.post({
            url: "/settings/editLinks",
            data: {
                for: $('#personStack').val(),
                active: $('#stackOverflowSwitch').is(':checked'),
                _token
            },
            success: function (results) {
            }
        });

    })
}

export function facebookSwitch() {
    $('#facebookSwitch').on('change', function () {

        $.post({
            url: "/settings/editLinks",
            data: {
                for: $('#personFacebook').val(),
                active: $('#facebookSwitch').is(':checked'),
                _token
            },
            success: function (results) {
            }
        });

    })
}