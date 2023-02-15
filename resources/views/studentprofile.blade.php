<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('/app.js')}}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('/cutie.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <title>PerTask - Student Profile</title>
</head>
<body class="bg-dark">
    <div class="container-fluid " >
        <div class="container-fluid p-3 d-flex flex-column">
            <div class="row w-100 d-flex align-items-center">
                <div class="col col-4">
                    <h3 class="fw-bold mx-2"><span class="fw-bold h3 text-primary">PER-</span>TASK</h3>
                </div>
                <div class="col col-3" >
                    <input class="px-3 py-1 w-100" style="outline:none; background:black; color:gray; border-radius:4px; border:none" type="text" placeholder="Search for anything..">
                </div>
                <div class="col col-5"></div>
            </div>
            <div class="row w-100 d-flex">
                <div class="col col-4 d-flex flex-column align-items-start px-2 py-3">
                    <a href="/studentdashboard/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Dashboard</a>
                        <a href="/studentprojects/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Projects</a>
                        <a href="/studentprofile/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4 bg-primary p-3" style="border: none; border-radius:8px;"><img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 25px; width:25px;"> Profile</a>
                        <a href="/studentsettings/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/settings.svg')}}" alt=""> Settings</a>
                        <a href="/signout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                </div>
                <div class="col col-8 p-4 my-2" style="background:black; border-radius: 3rem 0 3rem 0;">
                
                    <div class="row w-100">
                        <div class="col col-12 d-flex justify-content-center">
                            <img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 200px;">
                        </div>
                    </div>

                    <div class="row my-2 w-100">
                        <div class="col col-12 d-flex flex-column align-items-center">
                            <h2 class="h2 fw-bold">{{$studentname}}</h2>
                            @foreach ($collection as $item)
                            <h6 class="h6" style=" color:gray;">{{$item->section}}</h6>
                            <h6 class="h6" style=" color:gray;">{{$item->registration}}</h6>
                            <h6 class="h6" style=" color:gray;">{{$item->email}}</h6>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="mx-3 row my-2 w-100 p-0">
                        <div class="col col-7 d-flex flex-column align-items-center">
                            <h3 class="h3 fw-bold">Total Teachers Working With</h3>
                            <h3 class="h3 fw-bold" style=" color:indigo;">{{$count}}</h3>
                        </div>
                        <div class="col col-5 d-flex flex-column align-items-center">
                            <h3 class="h3 fw-bold">Total Projects</h3>
                            <h3 class="h3 fw-bold" style=" color:indigo;">{{$countProjects}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>