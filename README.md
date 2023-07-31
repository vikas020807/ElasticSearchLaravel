# ElasticSearch with Laravel

## Step 1

Download Elastic Search zip

- [Download](https://www.elastic.co/downloads/elasticsearch) ElasticSearch package.
- [Download](https://www.elastic.co/downloads/kibana) ElasticSearch Kibana (UI).

## Step 2

- Unzip elasticSearch downloaded package .
- Open cmd or powershell
- In terminal execute
  - Change path to your elasticsearch directory

  ```bash
   cd path/to/elasticsearch-8.8.2/bin
  ```

- All the further commands will be executed inside the bin directory.

- In terminal execute

```bash
    .\elasticsearch-service.bat install
```

  ```bash
   ./elasticsearch-create-enrollment-token -s node
  ```

- In terminal execute

```bash
    ./elasticsearch-reset-password -u elastic
```

- Save the password , it's required later.

- Make sure you have jdk installed with environment variables set in your machine.
- Now open file explorer and open yaml file elasticsearch-8.8.2/config/elasticsearch.yaml.
- Once opened, find and uncomment network.host and http.port . After that save the file.
- In terminal execute

```bash
    ./elasticsearch-create-enrollment-token.bat --scope kibana
```

- Save token . It will be used for kibana dashboard login.
- To start elastic server , execute

```bash
    ./elasticsearch.bat
```

- Open <https://127.0.0.1:9200> and enter username elastic and paswword that you have saved earlier.
- If your cluster is active , you should be able to see node configurations.

## Step 3

- Unzip kibana downloaded package .
- Open cmd or powershell
- In terminal execute
  - Change path to your kibana directory

  ```bash
   cd path/to/kibana-8.8.2/bin
  ```

- To start kibana execute

```bash
    ./kibana.bat
```

- Open <http://127.0.0.1:5601> and enter enrollment token that you have saved earlier.

- Now enter same username and password that you have used for elasticsearch.
- With Kibana you will be able to access your indexes all at once.

## Step 4

If you wish to clone the directory , then clone the project and add env variables mentioned below and after that do composer update .

- create new laravel project

```bash
    laravel new ElasticSearchDemo
    cd ElasticSearchDemo
```

- In terminal execute

```bash
    composer require laravel/scout
    php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider" 
    composer require babenkoivan/elastic-scout-driver
    php artisan vendor:publish --provider="Elastic\Client\ServiceProvider"  
    php artisan vendor:publish --provider="Elastic\ScoutDriver\ServiceProvider"
    composer require babenkoivan/elastic-scout-driver-plus
```

- Open .env file and add these.

```text
    SCOUT_DRIVER=elastic
    ELASTIC_HOST="https://localhost:9200"
    ELASTIC_USERNAME="elastic"
    ELASTIC_PASSWORD="<password>"
```

- Open scout.php config file and change driver

```text
    'driver' => env('SCOUT_DRIVER', 'elastic'),
```

- Open elastic.client.php config file and add these

```text
    return [
      'default' => env('ELASTIC_CONNECTION', 'default'),
       'connections' => [
          'default' => [
              'hosts' => [
                  env('ELASTIC_HOST', 'localhost:9200'),
              ],
              'basicAuthentication' => [
                  env('ELASTIC_USERNAME'),
                  env('ELASTIC_PASSWORD'),
              ],
              // configure HTTP client (Guzzle by default)
              'httpClientOptions' => [
                  'verify' => false,
              ],
          ],
      ],
    ];
```

## Step 5

- Add model

```bash
    php artisan make:model News -mfc
```

- Open migration file and add these columns

```text
    $table->id();
    $table->text('title')->fulltext();
    $table->text('content')->fulltext();
    $table->text('author')->fulltext();
    $table->timestamps();
```

- Run

```bash
    php artisan migrate
```

- Open NewsFactory.php and add this

```text
    return [
            'title' => fake()->jobTitle(),
            'content' => fake()->unique()->paragraph(),
            'author' => fake()->unique()->name(),
        ];
```

- Add data

```bash
    php artisan tinker
```

```bash
    $news = News::factory(100)->create();
```

- Open News.php model and add this

```text
    <?php

     namespace App\Models;

     use Elastic\ScoutDriverPlus\Searchable;
     use Illuminate\Database\Eloquent\Factories\HasFactory;
     use Illuminate\Database\Eloquent\Model;

     class News extends Model
     {
         use HasFactory, Searchable;

         public function toSearchableArray()
         {
             return [
                 'title'=>(string)$this->title,
                 'content'=>(string)$this->content,
                 'author'=>(string)$this->author,
                 'created_at'=>$this->created_at
             ];
         }
         public function searchableAs()
         {
             return 'news_index'; // name of index for elasticsearch
         }
    
     }
```

- Import data to elastic , this is only required if you have some prior data in your db which isn't   indexed yet. Every new data created will automatically gets indexed to elastic.

```bash
 php artisan scout:import 'App\Models\News'
```

- Add route

```text
    Route::view('search','search');
```

- Add this NewsController.php

```text
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
                   }, News::class)
                   ->requestCache(true)
                   ->execute()
                   ->models();
        
                   return response()->json($results);
           }
       }

```

- Make a view file  search.blade.php and add this

```text
<!DOCTYPE html>
<html>

 <head>
    <title>ElasticSearch Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
 </head>

  <body>
    <h1
        class="text-center my-4 text-3xl font-thin font-mono leading-none tracking-tight text-gray-800 md:text-4xl lg:text-5xl dark:text-white antialised">
        ElasticSearch (<span class="text-blue-600 dark:text-blue-500" id="resultCount">0</span>)
    </h1>

    <form onsubmit="handleSearch(event)" id="search-form"
        class="flex items-center justify-center p-2 bg-white rounded my-0 mx-auto max-w-xl shadow-md">
        <input type="text" name="q" value="" id="s" onkeyup="startSearchTimer()"
            placeholder="Search...">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Search
        </button>
        <select
            class="p-2 rounded bg-white ml-2 border border-blue-400 focus:outline-none focus:ring focus:border-blue-500"
            name="pagination-size" onchange="changePaginationSize()" class="">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </form>
    <div id="loader-container"
        class="hidden fixed top-0 left-0 w-full h-full justify-center items-center z-40 bg-slate-400/[0.3]">
        <div id="loader"
            class="absolute top-[50%] left-[50%] animate-spin h-[50px] w-[50px] rounded-full border-t-4 border-t-[#3498db] border-4 border-white border-opacity-75 ">
        </div>
    </div>
    <hr class="border-0 border-b-2 border-blue-500 w-4/5 my-5 mx-auto">
    <div id="lists" class="list-none m-0 mx-auto p-0 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    </div>  
    {{-- Pagination --}}
    <div title="pagination links" class="flex justify-center mt-5 mb-3" id="pagination-container"></div>

    <script src="{{ asset('js/searchApp.js') }}"></script>
  </body>

</html>
```

- Add css and js folder in public
- Make a js file searchApp.js and this 

```text
    // searchApp.js
class ElasticsearchApp {

    constructor() {

        this.searchTimer = null;
        this.currentPage = 1;
        this.resultsPerPage = 10;
        this.searchData = [];

        //html elements
        this.searchForm = document.getElementById('search-form');
        this.loaderContainer = document.getElementById('loader-container');
        this.lists = document.getElementById('lists');
        this.resultCountElement = document.getElementById('resultCount');
        this.paginationContainer = document.getElementById('pagination-container');
        this.search = document.getElementById('s');
        this.pagination_size = document.querySelector('select[name="pagination-size"]');

        //event listeners
        this.searchForm.addEventListener('submit', (event) => this.handleSearch(event));
        this.search.addEventListener('keyup', () => this.startSearchTimer());
        this.pagination_size.addEventListener('change', () => this.changePaginationSize());

        this.init();
    }

    init() {
        // Initialize the app here, e.g., fetch initial data, set default values, etc.
        this.getData();
    }

    handleSearch(event) {
        event.preventDefault();
        this.currentPage = 1;
        this.getData(this.search.value);
    }

    startSearchTimer() {
        clearTimeout(this.searchTimer);
        this.searchTimer = setTimeout(() => this.fetchDataWithDelay(), 500);
    }

    showLoader() {
        this.loaderContainer.style.display = 'block';
    }

    hideLoader() {
        this.loaderContainer.style.display = 'none';
    }

    fetchDataWithDelay() {
        this.getData(this.search.value);
    }

    generateRandomColor() {
        // Generate random RGB values for the background color
        let r = Math.floor(Math.random() * 256);
        let g = Math.floor(Math.random() * 256);
        let b = Math.floor(Math.random() * 256);
        return `rgb(${r}, ${g}, ${b})`;
    }

    createCard(result) {
        let card = `<div class="card grid grid-cols-1 grid-rows-2 gap-4">
            <div class="p-2 border-r h-14">
                <strong class="text-blue-500 text-xl  font-mono block rounded justify-self-start">${result['title']}</strong>
                <p class="text-gray-600 font-mono ">${result['author']}</p>
            </div>
            <div class="p-2">
                <p class="font-light font-mono">${result['content']}</p>
            </div>
        </div>`;
        return card;    
    }

    updateList() {

        this.lists.innerHTML = ""; // Clear the existing content

        let startIndex = (this.currentPage - 1) * this.resultsPerPage;
        let endIndex = startIndex + this.resultsPerPage;
        let paginatedData = this.searchData.slice(startIndex, endIndex);

        paginatedData.forEach(result => {
            let card = document.createElement("div");
            card.innerHTML = this.createCard(result);
            this.lists.appendChild(card);
        });

        this.updatePagination();
    }

    updatePagination() {

        this.paginationContainer.innerHTML = ""; // Clear previous pagination buttons

        let totalPages = Math.ceil(this.searchData.length / this.resultsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            let button = document.createElement("button");
            button.classList.add("pagination-button");
            button.textContent = i;
            if (i === this.currentPage) {
                button.classList.add("active");
            }
            button.addEventListener("click", () => {
                this.currentPage = i;
                updateList(); // Re-render the list for the selected page
            });
            this.paginationContainer.appendChild(button);
        }
    }

    changePaginationSize() {
        this.resultsPerPage = parseInt(this.pagination_size.value, 10);
        this.currentPage = 1;
        this.updateList();
    }

    getData(search = '') {
        this.showLoader();
        fetch(`http://192.168.29.54:8002/api/search?q=${search}`)
            .then((response) => response.json())
            .then((data) => {
                this.searchData = data;
                this.updateList();
                this.resultCountElement.textContent = data.length;
            })
            .catch((error) => {
                console.error('Error fetching data:', error);
                // Handle errors gracefully if needed
            })
            .finally(() => {
                this.hideLoader();
            });
    }
}

// Instantiate the ElasticsearchApp class when the DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new ElasticsearchApp();
});

```

- Make a css file styles.css

```text
    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

/* Style the Scrollbar (Webkit Browsers Only) */
::-webkit-scrollbar {
    width: 8px;
    /* Width of the scrollbar */
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
    /* Background color of the scrollbar track */
}

::-webkit-scrollbar-thumb {
    background-color: #3498db;
    /* Color of the scrollbar thumb (scroll handle) */
    border-radius: 4px;
    /* Border radius of the scrollbar thumb */
}

::-webkit-scrollbar-thumb:hover {
    background-color: #2980b9;
    /* Color of the scrollbar thumb on hover */
}

::-webkit-scrollbar-thumb:active {
    background-color: #1f618d;
    /* Color of the scrollbar thumb on click */
}

 /* Search Form Styles */

 input[type="text"] {
    flex: 1;
    padding: 10px;
    border: none;
    outline: none;
}

/* Card Styles with Random SVG Background */
.card {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    position: relative;
    /* Required for absolute positioning of background image */
    overflow: hidden;
    /* Hide overflow to prevent image from overflowing */
}

.card::before {
    content: "";
    /* Clear default content */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    z-index: -1;
    opacity: 0.5;
}

.card p {
    margin: 10px 0;
}

/* Pagination Styles */

.pagination-button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    margin: 0 5px;
    border-radius: 5px;
    cursor: pointer;
}

.pagination-button.active {
    background-color: #2980b9;
}
```

- serve the application