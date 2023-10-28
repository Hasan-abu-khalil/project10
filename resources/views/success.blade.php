<x-app-layout>

    <style>

        footer{
            display: none;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Add this script at the bottom of your Blade file
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Checkout Successful',
                text: 'Your items have been ordered successfully.',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Back to Home'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/'; // Use the named route 'home'
                }
            });
        });
    </script>



</x-app-layout>
