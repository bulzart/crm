<template>
 <div class="mt-2 mb-2">
<span class="fs-5">Termin</span>     
   <section class="show-mobile" id="week-cal" style="display: block;">
        <div class="weekly-calendarr">
            <div class="text-center mx-3" >
    <div id="owl-demo" class="owl-carousel owl-theme">
 
  <div v-for="item in list" class="item text-black">{{item.day}}</div>

 
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
    </section>
</div>
</template>

<script>

    export default {
        
        mounted() {

    var a = new Date();
    this.sod = a.getDay();
 
       
        
this.date_function();
  axios.get('vuedate').then(
        (response) => { this.list = response.data;}
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
                list: null

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


        handleClick(click){
          this.sot = click.target.value;
           axios.get('todayappointments?date='+ sot).then(
        (response) => { this.today = response.data;}
      );
        }
        }
    }
</script>
