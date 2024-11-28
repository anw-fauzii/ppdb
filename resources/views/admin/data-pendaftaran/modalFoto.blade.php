
<div class="modal fade" id="dokumen{{$dok->id}}" tabindex="-1" role="dialog" aria-labelledby="dokumenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dokumenLabel">Dokumen {{$item->user->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <span><strong>Kartu Keluarga</strong></span>
              <img src="{{ asset('storage/' . $dok->kartu_keluarga) }}" alt="Foto" width="100%">
            </div>
            <div class="col-md-6  mb-3">
              <span><strong>Akta Kelahiran</strong></span>
              <img src="{{ asset('storage/' . $dok->akta_kelahiran) }}" alt="Foto" width="100%">
            </div>
            <div class="col-md-6  mb-3">
              <span><strong>KTP Ayah</strong></span>
              <img src="{{ asset('storage/' . $dok->ktp_ayah) }}" alt="Foto" width="100%">
            </div>
            <div class="col-md-6  mb-3">
              <span><strong>KTP Ibu</strong></span>
              <img src="{{ asset('storage/' . $dok->ktp_ibu) }}" alt="Foto" width="100%">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<script>
    $(function(){
        $('#dokumen{{$dok->id}}').appendTo('body');
    })
</script>