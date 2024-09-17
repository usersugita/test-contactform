<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contacts;
use App\Models\Categories;

class ContactController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function admin()
    {
        $contacts = Contacts::Paginate(7);
        
        return view('admin', compact('contacts'));
    }  
  
    public function form()
    {
        $categories = Categories::all();
        return view('form', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content', 'detail']);

        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {

        $contactform = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        Contacts::create($contactform);
        $categoryform = $request->only(['content']);
        Categories::create($categoryform);
        


        return view('thanks');
    }
}
