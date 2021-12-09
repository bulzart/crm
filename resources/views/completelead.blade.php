@extends('template.navbar')

@section('content')
<input type="hidden" value="{{$app->count}}" id="count" name="count">
<div class="container justify-content-center d-flex">
   
       <form action="{{route('completeapp',$app->id)}}" method="post" id="area">
           @csrf
       </form>


</div>
<script type="text/javascript">


    var cnt = document.getElementById('count').value;
   
var area = document.getElementById('area');

for(var i = 1; i <= cnt; i++){
    area.innerHTML  += "<div class='rounded' id='" + i + "'>" + i + ' Person info ' + '<i class="far fa-plus-square" id="' + i + 'i" onclick="opend(' + i + ');return false;" style="font-size: 25px;"></i>';
      
var input = document.createElement('input');
var input1 = document.createElement('input');
var input2 = document.createElement('input');
var input3 = document.createElement('i');
input.style.display = 'none';
input.type = "text";
input.name = "fname" + i;
input.placeholder = "First name";
input.className = "form-control";
input.id = i + 'f';
input1.style.display = 'none';
input1.type = "text";
input1.id = i + 'l';
input1.placeholder = 'Last name';
input1.name = "lname" + i;
input1.className = "form-control";
input2.style.display = 'none';
input2.type = "date";
input2.id = i + 'd';
input2.name = "birthday" + i;
input2.className = "form-control";
input3.className = 'fas fa-check-circle';
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

@endsection