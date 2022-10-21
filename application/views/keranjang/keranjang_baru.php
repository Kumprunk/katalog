
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Keranjang</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            
            <?php foreach ($this->cart->contents() as $items): ?>
                
                <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="<?= base_url("assets/img/ipon.jpg")?>"
                        class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                    </div>
                    <!-- Image -->
                </div>
                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong><?= $items['name']?></strong></p>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                            <p><?=$option_name?>: <?= $option_value; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <form action="<?= base_url('keranjang/hapus')?>" method="POST">
                        <input type="hidden" id="rowid" name="rowid" value="<?= $items['rowid']?>">
                        <button type="submit" class="text-danger">
                        <i class="fas fa-trash fa-lg"></i>
                        <!-- <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a> -->
                        </button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex flex-row">
                    <button class="btn btn-link px-2" id="btn-minus">
                      <i class="fas fa-minus"></i>
                    </button>
                    <input id="form1" min="0" name="quantity" value="<?= $items['qty']?>" type="number"
                      class="form-control form-control-sm" style="width: 100px;" disabled/>
                    <button class="btn btn-link px-2" id="btn-plus">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                        <p>Harga: Rp. <?= $items['price']?></p>
                    </p>
                    <!-- Price -->
                </div>
                </div>
                <hr class="my-4" />
           
            <?php endforeach; ?>
          </div>
        </div>
       
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Total Belanja</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Total Harga
                <span>Rp. <?= $this->cart->total()?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3"> 
              </li>
            </ul>
            <form action="<?= base_url('keranjang/invoice')?>" method="post">           
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                Cetak Invoice
                </button>
            </form>     
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    function hapus_cart(id)
    {
        confirm("Anda yakin ingin menghapus barang ini?")
        $.ajax({
			url : "<?php echo base_url();?>keranjang/hapus",
			method : "POST",
			data : {row_id : id},
			success :function(data){
				
			}
		});
    }
</script>
