<?php
/**
 * Created by PhpStorm.
 * User: asim
 * Date: 2/12/2018
 * Time: 11:04 AM
 */
namespace App\Http\Controllers;
use App\Branch;


class BranchController extends Controller
{
    public  function AllBranch()
    {
        $branch= Branch::all();
        return view('welcome',['branch'=>$branch]);
         //
    }

}