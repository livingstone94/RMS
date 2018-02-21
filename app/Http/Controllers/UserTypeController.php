<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    //

    public function index()
    {
        return view('user_type.index');
    }

    public function add(Request $request, UserType $userType)
    {
        try
        {
            $result = $userType->createNew($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }


    public function delete(Request $request, UserType $userType)
    {
        try
        {
            $result = $userType->deleteRole($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function viewRoles(UserType $userType)
    {
        try
        {
            $result = $userType->viewAll();
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function viewRole(Request $request, UserType $userType)
    {
        try
        {
            $result = $userType->view($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function edit(Request $request, UserType $userType)
    {
        try
        {
            $result = $userType->updateRole($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }
}
