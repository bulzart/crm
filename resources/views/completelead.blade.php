<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
* {
    font-family: 'Poppins';font-size: 17px;

}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<input type="hidden" value="{{$app->number_of_persons}}" id="count" name="count">
<div class="container justify-content-center d-flex" style="background-color:#66c196;">

   <br>
       <form action="{{route('completeapp',$app->id)}}" method="post">

           @csrf
           <div class="text-center">
         <h4 class="text-light">{{$app->name}}</h4><h6 class="text-light">{{$app->address}}</h6>
         <i class="fas fa-map-marker-alt" style="font-size: 25px; color: white;"></i>
</div>
           <div id="area" class="row text-center">

           </div>
       
       </form>


</div>
<script type="text/javascript">


    var cnt = document.getElementById('count').value;
   
var area = document.getElementById('area');

for(var i = 1; i <= cnt; i++){

    area.innerHTML  += "<div class='rounded mb-1' id='" + i + "'>" + i + ' Person info ' + '<i class="far fa-plus-square" id="' + i + 'i" onclick="opend(' + i + ');return false;" style="font-size: 25px;"></i>';
    
    var input = document.createElement('input');
    var input1 = document.createElement('input');
    var input2 = document.createElement('input');
    var input3 = document.createElement('i');
    input.style.display = 'none';
    
    input.type = "text";
    input.name = "fname" + i;
    input.placeholder = "First name";
    input.className = "form-control col-md-12 text-center";
    input.id = i + 'f';
    input1.style.display = 'none';
    input1.type = "text";
    input1.id = i + 'l';
    input1.placeholder = 'Last name';
    input1.name = "lname" + i;
    input1.className = "form-control col-md-12 text-center";
    input2.style.display = 'none';
    input2.type = "date";
    input2.id = i + 'd';
    input2.name = "birthday" + i;
    input2.className = "form-control col-md-12 text-center";
    input3.className = 'fas fa-check-circle text-center mt-2';
    input3.style.fontSize = '23px';
    input3.id = i + 'ch';
    input3.style.display = 'none';
    area.appendChild(input);
    area.appendChild(input1);
    area.appendChild(input2);
    area.appendChild(input3);
    area.innerHTML += '</div>';
 
}
area.innerHTML += '<input type="submit" class="btn btn-primary mt-3">';
function opend(id){
 if(document.getElementById(id + 'l').style.display == 'none'){
document.getElementById(id + 'l').style.display = 'block';
document.getElementById(id + 'f').style.display = 'block';
document.getElementById(id + 'd').style.display = 'block';
document.getElementById(id + 'ch').style.display = 'block';
}
else{
    document.getElementById(id + 'l').style.display = 'none';
document.getElementById(id + 'f').style.display = 'none';
document.getElementById(id + 'd').style.display = 'none';
document.getElementById(id + 'ch').style.display = 'none';

}
}

</script>

</html>