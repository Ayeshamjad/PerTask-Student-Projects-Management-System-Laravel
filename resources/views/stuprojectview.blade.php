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
    <title>PerTask - Project Update</title>
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
                        <a href="/studentprojects/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4 p-3 bg-primary" style="border: none; border-radius:8px;"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Projects</a>
                        <a href="/studentprofile/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/'.$studentname.".jpg")}}" alt="" style="border-radius: 100px; width: 25px;"> Profile</a>
                        <a href="/studentsettings/{{$studentname}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/settings.svg')}}" alt=""> Settings</a>
                        <a href="/signout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                </div>
                <div class="col col-8 p-4 my-2" style="background:black; border-radius: 3rem 0 3rem 0;">
                    <div class="topsection d-flex justify-content-between align-items-center">
                        <h2 class="h2 fw-bold">Project: {{$projectname}}</h2>
                    </div>
                    
                    <table class="table text-white my-1">
                        @foreach ($collection as $item)
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                        <td>
                            <p><b>Teacher Name: </b>{{$item->teachername}}</p>
                        </td>
                        </tr>
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                            <td>
                                <p><b>Project Name: </b>{{$item->projectname}}</p>
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                            <td>
                                <p><b>Project Marks: </b>{{$item->projectmarks}}</p>
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                            <td>
                                <p><b>Project Deadline: </b>{{$item->projectdeadline}}</p>
                            </td>
                        </tr>
                        <form action="stusubmitproject/{{$item->teachername}}/{{$item->projectname}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <tr class="d-flex align-items-center" style="border-bottom: 1px solid gray">
                            <td>
                                @if ($item->vd==1)
                                
                                    <label for="">Vision Document</label>
                                    <input type="file" name="vdfile" id="">
                                    <label for="">Deadline: {{$item->vd_deadline}}</label>
                                    <label for="">Marks: {{$item->vd_marks}} </label>
                                @endif
                                @if ($item->fr==1)
                                <br>
                                    <label for="">Functional Requirements</label>
                                    <input type="file" name="frfile" id="">
                                    <label for="">Deadline: {{$item->fr_deadline}}</label>
                                    <label for="">Marks: {{$item->fr_marks}} </label>
                                @endif
                                @if ($item->nfr==1)
                                <br>
                                    <label for="">Non Functional Requirements</label>
                                    <input type="file" name="nfrfile" id="">
                                    <label for="">Deadline: {{$item->nfr_deadline}}</label>
                                    <label for="">Marks: {{$item->nfr_marks}} </label>
                                @endif
                                @if ($item->ur==1)
                                <br>
                                    <label for="">User Requirements</label>
                                    <input type="file" name="userfile" id="">
                                    <label for="">Deadline: {{$item->ur_deadline}}</label>
                                    <label for="">Marks: {{$item->ur_marks}} </label>
                                @endif
                                @if ($item->srs==1)
                                <br>
                                    <label for="">SRS</label>
                                    <input type="file" name="srsfile" id="">
                                    <label for="">Deadline: {{$item->srs_deadline}}</label>
                                    <label for="">Marks: {{$item->srs_marks}} </label>
                                @endif
                                @if ($item->p==1)
                                <br>
                                    <label for="">Proposal</label>
                                    <input type="file" name="pfile" id="">
                                    <label for="">Deadline: {{$item->p_deadline}}</label>
                                    <label for="">Marks: {{$item->p_marks}} </label>
                                @endif
                                @if ($item->srds==1)
                                <br>
                                    <label for="">SRDS</label>
                                    <input type="file" name="srdsfile" id="">
                                    <label for="">Deadline: {{$item->srds_deadline}}</label>
                                    <label for="">Marks: {{$item->srds_marks}} </label>
                                @endif
                                @if ($item->code==1)
                                <br>
                                    <label for="">CODE</label>
                                    <input type="file" name="codefile" id="">
                                    <label for="">Deadline: {{$item->code_deadline}}</label>
                                    <label for="">Marks: {{$item->code_marks}} </label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                        
                    </table>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>