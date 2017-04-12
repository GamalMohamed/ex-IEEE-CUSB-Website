@extends('layouts.master')
@section('content')
    <div class="row" id="registeration">

    </div>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" id="eventForm" method="post">
                {{ csrf_field() }}
                <fieldset>

                    <!-- Form Name -->
                    <legend>Register Workshop</legend>

                    <!-- Text input name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="Workshop Name" class="form-control
                            input-md" required="">

                        </div>
                    </div>
                    <!-- TODO::committeeId-->
                    <!--input textarea description-->

                    <!-- Textarea  description-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="description"
                                      name="description"></textarea>
                        </div>
                    </div>

                    <!-- Text input tag-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tag">Tag</label>
                        <div class="col-md-5">
                            <input id="tag" name="tag" type="text" placeholder="Workshop Tag"class="form-control
                            input-md" required="">

                        </div>
                    </div>


                    <!-- Text input numberOfSeats-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="numberOfSeats">Number of seats</label>
                        <div class="col-md-5">
                            <input id="numberOfSeats" name="numberOfSeats" type="text"
                                   placeholder="Workshop number of seats"class="form-control
                            input-md" required="">

                        </div>
                    </div>


                    <!-- dateTime input startDate-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="startDate">Start Date</label>
                        <div class="col-md-5">
                            <input id="startDate" name="startDate" type="date" placeholder="Workshop Start Date"
                                   class="form-control
                            input-md" required="">

                        </div>
                    </div>

                    <!-- dateTime input endDate-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="endDate">End Date</label>
                        <div class="col-md-5">
                            <input id="endDate" name="endDate" type="date" placeholder="Workshop End Date"
                                   class="form-control
                            input-md" required="">

                        </div>
                    </div>


                    <!-- Text input numberOfParticipants-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="numberOfParticipants">Number Of Participants</label>
                        <div class="col-md-5">
                            <input id="numberOfParticipants" name="numberOfParticipants" type="text"
                                   placeholder="Workshop Number Of Participants" class="form-control
                            input-md" required="">

                        </div>
                    </div>




                    <!-- Prepended checkbox  isSponsored-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="isSponsored">Is Sponsored</label>
                        <div class="col-md-1">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <input type="checkbox" id="isSponsored"   name="isSponsored">
                                </span>
                            </div>


                        </div>
                    </div>



                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <script src="{{URL::to('js/jquery.min.js')  }}"></script>
    <script>
        $( document).ready(function(){
            function eventForm() {
                // set up form submission handling
                $('html, body').animate({scrollTop:0}, 'slow');

                $('#eventForm').submit(submitEventForm);
            }
            function submitEventForm() {

                data = $('#eventForm').serialize();
                console.log(data);
                $.post('{{Route('workshops.store')}}', data).success(function (succData) {
                    console.log(succData);
                }).error(function(data){
                    console.log(data.responseText);
                    var errors = data.responseJSON;


                    errorsHtml='';
                    $.each(errors,function(key,value){

                        errorsHtml += '<div class="alert alert-danger"><ul>'+
                                '<div class="container-fluid">'+
                                ' <div class="alert-icon"> '+
                                '<i class="material-icons">error_outline</i>'+
                                '</div>'+
                                '<button type="button" class="close" ' +
                                'data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">' +
                                '<i class="material-icons">clear</i>' +
                                '</span></button>'+
                                '<b>'+key +':'+
                                '</b>'+
                                value+
                                '</div></div>'

                    });
                    $('#registeration').empty();
                    $('#registeration').append(errorsHtml);

                });
                return false;
            }
            eventForm();

        });
    </script>