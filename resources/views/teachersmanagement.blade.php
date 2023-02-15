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
        <title>PerTask - Teacher Dashboard</title>
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
        <div class="container-fluid bg-dark vh-100">
            <div class="container-fluid p-3 d-flex flex-column">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col col-4">
                        <h3 class="fw-bold mx-2">
                            <span class="fw-bold h3 text-primary"
                                >PER-</span
                            >TASK
                        </h3>
                    </div>
                    <div class="col col-5"></div>
                </div>
                <div class="row w-100 d-flex">
                    <div class="col col-3 d-flex flex-column align-items-start px-4 py-3">
                        <a href="/adminpanel" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Analytics</a>
                        <a href="/teacherstable" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="margin-right: 0.9rem">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                          </svg> Teachers Management</a>
                        <a href="/studentstable" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/users-alt.svg')}}" alt=""> Students Management</a>
                        <a href="/adminlogout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                    </div>
                    <div class="col col-9 p-4 my-2 text-white" style="background: black; border-radius: 3rem 0 3rem 0">
                        <h2 class="h2 fw-bold">Teachers Management</h2>
                        <table class="table text-white">
                            <thead class="text-primary">
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Full Name</th>
                                <th>Department</th>
                                <th>Qualification</th>
                                <th>Email</th>
                                <th>Send Email</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->fname}}</td>
                                    <td>{{$item->lname}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->department}}</td>
                                    <td>{{$item->qualification}}</td>
                                    <td>{{$item->email}}</td>
                                    <td><a href="adminmail/{{$item->email}}/{{$item->password}}/{{$item->department}}/{{$item->qualification}}/{{0}}" class="text-decoration-none text-white"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                      </svg></a></td>
                                    <td><a href="adminTeacherdelete/{{$item->id}}/" class="text-decoration-none text-white"><img src="{{asset('/imgs/logos/trash.svg')}}" style="width: 20px;" alt=""></a></td>
                                </tr>    
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                    </div>
                </div>
            </div>
    </body>
</html>
