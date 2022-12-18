<template>
    <aside class="sidebar  sidebar-base border-end shadow-none" data-sidebar="responsive">
        <div class="chat-search " style="padding-top: 45px">
            <div class="d-flex align-items-center">
                <div class="chat-profile me-3 avatar-60 rounded-pill text-primary btn-icon bg-body">
                    <img src="../../../public/assets/images/user/user.png" alt="101" class="avatar-50  rounded"
                        loading="lazy">
                </div>

                <div class="chat-caption">
                    <h5 class="mb-0">{{ auser.firstname + " " + auser.lastname }}</h5>
                    <p class="m-0">Student</p>
                </div>
            </div>

            <div class="chat-searchbar mt-4 mb-2">
                <div class="form-group chat-search-data m-0">
                    <input type="text" class="form-control round" id="chat-search" placeholder="Search">

                </div>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar mb-5 pb-5">
            <!-- Sidebar Menu Start -->
            <ul class="nav navbar-nav iq-main-menu mb-5 pb-5" id="sidebar-menu" role="tablist">
                <li class="nav-item static-item mt-3">
                    <h5 class="default-icon">Conversations</h5>
                </li>
                <hr>
                <li class="nav-item iq-chat-list active user" v-for="(user, index) in users" :key="index">
                    <a href="#user-content-101" class="nav-link  d-flex gap-3 active" data-bs-toggle="tab" role="tab"
                        aria-controls="user-content-101" aria-selected="true" @click="getUserMessage(user.id)"
                        :id="user.id">
                        <div class="position-relative">
                            <img src="../../../public/assets/images/user/user.png" alt="user" class="avatar-40 rounded"
                                loading="lazy">

                        </div>
                        <div class="d-flex align-items-center w-100 iq-userlist-data">
                            <div class="d-flex flex-grow-1 flex-column">
                                <div class="d-flex align-items-center gap-1">
                                    <p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">{{ user.firstname
                                    }}</p>
                                    <span class="badge rounded-pill bg-primary">20</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <small class="text-ellipsis short-1 flex-grow-1">Lorem ipsum</small>
                                    <small class="text-capitalize">5min</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

            </ul>

            <!-- Sidebar Menu End -->
        </div>
        <!-- {{-- <div class="sidebar-footer"></div> --}} -->
    </aside>
    <main class="main-content">
        <div class="container-fluid content-inner p-0" id="page_layout">
            <div class="tab-content" id="myTabContent">
                <div class="card tab-pane mb-0 fade show active" id="user-content-101" role="tabpanel">
                    <div class="chat-head">
                        <header class="d-flex justify-content-between align-items-center bg-white pt-3  ps-3 pe-3 pb-3">
                            <div class="d-flex align-items-center">
                                <div class="d-block d-xl-none">

                                </div>
                                <div class="avatar chat-user-profile m-0 me-3">
                                    <br><br><br>
                                    <div class="iq-profile-badge  bg-danger"></div>

                                </div>
                                <h5 class="mb-0">Team Discussions</h5>
                                <small class="text-capitalize"></small>
                            </div>

                        </header>
                    </div>
                    <div class="card-body chat-body bg-body" :class="'chat-content scroller user_' + receiver"
                        id="privateMessageBox">
                        <div class="message-div" v-for="(message, index) in messages" :key="index">
                            <div class="chat-day-title" style="padding-top: 20px">

                            </div>
                            <div v-if="message.sender_id == auser.id" class="iq-message-body iq-current-user">
                                <div class="chat-profile">
                                    <img src="../../../public/assets/images/user/user.png" alt="chat-user"
                                        class="avatar-40 rounded" loading="lazy">
                                    <small class="iq-chating p-0 mb-0">16:34</small>
                                </div>
                                <div v-if="message.attachment != null">
                                    <div class="iq-chat-text">
                                        <div v-for="(media, index) in message.media" :key="index">
                                            <div v-if="media.type == 'image'">
                                                <img :src="'/images/' + media.name" style="width:200px;height:200px;"
                                                    class="rounded" />
                                            </div>
                                            <div v-if="media.type == 'video'">
                                                <video controls :src="'/images/' + media.name" class="rounded"
                                                    style="width:200px;height:200px;object-fit:cover"></video>
                                            </div>
                                            <div v-if="media.type == 'application'">
                                                <div v-if="media.name.substring(media.name.indexOf('.') + 1) == 'pdf'"
                                                    class="">
                                                    <a :href="'/images/' + media.name" target="_blank">
                                                        <img src="/icons/pdf-icon.png" style="width:50px;"
                                                            class="ms-auto" />
                                                    </a>
                                                    {{ media.name }}
                                                </div>
                                                <div v-if="media.name.substring(media.name.indexOf('.') + 1) == 'docx'"
                                                    class="">
                                                    <a :href="'/images/' + media.name" target="_blank">
                                                        <img src="/icons/doc.webp" style="width:50px;"
                                                            class="ms-auto" />
                                                    </a>
                                                    {{ media.name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div v-if="message.message != null"
                                                class="iq-chating-content d-flex align-items-center ">
                                                <p class="mr-2 mb-0">{{ message.message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="message.message != null">
                                    <div class="chat-detail">
                                        <div class="chat-message">
                                            <p>{{ message.message }} 😄</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-if="message.sender_id != auser.id" class="iq-message-body iq-other-user">
                                <div class="chat-profile">
                                    <img src="../../../public/assets/images/user/user.png" alt="chat-user"
                                        class="avatar-40 rounded" loading="lazy">
                                    <small class="iq-chating p-0 mb-0 d-block">16:40</small>
                                </div>
                                <div v-if="message.attachment != null">
                                    <div class="iq-chat-text">
                                        <div v-for="(media, index) in message.media" :key="index">
                                            <div v-if="media.type == 'image'">
                                                <img :src="'/images/' + media.name" style="width:200px;height:200px;"
                                                    class="rounded" />
                                            </div>
                                            <div v-if="media.type == 'video'">
                                                <video controls :src="'/images/' + media.name" class="rounded"
                                                    style="width:200px;height:200px;object-fit:cover"></video>
                                            </div>
                                            <div v-if="media.type == 'application'">
                                                <div v-if="media.name.substring(media.name.indexOf('.') + 1) == 'pdf'"
                                                    class="">
                                                    <a :href="'/images/' + media.name" target="_blank">
                                                        <img src="/icons/pdf-icon.png" style="width:50px;"
                                                            class="ms-auto" />
                                                    </a>
                                                    {{ media.name }}
                                                </div>
                                                <div v-if="media.name.substring(media.name.indexOf('.') + 1) == 'docx'"
                                                    class="">
                                                    <a :href="'/images/' + media.name" target="_blank">
                                                        <img src="/icons/doc.webp" style="width:50px;"
                                                            class="ms-auto" />
                                                    </a>
                                                    {{ media.name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div v-if="message.message != null"
                                                class="iq-chating-content d-flex align-items-center ">
                                                <p class="mr-2 mb-0">{{ message.message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="message.message != null">
                                    <div class="chat-detail">
                                        <div class="chat-message">
                                            <p>{{ message.message }} 😄</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer px-3 py-3 border-top rounded-0 bg-white">
                        <form class="d-flex align-items-center" @submit.prevent="">

                            <input type="text" v-model="textMessage" name="message" class="form-control me-3"
                                placeholder="Type your message" @keyup.enter="sendMessage()" @keydown="onTyping"
                                @keypress="onTyping" @keyup="onTyping">
                            <!-- <input type="hidden" v-model="receiver" />
                            <input type="file" name="file" class="file_message" @change="previewImage" multiple />
                            <i class="ri-folder-upload-line file_upload_message"></i> -->
                            <button type="submit" class="btn btn-primary d-flex align-items-center"
                                @click="sendMessage()">
                                <svg class="icon-20" width="18" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.8325 6.67463L8.10904 12.4592L1.59944 8.38767C0.66675 7.80414 0.860765 6.38744 1.91572 6.07893L17.3712 1.55277C18.3373 1.26963 19.2326 2.17283 18.9456 3.142L14.3731 18.5868C14.0598 19.6432 12.6512 19.832 12.0732 18.8953L8.10601 12.4602"
                                        stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg><span class="d-none d-lg-block ms-1">Send</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>


<script >
import { ref, onUpdated, onMounted } from 'vue'
import axios from 'axios';
export default {
    props: ['auser', 'users'],
    setup(props) {
        const formData = new FormData();
        const receiver = ref('')
        const messages = ref([])
        const textMessage = ref('')
        const typingFriend = ref({})
        const currentMessage = ref({ r_fname: '' })
        const notifications = ref('text');
        const preview_list = ref([])
        const image_list = ref([])

        const getUserMessage = (id) => {
            readMessage(id);
            receiver.value = id;
            axios.post('/get-user-message', {
                id: id
            }).then((res) => {
                console.log(res);
                setTimeout(scrollToEnd, 100);
                messages.value = res.data.chats;
            })
        }

        Echo.private('user-message.' + props.auser.id)
            .listen('MessageEvent', (message) => {
                setTimeout(scrollToEnd, 100);
                listenNotification()
                props.users.map((val, i) => {
                    if (val.id == message.chats.sender_id) {
                        currentMessage.value.r_fname = val.firstname;
                        Object.assign(currentMessage.value, message.chats)
                        let chatdiv = document.getElementById('privateMessageBox');
                        if (chatdiv.classList.contains('user_' + val.id)) {
                            messages.value.push(currentMessage.value);
                        }
                    }
                })
            })

        const previewImage = (event) => {
            formData.delete('images[]');
            var input = event.target;
            var count = input.files.length;
            var index = 0;
            if (input.files) {
                formData.delete('images[]');
                for (var key in event.target.files) {
                    formData.append('images[]', event.target.files[key]);
                }
                while (count--) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        preview_list.value.push(e.target.result);
                    }
                    image_list.value.push(input.files[index]);
                    reader.readAsDataURL(input.files[index]);
                    index++;
                }
            }
        }

        const sendMessage = () => {
            if (textMessage.value == "" && !image_list.value.length) {
                // alert('Please type any message');
                return false;
            } else if (receiver.value == "") {
                alert('Please select any friend');
                return false;
            } else {
                formData.append('message', textMessage.value);
                formData.append('receiver', receiver.value);
                axios.post('/sendmessage', formData)
                    .then((res) => {
                        console.log(res.data);
                        if (res.data.sts == true) {
                            textMessage.value = "";
                            formData.delete('images[]');
                            image_list.value = [];
                            getUserMessage(receiver.value)
                        }

                    })
            }
        }

        const readMessage = (receiver) => {
            axios.post('/read-message', {
                receiver: receiver
            }).then((res) => {
                setTimeout(scrollToEnd, 100);
            })
        }

        const listenNotification = () => {
            axios.post('/unread-message', {
                sender: props.auser.id
            }).then((res) => { })
            Echo.private('unread-message.' + props.auser.id)
                .listen('ReadMessage', (message) => {
                    console.log(message);
                })
        }

        setTimeout(() => {
            listenNotification()
        }, 1000);

        onMounted(() => {
            listenNotification();
        })

        const scrollToEnd = () => {
            document.getElementById('privateMessageBox').scrollTo(0, 99999);
        }

        return {
            preview_list,
            image_list,
            formData,
            sendMessage,
            notifications,
            typingFriend,
            readMessage,
            scrollToEnd,
            currentMessage,
            messages,
            receiver,
            getUserMessage,
            textMessage,
            previewImage
        }
    }
}
</script>