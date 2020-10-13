$(document).ready(function() {
    // Disable submit button while submit
    $('button[type="submit"]').click(function() {
        $(this).addClass('disabled busy-cursor')
    });
    // Init tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
});

// Ajax request
function ajaxRequest(requestData, requestUrl, requestType = 'POST') {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    return new Promise((resolve, reject) => {
        $.ajax({
            type: requestType,
            url: requestUrl,
            data: requestData,
            // Fired on success response
            success: function success(data) {resolve(data);},
            // Fired on failed response
            error: function error(error) {
                dangerToaster("Une erreur s'est produite sur le serveur, réessayez plus tard")
                reject(error.responseJSON);
            }
        });
    });
}

// Call toaster
function callToaster(title, message, type, delay) {
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: 'toast-top-right',
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: delay,
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
    };
    if(type === 'info') toastr.info(message, title);
    else if(type === 'danger') toastr.error(message, title);
    else if(type === 'success') toastr.success(message, title);
    else if(type === 'warning') toastr.warning(message, title);
}

// Call danger toaster
function dangerToaster(message) {
    callToaster('Erreur', message, "danger", 10000)
}

// Call danger toaster
function successToaster(message) {
    callToaster('Succès', message, "success", 5000)
}