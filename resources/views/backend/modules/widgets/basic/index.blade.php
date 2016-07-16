@extends('backend.layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">

            @if($data)
            {!! openFormEdit(config('module.widget.basic.url'), $data->id) !!}
            @else
            {!! openFormCreate(config('module.widget.basic.url')) !!}
            @endif

            <input type="hidden" name="module_id" value="{{ $module->id }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">
                                <input type="text"
                                       name="title"
                                       class="form-control"
                                       placeholder="Title..."
                                       autofocus
                                       value="{{ ($data ? $data->title : '') }}">
                            </h4>
                        </div>

                        <div class="content">
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <div class="form-group form-inline">
                                            <label>Background Color </label>

                                            <select name="css_class" class="form-control">
                                                <option value="">Default</option>
                                                <option value="gray-bg">Gray</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description </label>

                                        @section('text-editor')
                                            @parent
                                        @endsection
                                        {!! textEditor('description', ($data ? $data->description : '')) !!}

                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>

                @if($data)
                {!! formEditFooter('modules') !!}
                @else
                {!! formCreateFooter('modules') !!}
                @endif

                {!! closeForm() !!}

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ url('js/jquery.confirm-action.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.btnSubmitDelete').confirmAction({
                title: {
                    text: 'Deletion confirm!!'
                },
                message: {
                    html: 'You are about to delete a module.<br><br> Are you sure?'
                }
            });
        });
    </script>

@endsection