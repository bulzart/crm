<template>
      <!doctype html>



<div>


  
                <div class="appointments-sm-div">
                    <div class="row pt-4 pb-2">
                        <div class="col-5 header-title g-0">
                            <div class="text-start ps-5">
                                <span class="fw-600 text-color fs-5">
                                    Leads
                                </span>
                            </div>
                        </div>
                        <div class="col appointment-filter my-auto text-end g-0 pe-5">
                  
                        </div>
                    </div>
                    <div class="appointments-content py-3">
                        <div class="overflow-div1"
                            style="height: 43vh !important; overflow-y: scroll; overflow-x: hidden !important;">
                            <div class="row mx-1">
                
                                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-6 g-0" v-for="lead in leads">
                                    <div class="modal fade" :id="lead.slug + 'r'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-control">
            <option value="Falsche nummer">Falsche nummer</option>
            <option value="Hat schon gewechselt">Hat schon gewechselt</option>
            <option value="Kein interesse">Kein interesse</option>
            <option value="Krank">Krank</option>
            <option value="Kunde bereits terminiert">Kunde bereits terminiert</option>
            <option value="Nicht Brauchbar">Nicht Brauchbar</option>
            <option value="Nicht erreicht">Nicht erreicht</option>
            <option value="Online Offerte">Online Offerte</option>
            <option value="Spater Anrufen">Spater Anrufen</option>
            <option value="Terminiert">Terminiert</option>
            

        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
                                    <div class="row">
                                        <div class="col-1 pe-0 my-auto text-end">
                                            <div v-if="role != 'fs'"><input type="checkbox" :value="lead.id" @change="getit($event)"></div>
                                        </div>
                                        <div class="col ps-0">

                                            <div class="py-1 my-2 mx-1"
                                                style="background-color: #4EC590; border-radius: 15px; color: #fff;" data-bs-toggle="modal" data-bs-target="asign" v-if="role != 'fs'">
                                                 <div class="row mx-2">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 g-0 py-1 text-center">
                                                        <div class="text-center">
                                                            <span style="color:  #ffc04d;" v-if="lead.wantsonline == 1" class="fw-bold fs-5">
                                                               {{lead.first_name}} {{lead.last_name}}
                                                            </span>
                                                             <span v-else class="fw-bold fs-5">
                                                                 {{lead.first_name}} {{lead.last_name}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                
                                                </div></div>




                                             <div class="py-1 my-2 mx-1"
                                                style="background-color: #4EC590; border-radius: 15px; color: #fff;" data-bs-toggle="modal" :data-bs-target="'#' + lead.slug" v-else>
                                                <div class="row mx-2">

                                                    <div
                                                        class="col-7 col-sm-12 col-md-12 col-lg-7 g-0 py-1 text-center">
                                                        <div class="">
                                                            <span class="fw-bold fs-5">
                                                               {{lead.first_name}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col g-0 my-auto">
                                                        <div class="">
                                                            <span>
                                                         
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" :id="lead.slug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{lead.first_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

           
                    <div class="mb-3 mt-2 mx-2">
                        <div class="text-end">
                            <button type="button" id="closeButton" class="bg-white border-0 fs-5 fw-bold"
                              >
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.123" height="21.352"
                                    viewBox="0 0 21.123 21.352">
                                    <g id="Group_500" data-name="Group 500" transform="translate(-210.779 -966.838)">
                                        <line id="Line_24" data-name="Line 24" y1="18.295" x2="18.295"
                                            transform="translate(212.193 968.252)" fill="none" stroke="#ff0d13"
                                            stroke-linecap="round" stroke-width="2" />
                                        <line id="Line_25" data-name="Line 25" x2="18.295" y2="18.295"
                                            transform="translate(212.193 968.481)" fill="none" stroke="#ff0d13"
                                            stroke-linecap="round" stroke-width="2" />
                                    </g>
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="">
                        <div class="container pb-5">
                            <div class="row  mx-4">
                                <div class="col-5  py-3 g-0">
                                    <div class="mx-3">
                                        <span class="fs-3 fw-bold text-dark">
                                           {{lead.first_name}}
                                        </span>
                                    </div>
                                    <div class="mx-3">
                                        <span class="fs-6 text-dark">
                                            Raumweg 23, 3700 Thun
                                        </span>
                                    </div>
                                </div>
                                <div class="col py-3">
                                    <div class="d-flex justify-content-center">
                                        <a :href="'tel:' + lead.telephone" class="btn fw-bold fs-5 py-3 w-100"
                                            style="background-color:#4EC590;color: #fff; border-radius: 10px;">
                                            Call
                                        </a>
                                    </div>
                                </div>
                                <div class="col py-3">
                                    <div class="d-flex justify-content-start">
                                        <a :href="'pendingreject/' + lead.id + '/1'"><button class="btn fw-bold fs-5 py-3  w-100"
                                            style="background-color:#E50A10;color: #fff; border-radius: 10px;">
                                            Reject
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mx-4">
                       
                                <div class="col">
                                    <div class="">

                                        <div class="d-flex justify-content-center my-2">
                                          
                                        </div>
                                    </div>
                                </div>
                           
                            </div>



                        </div>
                    </div>
            
       
    
      </div>
      <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <a :href="'pendingreject/' + lead.id + '/0'">            
             <button class="btn fw-bold fs-6"
                                                style="background-color:#FF860D;color: #fff; border-radius: 10px;">
                                                Pending
                                            </button>
                                             </a>
               <button class="btn fw-bold fs-6 " data-bs-toggle="modal" :data-bs-target="'#' + lead.slug + 'r'" 
                                                style="background-color:#E50A10;color: #fff; border-radius: 10px;">
                                                Reject
                                            </button>
                                               <a :href="'alead/' + lead.id" class="btn fw-bold fs-6  "
                                                style="background-color:#4EC590;color: #fff; border-radius: 10px;">
                                                Go
                                            </a>
       
      </div>
    </div>
  </div>
</div>
                                            </div>

                                        </div>
                                    </div>
          




















                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <button v-if="role != 'fs'" class="btn px-4 fw-bold fs-5"  data-bs-toggle="modal" data-bs-target="#asign"
                                style="background-color:#4EC590;color: #fff; border-radius: 10px;">
                                Assign
                            </button>
                            <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <select class="form-control" @change="changeadmin($event)">
         <option v-for="admin in admins"  :value="admin.id">{{admin.name}}</option>
       </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" @click.prevent="assign" class="btn btn-primary">Assign</button>
      </div>
    </div>
  </div>
</div>
                        </div>
                    </div>
                </div>
           

      

</div>


</template>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script>
export default {
  data() {
    return {
      leads: null,
      admin: null,
      admins: null,
      array: [],
      role: null,
    };
  },
  mounted() {
    this.getleads();
  },
  methods: {
    getleads: function () {
      axios.get("getleads").then((response) => {
        this.leads = response.data.leads.data;
        this.admins = response.data.admins;
        this.admin = response.data.admins[0].id;
        this.role = response.data.admin[0];
      });
    },
    getit: function (event) {
      if(event.target.checked){
      this.array.push(parseInt(event.target.value));}
      else{
        this.array.pop(parseInt(event.target.value));
      }
    },
    assign: function () {
      axios
        .get(
          "assigntofs" + "/" + this.admin + "?array=" + this.array.toString()
        )
        .then(this.getleads());
    },
    changeadmin(event) {
      this.admin = parseInt(event.target.value);
    },
    arrpush(val) {
      this.array.push(val);
    },
  },
};
</script>