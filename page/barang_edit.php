<div class='card ' style="width: 50rem;">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-10">
        <div class='card-body'>
        
        <?php
                $conn = new mysqli("127.0.0.1", "root", "", "spk_sumi");
        
        
        
        
					$id=$_GET['id'];
				    $sql = $conn->query("SELECT * FROM barang where kd_barang='$id'");
					
					if(!$sql){
						echo mysql_errno($connect)." ". mysql_error($connect);
					}
		
					while($hs = $sql->fetch_object())
	
					{?>
          <form class="form-horizontal" action="action/barang_action.php" method="POST">
            <input type="hidden" value="edit" name="aksi">
            <input type="hidden" value=<?php echo $id ?> name="id">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama barang</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" value=<?php echo $hs->nama_barang?> name="nm_barang" required placeholder="nama barang">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Harga</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" required  value=<?php echo $hs->harga?> name="hrg_barang"placeholder="Harga">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Stok</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" required value=<?php echo $hs->stok?> name="stok_barang" placeholder="Stok">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>

        <?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>