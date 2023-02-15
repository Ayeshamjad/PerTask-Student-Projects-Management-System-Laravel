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
    <title>PerTask - Student Settings</title>
</head>

<body class="bg-dark">
    <div class="container-fluid ">
        <div class="container-fluid p-3 d-flex flex-column">
            <div class="row w-100 d-flex align-items-center">
                <div class="col col-4">
                    <h3 class="fw-bold mx-2"><span class="fw-bold h3 text-primary">PER-</span>TASK</h3>
                </div>
                <div class="col col-3">
                    <input class="px-3 py-1 w-100" style="outline:none; background:black; color:gray; border-radius:4px; border:none" type="text" placeholder="Search for anything..">
                </div>
                <div class="col col-5"></div>
            </div>
            <div class="row w-100 d-flex">
                <div class="col col-4 d-flex flex-column align-items-start px-2 py-3">
                    <a href="/studentdashboard/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Dashboard</a>
                        <a href="/studentprojects/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Projects</a>
                        <a href="/studentprofile/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 25px;"> Profile</a>
                        <a href="/studentsettings/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4 bg-primary p-3" style="border: none; border-radius:8px;"><img src="{{asset('/imgs/logos/settings.svg')}}" alt=""> Settings</a>
                        <a href="/signout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                </div>
                <div class="col col-8 p-4 my-2" style="background:black; border-radius: 3rem 0 3rem 0;">
                    <div class="row my-2 w-100">
                        <div class="col col-12 d-flex flex-column align-items-center">
                        <form action="update/{{$studentname}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row w-100">
                            <div class="col col-12 d-flex justify-content-center">
    
                                <!-- jjj -->
                                <div>
                                    <div class="d-flex justify-content-center mb-4"><img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 200px;"></div>
                                    <div class="d-flex justify-content-center">
                                        <div class="mb-3">
                                            <input
                                              name="image"
                                              type="file"
                                              class="form-control bg-transparent p-2  rounded-2"
                                              id="exampleInputPassword1"
                                              style="color: #f9efaa;"
                                              required
                                            />
                                          </div>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>
                                @foreach ($collection as $item)
                                <div class="form-group">
                                    <input hidden type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter department" value="{{$item->fullname}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Section</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="section" placeholder="Enter Section" value="{{$item->section}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Registration</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="registration" placeholder="Registration" value="{{$item->registration}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{$item->email}}">
                                </div>
                                <div class="align-items-center text-center">
                                <button type="submit" class="btn btn-primary mt-2  ">Save</button>
                                </div>
                                @endforeach
                            
                            </form>
                        </div>
                    </div>
                    <!-- <div class="mx-3 row my-2 w-100 p-0">
                        <div class="col col-6 d-flex flex-column align-items-center">
                            <h3 class="h3 fw-bold">Total Students Enrolled</h3>
                            <h3 class="h3 fw-bold" style=" color:indigo;">05</h3>
                        </div>
                        <div class="col col-6 d-flex flex-column align-items-center">
                            <h3 class="h3 fw-bold">Total Projects</h3>
                            <h3 class="h3 fw-bold" style=" color:indigo;">02</h3>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</body>

</html>