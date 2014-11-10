@extends('urlSites.main')
    @section('content')
    <br><br><br>
    <div class="row">@include('urlSites.mainUrlsitiesAdd')</div>

@stop

@section('scripts')

    @parent
        {{ HTML::script('/light-blue/lib/bootstrap-datepicker.js') }}
        {{ HTML::script('js/formAccountNewUpd.js') }} 
        {{ HTML::script('light-blue/lib/icheck.js/jquery.icheck.js') }}
        <!--<script src="/js/timepicki.js"></script> -->
        <script src="/light-blue/lib/select2.js"></script>
        <script src="/light-blue/lib/bootstrap/collapse.js"></script>
        <script src="/light-blue/lib/bootstrap/transition.js"></script>
        <script src="/light-blue/lib/bootstrap/button.js"></script>
        <script src="/light-blue/lib/bootstrap-select/bootstrap-select.js"></script>

        <style type="text/css">
            table th,td{padding: .5em;}
            select{color:black;}
            .checkboxAlign label{float: left;padding-left: 4em;}
            td input{color:black;}
        </style>
@stop

