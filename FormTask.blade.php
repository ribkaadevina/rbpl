@extends('templateworkspace')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@section('sidebar')
    <nav class="nav nav-pills flex-column ml-4">
        <a class="choose nav-link mb-2" aria-current="page" href="#">
            <i class="fa-solid fa-folder-open mr-3"></i>
            Workspace</a>
        <a class="nav-link mb-2" href="#">
            <i class="fas fa-file mr-3"></i>
            SN Merger</a>
        <a class="nav-link mb-2" href="#">
            <i class="fas fa-calendar-alt mr-3"></i>
            Calendar</a>
        <a class="nav-link mr-2">
            <i class="fa-sharp fa-solid fa-circle-notch mr-3"></i>
            Trackgres</a>
        <a class="nav-link mb-2">
        </a>
        <a class="nav-link mb-2">
            <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
            Log Out</a>
    </nav>
@endsection
@section('isi')
    <div class="form-box">
        <button class="ml-5 mt-4" id="back-button">Back</button>
        <form action="/action_page.php" method="post">
            <div class="form-group mx-5 mt-5">
                <label for="taskname" id="inputTaskname"><b>Task Name</b></label>
                <input type="taskname" class="form-control" id="taskname" placeholder="Enter your task name"
                    name="taskname" required aria-required="true" required="">
            </div>
            <div class="form-group mx-5 mt-3">
                <label for="taskdesc" id="inputTaskdesc"><b>Description</b></label>
                <input type="taskdesc" class="form-control" id="taskdesc" placeholder="Enter your task description"
                    name="taskdesc" required aria-required="true" required="">
            </div>
            <div class="form-inline mx-5 mt-4">
                    <label for="taskdesc" id="inputTaskdesc" class="mr-2"><b>Deadline</b></label>
                <input type="taskdesc" class="form-control mr-3" id="taskdesc" placeholder="DD/MM/YY"
                    name="taskdesc" required aria-required="true" required="" style="width:33%;">
                    <label for="taskdesc" id="inputTaskdesc" class="mr-2"><b>Members</b></label>
                <input type="taskdesc" class="form-control" id="taskdesc" placeholder="@Username"
                    name="taskdesc" required aria-required="true" required="" style="width:33%;">
            </div>
            <div class="mt-3" id="submit">
                <button type="submit" class="submit-button">Create new task</button>
            </div>
        </form>
    </div>
    {{-- <div class="form-box">
    <div class="flex-column mt-5">
        <div class="container">
            <button class="ml-4" id="back-button">Back</button>
        </div>
    </div>
    <div class="flex-column">
        <div class="container">
            <label class="d-flex justify-content-center" id="text-title">judul ini harusnya nyambung kalender</label>
        </div>
    </div>
    <div class="flex-column m-1">
        <div class="container">
            <form action="/action_page.php" method="post">
                <div class="form-group m-4">
                    <label for="taskname" id="input-title">Task name:</label>
                    <input type="taskname" class="form-control" id="taskname" placeholder="Enter your task name"
                        name="taskname" required aria-required="true" required="">
                </div>
                <div class="form-group m-4">
                    <label for="desc" id="input-title">Description:</label>
                    <input type="desc" class="form-control" id="desc" placeholder="Enter your task description"
                        name="desc" required aria-required="true" required="">
                </div>
                <div class="flex-column" id="submit">
                    <button type="submit" class="submit-button">Create new task</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
@endsection
