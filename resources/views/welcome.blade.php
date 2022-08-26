@extends('shopify-app::layouts.default');
@section('content')
    <p>Welcome {{ Auth::user()->name}}
@endsection

@section('scripts')
        @parent
<script>
    var AppBridge = window['app-bridge'];
    var actions   = AppBridge.actions;
    var TitleBar  = actions.TitleBar;
    var Button    = actions.Button;
    var Redirect  = actions.Redirect;
    var titleBarOptions = {
        title: 'Welcome',
    };
    var myTitleBar = TitleBar.create(app,titleBarOptions)
</script>
@endsection
