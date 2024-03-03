<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTracker;

class UserTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitors = UserTracker::all();
        // @dd($visitors->all());
        return view('backend.tracker.view', compact('visitors'));
    }

    public function store(Request $request){
        // IP Address
            $user_ip = $_SERVER['REMOTE_ADDR'];

        // URL
            $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // Browser Name

        // Get the user agent string
            $user_agent = $_SERVER['HTTP_USER_AGENT'];

            // Initialize an array to hold browser names and their corresponding patterns
            $browser_patterns = array(
                'Firefox' => 'Firefox',
                'Chrome' => 'Chrome',
                'Safari' => 'Safari',
                'Opera' => 'Opera',
                'Internet Explorer' => 'MSIE', // Internet Explorer
                'Edge' => 'Edge', // Microsoft Edge
            );
            $browser_name = '';
            $system_user_name = get_current_user();
            // Loop through the patterns and check if any match the user agent string
            foreach ($browser_patterns as $browser_name => $pattern) {
                if (stripos($user_agent, $pattern) !== false) {
                    $browser_name = $browser_name ;
                    // echo "Browser Name: $browser_name <br>";
                    break; // Break out of the loop once a match is found
                }
            }


        // If no match is found, display the user agent string
            if (empty($browser_name)) {
                // echo "Browser Name: $user_agent <br>";
                $browser_name = $user_agent;
            }




        // return response()->json([
        //     'user_ip' => $user_ip,
        //     // 'country' => $current_url,
        //     'url' => $current_url,
        //     'browser_name' => $browser_name,
        //     'system_user_name' => $system_user_name

        // ]);

        $tracker = new UserTracker;
        $tracker->country = $request->country_info;
        $tracker->user_ip = $user_ip;
        $tracker->url = $current_url;
        $tracker->browser_name = $browser_name;
        $tracker->system_user_name = $system_user_name;
        $tracker->save();

        return response()->json([
            'status' => 200,
            'message'=>'Tracking Successfully'
        ]);

        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|string|lowercase|email|max:255'
        //     ]);
        //     if ($validator->passes()) {
        //         $tracker = new UserTracker;
        //         $tracker->country = $request->country;
        //         $tracker->user_ip = $request->user_ip;
        //         $tracker->url = $request->url;
        //         $tracker->browser_name = $request->browser_name;
        //         $tracker->system_user_name = $request->system_user_name;
        //         $tracker->save();

        //         return response()->json([
        //             'status' => 200,
        //             'message'=>'Tracking Successfully'
        //         ]);

        //     }
        //     return response()->json([
        //         'status' => '500',
        //         'error'=>$validator->messages()
        //     ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
