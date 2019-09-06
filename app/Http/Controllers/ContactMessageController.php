<?php

namespace App\Http\Controllers;

class ContactMessageController extends Controller{

    public function getContactIndex(){
        //Fetch Posts and Paginate
        return view('frontend.other.contact');
    }

    // public function getSinglePost($post_id, $end = 'frontend'){

    //     //Fetch Post

    //     return view ($end . '.blog.single');
    // }
}
