<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myPage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://gitcdn.link/repo/freeCodeCamp/testable-projects-fcc/master/build/bundle.js"></script>
    <style type="text/css">
        body{
            background:#a9d7d1;
        }
        #main{
            border-radius: 5px;
        }
        #title{
        }
        #description{
        }
        #survey-form{
        }
        #name{}
        #email{}
        #number{}
        #name-label{}
        #email-label{}
        #number-label{}
        #dropdown{
            background: #c0c0c0;
            color: black;
        }
        .comment{
            height: 80px;
            resize:vertical;
        }
        #submit{}
        input{
            border-radius: 2px;
        }
    </style>
</head>
<body>
<div class="container-fluid m-sm-2 my-sm-4" id="main">
    <div class="row ">
        <h1 class="text-center col-sm-12" id="title">Survey Form</h1>
    </div>
    <div class="col-sm-9 mx-auto bg-white" id="main">
        <div class="row pt-sm-4 mt-sm-3">
            <p class="mx-auto" id="description">Please enter your information</p>
        </div>
        <div class="row">
            <form action="#" method="post" id="survey-form" class="col-sm-12">
                <div class="form-group row py-sm-2">
                    <label for="name" class="col-sm-6 text-right pr-sm-3" id="name-label"><sup>*</sup>Full name:</label>
                    <input type="text" id="name" class="col-sm-4 text-left form-control" required placeholder="Enter your Name">
                </div>
                <div class="form-group row py-sm-2">
                    <label for="email" class="col-sm-6 text-right pr-sm-3" id="email-label"><sup>*</sup>Email address:</label>
                    <input type="email" class="col-sm-4 text-left form-control" required pattern="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="form-group row py-sm-2">
                    <label for="number" class="col-sm-6 text-right pr-sm-3" id="number-label"><sup>*</sup>Age</label>
                    <input type="number" class="col-sm-4 text-left form-control" id="number" min="1" max="80" placeholder="Age">
                </div>
                <div class="form-group row py-sm-2">
                    <label class="col-sm-6 text-right pr-sm-3"><sup>*</sup>Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <label><input type="radio" name="radio" id="radio1" class="" value="0">  Male</label>
                        </div>
                        <div class="row">
                            <label><input type="radio" name="radio" id="radio1" class="" value="1">  Female</label>
                        </div>
                        <div class="row">
                            <label><input type="radio" name="radio" id="radio1" class="" value="2">  Other</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row py-sm-2">
                    <label for="dropdown" class="col-sm-6 text-right pr-sm-3">Experience level</label>
                    <select class="col-sm-2 text-left form-control" id="dropdown">
                        <option>Student</option>
                        <option>Junior</option>
                        <option>Senior</option>
                    </select>
                </div>
                <div class="form-group row py-sm-2">
                    <label for="dropdown" class="col-sm-6 text-right pr-sm-3">What technologies do you enjoy working with?
                    </label>
                    <select class="col-sm-2 text-left form-control" style="background: #c0c0c0; color: black;">
                        <option>Html/Css</option>
                        <option>Php</option>
                        <option>Java</option>
                    </select>
                </div>

                <div class="form-group row py-sm-2">
                    <label class="col-sm-6 text-right pr-sm-3">Where you'd like to work</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <label><input type="checkbox" name=""  class="" value="0">  Japan</label>
                        </div>
                        <div class="row">
                            <label><input type="checkbox" name="" id="" class="" value="1">  Singapore</label>
                        </div>
                        <div class="row">
                            <label><input type="checkbox" name="" id="" class="" value="2">  USA</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row py-sm-2">
                    <label class="col-sm-6 text-right pr-sm-3" >Any Comments or Suggestions?</label>
                    <textarea class="col-sm-4 text-left form-control comment" placeholder="Enter your comment"></textarea>
                </div>
                <div class="row form-group">
                    <input type="submit" id="submit" value="Submit" class="btn btn-primary mx-auto px-sm-5">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>