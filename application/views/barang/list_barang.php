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
               <!--  <a href="#" onclick="loadMenu('<?= base_url('Barang/form_create')?>')" class="btn btn-primary">Tambah Data Barang</a> -->
                <hr/>               

                <h4>Dibawah Ini Adalah Data Barang</h4>
                <table id="tabel_barang" class="table">
                    
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="<?= base_url('assets/datatable/datatables.min.js')?>"></script> -->

<script type="text/javascript">
        function loadKonten(url) {
            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);

                    $('#tabel_barang').html(objData.konten);
                    reload_event();
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }
        loadKonten('https://webgudang.bulubook.com/barang/list_barang');

        function reload_event(){
            $('.linkEditBarang').on('click', function(){
                var hashClean = this.hash.replace('#','');
                loadMenu('<?=base_url('barang/form_edit/')?>' +hashClean);
            });

            $('.linkHapusBarang').on('click', function(){
                var hashClean = this.hash.replace('#','');
                hapusData(hashClean);
            });

            // $('#tabel_barang').DataTable();
        }

         function hapusData(id_barang) {
            // var url = 'http://localhost:8080/backend_inventory/barang/delete_data?id_barang='+id_barang;
            var url = 'https://webgudang.bulubook.com/barang/soft_delete_data?id_barang='+id_barang;

            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);
                    alert(objData['pesan']);
                    loadKonten('https://webgudang.bulubook.com/barang/list_barang')
                    
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }

        function cariData() {
            var url = 'https://webgudang.bulubook.com/barang/cari_barang';
            var dataForm = {};
            var allInput = $('.form-input-cari');

            $.each(allInput,function(i,val){
                dataForm[val['name']] = val['value'];
            });

            $.ajax(url, {
                type: 'POST',
                data: dataForm,
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);
                    $('#tabel_barang').html(objData.konten);
                    
                    reload_event();
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }

        $('#btn-cari').on('click', function(){
            cariData();
        });
        
</script>



<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#tabel_barang').DataTable({
            "processing" : true,
            "serverSide" : true,
            "lengthMenu" : [[10, 20, 30, -1],[10, 20, 30, "ALL"]],
            "ajax" : "https://webgudang.bulubook.com/barang/list_barang"
        });
    });
</script> -->
