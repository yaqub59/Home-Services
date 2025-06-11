<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Requests;
use App\Models\User;
use App\Models\Reviews;
use App\Models\Services;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $user = auth()->user();

        if ($user && $user->user_type == 0) { // employer
            $totalRequests = Requests::where('employer_id', $user->id)->count();
            $completedRequests = Requests::where('employer_id', $user->id)
                ->where('status', 'accepted')->count();
            $pendingRequests = Requests::where('employer_id', $user->id)
                ->where('status', 'pending')->count();
            $cancelledRequests = Requests::where('employer_id', $user->id)
                ->where('status', 'rejected')->count();;
        } else {
            // Not an employer
            $totalRequests = $completedRequests = $pendingRequests = $cancelledRequests = 0;
        }
        return view('employer.employerHome', compact(
            'totalRequests',
            'completedRequests',
            'pendingRequests',
            'cancelledRequests',
        ));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin(): View
    {

        // Total registered users
        $totalUsers = User::count();

        // Total service providers (assume they have a separate model or role)
        $totalProviders = Services::count();

        // Total service requests
        $totalRequests = Requests::count();

        // Completed service requests
        $completedRequests = Requests::where('status', 'accepted')->count();

        // Pending service requests
        $pendingRequests = Requests::where('status', 'pending')->count();

        // Total reviews
        $totalReviews = Reviews::count();

        return view('admin.adminHome', compact(
            'totalUsers',
            'totalProviders',
            'totalRequests',
            'completedRequests',
            'pendingRequests',
            'totalReviews'
        ));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function service(): View
    {
        $userId = auth()->id();

        $counts = [
            'total_requests' => Requests::where('service_provider_id', $userId)->count(),
            'pending_requests' => Requests::where('service_provider_id', $userId)->where('status', 'pending')->count(),
            'accepted_requests' => Requests::where('service_provider_id', $userId)->where('status', 'accepted')->count(),
            'rating_counts' => Reviews::where('reviewee_id', $userId)
                ->selectRaw('rating, COUNT(*) as count')
                ->groupBy('rating')
                ->pluck('count', 'rating')
                ->toArray()
        ];
        return view('service.serviceHome')
            ->with('counts', $counts);
    }
}
