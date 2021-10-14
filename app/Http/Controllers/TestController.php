<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
	private $time = null;
	
	public function __construct(Carbon $carbon)
	{
		$this->time = $carbon;
	}
	
    public function index()
	{
		$time = $this->time->today();
		return view('test.test')->with(['time' => $time]);
	}
}
