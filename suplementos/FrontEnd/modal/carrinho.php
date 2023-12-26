<!-- Modal -->

<div class="modal fade bd-example-modal-xl" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Carrinho <i class="bi bi-cart4"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group form-row">

                        <div class="form-group col-sm-4">
                            <label class="think">Produto</label>
                            <input type="text" class="form-control" name="produto" id="produto0" value="">
                        </div>


                        <div class="form-group col-sm-2">
                            <label class="think">Quantidade</label>
                            <input type="number" class="form-control" name="quantidade" id="quantidade0" value="">
                        </div>

                        <div class="form-group col-sm-2">
                            <label class="think">Valor Total</label>
                            <input type="text" class="form-control" name="valortotal" id="vlrtotal0">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="redirecionar()">Finalizar</button>
                <button type="button" class="btn btn-primary">Continuar comprando</button>
            </div>
        </div>
    </div>
</div>

<script>
        function redirecionar() {
            // Especifica a URL da página de destino
            var paginaDestino = "../pagamento.php";

            // Redireciona para a página de destino
            window.location.href = paginaDestino;
        }
    </script>
