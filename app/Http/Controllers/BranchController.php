<?php
/**
 * Created by PhpStorm.
 * User: asim
 * Date: 2/12/2018
 * Time: 11:04 AM
 */
namespace App\Http\Controllers;
use App\Branch;
use App\Item;


class BranchController extends Controller
{
    public  function AllBranch()
    {
        $branch= Branch::all();
        $Item= Item::all();
        return view('welcome',['branch'=>$branch,'items'=>$Item,]);
    }
    public  function AddBranch()
    {
        $branch= Branch::all();
        $Item= Item::all();
        return view('welcome',['branch'=>$branch,'items'=>$Item,]);
    }

}