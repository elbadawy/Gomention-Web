@extends('frontend.layouts.master-small')

@section('after-styles-end')

    <link rel="stylesheet" href="{!!asset('css/select2.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/select2-bootstrap.min.css')!!}">

@endsection

@section('content')

    <div class="row-fluid">

        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">

            {!! Form::open(['route' => 'mention.this.do', 'method' => 'post', 'role' => 'form']) !!}

            {!! Form::hidden('mentionData', json_encode($data)) !!}
            {!! Form::hidden('type', $type) !!}

                <div class="panel panel-default">
                    <div class="panel-heading" style="border-bottom: none;">
                        <textarea name="text" dir="auto" class="form-control" rows="1" placeholder="Type anything.."></textarea>
                    </div>
                    <div class="panel-body" style="cursor: pointer;">

                        @if($type == 'text')
                            @include('frontend.user.mention.mention_this.cards.text', ['mention' => $data])

                        @elseif($type == 'link')
                            @include('frontend.user.mention.mention_this.cards.link', ['mention' => $data])

                        @elseif($type == 'photo' )
                            @include('frontend.user.mention.mention_this.cards.photo', ['mention' => $data])

                        @elseif($type == 'video' )
                            @include('frontend.user.mention.mention_this.cards.video', ['mention' => $data])

                        @elseif($type == 'sound_cloud' )
                            @include('frontend.user.mention.mention_this.cards.sound', ['mention' => $data])

                        @endif


                    </div>
                </div>

                <div class="form-group">
                    <select multiple="multiple" name="friends[]" id="friends-select" class="friends-select form-control select2-multiple" style="width: 100%;"> </select>
                </div>

                <button type="submit" id="submit" class="btn btn-primary" disabled="disabled">Mention</button>
            {!! Form::close() !!}



        </div>
    </div>

@endsection


@section('after-scripts-end')

    <script src="{!!asset('js/select2.min.js')!!}"></script>
    <script>

        var friends_select = $(".friends-select");

        friends_select.select2({
            data: friendsArray,
            theme: "bootstrap",
            placeholder: "Select Friends..."
        });

        friends_select.on("change", function() {

            var empty = true;

            if($('.select2-selection__choice').length){
                empty = false;
            }

            if (empty) {
                $('#submit').attr('disabled', 'disabled');
            } else {
                $('#submit').removeAttr('disabled');
            }
        });

    </script>

@endsection