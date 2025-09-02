<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Mail\ContactMail;
use App\Models\BlogPages;
use App\Models\Blogs;
use App\Models\BlogsCategories;
use App\Models\BlogTagIndividual;
use App\Models\BlogTags;
use App\Models\contact_forms;
use App\Models\ContactInfo;
use App\Models\faq;
use App\Models\LandingPage;
use App\Models\landing_2page;
use App\Models\landing_3page;
use App\Models\landing_4page;
use App\Models\landing_5page;
use App\Models\landing_6page;
use App\Models\landing_7page;
use App\Models\landing_8page;
use App\Models\landing_9page;
use App\Models\landing_10page;
use App\Models\landing_11page;
use App\Models\landing_12page;
use App\Models\landing_13page;
use App\Models\News_letter;
use App\Models\quote_forms;
use App\Models\Review;
use App\Models\ServicesMainScreen;
use Illuminate\Http\Request;
use App\Models\schedule_inspection;
use App\Models\SustainabilityPage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BlogController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function Index()
	{
		$category = isset($_GET['category']) ? $_GET['category'] : null;
		$main_screen = BlogPages::where('id', 1)->get()->toArray();
		$where = '';
		if($category){
		    $where = "WHERE blogs_categories.slug LIKE '%".$category."%'";
		}
		$blogs = DB::select("
				SELECT
                    blogs.id,
                    blogs.title,
                    blogs.image,
                    blogs.slug,
                    blogs.content,
                    blogs.created_at,
                    blogs.updated_at,
                    blogs.`content-prev`,
                    blogs_categories.title AS category
                FROM blogs
                	LEFT JOIN blogs_categories ON blogs_categories.id = blogs.category
                ".$where."
                ORDER BY blogs.created_at DESC
			");
		$blogs = json_decode(json_encode($blogs), true);





		$blogsRecents = Blogs::orderBy('created_at', 'desc')->limit(5)->get();


		$categories = DB::select("
				SELECT blogs_categories.title,blogs_categories.slug, COUNT(blogs.id) AS total
				FROM blogs_categories
				LEFT JOIN blogs ON blogs_categories.id = blogs.category
				GROUP BY blogs_categories.id, blogs_categories.title, blogs_categories.slug
			");

		$categories = json_decode(json_encode($categories), true);

		$tags_individual = DB::select("
				SELECT  blog_tags.title, blog_tag_individuals.id as individual_id FROM `blog_tag_individuals`
INNER JOIN blog_tags on blog_tag_individuals.idtag = blog_tags.id
			");

		$tags_individual = json_decode(json_encode($tags_individual), true);



		return view('blogs.index', [
			'blogs' => $blogs,
			'main_screen' => $main_screen,
			'blogsRecents' => $blogsRecents,
			'categories' => $categories,
			'tags_individual' => $tags_individual
        ]);
	}


	public function Details($slug)
    {
		$main = Blogs::where('slug',$slug)->get()->toArray();
		// $main2 = BlogPages::where('id',1)->get()->toArray();
		$blogs = Blogs::orderBy('created_at', 'desc')->get();
		$category_service = null;
		if($main[0]){
			if($main[0]['category'] != null && $main[0]['category'] != ""){
				$category_service = BlogsCategories::where('id',$main[0]['category'])->get()->toArray();
				if($category_service[0]){
					$category_service = $category_service[0]['title'];
				}
			}
		}

		$categories = DB::select("
				SELECT blogs_categories.title,blogs_categories.slug, COUNT(blogs.id) AS total
				FROM blogs_categories
				LEFT JOIN blogs ON blogs_categories.id = blogs.category
				GROUP BY blogs_categories.id, blogs_categories.title, blogs_categories.slug
			");

		$categories = json_decode(json_encode($categories), true);

		$tags_individual = DB::select("
				SELECT  blog_tags.title, blog_tag_individuals.id as individual_id FROM `blog_tag_individuals`
INNER JOIN blog_tags on blog_tag_individuals.idtag = blog_tags.id
WHERE blog_tag_individuals.idblog = ".$main[0]['id']."
			");

		$tags_individual = json_decode(json_encode($tags_individual), true);
		return view('blogs.detail', [
            'main' => $main[0],
			'blogs' => $blogs,
			'categories' => $categories,
			'category_service' => $category_service,
			'tags_individual' => $tags_individual
        ]);
	}

	public function HomePageBlogsIndex()
	{
		$blogs = Blogs::all();
		$tags = BlogTags::all();
		$categories = BlogsCategories::all();
		$blogPages = BlogPages::all();
		//dd($landing_3page);

		return view('home.admin.blogs', [
			'blogPages' => $blogPages,
			'blogs' => $blogs,
			'tags' => $tags,
			'categories' => $categories
		]);

	}

	public function HomePageBlogsEdit($id)
	{
		$blog = Blogs::findOrFail($id);
		$tags = BlogTags::all();
		$categories = BlogsCategories::all();
		$categories = BlogsCategories::all();
		$tags_individual = DB::select("
				SELECT  blog_tags.title, blog_tag_individuals.id as individual_id FROM `blog_tag_individuals`
INNER JOIN blog_tags on blog_tag_individuals.idtag = blog_tags.id
WHERE blog_tag_individuals.idblog = $id
			");

		$tags_individual = json_decode(json_encode($tags_individual), true);

		return view('home.admin.blogs-edit', [
			'blog' => $blog,
			'tags' => $tags,
			'categories' => $categories,
			'tags_individual' => $tags_individual
		]);


	}

	public function HomePageBlogsDelete($id)
	{
		$query = Blogs::findOrFail($id);

        if ($query->delete()) {
			return redirect()->back()->with('success', 'Blog excluido com sucesso !')->withInput();
        }

	}

	public function HomePageBlogsNew(Request $request)
    {
		$path = '';
		if ($request->hasFile('image')) {
			$path = $request->file('image')->store('assets/images');
		}
		$query = Blogs::create([
			'title' => $request->input('title'),
			'image' => 'storage/'.$path,
			'slug' => Str::slug($request->input('title'))
		]);


		return redirect()->back()->with('success', 'Blog registrado com sucesso !')->withInput();
	}

	public function HomePageBlogsMainPageCreate(Request $request)
    {
		$path1 = '';
		$path2 = '';
		if ($request->hasFile('sec-1-image1')) {
			$path1 = $request->file('sec-1-image1')->store('assets/images');
		}
		if ($request->hasFile('sec-1-image2')) {
			$path2 = $request->file('sec-1-image2')->store('assets/images');
		}
		$query = BlogPages::create([
			'sec-1-h1' => $request->input('sec-1-h1'),
			'sec-1-image1' => 'storage/'.$path1,
			'sec-1-image2' => 'storage/'.$path2
		]);


		return redirect()->back()->with('success', 'Blog registrado com sucesso !')->withInput();
	}

	public function HomePageBlogsMainPageUpdate(Request $request)
    {


		if ($request->hasFile('sec-1-image1')) {
			$path1 = $request->file('sec-1-image1')->store('assets/images');
			BlogPages::where('id',1)->update([
				'sec-1-image1' => 'storage/'.$path1
			]);
		}


		$query = BlogPages::where('id',1)->update([
			'sec-1-h1' => $request->input('sec-1-h1')
		]);



		return redirect()->back()->with('success', 'Sucesso !')->withInput();
	}

	public function HomePageBlogsUpdate(Request $request)
    {
		$query = Blogs::where('id',$request->input('id'))->update([
			'title' => $request->input('title'),
			'content' => $request->input('input-content-blog'),
			'content-prev' => $request->input('content-prev'),
			'slug' => Str::slug($request->input('title')),
			'category' => $request->input('category')
		]);


		if ($request->hasFile('image')) {
			$path = $request->file('image')->store('assets/images');
			Blogs::where('id',$request->input('id'))->update([
				'image' => 'storage/'.$path
			]);
		}
		return redirect()->back()->with('success', 'Serviço registrado com sucesso !')->withInput();
	}

	public function HomePageBlogsTagsNew(Request $request)
    {
		$query = BlogTags::create([
			'title' => $request->input('title'),
			'slug' => Str::slug($request->input('title'))
		]);


		return redirect()->back()->with('success', 'Tag registrada com sucesso !')->withInput();
	}

	public function HomePageBlogsTagsVincule(Request $request)
    {
		$query = BlogTagIndividual::create([
			'idblog' => $request->input('id_blog'),
			'idtag' => Str::slug($request->input('id_tag'))
		]);


		return redirect()->back()->with('success', 'Vinculo realizado com sucesso !')->withInput();
	}

	public function HomePageBlogsTagsUpdate(Request $request)
    {
		$query = BlogTags::where('id',$request->input('id'))->update([
			'title' => $request->input('title'),
		]);

		return redirect()->back()->with('success', 'Tag atualizada com sucesso !')->withInput();
	}

	public function HomePageBlogsTagsDelete($id)
	{
		$query = BlogTags::findOrFail($id);

        if ($query->delete()) {
			return redirect()->back()->with('success', 'Tag excluida com sucesso !')->withInput();
        }

	}

	public function HomePageBlogsTagsDeleteIndividual($id)
	{
		$query = BlogTagIndividual::findOrFail($id);

        if ($query->delete()) {
			return redirect()->back()->with('success', 'Tag excluida com sucesso !')->withInput();
        }

	}


	public function HomePageBlogsCategoryNew(Request $request)
    {
		$query = BlogsCategories::create([
			'title' => $request->input('title'),
			'slug' => Str::slug($request->input('title'))
		]);


		return redirect()->back()->with('success', 'Tag registrada com sucesso !')->withInput();
	}

	public function HomePageBlogsCategoryUpdate(Request $request)
    {
		$query = BlogsCategories::where('id',$request->input('id'))->update([
			'title' => $request->input('title'),
			'slug' => Str::slug($request->input('title'))

		]);

		return redirect()->back()->with('success', 'Tag atualizada com sucesso !')->withInput();
	}

	public function HomePageBlogsCategoryDelete($id)
	{
		$query = BlogsCategories::findOrFail($id);

        if ($query->delete()) {
			return redirect()->back()->with('success', 'Tag excluida com sucesso !')->withInput();
        }

	}



}
