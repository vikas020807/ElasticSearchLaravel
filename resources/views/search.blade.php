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
