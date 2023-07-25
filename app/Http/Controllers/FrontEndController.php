<?php

namespace App\Http\Controllers;

use App\Models\Advideo;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\BookTag;
use App\Models\Category;
use App\Models\Country;
use App\Models\Critere;
use App\Models\Enterprise;
use App\Models\Post;
use App\Models\SecteurActivite;
use App\Models\SecteurActiviteCritere;
use App\Models\Street;
use App\Models\Tag;
use App\Models\Town;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_page()
    {
        $data = $this->get_data();
        $data['advideos'] = Advideo::orderBy('id', 'desc')->get();


        $viewCounter = Session::get('viewed_index');


        $data['number_visits'] = DB::table('localizeur-table')->select('number_visits')->first();
        $test = $data['number_visits'];


        if ($viewCounter == null) {

            DB::update("update `localizeur-table` set number_visits = ? where number_visits = ? ",[intval($test->number_visits)+1, intval($test->number_visits)]);

            Session::push('viewed_index',intval($test->number_visits)+1);
            Session::save();
        }

        return view('frontend.pages.home-page',$data);
    }

    public function check_unicity(int $val, $data){
        for ($i = 0; $i < sizeof( $data); $i++) {
            if($val === $data[$i]){
                return false;
            }
        }
        return true;
    }

    public function fill_ran_secteurs($secteurs){
        $array = [];
        for ($i = 0; $i < 8; $i++) {
            $val = random_int(0,sizeof( $secteurs)-1);
            while(!$this->check_unicity($val,$array)){
                $val = random_int(0,sizeof($secteurs)-1);
            }
            array_push($array, $val);
        }
        return $array;

    }

    public function all_companies_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.enterprize-listing-page',$data);
    }

    public function all_sectors_page()
    {


        $data = $this->get_data();
        $data['found_secteurs'] = null;
        return view('frontend.pages.business-sectors-page', $data);
    }

    public function about_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.about-page', $data);
    }

    public function add_community_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.community.register-community', $data);
    }

    public function single_comapany_page($lang, $id)
    {
        $data = $this->get_data();
        $data['company'] = Enterprise::find($id);
        $scs = SecteurActiviteCritere::orderBy('id', 'asc')->where('SecteurActivite_id', $data['company']->secteur->id)->get();
        $myArray = array();

        foreach ($scs as $sc) {
            array_push($myArray, Critere::find($sc->critere_id));
            //dd($myArray);
        }

        $data['company']->number_visits += 1;
        $data['company']->save();
        $data['company']->criteres = $myArray;

        return view('frontend.pages.single-company-page',$data);
    }

    public function comapanies_by_sector($lang, $id)
    {
        $data = $this->get_data();


        $data['searched_entreprises'] = Enterprise::where('SecteurActivite_id', $id)->get();

        $data['secteur'] = SecteurActivite::find($id);

        return view('frontend.pages.sector-companies-page', $data);
    }

    public function comapanies_by_street($lang, $id)
    {
        $data = $this->get_data();
        $data['searched_entreprises'] = Enterprise::where('localisation_street_id', $id)->get();
        $data['street'] = Street::find($id);


        return view('frontend.pages.street-companies-page', $data);
    }

    public function companies_by_town($lang, $id)
    {
        $data = $this->get_data();
        $data['searched_entreprises'] = Enterprise::where('localisation_ville_id', $id)->get();
        $data['town'] = Town::find($id);


        return view('frontend.pages.town-companies-page', $data);
    }

    public function comapanies_by_country($lang, $id)
    {
        $data = $this->get_data();
        $data['searched_entreprises'] = Enterprise::where('localisation_pays_id', $id)->get();
        $data['country'] = Country::find($id);


        return view('frontend.pages.country-companies-page', $data);
    }

    public function get_data(){
        $data['entreprises'] = Enterprise::orderBy('number_visits', 'desc')->get();
        $data['top_entreprises'] = Enterprise::orderBy('number_visits', 'asc')->where('top_30', 1)->get();

        $data['secteurs'] = SecteurActivite::orderBy('id', 'desc')->get();
        $data['criteres'] = Critere::orderBy('id', 'desc')->get();
        $data['streets'] = Street::orderBy('id', 'asc')->get();
        $data['towns'] = Town::orderBy('id', 'asc')->get();
        $data['countries'] = Country::orderBy('id', 'desc')->get();
        $data['random_secteurs'] = $this->fill_ran_secteurs($data['secteurs']);

        return $data;
    }

    public function search_by_sector()
    {
        $search_text = $_GET['search-sector'];
        $data['found_secteurs'] = SecteurActivite::where('titre','LIKE','%'.$search_text.'%')->get();
        $data['secteurs'] = SecteurActivite::orderBy('id','desc')->get();
        $data['criteres'] = Critere::orderBy('id','desc')->get();
        $data['streets'] = Street::orderBy('id','desc')->get();
        $data['towns'] = Town::orderBy('id','desc')->get();
        $data['countries'] = Country::orderBy('id','desc')->get();
        $data['random_secteurs'] = $this->fill_ran_secteurs($data['secteurs']);

        return view('frontend.pages.business-sectors-page',$data);
    }

    public function search_by_sector_ajax()
    {
        $search_text = $_GET['query'];

        $data['found_secteurs'] = SecteurActivite::where('titre','LIKE','%'.$search_text.'%')->get();
        $output = "";
        foreach ($data['found_secteurs'] as $secteur){
            $output .='
           <!--  listing-item-grid  -->
                            <div class="col-sm-3">
                                <div class="listing-item-grid">
                                    <div class="bg"  data-bg="'. asset("frontend/images/all/78.jpg").'"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>'.sizeof($secteur->enterprises).' </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="'.(route("sector-company",[app()->getLocale(), $secteur->id])).'">'.$secteur->titre.'</a></h3>

                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
          ';
        }

        echo json_encode($output);
    }

    public function top_10_companies_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.top-10-companies-page',$data);
    }

    public function top_30_companies_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.top-30-companies-page',$data);
    }

    public function top_50_companies_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.top-50-companies-page',$data);
    }

    public function pricing_page()
    {
        $data = $this->get_data();

        return view('frontend.pages.pricing-page',$data);
    }

    public function blog_page()
    {
        $data = $this->get_data();

        $data['posts'] = Post::orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('id', 'desc')->get();
        $data['tags'] = Tag::orderBy('id', 'desc')->get();


        return view('frontend.pages.community-page',$data);
    }

    public function register_user(Request $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect()->back();
    }

    public function books_page()
    {
        $data = $this->get_data();

        $data['books'] = Book::orderBy('id', 'desc')->get();

        $data['popular_books'] = Book::orderBy('number_visits', 'desc')->paginate(4);

        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();

        return view('frontend.pages.books.books-page', $data);
    }

    public function single_book_page($lang, $book)
    {


        $data = $this->get_data();

        $data['books'] = Book::orderBy('id', 'desc')->get();

        $data['popular_books'] = Book::orderBy('number_visits', 'desc')->paginate(4);

        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();

        $data['book'] = Book::find($book);

        $other_books = Book::where('id', '!=', $book)->paginate(2);

        if (sizeof($other_books) < 2) {
            $data['next_book'] = $other_books[0];
        } else {
            $data['prev_book'] = $other_books[0];
            $data['next_book'] = $other_books[1];
        }

        $data['book']->number_visits += 1;
        $data['book']->save();

        return view('frontend.pages.books.book-single-page', $data);
    }

    public function index_dashboard()
    {
        $data = $this->get_data();

        $data['posts'] = Post::orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('id', 'desc')->get();
        $data['tags'] = Tag::orderBy('id', 'desc')->get();


        return view('backend2.pages.home', $data);
    }
}
