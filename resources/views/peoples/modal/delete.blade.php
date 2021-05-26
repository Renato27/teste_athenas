<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" id="formDelete">
            @method('DELETE')
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Pessoa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p>Tem certeza que deseja excluir a pessoa <span class="namePerson" style="font-weight:bold"></span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button type="submit" class="btn btn-primary updatePerson">Sim</button>
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
                $('.deletePerson').click(function(){
                    let people =  JSON.parse($(this).val());
                    let url = window.location.origin;
                    $(".namePerson").html(people.name);

                    $('.updatePerson').click(function(){
                        $('#formDelete').attr('action', `${url}/peoples/${people.id}`);
                    })
                });
            });
        })(jQuery);
    </script>
@endpush
