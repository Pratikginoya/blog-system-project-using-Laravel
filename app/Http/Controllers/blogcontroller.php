<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_register;
use App\Models\blog_details;
use App\Models\like_blog;
use App\Models\comment_blog;
use App\Models\contact_us;

use App\Models\admin_login;
use App\Models\website_heading;

class blogcontroller extends Controller
{
    public function index()
    {
        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('status','=','Live')->paginate(4);
        
        $arr_2 = website_heading::all();

        $fash = blog_details::where('tag','=','Fashion')->where('status','=','Live')->count();
        $life = blog_details::where('tag','=','Life Style')->where('status','=','Live')->count();
        $sports = blog_details::where('tag','=','Sports')->where('status','=','Live')->count();
        $fit = blog_details::where('tag','=','Fitness')->where('status','=','Live')->count();
        $tra = blog_details::where('tag','=','Travel')->where('status','=','Live')->count();
        $buss = blog_details::where('tag','=','Business')->where('status','=','Live')->count();
        $fin = blog_details::where('tag','=','Financial')->where('status','=','Live')->count();
        $news = blog_details::where('tag','=','News')->where('status','=','Live')->count();
        $poli = blog_details::where('tag','=','Politics')->where('status','=','Live')->count();
        $music = blog_details::where('tag','=','Music and Movies')->where('status','=','Live')->count();
        $ent = blog_details::where('tag','=','Entertainment')->where('status','=','Live')->count();
        $blo = blog_details::where('tag','=','Blogging')->where('status','=','Live')->count();
        $case = blog_details::where('tag','=','Case Study')->where('status','=','Live')->count();
        $other = blog_details::where('tag','=','Other')->where('status','=','Live')->count();

        $recent = blog_details::where('status','=','Live')->orderBy('blog_id','desc')->get();

        return view('index',['arr'=>$arr,'arr_2'=>$arr_2,'fash'=>$fash,'life'=>$life,'sports'=>$sports,'fit'=>$fit,'tra'=>$tra,'buss'=>$buss,'fin'=>$fin,'news'=>$news,'poli'=>$poli,'music'=>$music,'ent'=>$ent,'blo'=>$blo,'case'=>$case,'other'=>$other,'recent'=>$recent]);
    }

    public function login(Request $req)
    {
        if($req->session()->has('user_login'))
        {
            return redirect('/');
        }

        if($req->login)
        {
            $email = $req->email;
            $password = $req->password;

            $check = user_register::where('email',$email)->where('password',$password)->count();

            if($check>0)
            {
                $arr = user_register::where('email',$email)->where('password',$password)->first();
                session(['user_login'=>$arr['id']]);
                session(['user_name'=>$arr['name']]);
                return redirect('/');
            }
            else
            {
                return redirect('/login')->with('message', 'Entered Emaile and Password is not match...!');
            }
        }
        return view('login');
    }

    public function register(Request $req)
    {
        if($req->register)
        {
            $req->validate([
                'email' => 'unique:user_register,email',
                'mobile' => 'unique:user_register,mobile',
            ]);

            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $password2 = $req->password2;
            $mobile = $req->mobile;
            
            if($req->about_you)
            {
                $about_you = $req->about_you;
            }
            else
            {
                $about_you = "Not share by the user...";
            }

            if($req->profile_pic)
            {
                date_default_timezone_set('Asia/Kolkata');
                $profile_pic = date('dmY_His_'). $req->file('profile_pic')->getClientOriginalName();
                $req->profile_pic->move(public_path('site_images'),$profile_pic);
            }
            else
            {
                $profile_pic = '01.jpg';
            }

            if($password==$password2)
            {
                $sql_update = array('name'=>$name,'email'=>$email,'password'=>$password,'mobile'=>$mobile,'about_you'=>$about_you,'profile_pic'=>$profile_pic);
                user_register::create($sql_update);

                return redirect('/login');
            }
            else
            {
                return redirect('/register')->with('message', 'Re-enter password is not match..!  Kindly enter same password in both field..'); 
            }
            
        }
        return view('register');
    }

    public function add_blog(Request $req)
    {
        $id = $req->session()->get('user_login');

        if($req->submit_blog)
        {
            $user_id = $id;
            $title = $req->title;
            $s_details = $req->s_details;
            $f_details = $req->f_details;
            $slogan = $req->slogan;
            $tag = $req->tag;

            date_default_timezone_set('Asia/Kolkata');
            $image_main = date('dmY_His_').$req->file('image_main')->getClientOriginalName();
            $req->image_main->move(public_path('site_images'),$image_main);

            if($req->image_2)
            {
                date_default_timezone_set('Asia/Kolkata');
                $image_2 = date('dmY_His_').$req->file('image_2')->getClientOriginalName();
                $req->image_2->move(public_path('site_images'),$image_2);
            }else{$image_2="";}

            if($req->image_3)
            {
                date_default_timezone_set('Asia/Kolkata');
                $image_3 = date('dmY_His_').$req->file('image_3')->getClientOriginalName();
                $req->image_3->move(public_path('site_images'),$image_3);
            }else{$image_3="";}

            $sql_insert = array('user_id'=>$user_id,'title'=>$title,'s_details'=>$s_details,'f_details'=>$f_details,'slogan'=>$slogan,'tag'=>$tag,'image_main'=>$image_main,'image_2'=>$image_2,'image_3'=>$image_3);
            blog_details::create($sql_insert);
        }
        return view('add-blog');
    }

    public function your_blog(Request $req)
    {
        $id = session()->get('user_login');

        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('user_id',$id)->paginate(3);
        return view('your_blog',['arr'=>$arr]);
    }

    public function blog_details(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');

        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('blog_id',$id)->get();

        $like_count = like_blog::where('user_like_id',$user_id)->where('blog_like_id',$id)->count();

        $like = like_blog::where('blog_like_id',$id)->count();

        if($req->comment_send)
        {
            $comment = $req->comment;

            $sql_insert = array('user_cmt_id'=>$user_id,'blog_cmt_id'=>$id,'cmt'=>$comment);
            comment_blog::create($sql_insert);
        }

        $comment_get = comment_blog::join('user_register','user_register.id','=','comment_blog.user_cmt_id')->where('comment_blog.blog_cmt_id',$id)->get();

        $recent = blog_details::where('status','=','Live')->orderBy('blog_id','desc')->get();

        $fash = blog_details::where('tag','=','Fashion')->where('status','=','Live')->count();
        $life = blog_details::where('tag','=','Life Style')->where('status','=','Live')->count();
        $sports = blog_details::where('tag','=','Sports')->where('status','=','Live')->count();
        $fit = blog_details::where('tag','=','Fitness')->where('status','=','Live')->count();
        $tra = blog_details::where('tag','=','Travel')->where('status','=','Live')->count();
        $buss = blog_details::where('tag','=','Business')->where('status','=','Live')->count();
        $fin = blog_details::where('tag','=','Financial')->where('status','=','Live')->count();
        $news = blog_details::where('tag','=','News')->where('status','=','Live')->count();
        $poli = blog_details::where('tag','=','Politics')->where('status','=','Live')->count();
        $music = blog_details::where('tag','=','Music and Movies')->where('status','=','Live')->count();
        $ent = blog_details::where('tag','=','Entertainment')->where('status','=','Live')->count();
        $blo = blog_details::where('tag','=','Blogging')->where('status','=','Live')->count();
        $case = blog_details::where('tag','=','Case Study')->where('status','=','Live')->count();
        $other = blog_details::where('tag','=','Other')->where('status','=','Live')->count();

        return view('blog_details',['arr'=>$arr,'like'=>$like,'like_count'=>$like_count,'cmt'=>$comment_get,'recent'=>$recent,'fash'=>$fash,'life'=>$life,'sports'=>$sports,'fit'=>$fit,'tra'=>$tra,'buss'=>$buss,'fin'=>$fin,'news'=>$news,'poli'=>$poli,'music'=>$music,'ent'=>$ent,'blo'=>$blo,'case'=>$case,'other'=>$other]);
    }

    public function like_ajax(Request $req)
    {
        if(session()->get('user_login'))
        {
            $blog_like_id = $req->blog_id;
            $user_like_id = $req->session()->get('user_login');

            $sql_insert = array('user_like_id'=>$user_like_id,'blog_like_id'=>$blog_like_id);
            like_blog::create($sql_insert);

            $like = like_blog::where('blog_like_id',$blog_like_id)->count();

            echo view('like_change',['like'=>$like]);
        }
    }

    public function contact(Request $req)
    {
        if($req->inquiry)
        {
            $name = $req->name;
            $email = $req->email;
            $mobile = $req->mobile;
            $message = $req->message;

            $sql_insert = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'message'=>$message);
            contact_us::create($sql_insert);
        }
        return view('contact');
    }

    public function delete_comment(Request $req)
    {
        $c_id = $req->c_id;
        $b_id = $req->b_id;

        comment_blog::where('cmt_id',$c_id)->delete();

        $arr = comment_blog::join('user_register','user_register.id','=','comment_blog.user_cmt_id')->where('blog_cmt_id',$b_id)->get();

        echo view('/ajax/delete_comment',['arr'=>$arr]);
    }

    public function logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/login');
    }


    // Back-end (Admin Pannel)
    public function admin_index(Request $req)
    {
        if($req->session()->has('admin_login'))
        {
            return redirect('/admin/dashboard');
        }

        if($req->signin)
        {
            $email = $req->email;
            $password = $req->password;

            $check = admin_login::where('email',$email)->where('password',$password)->count();

            if($check>0)
            {
                $arr = admin_login::where('email',$email)->where('password',$password)->first();
                session(['admin_login'=>$arr['id']]);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect('/admin/index')->with('message', 'Entered Emaile and Password is not match...!');
            }
        }
        return view('admin/index');
    }

    public function dashboard(Request $req)
    {
        $heading = website_heading::count();
        $live_blog = blog_details::where('status','=','Live')->count();
        $pending_blog = blog_details::where('status','=','Pending for Admin Approval')->count();
        $reject_blog = blog_details::where('status','=','Rejected due to Unsubjected content')->count();
        $contact = contact_us::count();

        return view('admin/dashboard',['heading'=>$heading,'live_blog'=>$live_blog,'pending_blog'=>$pending_blog,'reject_blog'=>$reject_blog,'contact'=>$contact]);
    }

    public function view_heading(Request $req)
    {
        $arr = website_heading::all();

        return view('admin/view-heading',['arr'=>$arr]);
    }

    public function edit_heading(Request $req,$id)
    {
        $arr = website_heading::where('id',$id)->get();

        return view('admin/edit-heading',['arr'=>$arr]);
    }

    public function submit_heading(Request $req,$id)
    {
        if($req->edit_heading)
        {
            $title = $req->title;
            $details = $req->details;

            if($req->image=="")
            {
                $image = website_heading::where('id',$id)->first()->image;
            }
            else
            {
                $image_delete = website_heading::where('id',$id)->first()->image;
                unlink('site_images/'.$image_delete);

                date_default_timezone_set('Asia/Kolkata');
                $image = date('dmY_His_'). $req->file('image')->getClientOriginalName();
                $req->image->move(public_path('site_images'),$image);
            }            

            $sql_update = array('title'=>$title,'details'=>$details,'image'=>$image);
            website_heading::where('id',$id)->update($sql_update);
        }

        return redirect('/admin/view-heading');
    }

    public function manage_blog(Request $req)
    {
        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('status','=','Pending for Admin Approval')->get();

        return view('admin/manage-blog',['arr'=>$arr]);
    }

    public function view_manage_detail_blog(Request $req,$id)
    {
        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('blog_id',$id)->get();

        return view('admin/view-manage-detail-blog',['arr'=>$arr]);
    }

    public function change_status(Request $req,$id)
    {
        if($req->change_status)
        {
            $checked = $req->status;

            if($checked=="Approve")
            {
                $status = "Live";
            }
            else
            {
                $status = "Rejected due to Unsubjected content";
            }

            $sql_update = array('status'=>$status);
            blog_details::where('blog_id',$id)->update($sql_update);

            return redirect('/admin/manage-blog');
        }
    }

    public function view_all_blog(Request $req)
    {
        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->get();

        return view('admin/view-all-blog',['arr'=>$arr]);
    }

    public function view_all_detail_blog(Request $req,$id)
    {
        $arr = blog_details::join('user_register','user_register.id','=','blog_details.user_id')->where('blog_id',$id)->get();

        return view('admin/view-all-detail-blog',['arr'=>$arr]);
    }

    public function view_contacts(Request $req)
    {
        $sql_update = array('status'=>0);
        contact_us::where('status',1)->update($sql_update);

        $arr = contact_us::all();

        return view('/admin/view-contacts',['arr'=>$arr]);
    }

    public function admin_logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/admin/index');
    }
}
