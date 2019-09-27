<div class="modal fade bd-example-modal-lg gif" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-danger text-center ">
        <h5 class="tC modal-title text-white font-weight-bold " id="exampleModalLabel">ATTENTION</h5>
      </div>

      <div class="modal-body bg-light">
        <p class="font-weight-bold">Vous êtes sur le point de supprimer un produit de manière définitive!</p>
        <form action="produit_form_suppr.php" method="post" id="formDel">
          <label class="mt-3" for="idH"></label>
          <input type="hidden" name="idH" id="idH" class="form-control" value=<?= $result->pro_id; ?>>
        <button type="button" class="btn btn-outline-info bordLarge btn-lg font-weight-bold" data-dismiss="modal">Annuler</button>
        <button type="submit" name="delete" class="btn btn-outline-danger bordLarge ml-2 btn-lg font-weight-bold">Confirmer</button>
        </form>

      </div>
    </div>
  </div>
</div>