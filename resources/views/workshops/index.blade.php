@extends('layouts.master')
@section('content')
    <style>
        .row{
            padding-top: 10px;
        }

        /* cards */

        .card *:hover{
            text-decoration: none;
        }

        .card .thumbnail{
            padding: 0;
            border: none;
            text-align: center;
            border-radius: 0;
            -webkit-box-shadow: 0px 0.5px 1px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0.5px 1px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0.5px 1px 0px rgba(0,0,0,0.75);
        }

        .card .thumbnail .caption{
            margin: -20px 20px 20px 20px;
            padding: 19px 29px 19px 29px;
            position: relative;
            background-color: white;
        }

        .card .thumbnail .caption h3 small{
            font-style: italic;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 400;
            font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
            display: block;
            padding: 5px;
        }

        .card .thumbnail .caption h3{
            font-family: 'Raleway',sans-serif;
            font-weight: 600;
            letter-spacing: -1px;
            margin-top: 0;
            text-transform: uppercase;
            font-size: 18px;
        }

        .card .thumbnail .caption hr{
            border-top: 1px solid #333;
            margin: 20px 40px;
        }

        .card .thumbnail .caption p{
            font-size: 12px;
            line-height: 1.6;
        }

        .card .thumbnail .caption button{
            border-radius: 0;
            color: #aaa;
            -moz-transition: 0.3s;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        .card .thumbnail .caption button:hover{
            background-color: #6b89b0;
            border-color:#3b5998;
            color: white;
            -moz-transition: 0.3s;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }
    </style>
    <div class="container" id="workshopContainer">


    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $.get( "api/v1/workshops").done(function(data){
                var workshopContainer=$('#workshopContainer');
                for(response in data){
                    console.log(response);
                    start='<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">'+
                            '<a href="#">'+
                            '<div class="thumbnail">'+
                            '<img src="http://lorempixel.com/600/400" alt="#">'+
                            '<div class="caption"><h3>'+data[response].name+'<small><b style="color:black">'+
                            'Starts : </b>'+
                            data[response].startDate+'</small></h3><hr><p>'+'<b style="color:black">tag #</b>'+
                            data[response].tag+
                            '</p>'+'<p><b style="color:black">Description:</b>'+data[response].description+'</p>'+
                            '<a href='+"/IEEE-CUSB-Website/public/workshops/"+data[response].id+'><button class="btn ' +
                            'btn-default" ' +
                            'role="button">' +
                            'Read More'+

                            '</button></a>'+
                            '</div></div></div>';

                    workshopContainer.append(start);





                };


                console.log(data);
            }).fail(function(data){
                console.log(data.responseText);
            });
        });
    </script>
@endsection