<template>

                <!-- Conversations are loaded here -->
                <div class="box-body py-3" style="padding:40px">
                  <!-- Message. Default to the left -->

                  <div class="direct-chat-msg" v-for="message in messages" :key="message.id">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left" style="text-transform:capitalize"> {{ message.user.fname + ' ' + message.user.lname }}</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" v-bind:src="'/img/'+ message.user.avatar" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      {{ message.message }}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>
