<?php
namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Inquiry;
use App\Models\Request as AppRequest;
use App\Models\Portfolio;
use App\Models\User;
use App\Models\News;
use App\Models\Post;
use App\Models\Quote;
use App\Models\Team;

class DashboardController extends Controller
{
    public function index()
    {
        $teamMembersCount = Team::count();
        $inquiriesCount = Inquiry::count();
        $requestsCount = Quote::count();
        $portfoliosCount = Portfolio::count();
        $usersCount = User::count();
        $newsCount = Post::count();

        return view('admin.home', compact(
            'teamMembersCount',
            'inquiriesCount',
            'requestsCount',
            'portfoliosCount',
            'usersCount',
            'newsCount'
        ));
    }
}
