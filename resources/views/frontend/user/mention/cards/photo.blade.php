<div class="panel panel-default">

    @if($mention->by_user->id == Auth::user()->id)
        <div class="panel-heading">
            <div class="row" style="margin: 0px; line-height: 60px;">
                <img class="img-circle" src="{!!asset('img/frontend/ahmad.jpg')!!}" style="width: 60px; height: 60px; margin-right: 10px;">
                <a>You ‎‎</a> <span style="color: #a9a9a9">▶</span> <a>{{$mention->to_user->name}}</a>
                <a class="pull-right"><i class="fa  fa-ellipsis-v" style="font-size: 20px; color: #a9a9a9"></i></a>
            </div>
        </div>
    @else
        <div class="panel-heading">
            <a>{{$mention->by_user->name}}</a>
        </div>
    @endif


    <div class="panel-body">
        <img style="max-width: 100%" src="{{$mention->data['url']}}">
    </div>


    <div class="panel-footer" style="background-color: #ffffff">
        <i class="fa fa-picture-o"></i>
        <div class="pull-right">
            {{$mention->created_at->diffForHumans()}}
        </div>
    </div>
</div>