<template>
<div class="row d-flex justify-content-center">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Todo list</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="todo-indicator bg-warning"></div>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-2">
                                                <div class="custom-checkbox custom-control">&nbsp;</label> </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Call Sam For payments <div class="badge badge-danger ml-2">Rejected</div>
                                                </div>
                
                                            </div>
                                            <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i></button> <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                        </div>
                                    </div>
                                </li>
                                <div class="d-inline d-flex">
                              <input class="form-control" name="todo" id="todo" type="text"><button @click.prevent="addtodo" class="btn btn-primary">Add</button></div>
                              
                               
                               
                            
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>

        </div>
</div>
</template>
<script>
export default {
  data(){
      return{

      }
  },
  methods:{
      addtodo:function(){
          val = document.getElementById('todo').value;
          alert(val);
      }
  }
}
</script>