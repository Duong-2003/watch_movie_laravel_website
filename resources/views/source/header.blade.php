<body>
    <header id="header" class="bg-customGray text-white shadow-lg">
        <div class="container mx-auto px-2 md:px-4 py-4"> <!-- Reduced horizontal padding -->
            <div class="flex items-center justify-between" id="headwrap">
                <!-- Site Title -->
                <div class="flex-1 text-center md:text-left">
                    <p class="site-title text-2xl font-bold flex items-center justify-center ">
                        <img src="{{ asset('faviconlogo.png') }}" alt="Logo" class="h-12">
                    </p>
                </div>

                <!-- Search Form -->
                <div class="flex-1 text-center">
                    <form id="search-form-pc" name="halimForm" role="search" action="https://hoathinh3d.mom/search" method="GET" class="flex justify-center items-center space-x-2">
                        <div class="relative w-full"> <!-- Use full width for input -->
                            <input id="search" type="text" name="s" class="w-full p-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Tìm kiếm..." autocomplete="off" required>
                            <button type="submit" class="absolute right-0 top-0 flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-full hover:bg-blue-500 transition duration-300">
                                <i class="bi bi-search text-lg"></i> <!-- Search icon -->
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Navigation Items -->
                <div class="flex-1 text-center">
                    <div class="nav-items flex justify-center space-x-6"> <!-- Increased space between items for better visibility -->
                        <a href="/lich-su?t=4118ff" class="hover:text-blue-400 transition duration-300 flex items-center">
                            <i class="bi bi-clock-history text-2xl"></i> <!-- Time Icon for History -->
                        </a>
                        <a href="/follow?t=4118ff" class="hover:text-blue-400 transition duration-300 flex items-center">
                            <i class="bi bi-bookmarks text-2xl"></i> <!-- Bookmark Icon -->
                        </a>
                        <a id="custom-open-login-modal" class="hover:text-blue-400 transition duration-300 flex items-center">
                            <i class="bi bi-box-arrow-right text-2xl"></i> <!-- Exit Icon for Login -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

<style>
input#search {
    color:black;
}
    #search-form-pc {
        max-width: 600px; /* Tăng chiều rộng tối đa */
        margin: 20px auto; /* Thêm margin trên và dưới */
        padding: 0 10px; /* Thêm padding ngang */
    }

    #search {
        padding: 14px 18px; /* Tăng padding để input lớn hơn */
        border: 1px solid #d1d5db; /* Border mỏng hơn */
        border-radius: 25px; /* Bo tròn góc nhiều hơn */
        font-size: 20px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    #search:focus {
        border-color: #3b82f6; /* Màu border focus */
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); /* Box shadow focus */
    }

    #search-form-pc button {
        width: 50px; /* Tăng kích thước nút */
        height: 50px;
        background-color: #3b82f6; /* Màu nền nút */
        border-radius: 50%; /* Bo tròn nút */
        transition: background-color 0.3s ease;
    }

    #search-form-pc button:hover {
        background-color: #2563eb; /* Màu nền hover */
    }

    #search-form-pc button i {
        font-size: 22px; /* Tăng kích thước icon */
    }
</style>
</style>
