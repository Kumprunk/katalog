<script src="<?= base_url("assets/js/plugins.js")?>"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
    <script>
    $(document).ready(function(){
        $('#btn-minus').click(function(){
            var qty = document.getElementById('form1').value
            var id  = document.getElementById('rowid').value
            $.ajax({
                url : "<?php echo base_url();?>keranjang/kurang_stok",
                method : "POST",
                data : {row_id : id,qty: qty},
                success :function(data){
                    console.log(data)
                }
            });
        })
        $('#btn-plus').click(function(element, operation){
            var qty = document.getElementById('form1').value
            var id  = document.getElementById('rowid').value
            $.ajax({
                url : "<?php echo base_url();?>keranjang/tambah_stok",
                method : "POST",
                data : {row_id : id,qty: qty},
                success :function(data){
                    console.log(data)
                }
            });  
            // console.log(qty)
            // $(this).parent().find(".form1").val(qty+1)
        })
       
    })
</script>
</body>
</html>