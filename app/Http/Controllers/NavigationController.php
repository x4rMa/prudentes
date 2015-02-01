<?php namespace prudentes\Http\Controllers;

use prudentes\Clean;

class NavigationController extends Controller {

	//navigation
	public function showIndex()
	{	
		return view('index');
	}

	public function showCourses()
	{
		return view('courses');
	}
	public function showLogin()
	{
		return view('login');
	}
	public function showCreateUser()
	{
		return view('createUser');
	}
	
	//courses
	public function showCategory($category)
	{
		return view('courses')->with('category', $category);
	}
	public function showCourse($course)
	{
		return view('course')->with('course', Clean::string($course));
	}
	public function showLesson($course, $lesson)
	{
		return view('lesson')
		->with('lesson', Clean::string($lesson))
		->with('course', Clean::string($course));
	}

	//dashboard
	public function showMenu()
	{
		return view('userMenu.menu');
	}
	public function showMyCourses() {
		return view('userMenu.myCourses');
	}
	public function showTeachingCourses() {
		return view('userMenu.teachingCourses');
	}
	public function showCreateCourse() {
		return view('userMenu.createCourse');
	}
	public function showEditProfile() {
		return view('userMenu.updateProfile');
	}
	public function showWishlist() {
		return view('userMenu.myWishlist');
	}

	//footerLinks - infoDocs
	public function showAbout()
	{
		return view('infoDocs.about');
	}
	public function showFaq()
	{
		return view('infoDocs.faq');
	}
	public function showSupport()
	{
		return view('infoDocs.support');
	}
	public function showContact()
	{
		return view('infoDocs.contact');
	}
}