<div class="modal fade" id="kartuKeluarga" tabindex="-1" role="dialog" aria-labelledby="kartuKeluargaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kartuKeluargaLabel">Katru Keluarga</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('storage/' . $dokumen->kartu_keluarga) }}" alt="Foto" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="aktaKelahiran" tabindex="-1" role="dialog" aria-labelledby="aktaKelahiranLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aktaKelahiranLabel">Akta Kelahiran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('storage/' . $dokumen->akta_kelahiran) }}" alt="Foto" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="ktpAyah" tabindex="-1" role="dialog" aria-labelledby="ktpAyahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ktpAyahLabel">KTP Ayah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('storage/' . $dokumen->ktp_ayah) }}" alt="Foto" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="ktpIbu" tabindex="-1" role="dialog" aria-labelledby="ktpIbuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ktpIbuLabel">KTP Ibu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('storage/' . $dokumen->ktp_ibu) }}" alt="Foto" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<script>
    $(function(){
        $('#kartuKeluarga').appendTo('body');
        $('#ktpAyah').appendTo('body');
        $('#ktpIbu').appendTo('body');
        $('#aktaKelahiran').appendTo('body');
    })
</script>