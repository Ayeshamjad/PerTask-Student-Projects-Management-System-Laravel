<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('/app.js')}}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('/cutie.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
        <title>PerTask - Student Dashboard</title>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            /* background:#1b1b1b ; */
        }

        body {
            background: #1b1b1b;
            height: 100vh;
        }

        a:hover {
            outline: none;
            border: 1.5px solid #3e28ac;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.4s ease;
            color: white;
            background: #3e28ac;
        }

        input:focus {
            border: none !important;
            box-shadow: none !important;
        }
    </style>

    <script src="{{asset('/cutie.js')}}"></script>

    <body>
        <div class="container-fluid bg-dark">
            <div class="container-fluid p-3 d-flex flex-column">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col col-4">
                        <h3 class="fw-bold mx-2">
                            <span class="fw-bold h3 text-primary"
                                >PER-</span
                            >TASK
                        </h3>
                    </div>
                    <div class="col col-3">
                        <input
                            class="px-3 py-1 w-100"
                            style="
                                outline: none;
                                background: black;
                                color: gray;
                                border-radius: 4px;
                                border: none;
                            "
                            type="text"
                            placeholder="Search for anything.."
                        />
                    </div>
                    <div class="col col-5"></div>
                </div>
                <div class="row w-100 d-flex">
                    <div class="col col-4 d-flex flex-column align-items-start px-2 py-3">
                        <a href="/studentdashboard/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4 p-3 bg-primary" style="border: none; border-radius:8px;"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Dashboard</a>
                        <a href="/studentprojects/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Projects</a>
                        <a href="/studentprofile/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 25px; width:25px;"> Profile</a>
                        <a href="/studentsettings/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/settings.svg')}}" alt=""> Settings</a>
                        <a href="/signout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                    </div>
                    <div
                        class="col col-8 p-4 my-2"
                        style="background: black; border-radius: 3rem 0 3rem 0"
                    >
                    <div class="row my-3">
                        <div class="container d-flex justify-content-center">
                            <img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 200px; height:200px;">
                        </div>
                    </div>
                        <div class="row my-2 d-flex justify-content-center" >
                            <div class="col col-6 main text-white d-flex flex-column align-items-center" >
                                    <h2 class="h2 text-center">Hello, {{$studentname}}</h2>
                                    <p>create something new today</p>
                                </div>
                                <div
                                    class="date col col-6 px-3 d-flex flex-column align-items-center" 
                                >
                                    <h2 class="h2">@php
                                    date_default_timezone_set('Asia/Karachi');
                                    @endphp
                                    </h2>
                                    <h2 class="h2">{{date('H:i:s')}}</h2>
                                    <p>{{date('Y-m-d')}}</p>
                                    <p>Monday</p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col col-12">
                                    
                                    <form action="relode/{{$studentname}}" method="POST">
                                        @csrf
                                        <h5 class="h5 fw-bold">Todo-List</h5>
                                        <table class="table text-white p-3" style=" backdrop-filter: blur(15px); background:rgb(124, 124, 124, 0.2)">
                                            <thead>
                                                <th style="border-bottom-width:0;">@sortablelink('id', 'Id')</th>
                                                <th style="border-bottom-width:0;">@sortablelink('task', 'Task')</th>
                                                <th style="border-bottom-width:0;">Status</th>
                                                <th style="border-bottom-width:0;">Delete</th>
                                            </thead>
                                          <tbody class="p-3">
                                            @if ($collection->count() == 0)
                                                <tr>
                                                    <td colspan="5">No Tasks to display.</td>
                                                </tr>
                                            @endif
                                            @foreach ($collection as $item)
                                            <tr class="p-3" >
                                                <td>{{$item->id}}</td>
                                              <td>{{$item->task}}</td>
                                              <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value='{{$item->id}}' id="flexCheckDefault" name="id[{{$item->id}}]">
                                                </div>
                                              </td>
                                              <td><a href="edit/{{$item->id}}/{{$studentname}}" class="text-decoration-none text-white"><img src="{{asset('/imgs/logos/trash.svg')}}" style="width: 20px;" alt=""></a></td>
                                            </tr>
                                            @endforeach
                                            <button class="btn btn-primary mb-2 mt-0" type="submit">Update</button>
                                          </tbody>
                                        </table>
                                        <a class="btn btn-primary bd-highlight mb-3 bg-primary" href="new/{{$studentname}}" role="button" style="border:none; border-radius:100px;">
                                            +</a>
                                        {!! $collection->appends(Request::except('page'))->render() !!}
                                        <p class="mt-4" style="font-size: 0.8rem">
                                            Displaying {{$collection->count()}} of {{ $collection->total() }} Task(s).
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </body>
</html>
