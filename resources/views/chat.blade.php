@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-6 py-3 col-md-offset-2">
            <div class="panel panel-default" id="app" >
                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                <h3 class="box-title">Direct Chat</h3>

                <div class="panel-body " >
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer" style="padding: 20px">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    >

                </chat-form>
                </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
