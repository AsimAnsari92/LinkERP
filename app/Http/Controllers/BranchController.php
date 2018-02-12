<?php
/**
 * Created by PhpStorm.
 * User: asim
 * Date: 2/12/2018
 * Time: 11:04 AM
 */
namespace App\Http\Controllers;
use App\Bankbranch;


class BranchController extends Controller
{
    public  function AllBranch()
    {
        $Branch= Bankbranch::all();
        return view('welcome',['branch'=>$Branch]);
         //
    }

}