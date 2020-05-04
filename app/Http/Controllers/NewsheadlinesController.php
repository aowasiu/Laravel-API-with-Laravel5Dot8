<?php

namespace App\Http\Controllers;

use App\Newsheadlines;

use App\Http\Resources\Newsheadlines as NewsheadlinesResource;
use App\Http\Resources\Captchaverification as CaptchaverificationResource;

use Illuminate\Http\Request;

class NewsheadlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siteVerify($secret, $response, $remoteip)
    {
        //Get all posts
        //$newsheadliness = Newsheadlines::paginate(15);

        $captcha_verification = array (
                "success"  => true,
//                "success"  => false,
                "response" => $response,
                "remoteip" => $remoteip,
                "secret" => ""
        );

        //$json_response = json_encode($captcha_verification);

        return $captcha_verification;

/*        //Return collection as a resource
        return CaptchaverificationResource::collection($captcha_verification);
*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all posts
        $newsheadliness = Newsheadlines::paginate(15);

        //Return collection of posts as a resource
        return NewsheadlinesResource::collection($newsheadliness);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newsheadlines = $request->isMethod('put') ? Newsheadlines::findOrFail($request->article_id) : new Newsheadlines;

        $newsheadlines->identity 	= $request->input('id');
        $newsheadlines->name 		= $request->input('name');
        $newsheadlines->title 		= $request->input('title');
        $newsheadlines->description = $request->input('description');
        $newsheadlines->url 		= $request->input('url');
        $newsheadlines->urlToImage 	= $request->input('urlToImage');
        $newsheadlines->publishedAt = $request->input('publishedAt');
        $newsheadlines->content 	= $request->input('content');
        $newsheadlines->category 	= $request->input('category');
        $newsheadlines->language 	= $request->input('language');
        $newsheadlines->country 	= $request->input('country');
        $newsheadlines->diskImageFileName = $request->input('diskImageFileName');
        $newsheadlines->created_at 	= $request->input('created_at');
        $newsheadlines->updated_at 	= $request->input('updated_at');

        if ($newsheadlines->save())
        {
            return new NewsheadlinesResource($newsheadlines);
        }
    }

    public function show($id)
    {
        //Get a particular Newsheadlines
        $newsheadlines = Newsheadlines::findOrFail($id);

        //Return the fetched Newsheadlines post as a resource
    	return new NewsheadlinesResource($newsheadlines);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get a particular Newsheadlines
        $newsheadlines = Newsheadlines::findOrFail($id);

        //Delete the fetched Newsheadlines post
        if($newsheadlines->delete())
        {
            return new NewsheadlinesResource($newsheadlines);
        }
    }
}