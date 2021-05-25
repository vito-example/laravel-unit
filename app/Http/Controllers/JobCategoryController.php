<?php
/**
 *  app/Http/Controllers/JobCategoryController.php
 *
 * Date-Time: 24.05.21
 * Time: 14:59
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

/**
 * Class JobCategoryController
 * @package App\Http\Controllers
 */
class JobCategoryController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:job_categories,title',
        ]);

        $jobCategory = new JobCategory();
        $jobCategory->title = $request->title;
        $jobCategory->user_id = auth()->user()->id;

        // Save new job category
        $jobCategory->save();

        return response()->json([
            'status' => true,
            'message' => 'Job category created.',
            'data' => [

            ]
        ], 201);
    }
}
