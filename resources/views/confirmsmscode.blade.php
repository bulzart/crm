
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        * {
            font-family: 'Poppins';font-size: 17px;

        }
        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #4723D9;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: 0px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .7s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color)
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: 0;
        }

        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }
        #body-pd{
            margin: 0;
        }
        @media screen and (min-width: 880px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {

                height: 0px;
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) - 30px)
            }
            nav_link{
                text-decoration: none;
            }

            .body-pd {
                padding-left: calc(var(--nav-width))
            }

            .card {
                width: 350px;
                padding: 10px;
                border-radius: 20px;
                background: #fff;
                border: none;
                height: 350px;
                position: relative
            }

            .container {
                height: 100vh
            }

            body {
                background: #eee
            }

            .mobile-text {
                color: #989696b8;
                font-size: 15px
            }

            .form-control {
                margin-right: 12px
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #ff8880;
                outline: 0;
                box-shadow: none
            }

            .cursor {
                cursor: pointer
            }
            #nav-bar{
                min-width: 200px;
            }

        }
        a:link{
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background: #f8f8f8;">
<div class="d-flex justify-content-center align-items-center container">
    <form action="{{route('confirmcode')}}" method="post">
        @csrf
        <div class="card py-5 px-3">
            <h5 class="m-0">Email verification</h5><span class="mobile-text">Enter the code we just send on your email <b class="text-danger">{{Auth::guard('admins')->user()->email}}</b></span>
            <div class="d-flex flex-row mt-5"><input type="text" name="c1" class="form-control" autofocus="" style="outline: none; border:none; border-width:1px; border-bottom: 2px solid gray; border-radius: 0"><input type="text" style="outline: none; border:none; border-width:1px; border-bottom: 2px solid gray; border-radius: 0" name="c2" class="form-control"><input type="text" style="outline: none; border:none; border-width:1px; border-bottom: 2px solid gray; border-radius: 0" name="c3" class="form-control"><input type="text" name="c4" style="outline: none; border:none; border-width:2px; border-bottom: 2px solid gray; border-radius: 0" class="form-control"></div>
            <button type="submit" class="btn mt-2" style="background: #00FF7F">Weiter <i class="fas fa-arrow-right"></i></button>
        </div>
    </form>
</div>
</body>
