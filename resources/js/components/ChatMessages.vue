<template>


                  <div class="direct-chat-messages" >
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
                      </div>
                    <!-- /.direct-chat-text -->
                    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>
