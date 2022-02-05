<template>
    <!doctype html>
    <div>
        <div class="appointments-sm-div">
            <div class="appointments-content py-3">
                <div class="overflow-div1"
                     style="overflow-y: scroll; overflow-x: hidden !important;">
                    <div class="row mx-1" style="height: 73vh !important; ">
                        <div class="col-12 col-md-6 col-lg-6" v-for="lead in leads">
                            <div class="row">
                            <div class="modal fade" :id="lead.slug + 'r'" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="rejectedleads" method="post">
                                        <input type="hidden" name="_token" :value="csrf">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" :value="lead.id" name="leadsid">
                                                <select class="form-control" name="reason">
                                                    <option value="Falsche nummer">Falsche nummer</option>
                                                    <option value="Hat schon gewechselt">Hat schon gewechselt</option>
                                                    <option value="Kein interesse">Kein interesse</option>
                                                    <option value="Krank">Krank</option>
                                                    <option value="Kunde bereits terminiert">Kunde bereits terminiert
                                                    </option>
                                                    <option value="Nicht Brauchbar">Nicht Brauchbar</option>
                                                    <option value="Nicht erreicht">Nicht erreicht</option>
                                                    <option value="Online Offerte">Online Offerte</option>
                                                    <option value="Spater Anrufen">Spater Anrufen</option>
                                                    <option value="Terminiert">Terminiert</option>


                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

   <div class="modal fade" :id="lead.slug" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #f8f8f8">
                                            <div class="modal-header">
                                                <div class="mx-3">
                                        <span class="fs-3 fw-bold text-dark">
                                           {{ lead.first_name }}

                                        </span>
                                                </div>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="">
                                                    <div class="container pb-5">
                                                        <div class="text-center row">
                                                            <div class="col-6 col-md-6 py-3">
                                                                <div class="d-flex justify-content-start">
                                                                    <a :href="'pendingreject/' + lead.id + '/1'"
                                                                       class="btn fw-bold fs-5 py-3 w-100"
                                                                       style="background-color:#E50A10;color: #fff; border-radius: 10px;">
                                                                        Reject
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-6 py-3 w-50">
                                                                <div class="d-flex justify-content-center">
                                                                    <a :href="'tel:' + lead.telephone"
                                                                       class="btn fw-bold fs-5 py-3 w-100"
                                                                       style="background-color:#4EC590;color: #fff; border-radius: 10px;">
                                                                        Call
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr>
                                                        <div class="row mx-4 text-dark text-center"
                                                             style="border-radius: 15px; background:white;">
                                                            <h5>Herkunft vom Lead</h5>

                                                            <span> Platform:{{ lead.campaign }}</span>
                                                            <span>Kampagne: {{ lead.kampagne }}</span>
                                                            <span>Grund: {{ lead.grund }}</span>
                                                            <span>Teilnahme: {{ lead.teilnahme }} </span>
                                                        </div>
                                                        <div class="row mx-4 text-dark text-center mt-2"
                                                             style="border-radius: 15px; background:white;">
                                                            <h5>Herkunft vom Lead</h5>

                                                            <span> Gerburstdatum:{{ lead.birthdate }}</span>
                                                            <span>Haushalt: {{ lead.number_of_persons }} </span>
                                                            <span>Telefon: {{ lead.telephone }}</span>
                                                            <span>PLZ,Ort: {{ lead.postal_code }},{{
                                                                    lead.city
                                                                }} </span>
                                                            <span>Krankenkasse: {{ lead.krankenkasse }} </span>
                                                            <span>Bewertung KK: {{ lead.bewertung }} </span>
                                                            <span>Wichtig: {{ lead.wichtig }} </span>
                                                        </div>


                                                    </div>

                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <a :href="'pendingreject/' + lead.id + '/0'">
                                                    <button class="btn fw-bold fs-6"
                                                            style="background-color:#FF860D;color: #fff; border-radius: 10px;">
                                                        Pending
                                                    </button>
                                                </a>
                                                <button class="btn fw-bold fs-6 " data-bs-toggle="modal"
                                                        :data-bs-target="'#' + lead.slug + 'r'"
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
                            <div class="col-1 pe-0 my-3 text-end">
                                <div v-if="role != 'fs'">
                                    <input type="checkbox" :value="lead.id" name="jep" @change="getit($event)">
                                </div>
                            </div>
                            <div class="col my-3"
                                 data-bs-toggle="modal" data-bs-target="asign" v-if="role != 'fs'">
                                <div class="whiteee p-3">
                                    <div class="namme mb-2">
                                        <span v-if="lead.wantsonline == 1" class="fs-4 fw-bold">{{
                                                lead.first_name
                                            }} {{ lead.last_name }} (Online)</span>
                                        <span v-else class="fs-4 fw-bold">{{ lead.first_name }} {{
                                                lead.last_name
                                            }}</span>
                                    </div>
                                    <div class="adresse row">
                                        <div class="col-4 pe-0">
                                            <span class="">Adresse:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                        </div>
                                    </div>
                                    <div class="haushalt row">
                                        <div class="col-4 pe-0">
                                            <span class="">Haushalt:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500">{{ lead.number_of_persons }} Personen</span>
                                        </div>
                                    </div>
                                    <div class="grund row">
                                        <div class="col-4 pe-0">
                                            <span class="">Grund:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500">{{ lead.grund }}</span>
                                        </div>
                                    </div>
                                    <div class="kampagne row">
                                        <div class="col-4 pe-0">
                                            <span class="">Kampagne:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500">{{ lead.kampagne }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grayyy" style="cursor: pointer;">
                                    <div class="lead-offnen text-center py-2"  data-toggle="modal" :data-target="'#' + lead.slug">
                                        <span class="fs-4 fw-bold">Lead öffnen</span>
                                    </div>
                                </div>
                            </div>


                            <div class="py-1 my-2 mx-1"
                                 data-bs-toggle="modal" :data-bs-target="'#' + lead.slug" v-else>
                                <div class="mx-2">
                                    <div class="whiteee p-3">
                                        <div class="namme mb-2">
                                            <span class="fs-4 fw-bold">{{ lead.first_name }} {{ lead.last_name }}</span>
                                        </div>
                                        <div class="adresse row">
                                            <div class="col-4 pe-0">
                                                <span class="">Adresse:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                            </div>
                                        </div>
                                        <div class="haushalt row">
                                            <div class="col-4 pe-0">
                                                <span class="">Haushalt:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{
                                                        lead.number_of_persons
                                                    }} Personen</span>
                                            </div>
                                        </div>
                                        <div class="grund row">
                                            <div class="col-4 pe-0">
                                                <span class="">Grund:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{ lead.grund }}</span>
                                            </div>
                                        </div>
                                        <div class="kampagne row">
                                            <div class="col-4 pe-0">
                                                <span class="">Kampagne:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{ lead.kampagne }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="grayyy" style="cursor: pointer;">
                                    <div class="lead-offnen text-center py-2 mx-2" data-toggle="modal" :data-target="'#' + lead.slug">
                                        <span class="fs-4 fw-bold">Lead öffnen</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="role != 'fs'" class=" py-2">
                
                <div class="button-div mx-4 my-2">
                    <button type="submit" class="py-2 px-5 fw-bold border-0 "
                            data-bs-toggle="modal"
                            data-bs-target="#asign"
                            style="background-color: #63D4A4; color: #fff; border-radius: 13px;">
                        Assign
                    </button>

                </div>
                <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <select class="form-control" @change="changeadmin($event)">
                                    <option v-for="admin in admins" :value="admin.id">{{ admin.name }}</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="button" @click="assign" class="btn btn-primary">Assign</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div v-for="lead in leads">
                <div class="modal fade" :id="lead.slug" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #f8f8f8">
                                            <div class="modal-header">
                                                <div class="mx-3">
                                        <span class="fs-3 fw-bold text-dark">
                                           {{ lead.first_name }}

                                        </span>
                                                </div>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="">
                                                    <div class="container pb-5">
                                                        <div class="text-center row">
                                                            <div class="col-6 col-md-6 py-3">
                                                                <div class="d-flex justify-content-start">
                                                                    <a :href="'pendingreject/' + lead.id + '/1'"
                                                                       class="btn fw-bold fs-5 py-3 w-100"
                                                                       style="background-color:#E50A10;color: #fff; border-radius: 10px;">
                                                                        Reject
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-6 py-3 w-50">
                                                                <div class="d-flex justify-content-center">
                                                                    <a :href="'tel:' + lead.telephone"
                                                                       class="btn fw-bold fs-5 py-3 w-100"
                                                                       style="background-color:#4EC590;color: #fff; border-radius: 10px;">
                                                                        Call
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr>
                                                        <div class="row mx-4 text-dark text-center"
                                                             style="border-radius: 15px; background:white;">
                                                            <h5>Herkunft vom Lead</h5>

                                                            <span> Platform:{{ lead.campaign }}</span>
                                                            <span>Kampagne: {{ lead.kampagne }}</span>
                                                            <span>Grund: {{ lead.grund }}</span>
                                                            <span>Teilnahme: {{ lead.teilnahme }} </span>
                                                        </div>
                                                        <div class="row mx-4 text-dark text-center mt-2"
                                                             style="border-radius: 15px; background:white;">
                                                            <h5>Herkunft vom Lead</h5>

                                                            <span> Gerburstdatum:{{ lead.birthdate }}</span>
                                                            <span>Haushalt: {{ lead.number_of_persons }} </span>
                                                            <span>Telefon: {{ lead.telephone }}</span>
                                                            <span>PLZ,Ort: {{ lead.postal_code }},{{
                                                                    lead.city
                                                                }} </span>
                                                            <span>Krankenkasse: {{ lead.krankenkasse }} </span>
                                                            <span>Bewertung KK: {{ lead.bewertung }} </span>
                                                            <span>Wichtig: {{ lead.wichtig }} </span>
                                                        </div>


                                                    </div>

                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <a :href="'pendingreject/' + lead.id + '/0'">
                                                    <button class="btn fw-bold fs-6"
                                                            style="background-color:#FF860D;color: #fff; border-radius: 10px;">
                                                        Pending
                                                    </button>
                                                </a>
                                                <button class="btn fw-bold fs-6 " data-bs-toggle="modal"
                                                        :data-bs-target="'#' + lead.slug + 'r'"
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
            if (event.target.checked) {
                this.array.push(parseInt(event.target.value));
            } else {
                this.array.pop(parseInt(event.target.value));
            }
        },
        assign: function () {
            axios
                .get(
                    "assigntofs" + "/" + this.admin + "?array=" + this.array.toString()
                )
                .then(this.getleads(), this.array = [], this.hiq());
        },
        changeadmin(event) {
            this.admin = parseInt(event.target.value);
        },
        arrpush(val) {
            this.array.push(val);
        },
        hiq() {
            var checkboxes = document.getElementsByName('jep');
            for (var checkbox of checkboxes) {
                checkbox.checked = false;
            }

        }
    },

    props: {
        csrf: {
            default: () => window.data.csrf_token,
        },

    },
};
</script>
<style>
.grayyy1 {
    color: #88889D;
}

.assigned-leads-div {
    border-radius: 25px;
}

.t {
    color: #88889D;
}

.fw-600 {
    font-weight: 600;

}

.fw-500 {
    font-weight: 500;
}

.whiteee {
    background-color: #fff;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-offnen {
    background-color: #88889D;
    color: #fff;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

.overflow-divvv::-webkit-scrollbar {
    width: 0px;
}

/* Track */
.overflow-divvv::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-divvv::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-divvv::-webkit-scrollbar-thumb:hover {
    background: #707070;
    border-radius: 10px;
}

.lead-statistics-header {
    background-color: #F7F7F7;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-statistics {
    background-color: #F7F7F7;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}
</style>
<style>
.grayyy1 {
    color: #88889D;
}

.assigned-leads-div {
    border-radius: 25px;
}

.t {
    color: #88889D;
}

.fw-600 {
    font-weight: 600;

}

.fw-500 {
    font-weight: 500;
}

.whiteee {
    background-color: #fff;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-offnen {
    background-color: #88889D;
    color: #fff;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

.overflow-divvv::-webkit-scrollbar {
    width: 0px;
}

/* Track */
.overflow-divvv::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-divvv::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-divvv::-webkit-scrollbar-thumb:hover {
    background: #707070;
    border-radius: 10px;
}

.lead-statistics-header {
    background-color: #F7F7F7;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-statistics {
    background-color: #F7F7F7;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

input[type="checkbox"i] {
    margin: 5px;
}
</style>
