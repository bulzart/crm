<template>
<div class="row d-flex justify-content-center">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header mb-2">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Todo list</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush" style="max-height: 400px; overflow-y: scroll;">
                                <li class="list-group-item" v-for="todo in todos">
                                    <div class="todo-indicator bg-warning"></div>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-2">
                                                <div class="custom-checkbox custom-control">&nbsp;</label> </div>
                                            </div>
                                            <div class="widget-content-left">
                                                
                                                <div v-if="todo.done ==0" class="widget-heading">{{todo.text}} </div>
                                                <div v-if="todo.done == 1" style="text-decoration: line-through; color: green;" class="widget-heading">{{todo.text}} </div>

                                            </div>
                                            <div class="widget-content-right"> <button @click="donetodo(todo.id)" class="border-0 btn-transition btn btn-outline-success"> <i  class="fa fa-check"></i></button> <button @click="deletetodo(todo.id)" class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                        </div>
                                    </div>
                                </li>                                 
                            </ul>
                             <div class="d-inline d-flex">
                              <input class="form-control" name="todo" id="todo" v-on:keyup.enter="addtodo" type="text"><button @click="addtodo" class="btn btn-primary">Add</button>
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
this.fetchtodo();
    },

  data(){
      return{
       todos: null
      }
  },
  methods:{
      addtodo:function(){
          var val = document.getElementById('todo')
           axios.get('addtodo?todo=' + val.value).then(this.fetchtodo()
      );
      val.value = "";

      
      },
      fetchtodo(){
           axios.get('todos').then(
        (response) => { this.todos = response.data;}
      );
      }
      ,
      deletetodo:function(val){
         axios.get('deletetodo?id='+ val).then(
                this.fetchtodo
          );
      },
      donetodo:function(val){
           axios.get('donetodo?id='+ val).then(
                 this.fetchtodo
          );
      }
  }
}
</script>