<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
* {
    font-family: 'Poppins';font-size: 14px;
    
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

* {
    padding: 0;
    margin: 0
}

.container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  
}

.container .card {
    height: auto;
    width: 800px;
    background-color: #fff;
    position: relative;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    padding: 10px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
    cursor: pointer
}

.container .card .form {
    width: 100%;
    height: 100%;
    display: flex
}

.container .card .left-side {
    width: 45%;
    background-color: #3e2093;
    height: 100%;
    border-radius: 10px;
    position: relative;
    overflow: hidden
}

.left-side .top {
    color: #fff;
    padding: 30px
}

.top h4 {
    font-size: 19px;
    margin-bottom: 10px
}

.top p {
    color: #ded9ec;
    font-size: 14px
}

.medium {
    display: flex;
    align-items: start;
    flex-direction: column;
    padding: 0 30px;
    color: white;
    position: relative;
    margin-top: 25px
}

.medium .fa-phone {
    position: absolute;
    font-size: 20px;
    transition: all 0.5s;
    left: -50px
}

.medium p:nth-child(2) {
    position: absolute;
    top: 1px;
    left: 20px;
    margin-left: 10px;
    font-size: 13px;
    transition: all 0.5s
}

.left-side:hover .medium p:nth-child(2) {
    left: 50px
}

.medium .fa-envelope-o {
    padding-top: 35px;
    font-size: 17px;
    position: absolute;
    left: -50px;
    top: 22px;
    transition: all 0.5s
}

.medium p:nth-child(4) {
    position: absolute;
    top: 55px;
    left: 20px;
    margin-left: 10px;
    font-size: 13px;
    transition: all 0.5s
}

.left-side:hover .medium p:nth-child(4) {
    left: 50px
}

.medium .fa-map-marker {
    padding-top: 35px;
    font-size: 20px;
    position: absolute;
    top: 72px;
    left: -50px;
    transition: all 0.5s
}

.medium p:nth-child(6) {
    position: absolute;
    top: 108px;
    left: 20px;
    margin-left: 10px;
    font-size: 13px;
    transition: all 0.5s
}

.left-side:hover .medium p:nth-child(6) {
    left: 50px
}

.left-side:hover .fa-phone {
    top: 1px;
    left: 30px;
    position: absolute
}

.left-side:hover .fa-envelope-o {
    position: absolute;
    left: 30px
}

.left-side:hover .fa-map-marker {
    position: absolute;
    left: 30px
}

.last {
    padding: 0 30px;
    padding-top: 272px;
    position: relative;
    letter-spacing: 10px;
    font-size: 15px;
    color: #ccc3e2
}

.last .fa-facebook-f {
    position: absolute;
    left: -50px;
    top: 275px;
    transition-delay: 0.6s;
    transition: all 0.5s
}

.left-side:hover .fa-facebook-f {
    position: absolute;
    left: 30px
}

.last .fa-twitter {
    position: absolute;
    top: 275px;
    left: -50px;
    transition: all 0.5s;
    transition-delay: 0.2s
}

.left-side:hover .fa-twitter {
    position: absolute;
    left: 58px
}

.last .fa-instagram {
    position: absolute;
    left: -50px;
    top: 275px;
    transition: all 0.5s;
    transition-delay: 0.4s
}

.left-side:hover .fa-instagram {
    position: absolute;
    left: 90px
}

.last .fa-linkedin {
    position: absolute;
    left: -50px;
    top: 275px;
    transition: all 0.5s;
    transition-delay: 0.6s
}

.left-side:hover .fa-linkedin {
    position: absolute;
    left: 120px
}

.last:nth-child(5) {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background-color: #fa949d
}

.left-side::before {
    content: '';
    position: absolute;
    background-color: #fa949d;
    height: 270px;
    width: 270px;
    bottom: -120px;
    right: -120px;
    border-radius: 50%
}

.left-side::after {
    content: '';
    position: absolute;
    background-color: #7e53f9;
    height: 120px;
    width: 120px;
    bottom: 50px;
    right: 65px;
    border-radius: 50%;
    opacity: 0.9
}

.container .card .right-side {
    width: 55%;
    background-color: #fff;
    height: 100%;
    border-radius: 10px;
    padding: 15px 30px;
    position: relative
}

.card-details {
    width: 100%;
    position: relative
}

.input-group {
    display: flex;
    box-sizing: border-box;
    gap: 10px;
    width: 100%;
    margin-bottom: 20px
}

.input-group .input {
    width: 100%
}

input[type='text'] {
    height: 25px;
    width: 100%;
    box-sizing: border-box;
    outline: 0;
    border: none;
    border-bottom: 2px solid #ccc
}

.input {
    position: relative;
    margin-bottom: 13px
}

.input span {
    position: absolute;
    top: 0;
    font-size: 14px;
    left: 0;
    transition: all 0.5s
}

.input input:focus~span,
.input input:valid~span {
    position: absolute;
    top: -13px;
    font-size: 11px
}

.card-detalis .input input[type='text']:nth-child(1) {
    position: absolute;
    top: 10px;
    left: 50px
}

.right-side p {
    position: absolute;
    top: 220px;
    font-weight: 700;
    font-size: 13px
}

.right-side .radio {
    position: relative
}

.right-side .radio input:nth-child(1) {
    position: absolute;
    top: 240px;
    left: -225px
}

.right-side .radio p:nth-child(2) {
    top: 239px;
    left: -205px;
    font-size: 11px
}

.right-side .radio input:nth-child(3) {
    position: absolute;
    top: 240px;
    left: -115px
}

.right-side .radio p:nth-child(4) {
    top: 239px;
    left: -95px;
    font-size: 11px
}

.right-side .radio input:nth-child(5) {
    position: absolute;
    top: 240px;
    left: 30px
}

.right-side .radio p:nth-child(6) {
    top: 239px;
    left: 55px;
    font-size: 11px
}

.right-side .radio input:nth-child(7) {
    position: absolute;
    top: 240px;
    left: 160px
}

.right-side .radio p:nth-child(8) {
    top: 239px;
    left: 180px;
    font-size: 11px
}

.centered {
    display: flex;
    align-items: center;
    font-size: 12px;
    gap: 6px;
    padding-top: 10px
}

input[type="radio"] {
    display: none
}

input[type="radio"]+label {
    appearance: none;
    cursor: pointer;
    display: inline-block;
    padding-left: 34px;
    position: relative;
    vertical-align: middle
}

input[type="radio"]:checked+label {
    backface-visibility: hidden;
    animation: checked 200ms ease 1
}

input[type="radio"]+label:before {
    background: none repeat scroll 0 0 rgba(255, 255, 255, 0);
    border-radius: 100% 100% 100% 100%;
    content: "";
    height: 7px;
    left: 12px;
    position: absolute;
    top: 6px;
    width: 7px
}

input[type="radio"]+label:hover:before {
    background: none repeat scroll 0 0 rgba(255, 255, 255, 0.5)
}

input[type="radio"]:checked+label:before {
    background: none repeat scroll 0 0 blue
}

input[type="radio"]+label:after {
    border: 3px solid #ccc;
    border-radius: 100% 100% 100% 100%;
    content: "";
    height: 15px;
    left: 5px;
    position: absolute;
    top: -1px;
    width: 15px
}

input[type="radio"]:checked+label:after {
    border-color: blue
}

@keyframes checked {
    0% {
        tranform: scale(1)
    }

    50% {
        transform: scale(1.05)
    }

    100% {
        transform: scale(1)
    }
}

.text-area {
    margin-top: 30px;
    position: relative
}

.text-area span {
    position: absolute;
    top: 0px;
    left: 0;
    transition: all 0.5s
}

.text-area textarea:focus~span,
.text-area textarea:valid~span {
    position: absolute;
    top: -15px;
    font-size: 11px
}

.text-area textarea {
    width: 100%;
    height: 60px;
    resize: none;
    border: none;
    border-bottom: 2px solid #ccc;
    outline: none
}

.button {
    position: relative
}

.button button {
    height: 45px;
    width: 140px;
    background-color: blue;
    color: white;
    font-size: 12px;
    position: absolute;
    bottom: -180px;
    right: 20px;
    border-radius: 7px;
    transition: all 0.5s;
    outline: none;
    border: none
}

.button:hover button {
    background-color: darkblue;
    cursor: pointer
}

@media (max-width:750px) {
    .input {
        width: 100%
    }

    .container .card {
        max-width: 350px
    }

    .container .card .right-side {
        width: 100%;
        display: none
    }

    .container .card .left-side {
        width: 100%
    }

    .input-group {
        display: block
    }
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
@if(\Session::has('joined'))
<div class="alert alert-success alert-dismissible fade show container" role="alert">
  {!! \Session::get('joined') !!}
</div>
@endif
<div class="container">

    <div class="card">
        <form action="{{route('joined')}}" method="post">
            @csrf
            <input type="hidden" value="{{$campaign[0]->id}}" name="campaign">
        <div class="form">
            <div class="left-side">
                <div class="top">
                    
                      
                    <h4>Contact Information</h4>
                    <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                </div>
                <div class="medium"> <i class="fa fa-phone"></i>
                    <p>+0123 456 78910</p> <i class="fa fa-envelope-o"></i>
                    <p>hello@flowbase.com</p> <i class="fa fa-map-marker"></i>
                    <p>102 street 2714 Don</p>
                </div>
                <div class="last"> <span><i class="fa fa-facebook-f"></i></span> <span> <i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            </div>
            <div class="right-side">
                <div class="card-details">
                    <div class="input-group">
                        <div class="input"> <input type="text" name="fname" required="required"> <span>First Name</span> </div>
                        <div class="input"> <input type="text" name="lname" required="required"> <span>Last Name</span> </div>
                    </div>
                    <div class="input-group">
                        <div class="input"> <input type="text" name="phone" required="required"> <span>Phone no.</span> </div>
                        <div class="input"> <input type="text" name="address" required="required"> <span>Address</span> </div>
                    </div>
                    <div class="input-group">
                        <div class="input"> <input type="text" name="postal" required="required"> <span>Postal code</span> </div>
                        <div class="input"> <input type="text" name="location" required="required"> <span>Location</span> </div>
                        <div class="input"> <input type="text" name="country" required="required"> <span>Contry</span> </div>
                        <div class="input"> <input type="text" name="count" required="required"> <span>People included</span> </div>
                    </div>
                    <div class="input-group">
                    <div class="input"><span class="mb-2">How you wanna meet</span>
                    <br><select name="online" class="form-control"><option value="yes">Online</option><option value="no">No</option>  </select></div>
</div>
                </div>
               
            <input type="submit" class="btn btn-primary" value="Join">
            </div>
        </div>
</form>
    </div>
</div>