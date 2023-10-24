import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const deleteUrl = this.getAttribute('href');

            Swal.fire({
                title: 'Delete User!',
                text: 'Are you sure you want to delete?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirige vers la route de suppression
                    window.location = deleteUrl;
                }
            });
        });
    });
});
