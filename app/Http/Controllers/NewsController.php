<?php

namespace App\Http\Controllers;

use App\Models\News;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class NewsController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $query = null;
        // $query2 = null;
        // //filter
        // $filter = Query::term()
        //     ->field('created_at')
        //     ->value('2023-07-26');
        // $query2 = Query::bool()->filter($filter);

        //search
        if (isset($searchTerm)) {
            $query = Query::multiMatch()
                ->fields(['title', 'content', 'author'])
                ->query($searchTerm)
                ->fuzziness('AUTO')
                ->fuzzyTranspositions(true)
                ->lenient(true)
                ->maxExpansions(50)
                ->autoGenerateSynonymsPhraseQuery(true);
        }

        $results = News::searchQuery($query)
            ->sort('author.keyword')
            ->from(0)
            ->size(100)
            ->refineModels(function (Builder $query) {
                $query->select('id', 'title', 'author', 'content', 'created_at');
                            // ->where('author','Catalina Wolf');
            }, News::class)
            // ->trackScores(true)
            // ->suggest('title_suggest', ['text' => $searchTerm??'', 'term' => ['field' => 'title']])
            ->requestCache(true)
            ->execute()
            ->models();
        // dd($results->suggestions());
        // $results = News::search($searchTerm)->get();
        // dd($results);
        // if(str_contains((request()->route()->uri), 'api/')){
            return response()->json($results);
        // }else
        // return view('search', compact('results', 'searchTerm'));
    }
}
