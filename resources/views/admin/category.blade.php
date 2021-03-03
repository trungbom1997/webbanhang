@extends('admin-tem')
@section('admin')
<div class="panel-body">
                <form action="{{URL::to('save-category')}}" class="form-horizontal bucket-form" method="post">
                {{csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Desc</label>
                        <div class="col-sm-6">
                            <input type="text" name="desc" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">status</label>
                        <div class="col-sm-6">
                            <input type="text" name="status" class="form-control round-input">
                          
                        </div>
                    </div>
                    <button class="btn btn-danger" type="submit">Go!</button>
                   
                </form>
            </div>
@endsection