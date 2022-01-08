<template>
    <div class="row my-2">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">
            <div class="to-do-div">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush1">
                    <div class="accordion-item my-1 py-2" style="background-color: #F7F7F7;">
                        <div class="p-3">
                                <span style="background-color: #F7F7F7;" class="col text-dark fw-bold fs-5">
                                To Do
                                 </span>
                            <hr class="text-black">
                        </div>

                        <div class="mx-3">
                            Admin
                            <select name="admin" class="form-control" @change="onChangeSelect($event)">
                                <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>
                            </select>

                            Costumer
                            <select name="costumer" class="form-control" @change="onChangeCostumer($event)">
                                <option v-for="costumer in todos.costumers" :value="costumer.id">{{
                                        costumer.first_name
                                    }}
                                    {{ costumer.last_name }}
                                </option>
                            </select>
                            Description
                            <input type="text" id="desc" placeholder="Description" class="form-control">
                        </div>
                        <div class="py-2 mx-3">
                            <button @click="assignpendency" class="btn btn-primary  mt-1">Assign pendency</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">
            <div class="">
                <div class=" internal-nr-div pb-2">
                    <div class="accordion accordion-flush mx-3 " id="accordionFlush4">
                        <div class="accordion-item my-1 py-2 "
                             style="background-color: #F7F7F7;">
                            <div class="p-3">
                                <span style="background-color: #F7F7F7;" class="col text-dark fw-bold fs-5">
                                Informational Numbers
                                 </span>
                                <hr class="text-black">
                            </div>

                            <div id="flush-collapse4" class="accordion-collapse collapse show"
                                 aria-labelledby="flush-heading4" data-bs-parent="#accordionFlush4">
                                <div class="accordion-body p-0 mx-2 py-2 overflow-div3"
                                     style="background-color: #F7F7F7; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                    <div class="py-2 my-2 mx-2" v-for="number in numbers"
                                         style="background-color: #fff; border-radius: 15px; color: #000;">
                                        <div class="mx-3 ">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="fw-bold fs-5 text-color123">
                                                        {{ number.text }}
                                                    </span>
                                                </div>
                                                <div class="col-2 text-end g-0 pe-2">
                                                    <button @click="deletenumber(number.id)"
                                                            class="border-0  p-0 text-center bg-white text-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                             height="16" fill="currentColor" class="bi bi-trash"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd"
                                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="input-group my-3">
                                        <input style="size: auto" class="form-control" name="todo" id="number"
                                               v-on:keyup.enter="addnumber"
                                               type="text">
                                        <button @click="addnumber" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--     <div class="row mt-3">-->
    <!--            <div class="card-hover-shadow-2x mb-3 card col-6 col-md-6">-->
    <!--                <div class="card-header-tab card-header mb-2">-->
    <!--                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i-->
    <!--                        class="fa fa-tasks"></i>&nbsp;Todo-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="scroll-area-sm">-->
    <!--                    <perfect-scrollbar class="ps-show-limits">-->
    <!--                        <div id="alrt">-->

    <!--                        </div>-->
    <!--                        <div class="ps ps&#45;&#45;active-y">-->
    <!--                            Admin-->
    <!--                            <select name="admin" class="form-control" @change="onChangeSelect($event)">-->
    <!--                                <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>-->
    <!--                            </select>-->

    <!--                            Costumer-->
    <!--                            <select name="costumer" class="form-control" @change="onChangeCostumer($event)">-->
    <!--                                <option v-for="costumer in todos.costumers" :value="costumer.id">{{ costumer.first_name }}-->
    <!--                                    {{ costumer.last_name }}-->
    <!--                                </option>-->
    <!--                            </select>-->
    <!--                            Description-->
    <!--                            <input type="text" id="desc" placeholder="Description" class="form-control">-->
    <!--                        </div>-->
    <!--                        <button @click="assignpendency" class="btn btn-primary mt-1">Assign pendency</button>-->
    <!--                    </perfect-scrollbar>-->
    <!--                </div>-->

    <!--            </div>-->


    <!--                 <div class="card-hover-shadow-2x mb-3 card col-6 col-md-6">-->
    <!--            <div class="card-header-tab card-header mb-2">-->
    <!--                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Numbers</div>-->
    <!--            </div>-->
    <!--            <div class="scroll-area-sm">-->
    <!--                <perfect-scrollbar class="ps-show-limits">-->
    <!--                    <div style="position: static;" class="ps ps&#45;&#45;active-y">-->
    <!--                        <div class="ps-content">-->
    <!--                            <ul class=" list-group list-group-flush" style="height: 200px; overflow-y: scroll;">-->
    <!--                                <li class="list-group-item" v-for="number in numbers">-->
    <!--                                    <div class="todo-indicator bg-warning"></div>-->
    <!--                                    <div class="widget-content p-0">-->
    <!--                                        <div class="widget-content-wrapper">-->
    <!--                                            <div class="widget-content-left mr-2">-->
    <!--                                                <div class="custom-checkbox custom-control">&nbsp;</label></div>-->
    <!--                                            </div>-->
    <!--                                            <div class="widget-content-left">-->

    <!--                                                <div class="widget-heading">{{number.text}} </div>-->


    <!--                                            </div>-->
    <!--                                            <div class="widget-content-right"> <button @click="deletenumber(number.id)" class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                             <div class="d-inline d-flex">-->
    <!--                              <input class="form-control" name="todo" id="number" v-on:keyup.enter="addnumber" type="text"><button @click="addnumber" class="btn btn-primary">Add</button>-->
    <!--                              </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </perfect-scrollbar>-->
    <!--            </div>-->
    <!--        </div>-->


    </div>
</template>
<script>
export default {
    mounted() {
        this.fetchnumbers();
        this.fetchtasks();
        this.defaultvalue();
    },


    data() {
        return {
            todos: null,
            numbers: null,
            admin: null,
            costumer: null
        }
    },
    methods: {
        onChangeSelect(event) {
            this.admin = parseInt(event.target.value);
        },
        onChangeCostumer(event) {
            this.costumer = parseInt(event.target.value);
        },

        addnumber: function () {
            var val = document.getElementById('number')
            axios.get('addnumber?number=' + val.value).then(this.fetchnumbers
            );
            val.value = "";
        },
        defaultvalue: function () {
            console.log(this.todos.admins[0].id);
            this.admin = this.todos.admins[0].id;
            this.costumer = this.todos.costumers[0].id;
        },
        assignpendency: function () {
            axios.get('assignpendency/' + this.admin + '/' + this.costumer + '/' + document.getElementById('desc').value);
            document.getElementById('alrt').innerHTML = "";
            document.getElementById('alrt').innerHTML += ' <div class="alert alert-success" role="alert" id="alrt"> Pendency was assigned successfully</div>';
        },
        fetchnumbers() {
            axios.get('numbers').then((response) => {
                this.numbers = response.data;
            });
        },
        deletenumber: function (val) {
            axios.get('deletenumber?id=' + val).then(
                this.fetchnumbers
            );
        },
        fetchtasks: function () {
            axios.get('todos').then((response) => {
                this.todos = response.data
            });
        }
    }
}

</script>

<style>
.text-color123 {
    color: grey;
}

/* overflow 1 */
.overflow-div1::-webkit-scrollbar {
    width: 8px;
}

/* Track */
.overflow-div1::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-div1::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-div1::-webkit-scrollbar-thumb:hover {
    background: #707070;
    border-radius: 10px;
}

/* ........................................................... */
/* overflow 2 */

.overflow-div2::-webkit-scrollbar {
    width: 8px;
}

/* Track */
.overflow-div2::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-div2::-webkit-scrollbar-thumb {
    background: #fff;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-div2::-webkit-scrollbar-thumb:hover {
    background: #fff1ff;
    border-radius: 10px;
}

/* ........................................................... */
/* overflow 3 */

.overflow-div3::-webkit-scrollbar {
    width: 8px;
}

/* Track */
.overflow-div3::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-div3::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-div3::-webkit-scrollbar-thumb:hover {
    background: #707070;
}

/* ...................................................... */
/* overflow 4 */

.overflow-div4::-webkit-scrollbar {
    width: 8px;
}

/* Track */
.overflow-div4::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-div4::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-div4::-webkit-scrollbar-thumb:hover {
    background: #707070;
}


/* ................................................. */

.collapsed .d-btnn {
    background-color: #c8ddd1;
    opacity: 0.4;
}

.d-btnn {
    opacity: 1;
}

.form-control:focus {
    border-color: #ced4da;
    box-shadow: none;
}

.accordion-button {
    color: #7DBF9A;
    font-weight: bold;
    border-radius: 15px !important;
}

.accordion-item {
    border-radius: 15px !important;
}

.hr-style {
    color: #fff !important;
    height: 3px !important;
    border-radius: 50px;
    opacity: 1;
    display: none;
}

.border-left-div {
    border: none !important;
    border-left: 3px solid #fff !important;

}

@media (max-width: 991.98px) {
    .hr-style {
        display: block;
    }

    .border-left-div {
        border: none !important;
        border-left: none !important;
    }
}


.accepted-section {
    background-color: #7DBF9A;
    border-radius: 19px;
}

.decline-btn {
    border: 2px solid #FF0D13;
    border-radius: 13px !important;
    background-color: #fff;
    color: #FF0D13;

}

.decline-btn:hover {
    background-color: #FF0D13;
    color: #fff !important;
}

.accept-btn {
    border: 2px solid #63D4A4;
    border-radius: 13px !important;
    background-color: #fff;
    color: #63D4A4 !important;
}

.accept-btn:hover {
    border: 2px solid #63D4A4;
    background-color: #63D4A4;
    color: #fff !important;
}

.text-color-header1 {
    color: #fff;
}

.people-icon-div {
    background-color: #525353;
    margin: 3px;
}

.static-btn1 {
    background-color: #fff !important;
    border-radius: 8px !important;
}

.people-svg-span {
    border-radius: 8px;
}

.accordion-button:not(.collapsed) {
    color: #7DBF9A;
    background-color: #fff;
    box-shadow: none;
}

.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    background-color: transparent !important;
}

.accordion-button:focus {
    border-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
}

.priority-spnn {
    background-color: #ad2b2b;
    border-radius: 35px;
    color: #fff;
}

.open-task-box {
    border-radius: 35px !important;
    background-color: #fff;
    border: #707070 1px solid;

}

.pendzen-box {
    border-radius: 35px !important;
    background-color: #EAECF0;
    border: none;

}

.third-box {
    border-radius: 35px !important;
    background-color: #fff;
    border: #707070 1px solid;

}

.task-box {
    background-color: #F7F7F7;
    border-radius: 12px;
}

.name-spnnnn {
    font-weight: 600;
}

.fw-600 {
    font-weight: 600;
}

.spn-muted {
    color: #707070;
    font-weight: 600;
    font-size: 14px !important;
}

.spn-normal {
    font-weight: 600;
    font-size: 14px !important;
}
</style>
