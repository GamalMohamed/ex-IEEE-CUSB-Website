@extends('layouts.master')
@section('content')

    <div class="row" id="registeration">

    </div>
    <div class="col-xs-offset-4 col-lg-12" style="color:rgba(3, 2, 5, 0.74);">
        <h3> Participant</h3>
    </div>


    <div class="row " style="padding-top:5%" >



        <div class="col-md-12" >
            <div class="form-group label-floating has-success" >
                <label class="control-label">first name</label>
                <input type="text"  id="first_name" class="form-control"  />
		<span class="form-control-feedback">

		</span>
            </div>
            <div class="form-group label-floating has-success">
                <label class="control-label">last name</label>
                <input type="text"  id="last_name" class="form-control" />
		<span class="form-control-feedback" stlye="border:5px solid black">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">national id</label>
                <input type="text"  id="nat_id" class="form-control" />
		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">email </label>
                <input type="text"  id="email" class="form-control" />
		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">age</label>
                <input type="text"  id="age" class="form-control" />
		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">major</label>
                <input type="text"  id="major" class="form-control" />
		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">mobile</label>
                <input type="text"  id="mobile" class="form-control" />
		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">gender</label>
                <select  name="mobile" id="gender" class="form-control" >
                    <option value="M" >Male</option>
                    <option value="F" selected>Female</option>
                </select>

		<span class="form-control-feedback">

		</span>
            </div>

            <div class="form-group label-floating has-success">
                <label class="control-label">university</label>
                <select  name="mobile" id="university" class="form-control" >
                    <option value="cairo" >Cairo </option>
                    <option value="ain shams" selected>Ain Shams</option>
                </select>

		<span class="form-control-feedback">

		</span>
            </div>




        </div>

        <div class="col-xs-offset-3 col-xs-3">
            <button id="submit" class="btn   btn-primary">Submit</button>
        </div>

    </div>
    <script src="{{URL::to('js/registeration/participantRegisteration.js')  }}"></script>


@endsection