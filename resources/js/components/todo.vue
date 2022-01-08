<template>
<div class="row mt-3">
        <div class="card-hover-shadow-2x mb-3 card col-6 col-md-6">
            <div class="card-header-tab card-header mb-2">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Todo</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div id="alrt">

</div>
                    <div class="ps ps--active-y">
                        Admin
                   <select name="admin" class="form-control" @change="onChangeSelect($event)">
                       <option v-for="admin in todos.admins" :value="admin.id">{{admin.name}}</option>
                   </select>
                    
                    Costumer
                     <select name="costumer" class="form-control" @change="onChangeCostumer($event)">
                       <option v-for="costumer in todos.costumers" :value="costumer.id">{{costumer.first_name}} {{costumer.last_name}}</option>
                   </select>
                   Description
                   <input type="text" id="desc" placeholder="Description" class="form-control">
                   </div>
                   <button @click="assignpendency" class="btn btn-primary mt-1">Assign pendency</button>
                </perfect-scrollbar>
            </div>

        </div>
        <div class="card-hover-shadow-2x mb-3 card col-6 col-md-6">
            <div class="card-header-tab card-header mb-2">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Numbers</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush" style="height: 200px; overflow-y: scroll;">
                                <li class="list-group-item" v-for="number in numbers">
                                    <div class="todo-indicator bg-warning"></div>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-2">
                                                <div class="custom-checkbox custom-control">&nbsp;</label></div>
                                            </div>
                                            <div class="widget-content-left">
                                                
                                                <div class="widget-heading">{{number.text}} </div>
                                              

                                            </div>
                                            <div class="widget-content-right"> <button @click="deletenumber(number.id)" class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                        </div>
                                    </div>
                                </li>                                 
                            </ul>
                             <div class="d-inline d-flex">
                              <input class="form-control" name="todo" id="number" v-on:keyup.enter="addnumber" type="text"><button @click="addnumber" class="btn btn-primary">Add</button>
                              </div>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
        

</div>
</template>
<script>
export default {
    mounted(){
this.fetchnumbers();
this.fetchtasks();
this.defaultvalue();
    },


  data(){
      return{
       todos: null,
       numbers: null,
       admin: null,
       costumer: null
      }
  },
  methods:{
      onChangeSelect(event){
      this.admin = parseInt(event.target.value);
      },
      onChangeCostumer(event){
this.costumer = parseInt(event.target.value);
      },

       addnumber:function(){
          var val = document.getElementById('number')
           axios.get('addnumber?number=' + val.value).then(this.fetchnumbers
      );
      val.value = "";
      },
      defaultvalue:function(){
          console.log(this.todos.admins[0].id);
          this.admin = this.todos.admins[0].id;
          this.costumer = this.todos.costumers[0].id;
      },
      assignpendency:function(){
axios.get('assignpendency/' + this.admin + '/' + this.costumer + '/' + document.getElementById('desc').value);
document.getElementById('alrt').innerHTML = "";
document.getElementById('alrt').innerHTML += ' <div class="alert alert-success" role="alert" id="alrt"> Pendency was assigned successfully</div>' ;
      },
      fetchnumbers(){
          axios.get('numbers').then((response) => { this.numbers = response.data;});
      },
       deletenumber:function(val){
         axios.get('deletenumber?id='+ val).then(
                this.fetchnumbers
          );
      },
      fetchtasks:function(){
          axios.get('todos').then((response) => { this.todos = response.data});
      }
  }
}
</script>