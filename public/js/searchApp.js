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
