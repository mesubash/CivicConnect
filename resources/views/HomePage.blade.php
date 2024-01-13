@extends('layouts.Body')
@section('Content')

<style>
    /* Your existing styles... */
    body{
        background-color:	 #c1e4f9;
    }
    #p {
        font-weight: bold;
        font-family: monospace
    }

    .vl {
        border-left: 1px solid gray;
        height: 100%;
        position: absolute;
        left: 67%;
        margin-left: -3px;
        top: 100;
    }

    .vl1 {
        border-left: 1px solid gray;
        height: 100%;
        position: absolute;
        right: 67%;
        margin-right: -3px;
        top: 100;
    }

    /* Style for the message boxes */
    .message-box {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        padding: 10px;
        margin: 10px;
        text-align: center;
    }

    .message-box-left {
        position: absolute;
        left: 0;
        top: 0;
    }

    .message-box-right {
        position: absolute;
        right: 0;
        top: 0;
    }
</style>

<div class="vl row"></div>

<div class="vl1 row"></div>

<div class="container-fluid mt-4 mb-4">
    <div class="row justify-content-center position-relative">

        <!-- Left message box -->
        <div class="col-md-3 message-box message-box-left">
           <h3>Topics</h3>
           <ul>
            <li>Hospital</li>
            <li>Drinking Water</li>
            <li>Transportion</li>
            <li></li>
           </ul>
        </div>

        <div class="col-md-4">
            @foreach ($data as $item)
            <div class="shadow p-5 mb-5 bg-white rounded text-center pop-out-trigger" data-height="150">
                <div class="complaint-box">
                    <div class="complaint-content">
                        <p class='complaint-name' id="p">{{$item->Name}}</p>
                        <img src="{{asset('ComplainImage/').$item->Photo}}" class="complaint-image">
                        <p class="complaint-description">{{$item->Description}}</p>
                        <a href="{{url('civiconnect/avote')}}/{{$item->id}}" class="btn btn-danger btn-sm p-1 vote-button" style="display: none;">Vote</a>
                        <a href="#" class="btn btn-success btn-sm p-1 vote-button1" style="display: none;">UnVote</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Right message box -->
        <div class="col-md-2 message-box message-box-right">
            <h2>Top Responder</h2>
            <ul>
                <li>Department of passwort </li>
                <li> Department of public health</li>
                <li>Department of eduction,science and technology</li>
                <li>Department of Transportation</li>
            </ul>
        </div>
        

        

    </div>
</div>

<script>
    $(document).ready(function () {
        $('.vote-button, .vote-button1').hide();

        $('.pop-out-trigger').on('click', function () {
            var heightValue = $(this).data('height') || 300; // Default height is 150
            $(this).toggleClass('pop-out');
            $(this).find('.complaint-box').css('height', $(this).hasClass('pop-out') ? heightValue + 'px' : 'auto');

            // Show/hide buttons based on pop-out state
            var voteButton = $(this).find('.vote-button');
            var voteButton1 = $(this).find('.vote-button1');

            if ($(this).hasClass('pop-out')) {
                voteButton.show();
                voteButton1.show();
            } else {
                voteButton.hide();
                voteButton1.hide();
            }
        });
    });
</script>

@endsection
