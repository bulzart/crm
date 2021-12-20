<template>
<div>
 <div class="mt-2 mb-2">
<span class="fs-5">Termin</span>     
  <div class="row text-center mx-3" >

                           <div class="g-0 col-md-4 col-4">
                    <div class="dayy this-month" @click="searchapp(lista[0].date)" style="cursor: pointer">
                        <span class="monthh p-0">{{lista[0].dayn}},{{lista[0].month}}</span> <br>
                        <span class="not-this-month  text-black">{{lista[0].day}}</span> <br>
                        <span class="dot no-event">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                                <circle id="Ellipse_55" data-name="Ellipse 55" cx="3" cy="3" r="3" fill="#a3dda7" />
                            </svg>
                        </span>
                    </div>
                </div>
                         <div class="g-0 col-md-4 col-4">
                    <div class="dayy this-month" @click="searchapp(lista[1].date)" style="cursor: pointer">
                        <span class="monthh p-0">{{lista[1].dayn}},{{lista[1].month}}</span> <br>
                        <span class="not-this-month  text-black">{{lista[1].day}}</span> <br>
                        <span class="dot no-event">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                                <circle id="Ellipse_55" data-name="Ellipse 55" cx="3" cy="3" r="3" fill="#a3dda7" />
                            </svg>
                        </span>
                    </div>
                </div>
                      <div class="g-0 col-md-4 col-4">
                    <div class="dayy this-month" style="cursor: pointer">
                        <span @click="searchapp(lista[2].date)" class="monthh p-0">{{lista[2].dayn}},{{lista[2].month}}</span> <br>
                        <span @click="searchapp(lista[2].date)" class="not-this-month text-black">{{lista[2].day}}</span> <br>
                        <span class="dot no-event">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                                <circle id="Ellipse_55" data-name="Ellipse 55" cx="3" cy="3" r="3" fill="#a3dda7" />
                            </svg>
                        </span>
                    </div>
                </div>

              
   
  
       
            </div>
            <div class="col-12 row text-center">
               <div class="col-6 col-md-6">
                <i @click="searchfor()" class="fas fa-caret-left text-dark" style="font-size: 23px;"></i>
                </div>
              <div class="col-6 col-md-6">
  <i class="fas fa-caret-right text-dark" style="font-size: 23px;" @click="searchfor2()"></i>
                </div>
              </div>
    
            <div class="mt-4">
            <div v-for="tod in today" class="col-12 col-md-12  mb-2 text-white" style="background: #00c78c; border-radius: 9px; min-height: 60px;cursor: point;" data-bs-toggle="modal" :data-bs-target="'#' + tod.slug">
                <div class="modal fade" :id="tod.slug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" :src="'https://maps.google.com/maps?q='+ tod.address+',%20' +tod.location+ '&t=&z=15&ie=UTF8&iwloc=&output=embed'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div></div>
             <div class="text-center">
               <button class="btn btn-primary mt-2" data-bs-toggle="modal" :data-bs-target="'#' + tod.slug + '1'">Open in large</button>
        <h3>{{tod.name}} {{tod.lname}}</h3>

        <i class="fas fa-map-marker-alt" style="font-color: black;"></i>
      <h5 class="text-secondary">{{tod.address}},{{tod.location}}</h5>

        <div class="row mt-5">
            <div class="col-md-6 col-6">
            <i class="fas fa-users" style="font-size:38px;"></i>
            <br>
            <span>{{tod.count}}</span>
            People
            </div>
            <div class="col-md-6 col-6">
            <i class="far fa-calendar-alt" style="font-color: black; font-size:38px;"></i>
            <br>
           <span>{{tod.time}}</span>
           <br>
            </div>
        </div>
      </div>
      <div class="row text-center mt-5">
      <div class="col-md-6 col-6">
          <a :href="'dealnotclosed/' + tod.id">
          <i class="far fa-window-close" style="font-size: 77px;"></i></a>
          </div>
          <div class="col-md-6 col-6">
              <a :href="'dealclosed/' + tod.id">
          <i style="font-size: 77px;" class="fas fa-check-square text-success"></i>
      </a>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Undertood</button>

      </div>
    </div>
  </div>
</div>
      
  
                <span style="margin-left: 9px; font-size: 20px;" class="d-flex">{{tod.name}} {{tod.lname}}</span>
                <i style="margin-left: 9px; font-size: 14px;" class="fas fa-map-marker-alt"></i> {{tod.address}}
                </div>
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


    
    
  axios.get('todayappointments').then(
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
                lpage: 3,

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
      this.lpage += 3;
        axios.get('vuedate?page=' + this.lpage).then(
        (response) => { this.lista = response.data;}
      );
        },
         searchfor(){
      this.lpage -= 3;
        axios.get('vuedate?page=' + this.lpage).then(
        (response) => { this.lista = response.data;}
      );
        },
        searchapp(vall){
          axios.get('todayappointments?date=' + vall).then(
        (response) => { this.lista = response.data;}
      );
        }
        }
    }
</script>
