<template>
    <div>
        <div class="mt-2 mb-2 calendar-divider">
            <span class="fs-5">Termin</span>
            <div class="row text-center mx-3">

                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee mx-2" @click="searchapp(lista[0].date)" style="cursor: pointer">
                        <span @click="searchapp(lista[0].date)"
                              class="monthh p-0 ">{{ lista[0].month }},{{ lista[0].year }}</span>
                        <br>
                        <span @click="searchapp(lista[0].date)"
                              class="not-this-month  text-center">{{ lista[0].dayn }}<br>{{ lista[0].day }}
                        </span>
                        <br>
                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee mx-2" @click="searchapp(lista[1].date)" style="cursor: pointer">
                    <span @click="searchapp(lista[1].date)"
                          class="monthh p-0">{{ lista[1].month }},{{ lista[1].year }}</span>
                        <br>
                        <span @click="searchapp(lista[1].date)"
                              class="not-this-month  text-center">{{ lista[1].dayn }}<br>{{ lista[1].day }}
                        </span>
                        <br>

                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee mx-2" style="cursor: pointer">
                    <span @click="searchapp(lista[2].date)"
                          class="monthh p-0">{{ lista[2].month }},{{ lista[2].year }}</span>
                        <br>
                        <span @click="searchapp(lista[2].date)"
                              class="not-this-month  text-center">{{ lista[2].dayn }}<br>{{ lista[2].day }}
                        </span>
                        <br>
                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee mx-2" style="cursor: pointer">

                          <span @click="searchapp(lista[3].date)"
                                class="monthh p-0">{{ lista[3].month }},{{ lista[3].year }}
                          </span>
                        <br>
                        <span @click="searchapp(lista[3].date)"
                              class="not-this-month  text-center">{{ lista[3].dayn }}<br>{{ lista[3].day }}
                        </span>
                        <br>
                    </div>
                </div>


            </div>
            <div class="col-12 row text-center my-2">
                <div class="col-6 col-md-6 g-0" style="color: #4CC590">
                    <i @click="searchfor()" class="dateee px-1 pb-1" style="cursor:pointer; border-radius: 50px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-left fw-bold" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </i>
                </div>
                <div class="col-6 col-md-6" style="color: #4CC590">
                    <i  class="dateee px-1 pb-1" style=" cursor:pointer; border-radius: 50px !important;" @click="searchfor2()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-right fw-bold" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </i>
                </div>
            </div>

            <div class="mt-1 scroll-2" id="appscroll" style="height: 250px; overflow-y: scroll; overflow-x:hidden !important;">
                <div class="text-center" v-if="today == null">No appointments for today</div>
                <a style="text-decoration: none" v-if="today != null" v-for="tod in today.data"  :href="'acceptappointment/'+tod.id"><div  class="mb-2 text-white"
                     style="background: #00c78c; border-radius: 9px; min-height: 60px;cursor: pointer;"
                     >


<!--                    <div class="row">-->
<!--                        <div class="col-md-11 col-6 col-xs-10">-->
<!--                            <span style="margin-left: 9px; font-size: 20px;"-->
<!--                                  class="d-flex">{{ tod.name }} {{ tod.lname }}</span>-->
<!--                            <i style="margin-left: 9px; font-size: 14px;" class="fas fa-map-marker-alt"></i>-->
<!--                            {{ tod.address }}-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="person-box py-2 px-2 my-2">
                        <div class="mx-3 my-auto">
                           <div class="fs-5">
                               {{tod.first_name}} {{tod.last_name}}
                           </div>
                            <div style="font-weight: normal !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                {{tod.address}}
                            </div>
                        </div>
                    </div>



                    <div class="modal fade text-center justify-content-center" :id="tod.slug +'1'" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="width: 900px; height: 600px;">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="width: 100%; height: auto;">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe style="height: 500px; width: 100%;" id="gmap_canvas"
                                                    :src="'https://maps.google.com/maps?q='+ tod.address+',%20' +tod.location+ '&t=k&z=15&ie=UTF8&iwloc=&output=embed'"
                                                    frameborder="0" scrolling="no" marginheight="0"
                                                    marginwidth="0"></iframe>
                                            <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><a
                                            href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Undertood
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="mt-1 text-center p-2" style="background: #F8F8F8; border-radius: 20px; cursor: pointer;" @click="loadmore()">
                Load more <i class="fas fa-caret-down"></i>
                </div>
        </div>

    </div>


</template>

<script>

    export default {

        mounted() {


    var a = new Date();
    this.sod = a.getDay();





this.date_function();
  axios.get('vuedate?page=' + this.lpage).then(
        (response) => { this.lista = response.data;}
      );
  axios.get('todayappointments?page=' + this.apage).then(
        (response) => { this.today = response.data;}
      );

        },

        data(){
            return{
                today: null,
                date: [],
                month: null,
                day: null,
                year: null,
                todayd: null,
                days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday'],
                sot: null,
                sod: null,
                lista: null,
                cnt: 1,
                lpage: 4,
                apage:1

            }
        },

        methods:{
  date_function: function () {

            var currentDate = new Date();

            var formatted_date = new Date().toJSON().slice(0,10).replace(/-/g,'/');
            this.todayd = formatted_date;
              this.year = parseInt(formatted_date.slice(0,4));
      this.month = parseInt(formatted_date.slice(5,7));
      this.day = parseInt(formatted_date.slice(8,10));


        },

        searchfor2(){
      this.lpage += 4;
        axios.get('vuedate?page=' + this.lpage).then(
        (response) => { this.lista = response.data;}
      );
        },
         searchfor(){
      this.lpage -= 4;
        axios.get('vuedate?page=' + this.lpage).then(
        (response) => { this.lista = response.data;}
      );
        },
        searchapp(vall){
          axios.get('todayappointments?date=' + vall + '?page=' + this.apage).then(
        (response) => { this.today = response.data;}
      );
        },
        loadmore:function(){
this.apage++;
  axios.get('todayappointments?page=' + this.apage).then(
        (response) => {
            console.log(response.data.data.length);
            for (let i = 0; i < response.data.data.length; i++) {this.today.data.push(response.data.data[i]);}
                }
      );
        }
        }
    }
</script>
<<<<<<< HEAD

=======
<style>
.dateee {
    border-radius: 15px;
    border: #4CC590 1px solid;
    color: #000;
    background-color: #fff;
}

.dateee:hover {
    background-color: #4CC590;
    border-radius: 15px;
    color: #fff;
}

.dateee:focus {
    background-color: #4CC590;
    border-radius: 15px;
    color: #fff;
}
.scroll-2 {
    height: 300px;
    overflow-y: scroll;
    overflow-x: hidden !important;
    padding-left: 3px;
    padding-right: 3px;
}
.scroll-2::-webkit-scrollbar {
    width: 4px !important;
}
/* Track */
.scroll-2::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}p
/* Handle */
.scroll-2::-webkit-scrollbar-thumb {
    background: #91dfa1;
    border-radius: 10px;
}
/* Handle on hover */
.scroll-2::-webkit-scrollbar-thumb:hover {
    background: #91dfa1;
}
.person-box-1 {
    background-color: #fff;
    border-radius: 15px;
}
.person-box {
    color: #fff;
    font-weight: 600;
    border-radius: 15px;
    background-color: #4EC590;
}
</style>
>>>>>>> 08b471852d00bf21fcddab20b3131499238868c8
