<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: gray;
  color: white;
}
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                               <hr/>               

                <h4>Dibawah Ini Adalah Data Barang yang Terhapus</h4>
                <table id="tabel_barang_trash" class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Jumlah Barang</th>
                            <th>Stok</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
        function loadKonten(url) {
            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);

                    $('#tabel_barang_trash').html(objData.konten);
                    reload_event();
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }
        loadKonten('http://localhost:8080/backend_gudang/trash/list_trash');

         function reload_event(){
            $('.linkRestoreBarang').on('click', function(){
                var hashClean = this.hash.replace('#','');
                restoreData(hashClean);
            });

            $('.linkHapusBarang').on('click', function(){
                var hashClean = this.hash.replace('#','');
                hapusData(hashClean);
            });

            // $('#tabel_barang').DataTable();
        }

         function hapusData(id_barang) {            
            var url = 'http://localhost:8080/backend_gudang/trash/delete_data?id_barang='+id_barang;

            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);
                    alert(objData['pesan']);
                    loadKonten('http://localhost:8080/backend_gudang/trash/list_trash')
                    
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }

        function restoreData(id_barang) {            
            var url = 'http://localhost:8080/backend_gudang/trash/restore_data?id_barang='+id_barang;

            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);
                    alert(objData['pesan']);
                    loadKonten('http://localhost:8080/backend_gudang/trash/list_trash')
                    
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }
</script>


