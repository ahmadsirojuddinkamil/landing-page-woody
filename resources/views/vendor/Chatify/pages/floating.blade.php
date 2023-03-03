<div class="main-panel">
    <div class="content">

        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                    <div>
                        <h2 class="text-white pb-2 fw-bold">Floating Chat Facebook</h2>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-inner mt--5">

            <div class="row">
                <div class="col-md-12">

                    {{-- <div class="card"> --}}

                    <div class="card" style="height: 1000px">

                        <div class="card-body">
                            {{-- ----------------------Messaging side---------------------- --}}
                            <div class="messenger-messagingView panel-chat">
                                {{-- header title [conversation name] amd buttons --}}
                                <div class="m-header m-header-messaging">
                                    <nav>
                                        {{-- header back button, avatar and user name --}}
                                        <div style="display: inline-flex;">
                                            <a href="#" class="show-listView"><i
                                                    class="fas fa-arrow-left"></i></a>
                                            <div class="avatar av-s header-avatar"
                                                style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                            </div>
                                            <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                                        </div>
                                    </nav>
                                </div>
                                {{-- Internet connection --}}
                                <div class="internet-connection">
                                    <span class="ic-connected">Connected</span>
                                    <span class="ic-connecting">Connecting...</span>
                                    <span class="ic-noInternet">No internet access</span>
                                </div>
                                {{-- Messaging area --}}
                                <div class="m-body messages-container app-scroll body-panel">
                                    <div class="messages ">
                                        <p class="message-hint center-el"><span>Please select a chat to start
                                                messaging</span></p>
                                    </div>
                                    {{-- Typing indicator --}}
                                    <div class="typing-indicator">
                                        <div class="message-card typing">
                                            <p>
                                                <span class="typing-dots">
                                                    <span class="dot dot-1"></span>
                                                    <span class="dot dot-2"></span>
                                                    <span class="dot dot-3"></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    {{-- Send Message Form --}}
                                    @include('Chatify::layouts.sendForm')
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
