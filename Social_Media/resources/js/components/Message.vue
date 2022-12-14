<template>
    <div class="row">
        <div class="col-lg-3 chat-data-left scroller">
            <div class="chat-search pt-3 ps-3">
                <div class="d-flex align-items-center">
                    <div class="chat me-3">
                        <img src="../../../public/assets/images/user/user.png" class="avatar-60 ">
                    </div>
                    <div class="chat-caption">
                        <h5 class="mb-0 text-capitalize">{{ auser.firstname+" "+ auser.lastname }}</h5>
                        <p class="m-0">Student</p>
                    </div>

                </div>
                
                <div class="chat-searchbar mt-4">
                    <div class="form-group chat-search-data m-0">
                        <input type="text" class="form-control round" id="chat-search"  placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="chat-sidebar-channel mt-4 ps-3">
                <h5 class="">Conversations</h5>
                <ul class="iq-chat-ui nav flex-column nav-pills" >
                    <li class="user" v-for="(user, index) in users" :key="index"> 
                        <span class="pending" v-if="user.online_status==0"></span>
                        <a data-bs-toggle="pill" @click="getUserMessage(user.id)"  :id="user.id">
                            <div class="d-flex align-items-center">
                                <div class="avatar me-2">
                                    <img src="../../../public/assets/images/user/user.png"
                                        alt="chatuserimage" class="avatar-50 ">

                                </div>
                                <div class="chat-sidebar-name">
                                    <h6 class="mb-0 text-capitalize">{{ user.firstname }}</h6>
                                    <span>Lorem Ipsum is</span>
                                </div>
                                <div class="chat-meta float-right text-center mt-2 me-1">
                                    <div class="chat-msg-counter bg-primary text-white">20
                                    </div>
                                    <span class="text-nowrap">05 min</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9 chat-data p-0 chat-data-right">
            
            <div class="chat-head">
                <!-- <div class="chat-start" v-if="messages.length>=0">
                    <button id="chat-start" style="font-size:2rem;" class="btn bg-white mt-3">Start Conversation!</button>
                </div> -->
                <header
                    class="d-flex justify-content-between align-items-center bg-white pt-3 pe-3 pb-3">
                    <div class="d-flex align-items-center">
                        <div class="sidebar-toggle material-symbols-outlined">menu
                        </div>
                        <div class="avatar chat-user-profile m-0 me-3">
                            <img src="../../../public/assets/images/user/user.png" alt="avatar" class="avatar-50 " loading="lazy">
                        </div>
                        <h5 class="mb-0">{{typingFriend.firstname}} Discussions</h5>
                    </div>
                
                </header>
                <div :class="'chat-content scroller user_'+receiver" id="privateMessageBox">                    
                    <div>
                        <div class="message-div" v-for="(message, index) in messages" :key="index">
                            <div v-if="message.is_read == 0">
                                {{ readMessage(message.id) }}
                            </div>
                            <div v-if="message.sender_id == auser.id" class="chat d-flex other-user">
                                <!-- <div class="chat-user"  >
                                    <a class="avatar m-0 rounded user_message_name" style=" padding: 10px 20px 10px 20px; background-color:#50b5ff; color:#fff;">
                                        {{ message.r_fname.split("")[0] }}
                                    </a>
                                   
                                </div> -->

                                <div class="chat-detail">
                                    <div class="chat-message" style="background-color:#50b5ff; color: #fff;">
                                        <p>{{ message.message }} </p>
                                        <span style="padding-top: 10px; font-size: 0.7rem;"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="" v-else></div>
                            <div v-if="message.sender_id != auser.id" class="chat chat-left">
                                <div class="chat-user">
                                    <a class="avatar  rounded user_message_name "
                                        style="text-transform: capitalize; margin: 2px 10px; padding: 10px 20px 10px 20px; background-color:#e5e7eb;">
                                        {{ message.s_fname.split("")[0] }}

                                    </a>
                                </div>
                                <div class="chat-detail">
                                    <div class="chat-message" style="background-color:#e5e7eb; color: #232121;">
                                        <p>{{ message.message }}</p>
                                        <span
                                            style="padding-top: 10px; font-size: 0.7rem; color: #232121; display: block; text-align: right;">
                                           <!-- {{message.created_at}} -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="chat-footer p-3 bg-white" >
                    <form class="d-flex align-items-center" @submit.prevent="">
                        <input type="text" v-model="textMessage" name="message" class="form-control me-3" placeholder="Type your message" @keyup.enter="sendMessage()" @keydown="onTyping" @keypress="onTyping" @keyup="onTyping"/>
                        <button type="submit" class="btn btn-primary d-flex align-items-center px-2" @click="sendMessage()">
                            <span class="d-none d-lg-block ms-1">Send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script >
import { ref, computed, watch, onMounted } from 'vue'
import axios from 'axios';
export default {
    props:['auser','users'],
    setup(props){
        
        const receiver = ref()
        const messages = ref([])
        const textMessage = ref('')
        const typingFriend = ref({})
        const currentMessage = ref({r_fname:''})
        const notifications = ref('text');

        const getUserMessage = (id)=>{
            receiver.value = id;
            axios.post('/get-user-message',{
                id: id
            }).then((res)=>{
                setTimeout(scrollToEnd, 100);
                messages.value = res.data.chats;
            })
        }

        const readMessage = (message_id)=>{
            axios.post('/read-message',{
                id: message_id
            }).then((res)=>{
                setTimeout(scrollToEnd, 100);
            })
        }

        const onTyping = ()=>{
            Echo.private('user-message.'+props.auser.id)
            .whisper('typing', {
                user:props.auser
            })
        }
        
        Echo.private('user-message.'+props.auser.id)
        .listenForWhisper('typing', (e)=>{
            typingFriend.value = e.user
        }).listen('MessageEvent', (message)=>{
            setTimeout(scrollToEnd, 100);
            props.users.map((val, i)=>{
                if(val.id == message.messages.sender_id){
                    currentMessage.value.r_fname = val.firstname;
                    Object.assign(currentMessage.value, message.messages)
                    let chatdiv = document.getElementById('privateMessageBox');
                    if(chatdiv.classList.contains('user_'+val.id)){
                        messages.value.push(currentMessage.value);
                    }
                }
            })
        }) 

        const sendMessage = ()=>{
            if(textMessage.value=="" || receiver.value==""){
                return false;
            }else{
                axios.post('/sendmessage',{
                    message:textMessage.value,
                    receiver: receiver.value
                }).then((res)=>{
                    if(res.data.sts==true){
                       console.log(res)
                       messages.value.push(res.data.message);
                       textMessage.value = "";
                    //    receiver.value = "";
                    }
                    
                })
            }
        }

        computed(()=>{
            var div = document.getElementById("scroller");
            console.log(div);
        })

        watch(notifications, (value)=>{
            axios.post('/unread-message',{
                receiver: props.auser.id
            }).then((res)=>{
                if(res.data.sts==true){
                    console.log(res)
                }
            })
            Echo.private('read-message.'+props.auser.id)
            .listen('ReadMessage', (message)=>{
                console.log(message);
            })
        });

        onMounted(()=>{
            Echo.private('read-message.'+props.auser.id)
            .listen('ReadMessage', (message)=>{
                console.log(message);
            })
        })

        

        const scrollToEnd = ()=>{
            document.getElementById('privateMessageBox').scrollTo(0,99999);
        }

        return {
            notifications,
            typingFriend,
            onTyping,
            readMessage,
            scrollToEnd,
            currentMessage,
            messages,
            receiver,
            getUserMessage,
            sendMessage,
            textMessage
        }
    }
}
</script>