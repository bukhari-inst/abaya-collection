<footer id="footer" class="footer">
    <div class="copyright">
        &copy; <?= date("Y"); ?> Abaya Collection All Rights Reserved.
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>/assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/chart.js/chart.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/quill/quill.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="text/javascript">
</script>
<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets/admin/js/main.js"></script>

<script type="text/javascript">
function selectProduk() {
    $("#select-produk").select2({
        width: 'resolve',
        dropdownParent: $('#tambah')
    });
}

function updateProduk(idPd) {
    $("#select-produks" + idPd).select2({
        width: 'resolve',
        dropdownParent: $('#update' + idPd)
    });
}

$('#saveProduk').on('click', function() {
    var $nama = $('#nama').val();
    var $harga = $('#harga').val();
    var $warna = $('#warna').val();
    var $filecover = $('#filecover').val();
    var $fileproduk = $('#fileproduk').val();

    $('input[type="file"]').change(function(e) {
        let fileName = e.target.files[0].name;
        alert('The file name is : "' + fileName);
    });


    $.ajax({
        url: '<?= site_url('/tambahproduk') ?>',
        type: 'POST',
        data: {
            nama: $nama,
            harga: $harga,
            warna: $warna,
            filecover: $datas,
            fileproduk: $fileproduk,
        },
        success: function(hasil) {
            var $obj = $.parseJSON(hasil);
            if ($obj.success == false) {
                $('.produk-success').hide();
                $('.produk-error').show();
                $('.produk-error').html($obj.error);
            } else {
                $('.produk-error').hide();
                $('.produk-success').show();
                $('.produk-success').html($obj.success);
            }
        }
    });

});
</script>

</body>

</html>