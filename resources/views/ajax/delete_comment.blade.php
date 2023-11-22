@foreach($arr as $comment)
<div class="media">
    <a class="media-left" href="#">
        <img src="{{asset('site_images/'.$comment->profile_pic)}}" alt="" class="rounded-circle">
    </a>
    <div class="media-body">
        <h4 class="media-heading user_name">{{$comment->name}}<small>{{$comment->created_at}}</small></h4>
        <p>{{$comment->cmt}}</p>
        @if(Session::get('user_login')==$comment->user_cmt_id)
        <a href="javascript:void(0)" attr_id="{{$comment->cmt_id}}" attr_blog_id="{{$comment->blog_cmt_id}}" class="btn btn-primary btn-sm delete_comment">Delete Comment</a>
        @endif
    </div>
</div>
@endforeach

<script type="text/javascript">
        
        $(document).ready(function(){

            $('.delete_comment').click(function(){

                var c_id = $(this).attr('attr_id');
                var b_id = $(this).attr('attr_blog_id');

                // alert(c_id);

                $.ajax({

                    type:"get",
                    url:"/delete_comment",
                    data:{"_token":"{{csrf_token()}}","c_id":c_id,"b_id":b_id},

                    success:function(res)
                    {
                        $('#comment_data').html(res);
                    }
                });
            });
        });

    </script>