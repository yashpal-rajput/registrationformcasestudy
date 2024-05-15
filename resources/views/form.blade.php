<!doctype html>
<html lang="en">

<head>
    <title>form validation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <form action="{{ url('/') }}/register" method="post">
        @csrf
        
        <div class="container">
            <div class="text-center">
                <h1>Registration
            </div>
            </h1>
            <div class="form">
                <label for="inputname" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" aria-describedby="passwordHelpBlock" value="{{old('name')}}">
                <span class="text-danger">
                @error('name')
                {{$message}}
            @enderror
                </span>
                <div id="passwordHelpBlock" class="form-text">

                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="password"   id="inputPassword5" class="form-control"aria-describedby="passwordHelpBlock">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                @enderror
                    </span>
                <div id="passwordHelpBlock" class="form-text">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" aria-describedby="passwordHelpBlock">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                @enderror
                    </span>
                <div id="passwordHelpBlock" class="form-text">
                
                <label for="mobile" class="form-label"> Mobile: </label>
                <input type="tel" name="telephone" pattern="[0-9]{10}" title="ten digit code"/>
                <span class="text-danger">
                    @error('telephone')
                    {{$message}}
                @enderror
                    </span>
                <div id="passwordHelpBlock" class="form-text">

                <div class="mb-3">
                <label for="formFile" class="form-label">upload your image</label>
                <input class="form-control" type="file" id="" name="image">
                <span class="text-danger">
                    @error('image')
                    {{$message}}
                @enderror
                    </span>
                </div>
                <p> Enter your Address:</p>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="address" id="floatingTextarea" name="area"></textarea>
                    <span class="text-danger">
                        @error('area')
                        {{$message}}
                    @enderror
                        </span>
                    <label for="floatingTextarea">address</label>
                  </div>
                <p>Gender</p>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1"> Male</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault"id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">Female</label>
                </div>
                <br>
                <select class="form-select" aria-label="default select example">
                <option selected> select your qualification </option>
                <option value="1"> BCA </option>
                <option value="2"> MCA </option>
                <option value="3"> B.TECH </option>
                <option value="4"> B.SC </option>
                <option value="1"> MBA </option>
                 </select>
                 <br>
                 <p>select your hobbies</p>
                <div class="btn-group" role="group" aria-label="basic check box toggle button group">
                <input type="checkbox" class="btn-check" id="buttoncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="buttoncheck1">sports </label>

                <input type="checkbox" class="btn-check" id="buttoncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="buttoncheck2">Music lover </label>

                <input type="checkbox" class="btn-check" id="buttoncheck3" autocomplete="off">
             <label class="btn btn-outline-primary" for="buttoncheck3">Fitness and health </label>

             <input type="checkbox" class="btn-check" id="buttoncheck4" autocomplete="off">
            <label class="btn btn-outline-primary" for="buttoncheck4">travel and adventure</label>

            <input type="checkbox" class="btn-check" id="buttoncheck5" autocomplete="off">
            <label class="btn btn-outline-primary" for="buttoncheck5">reading </label>
                </div>
                </br>
            </br>


        <p> SELECT YOUR STATUS</p> 
         <select class="form-select" aria-label="default select example">
        <option value="1" selected> Active </option>
        <option value="2">Inactive</option>
        </select>
        <br>

        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>
        </div>
     </div>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</body>

</html>
