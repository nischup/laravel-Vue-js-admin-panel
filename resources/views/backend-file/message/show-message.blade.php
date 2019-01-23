@extends('backend-main.layout')
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-11">
                            <strong> Message List From </strong> User
                        </div>
                    </div>
                    <div id="user_message">
                        <user-message-list></user-message-list>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<script src="{{ asset('js/message.js') }}"></script>
@endsection