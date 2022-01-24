<template>
  <html>
    <body>
      <div class="container">
        <h3 class="text-center">Messaging</h3>
        <div class="messaging">
          <div class="inbox_msg text-center justify-content-center d-flex">
            <div class="mesgs">
              <div class="msg_history">
                <div v-for="msg in messages">
                  <div v-if="msg.messageable_id == admin">
                    <div class="outgoing_msg">
                      <div class="sent_msg text-center">
                        <div v-if="msg.type == 'text'">
                          <p>{{ msg.body }}</p>
                        </div>
                          <div v-else>
                            <a :href="url + 'file/' + msg.body">
                             <p> <i class="bi bi-file-earmark-arrow-down"></i> {{ msg.body }}</p>
                            </a>
                          
                      </div>
                      <span class="time_date" style="word-break: break-word;">{{
                          msg.created_at.toString().slice(8, 21)
                        }}</span>
                  </div>
                    </div>
                     </div>
                  <div v-else>
                    <div class="incoming_msg">
                      <div class="received_msg">
                        <div class="received_withd_msg text-center">
                         <div v-if="msg.type == 'text'">
                          <p>{{ msg.body }}</p>
                      </div>
                      <div v-else>
                            <a :href="url + 'file/' + msg.body">
                             <p> <i class="bi bi-file-earmark-arrow-down"></i> {{ msg.body }}</p>
                            </a>
                            <div>
                              </div>
                      </div>
                        <span class="time_date" style="word-break: break-word;">{{
                          msg.created_at.toString().slice(8, 21)
                        }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="type_msg">
                  <div class="input_msg_write">
                    <input
                      type="text"
                      class="write_msg"
                      placeholder="Type a message"
                      v-on:keyup.enter="sendmessage"
                      id="text"
                    />
                    <div class="upload-box mx-1 my-2">
                        <div class="mx-1 my-2 p-4 text-center">
                          <label for="file-input-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                              <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                  transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                  <path id="Path_234" data-name="Path 234"
                                    d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                    transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                  <path id="Path_235" data-name="Path 235"
                                    d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                    transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                </g>
                              </g>
                            </svg>
                          </label>
                          <input type="file" name="pre_insurer" id="file-input-0" class="svg-div w-100 border-0  g-0" onchange="upload(this)">

                          <input type="text" class="form-control text-center" id="file-input-0c" disabled style="background:none; border:none;">

                        </div>
                      </div>
                    <button
                      class="msg_send_btn"
                      @click="sendmessage"
                      type="button"
                    >
                      <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              
           
          </div>
        </div>
      </div>
      </div>
    </body>
  </html>
</template>
<script>
export default {
  data() {
    return {
      messages: [],
      pag: 1,
      url: "https://crm.kutiza.com/public/",
      cnt: 0,
    };
  },
  mounted() {
    this.getmessages();
    setInterval(() => {
      this.getmessages();
    }, 400);
  },
  methods: {
    sendmessage() {
      if(document.getElementById('file-input-0').value == '' || document.getElementById('file-input-0').value == null){
      axios
        .get(
          this.url +
            "sendmessage/" +
            this.u1 +
            "/" +
            this.u2 +
            "?text=" +
            document.getElementById("text").value
        )
        .then((document.getElementById("text").value = ""));
  
      }
      else{
 
        var formdata = new FormData();
        var file = document.getElementById('file-input-0').files[0];
        formdata.append('file',file);
        axios.post(this.url + 'sendmessage/' + this.u1 + '/' + this.u2,
        formdata,{
headers:{
       'Content-Type' : 'multipart/form-data'
}
        }).then((document.getElementById('file-input-0').value = ""));
      }
      
    },
    getmessages() {
      axios
        .get(
          this.url + "getchat/" + this.u1 + "/" + this.u2 + "?page=" + this.pag
        )
        .then((response) => {
          this.messages = [];
          this.cnt = response.data.total;
          var cntt = 0;

          // if(this.messages.length == 0){
          for (let i = 0; i < this.cnt; i++) {
            this.messages.push(response.data.data[i]);
            this.messages[i].created_at = new Date(this.messages[i].created_at);
          }
        });
    },
  },

  props: {
    u1: {
      default: () => parseInt(window.data.u1),
    },
    u2: {
      default: () => parseInt(window.data.u2),
    },
    admin: {
      default: () => window.data.admin,
    },
  },
};
</script>