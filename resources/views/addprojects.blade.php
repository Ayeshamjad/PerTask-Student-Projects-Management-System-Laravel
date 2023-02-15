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
    <title>PerTask - Add Project</title>
</head>
<body class="bg-dark">
    <div class="container-fluid " >
        <div class="container-fluid p-3 d-flex flex-column">
            <div class="row w-100 d-flex">
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
                    <a href="/dashboard/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Dashboard</a>
                    <a href="/list/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/users-alt.svg')}}" alt=""> Students</a>
                    <a href="/projects/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4 p-3 bg-primary" style="border: none; border-radius:8px;"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Projects</a>
                    <a href="/profile/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/'.$teachername.".jpg")}}" alt="" style="border-radius: 100px; width: 30px; height:30px;"> Profile</a>
                    <a href="/settings/{{$teachername}}" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/settings.svg')}}" alt=""> Settings</a>
                    <a href="/logout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                </div>
                <div class="col col-8 p-4 my-2" style="background:black; border-radius: 3rem 0 3rem 0;">
                    <div class="topsection d-flex justify-content-between align-items-center">
                        <h2 class="h2 fw-bold">Create New Project</h2>
                        <a href="backprojects/{{$teachername}}">Back</a>
                    </div>
                    <form action="submitproject/{{$teachername}}" method="post">
                        @csrf
                    
                    <table class="table text-white my-1 w-100">
                        <tr class="d-flex align-items-center">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="text" name="name" placeholder="Enter Project Name" id="">
                                <label for="name">Project Name</label>
                            </td>
                            <td class="d-flex flex-column justify-content-center">
                                <input type="date" name="deadline" id="" placeholder="Project Deadline">
                                <label for="deadline">Project Deadline</label>
                            </td>
                            <td class="d-flex flex-column justify-content-center">
                                <input type="number" name="marks" id="" placeholder="Project Marks">
                                <label for="totalmarks">Total Marks</label>
                            </td>
                            <td class="d-flex flex-column justify-content-center">
                                <input type="text" name="batch" id="" placeholder="Batch">
                                <label for="batch">Batch</label>
                            </td>
                            <td class="d-flex flex-column justify-content-center">
                                <input type="text" name="section" id="" placeholder="Section">
                                <label for="section">Section</label>
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="Vision Document" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">Vision Document</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 4; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="vd_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="vd_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="Functional Requirements" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">Functional Requirements</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 1; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="fr_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="fr_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="Non-Functional Requirements" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">Non-Func Requirements</label> 
                            </td>
                            
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="nfr_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="nfr_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="User Requirements" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">User Requirements</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 3; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="ur_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="ur_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="SRS" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">SRS</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 9; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="srs_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="srs_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="Proposal" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">Proposal</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 7; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="p_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="p_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="SRDS" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">SRDS</label> 
                            </td>
                            <!-- @for ($i = 0; $i < 8; $i++)
                                <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="srds_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="srds_marks" id="" style="">
                            </td>
                        </tr>
                        <tr class="d-flex align-items-center w-100 flex-wrap" style="border-bottom: 1px solid gray">
                            <td class="d-flex flex-column justify-content-center">
                                <input type="checkbox" value="Code" name="document[]" id="" style="margin-right: 10px;"> 
                            </td>
                            <td class="d-flex flex-column justify-content-center w-25">
                                <label for="vision">Code</label> 
                            </td>
                            @for ($i = 0; $i < 8; $i++)
                                <!-- <td></td>
                            @endfor -->
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Deadline</label>
                                <input type="date" name="code_deadline" id="" style="">
                            </td>
                            <td class="d-flex align-content-center">
                                <label for="" style="margin-top: 10px; margin-right:10px;">Marks</label>
                                <input type="number" name="code_marks" id="" style="">
                            </td>
                        </tr>
                    </table>
                    <div class="row d-flex w-100 p-0 m-0">
                        <div class="col col-12 d-flex justify-content-end p-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>