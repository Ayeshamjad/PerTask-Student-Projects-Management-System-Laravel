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
    <title>PerTask - Students List</title>
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
            <div class="row w-100 d-flex align-items-center">
                <div class="col col-4 d-flex flex-column align-items-start px-4 py-3">
                    <a href="/dashboard/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Dashboard</a>
                    <a href="/list/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/search.svg')}}" alt=""> Students</a>
                    <a href="/projects/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/navigation.svg')}}" alt=""> Projects</a>
                    <a href="/profile/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/'.$teachername.".jpg")}}" alt="" style="border-radius: 100px; width: 25px;"> Profile</a>
                    <a href="/settings/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/heart.svg')}}" alt=""> Settings</a>
                    <a href="/logout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/menu-burger.svg')}}" alt=""> Logout</a>
                </div>
                <div class="col col-8 p-4 my-2" style="background:black; border-radius: 3rem 0 3rem 0;">
                    <div class="topsection d-flex justify-content-between align-items-center">
                        <h2 class="h2 fw-bold">Students List</h2>
                        <a href="studentadd/{{$teachername}}">Add new Student</a>
                    </div>
                    <table class="table text-white my-1">
                        @foreach ($collection as $item)
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                        <td>
                            <img src="{{asset('/imgs/users/'.$item->fname.'.jpg')}}" class="stories-profile my-1" alt="" width="80vh" height="80vh">
                        </td>
                        <td class="d-flex flex-column justify-content-center" >
                            <p>{{$item->fname}}</p>
                            <p>{{$item->registration}}</p>
                            <p>{{$item->section}}</p>
                        </td>
                        @for ($i = 0; $i < 32; $i++)
                            <td></td>
                        @endfor
                        <td>
                            <a href="deletestudent/{{$item->registration}}/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/trash.svg')}}" alt="">Delete</a>
                        </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>