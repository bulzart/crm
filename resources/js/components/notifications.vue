<template>
<div>
<button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="makenotificationsdone">
 <i class="far fa-bell"></i>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   <span style="font-size: 11px;">99+</span>

  </span>
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   <div v-for="nt in notifications">
       {{nt.text}}
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
               axios.get('makenotificationsdone').then(
        (response) => { this.notifications = response.data;}
      );
        }
        ,
        data(){
            return{
                notifications: null
            }
        },
        methods:{
            makenotificationsdone(){
                   
      
            }
        }
    }
</script>
