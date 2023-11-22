    <span>Like Blog</span>
    
    <small class="like_blog"><a href="#" class="disabled-link"> <i class="fa fa-thumbs-up" style="color: blue"></i> </a> <spans> {{$like}} </spans> </small>

<script type="text/javascript">
    
    $('#add_like').click(function(){

                var like = $(this).attr('attr_id');

                // alert(like);
                $.ajax({

                    type:"get",
                    url:"/like_ajax",
                    data:{"_token":"{{csrf_token()}}","blog_id":like},

                    success:function(res)
                    {
                        $('.change_after_like').html(res);
                    }
                });
            });

</script>