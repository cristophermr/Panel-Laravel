@extends('layouts.backend')

@section('content')

@endsection
@section('js_after')
    <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        var err_msg = '{{Session::get('alert-error')}}';
        var err = '{{Session::has('alert-error')}}';
        if(exist){
            jQuery(function(){ One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: msg}); });
        }
        if(err){
            jQuery(function(){ One.helpers('notify', {type: 'warning', icon: 'fa fa-alert mr-1', message: err_msg}); });
        }

    </script>

@endsection
