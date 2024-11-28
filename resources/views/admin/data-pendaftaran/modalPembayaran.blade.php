
<div class="modal fade" id="buktiPembayaran" tabindex="-1" role="dialog" aria-labelledby="buktiPembayaranLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buktiPembayaranLabel">Bukti Pembayaran {{$item->user->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('storage/' . $item->bukti_pembayaran) }}" alt="Foto" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<script>
    $(function(){
        $('#buktiPembayaran').appendTo('body');
    })
</script>