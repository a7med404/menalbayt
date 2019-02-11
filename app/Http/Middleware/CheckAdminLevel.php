<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLevel
{
    /**
     * Handle an inco`ming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/cpanel');
        // }

        if (\Auth::user()->admin != 1) {

            \Session::flash('flash_massage_type', 4);
            return redirect()->back()->withFlashMassage('You Don\'t Have Permission To Access To This Page');
            // dd("2");
            // return redirect('/cpanel');
            // return redirect('admin/error.not_have_permission');
        }
        return $next($request);
    }
}
