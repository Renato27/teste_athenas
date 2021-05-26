<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('peoples.store')}}">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Pessoa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="col-form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="name" class="col-form-label">E-mail</label>
                    <input type="text" class="form-control" id="name" name="email">
                </div>
                <div class="form-group">
                    <label for="categoryCreate" class="col-form-label">Categoria</label>
                    <select class="form-control" id="categoryCreate" name="category_id">
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        jQuery.noConflict();
        (function( $ ) {
            $(function() {
                $('.createPerson').click(function(){
                    let select = $("#categoryCreate > option").remove();
                    let url = window.location.origin;
                    $.get(`${url}/categories`, function(categories){
                        select = $("#categoryCreate");
                        select.append('<option value="">--Selecione--</option>');
                        categories.forEach(category => {
                            select.append(`
                                <option value="${category.id}">${category.name}</option>
                            `)
                        });
                    })
                });
            });
        })(jQuery);
    </script>
@endpush

