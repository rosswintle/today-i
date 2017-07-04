@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Action Type</div>

                <div class="panel-body">
                    <form action="{{ action('ActionTypeController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="icon_class">Icon class</label>
                            <input type="text" class="form-control" id="icon_class" name="icon_class">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
