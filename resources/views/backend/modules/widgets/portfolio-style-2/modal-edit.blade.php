<form action="{{ backendUrl('module/portfolio-style-2/update-item/') }}" id="formEditPortfolioItem" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    {!! method_field('patch') !!}

    <div class="modal fade modal-max" id="modalEditPortfolioItem" tabindex="-1" role="dialog" aria-labelledby="modalEditPortfolioItemLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalEditPortfolioItemLabel">Edit portfolio item</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="module_id" value="{{ $module->id }}">
                    <input type="hidden" name="widget_id" value="{{ $data->id }}">
                    <input type="hidden" name="id">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label></label>
                                <input type="file" name="photo" class="filer_input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <label>Current Image</label>
                                <div id="editPortfolioImagePreview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>

                                    <textarea class="textEditor" name="description" id="portFolioItemDescription"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>

                                @include(backendModuleViewUrl('widgets.portfolio-style-2.category-list'))
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-fill">Done</button>
                </div>
            </div>
        </div>
    </div>

</form>