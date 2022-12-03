{{-- @extends('chat.chat')

@section('content') --}}
<div class="tab-pane fade" id="chatbox1" role="tabpanel">
    <div class="chat-head">
        <header
            class="d-flex justify-content-between align-items-center bg-white pt-3 pe-3 pb-3">
            <div class="d-flex align-items-center">
                <div class="sidebar-toggle material-symbols-outlined">menu
                </div>
                <div class="avatar chat-user-profile m-0 me-3">
                    <img src="../assets/images/user/05.jpg" alt="avatar"
                        class="avatar-50 " loading="lazy">

                </div>
                <h5 class="mb-0">Team Discussions</h5>
            </div>
            
            <div class="chat-header-icons d-flex">
                <a href="#"
                    class="chat-icon-phone bg-soft-primary d-flex align-items-center justify-content-center">

                </a>
                <a href="#"
                    class="chat-icon-video bg-soft-primary d-flex align-items-center justify-content-center">

                </a>
                <a href="#"
                    class="chat-icon-delete bg-soft-primary d-flex align-items-center justify-content-center">

                </a>

            </div>
        </header>
    </div>
    <div class="chat-content scroller">
          @foreach ($messages as $message) 
         
            <div class="chat d-flex other-user ">   
                {{-- {{ $message->sender_id == Auth::id() ? 'sent' : 'received' }}  --}}

                <div class="chat-user">
                    <a class="avatar m-0">
                        <img src="../assets/images/user/1.jpg" alt="avatar"
                            class="avatar-35 " loading="lazy">
                    </a>
                    <span class="chat-time mt-1">6:45</span>
                </div>

                <div class="chat-detail">
                    <div class="chat-message">
                        <p>How can we help? We're here for you! 😄</p>
                    </div>
                </div>
            </div>
            <div class="chat chat-left">
                <div class="chat-user">
                    <a class="avatar m-0">
                        <img src="../assets/images/user/05.jpg" alt="avatar"
                            class="avatar-35 " loading="lazy">
                    </a>
                    <span class="chat-time mt-1">6:48</span>
                </div>
                <div class="chat-detail">
                    <div class="chat-message">
                        <p>Hey John, I am looking for the best admin template.
                        </p>
                        <p>Could you please help me to find it out? 🤔</p>
                    </div>
                </div>
            </div>
            
          @endforeach  
    </div>
    <div class="chat-footer p-3 bg-white">
        <form class="d-flex align-items-center" action="#">
            <input type="text" name="message" class="form-control me-3"
                placeholder="Type your message">
            <button type="submit" 
                class=" submit btn btn-primary d-flex align-items-center px-2"><span
                    class="d-none d-lg-block ms-1">Send</span></button>
        </form>
    </div>
</div>

    
{{-- @endsection --}}