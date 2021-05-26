<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" id="formEdit">
            @method('PUT')
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atualizar Pessoa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="col-form-label">Nome</label>
                    <input type="text" id="namePerson" class="form-control" id="name" value="" name="name">
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">E-mail</label>
                    <input type="text" id="emailPerson" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="category" class="col-form-label">Categoria</label>
                    <select class="form-control" id="category" name="category_id">
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary updatePerson">Atualizar</button>
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
                $('.editPeople').click(function(){
                    let select = $("#category > option").remove();
                    let people =  JSON.parse($(this).val());
                    $("#namePerson").val(people.name);
                    $("#emailPerson").val(people.email);

                    let url = window.location.origin;
                    $.get(`${url}/categories`, function(categories){
                        let select = $("#category");
                        categories.forEach(category => {
                            select.append(`
                                <option ${category.id === people.category_id ? 'selected' : ''}  value="${category.id}">${category.name}</option>
                            `)
                        });
                    })

                    $('.updatePerson').click(function(){
                        $('#formEdit').attr('action', `${url}/peoples/${people.id}`);
                    })
                });
            });
        })(jQuery);
    </script>
@endpush
