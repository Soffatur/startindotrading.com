const SW = {
    success: ({ message, callback = () => { } }) => {
        return Swal.fire({
            title: 'Berhasil!',
            text: message,
            icon: 'success',
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then(() => callback());
    },

    error: ({ message, callback = () => { } }) => {
        return Swal.fire({
            title: 'Gagal!',
            text: message,
            icon: 'error',
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then(() => callback());
    },

    confirm: ({
        message,
        onConfirm = () => { },
        onReject = () => { },
    }) => {
        return Swal.fire({
            title: 'Peringatan!',
            text: message,
            icon: 'warning',
            allowOutsideClick: false,
            showDenyButton: true,
            confirmButtonText: 'Yes',
            allowEscapeKey: false,
        }).then(({ isConfirmed, isDenied }) => {
            if (isConfirmed) {
                return onConfirm()
            }
            if (isDenied) {
                return onReject()
            }
        });
    },
}
