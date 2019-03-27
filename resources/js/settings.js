const _token = $('meta[name="csrf-token"]').attr('content');

export function githubSwitch() {
    $('#githubSwitch').on('change', function () {

        console.log($('#githubSwitch').is(':checked'));
        $.post({
            url: "/editLinks",
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

}

export function facebookSwitch() {

}