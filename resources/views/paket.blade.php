<?php
$lastCode = "PKT0000";
$lastNumber = (int)substr($lastCode, 3);
$newNumber = $lastNumber + 1;

if ($newNumber < 10) {
    $newCode = "PKT000" . $newNumber;
} elseif ($newNumber < 100) {
    $newCode = "PKT00" . $newNumber;
} else {
    $newCode = "PKT0" . $newNumber;
}
?>

<link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/libs/animate-css/animate.css" />
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/libs/sweetalert2/sweetalert2.css" />

<script src="{{asset('assetsadmin')}}/vendor/libs/jquery/jquery.js"></script>
<script src="{{asset('assetsadmin')}}/vendor/libs/popper/popper.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="{{asset('assetsadmin')}}/js/ui-modals.js"></script>
<script src="{{asset('assetsadmin')}}/vendor/libs/sweetalert2/sweetalert2.js"></script>

<!-- alert data berhasil -->
<div class="alert text-white alert-success" role="alert" style="display: none;">Data Akun Telah Ditambahkan!</div>
<script>
$(document).ready(function() {
    var urlParams = new URLSearchParams(window.location.search);
    var alertParam = urlParams.get('alert');
    if (alertParam === 'success') {
        $('.alert').fadeIn().delay(5000).fadeOut();
    }
});
</script>

<script>
function showAlerte() {
    Swal.fire({
        title: 'Fitur Segera Hadir!',
        text: 'Bersabar Yah...',
        icon: 'error',
        showConfirmButton: false,
        timer: 2500
    });
}
</script>

<style>
.ssedtt { cursor: pointer; }
</style>
