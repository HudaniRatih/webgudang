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
                <h4>Dibawah Ini Adalah Daftar Peminjaman </h4>
                <table id="tabel_pinjam" class="table">
                    
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

                    $('#tabel_pinjam').html(objData.konten);
                    reload_event();
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            }) 
        }
        loadKonten('http://localhost:8080/backend_gudang/peminjaman/list_pinjam');
        
        

        

        