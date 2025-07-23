<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform translate-x-0 bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav"
    id="drawer-navigation"
>
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div
                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                >
                    <svg
                        class="w-5 h-5 text-gray-500 dark:text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        ></path>
                    </svg>
                </div>
                <input
                    type="text"
                    name="search"
                    id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                />
            </div>
        </form>
        <ul class="space-y-2">

            <li>
                <button
                    type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-overview"
                    data-collapse-toggle="dropdown-overview"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>


                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Overview</span
                    >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <ul id="dropdown-overview" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            href="/issue"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    fill-rule="evenodd"
                                    d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z"
                                    clip-rule="evenodd"/>

                            </svg>
                            <span class="ml-3">Issue</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/performance"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="none"
                                viewBox="0 0 22 22"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>

                            </svg>
                            <span class="ml-3">Performance</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button
                    type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-knowledge"
                    data-collapse-toggle="dropdown-knowledge"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                            clip-rule="evenodd"

                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Knowledge</span
                    >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <ul id="dropdown-knowledge" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            href="/categories"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 22 22"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M20 14h-2.722L11 20.278a5.511 5.511 0 0 1-.9.722H20a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM9 3H4a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V4a1 1 0 0 0-1-1ZM6.5 18.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM19.132 7.9 15.6 4.368a1 1 0 0 0-1.414 0L12 6.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>


                            </svg>
                            <span class="ml-3">Category</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/flow_handlings"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                                    clip-rule="evenodd"/>

                            </svg>
                            <span class="ml-3">Flow Handling</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/macros"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 22 22"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3.559 4.544c.355-.35.834-.544 1.33-.544H19.11c.496 0 .975.194 1.33.544.356.35.559.829.559 1.331v9.25c0 .502-.203.981-.559 1.331-.355.35-.834.544-1.33.544H15.5l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.889c-.496 0-.975-.194-1.33-.544A1.868 1.868 0 0 1 3 15.125v-9.25c0-.502.203-.981.559-1.331ZM7.556 7.5a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.556Z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="ml-3">Macro</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button
                    type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-scorecard"
                    data-collapse-toggle="dropdown-scorecard"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z"/>
                        <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z"/>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Score Card</span
                    >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <ul id="dropdown-scorecard" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            href="/scorecard/agent"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="none"
                                viewBox="0 0 22 22"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z"/>
                            </svg>
                            <span class="ml-3">Score Card Agent</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/scorecard/support"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="none"
                                viewBox="0 0 22 22"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z"/>
                            </svg>
                            <span class="ml-3">Score Card Support</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/scorecard/me"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z"/>
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z"/>
                            </svg>
                            <span class="ml-3">My Score Card</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a
                    href="/employees"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            fill-rule="evenodd"
                            d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                            clip-rule="evenodd"/>

                    </svg>
                    <span class="ml-3">Employee</span>
                </a>
            </li>
            <li>
                <a
                    href="/users"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            fill-rule="evenodd"
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                            clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-3">User</span>
                </a>
            </li>
        </ul>
            <ul
                class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"
            >
                <li>
                    <a
                        href="/sampling/create"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                    >
                        <svg
                            aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                clip-rule="evenodd"/>
                            <path
                                fill-rule="evenodd"
                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-3">Sampling</span>
                    </a>
                </li>

            </ul>
    </div>
    <div
        class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20"
    >
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
        >
            <svg
                aria-hidden="true"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"
                ></path>
            </svg>
        </a>
        <a
            href="#"
            data-tooltip-target="tooltip-settings"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
        >
            <svg
                aria-hidden="true"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </a>
        <div
            id="tooltip-settings"
            role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip"
        >
            Settings page
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
            type="button"
            data-dropdown-toggle="language-dropdown"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
        >
            <svg
                aria-hidden="true"
                class="h-5 w-5 rounded-full mt-0.5"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 3900 3900"
            >
                <path fill="#b22234" d="M0 0h7410v3900H0z" />
                <path
                    d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
                    stroke="#fff"
                    stroke-width="300"
                />
                <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                <g fill="#fff">
                    <g id="d">
                        <g id="c">
                            <g id="e">
                                <g id="b">
                                    <path
                                        id="a"
                                        d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"
                                    />
                                    <use xlink:href="#a" y="420" />
                                    <use xlink:href="#a" y="840" />
                                    <use xlink:href="#a" y="1260" />
                                </g>
                                <use xlink:href="#a" y="1680" />
                            </g>
                            <use xlink:href="#b" x="247" y="210" />
                        </g>
                        <use xlink:href="#c" x="494" />
                    </g>
                    <use xlink:href="#d" x="988" />
                    <use xlink:href="#c" x="1976" />
                    <use xlink:href="#e" x="2470" />
                </g>
            </svg>
        </button>
        <!-- Dropdown -->
        <div
            class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
            id="language-dropdown"
        >
            <ul class="py-1" role="none">
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
                        role="menuitem"
                    >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-us"
                                viewBox="0 0 512 512"
                            >
                                <g fill-rule="evenodd">
                                    <g stroke-width="1pt">
                                        <path
                                            fill="#bd3d44"
                                            d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                            transform="scale(3.9385)"
                                        />
                                        <path
                                            fill="#fff"
                                            d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                            transform="scale(3.9385)"
                                        />
                                    </g>
                                    <path
                                        fill="#192f5d"
                                        d="M0 0h98.8v70H0z"
                                        transform="scale(3.9385)"
                                    />
                                    <path
                                        fill="#fff"
                                        d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                        transform="scale(3.9385)"
                                    />
                                </g>
                            </svg>
                            English (US)
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
                        role="menuitem"
                    >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-de"
                                viewBox="0 0 512 512"
                            >
                                <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                <path d="M0 0h512v170.7H0z" />
                                <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                            </svg>
                            Deutsch
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
                        role="menuitem"
                    >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-it"
                                viewBox="0 0 512 512"
                            >
                                <g fill-rule="evenodd" stroke-width="1pt">
                                    <path fill="#fff" d="M0 0h512v512H0z" />
                                    <path fill="#009246" d="M0 0h170.7v512H0z" />
                                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                </g>
                            </svg>
                            Italiano
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
                        role="menuitem"
                    >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="flag-icon-css-cn"
                                viewBox="0 0 512 512"
                            >
                                <defs>
                                    <path
                                        id="a"
                                        fill="#ffde00"
                                        d="M1-.3L-.7.8 0-1 .6.8-1-.3z"
                                    />
                                </defs>
                                <path fill="#de2910" d="M0 0h512v512H0z" />
                                <use
                                    width="30"
                                    height="20"
                                    transform="matrix(76.8 0 0 76.8 128 128)"
                                    xlink:href="#a"
                                />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-121 142.6 -47) scale(25.5827)"
                                    xlink:href="#a"
                                />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-98.1 198 -82) scale(25.6)"
                                    xlink:href="#a"
                                />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-74 272.4 -114) scale(25.6137)"
                                    xlink:href="#a"
                                />
                                <use
                                    width="30"
                                    height="20"
                                    transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                    xlink:href="#a"
                                />
                            </svg>
                            中文 (繁體)
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>


{{--<aside--}}
{{--    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 + transition-transform translate-x-0 bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"--}}
{{--    aria-label="Sidenav"--}}
{{--    id="sidebar"--}}
{{--    id="drawer-navigation"--}}
{{-->--}}
{{--    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">--}}
{{--        <form action="#" method="GET" class="md:hidden mb-2">--}}
{{--            <label for="sidebar-search" class="sr-only">Search</label>--}}
{{--            <div class="relative">--}}
{{--                <div--}}
{{--                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        class="w-5 h-5 text-gray-500 dark:text-gray-400"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            clip-rule="evenodd"--}}
{{--                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"--}}
{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    name="search"--}}
{{--                    id="sidebar-search"--}}
{{--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"--}}
{{--                    placeholder="Search"--}}
{{--                />--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <ul class="space-y-2">--}}

{{--            <li>--}}
{{--                <button--}}
{{--                    type="button"--}}
{{--                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"--}}
{{--                    aria-controls="dropdown-overview"--}}
{{--                    data-collapse-toggle="dropdown-overview"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>--}}
{{--                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>--}}
{{--                    </svg>--}}


{{--                    <span class="flex-1 ml-3 text-left whitespace-nowrap"--}}
{{--                    >Overview</span--}}
{{--                    >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                            clip-rule="evenodd"--}}
{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--                <ul id="dropdown-overview" class="hidden py-2 space-y-2">--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/issue"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="currentColor"--}}
{{--                                viewBox="0 0 20 20"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}

{{--                                <path--}}
{{--                                    fill-rule="evenodd"--}}
{{--                                    d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z"--}}
{{--                                    clip-rule="evenodd"/>--}}

{{--                            </svg>--}}
{{--                            <span class="ml-3">Issue</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/performance"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="none"--}}
{{--                                viewBox="0 0 22 22"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}

{{--                                <path--}}
{{--                                    stroke="currentColor"--}}
{{--                                    stroke-linecap="round"--}}
{{--                                    stroke-linejoin="round"--}}
{{--                                    stroke-width="2"--}}
{{--                                    d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>--}}

{{--                            </svg>--}}
{{--                            <span class="ml-3">Performance</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <button--}}
{{--                    type="button"--}}
{{--                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"--}}
{{--                    aria-controls="dropdown-knowledge"--}}
{{--                    data-collapse-toggle="dropdown-knowledge"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 24 24"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"--}}
{{--                            clip-rule="evenodd"--}}

{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                    <span class="flex-1 ml-3 text-left whitespace-nowrap"--}}
{{--                    >Knowledge</span--}}
{{--                    >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                            clip-rule="evenodd"--}}
{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--                <ul id="dropdown-knowledge" class="hidden py-2 space-y-2">--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/categories"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="currentColor"--}}
{{--                                viewBox="0 0 22 22"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    d="M20 14h-2.722L11 20.278a5.511 5.511 0 0 1-.9.722H20a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM9 3H4a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V4a1 1 0 0 0-1-1ZM6.5 18.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM19.132 7.9 15.6 4.368a1 1 0 0 0-1.414 0L12 6.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>--}}


{{--                            </svg>--}}
{{--                            <span class="ml-3">Category</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/flow_handlings"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="currentColor"--}}
{{--                                viewBox="0 0 20 20"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill-rule="evenodd"--}}
{{--                                    d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"--}}
{{--                                    clip-rule="evenodd"/>--}}

{{--                            </svg>--}}
{{--                            <span class="ml-3">Flow Handling</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/macros"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="currentColor"--}}
{{--                                viewBox="0 0 22 22"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill-rule="evenodd"--}}
{{--                                    d="M3.559 4.544c.355-.35.834-.544 1.33-.544H19.11c.496 0 .975.194 1.33.544.356.35.559.829.559 1.331v9.25c0 .502-.203.981-.559 1.331-.355.35-.834.544-1.33.544H15.5l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.889c-.496 0-.975-.194-1.33-.544A1.868 1.868 0 0 1 3 15.125v-9.25c0-.502.203-.981.559-1.331ZM7.556 7.5a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.556Z"--}}
{{--                                    clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-3">Macro</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <button--}}
{{--                    type="button"--}}
{{--                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"--}}
{{--                    aria-controls="dropdown-scorecard"--}}
{{--                    data-collapse-toggle="dropdown-scorecard"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z"/>--}}
{{--                        <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z"/>--}}
{{--                    </svg>--}}
{{--                    <span class="flex-1 ml-3 text-left whitespace-nowrap"--}}
{{--                    >Score Card</span--}}
{{--                    >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 24 24"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                            clip-rule="evenodd"--}}
{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--                <ul id="dropdown-scorecard" class="hidden py-2 space-y-2">--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/scorecard/agent"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="none"--}}
{{--                                viewBox="0 0 22 22"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                 <path--}}
{{--                                     stroke="currentColor"--}}
{{--                                     stroke-linecap="round"--}}
{{--                                     stroke-linejoin="round"--}}
{{--                                     stroke-width="1.5"--}}
{{--                                     d="M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z"/>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-3">Score Card Agent</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/scorecard/support"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="none"--}}
{{--                                viewBox="0 0 22 22"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    stroke="currentColor"--}}
{{--                                    stroke-linecap="round"--}}
{{--                                    stroke-linejoin="round"--}}
{{--                                    stroke-width="1.5"--}}
{{--                                    d="M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z"/>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-3">Score Card Support</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a--}}
{{--                            href="/scorecard/me"--}}
{{--                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                        >--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                                fill="currentColor"--}}
{{--                                viewBox="0 0 20 20"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z"/>--}}
{{--                                <path--}}
{{--                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z"/>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-3">My Score Card</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a--}}
{{--                    href="/employees"--}}
{{--                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}

{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"--}}
{{--                            clip-rule="evenodd"/>--}}

{{--                    </svg>--}}
{{--                    <span class="ml-3">Employee</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a--}}
{{--                    href="/users"--}}
{{--                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}

{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"--}}
{{--                            clip-rule="evenodd"/>--}}
{{--                    <span class="ml-3">User</span>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <ul--}}
{{--            class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"--}}
{{--        >--}}
{{--            <li>--}}
{{--                <a--}}
{{--                    href="/sampling/create"--}}
{{--                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        aria-hidden="true"--}}
{{--                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 24 24"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"--}}
{{--                            clip-rule="evenodd"/>--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"--}}
{{--                            clip-rule="evenodd"/>--}}
{{--                    </svg>--}}
{{--                    <span class="ml-3">Sampling</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--    <div--}}
{{--        class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20"--}}
{{--    >--}}
{{--        <a--}}
{{--            href="#"--}}
{{--            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"--}}
{{--        >--}}
{{--            <svg--}}
{{--                aria-hidden="true"--}}
{{--                class="w-6 h-6"--}}
{{--                fill="currentColor"--}}
{{--                viewBox="0 0 20 20"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--            >--}}
{{--                <path--}}
{{--                    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"--}}
{{--                ></path>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <a--}}
{{--            href="#"--}}
{{--            data-tooltip-target="tooltip-settings"--}}
{{--            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"--}}
{{--        >--}}
{{--            <svg--}}
{{--                aria-hidden="true"--}}
{{--                class="w-6 h-6"--}}
{{--                fill="currentColor"--}}
{{--                viewBox="0 0 20 20"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--            >--}}
{{--                <path--}}
{{--                    fill-rule="evenodd"--}}
{{--                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"--}}
{{--                    clip-rule="evenodd"--}}
{{--                ></path>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <div--}}
{{--            id="tooltip-settings"--}}
{{--            role="tooltip"--}}
{{--            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip"--}}
{{--        >--}}
{{--            Settings page--}}
{{--            <div class="tooltip-arrow" data-popper-arrow></div>--}}
{{--        </div>--}}
{{--        <button--}}
{{--            type="button"--}}
{{--            data-dropdown-toggle="language-dropdown"--}}
{{--            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"--}}
{{--        >--}}
{{--            <svg--}}
{{--                aria-hidden="true"--}}
{{--                class="h-5 w-5 rounded-full mt-0.5"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                viewBox="0 0 3900 3900"--}}
{{--            >--}}
{{--                <path fill="#b22234" d="M0 0h7410v3900H0z" />--}}
{{--                <path--}}
{{--                    d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"--}}
{{--                    stroke="#fff"--}}
{{--                    stroke-width="300"--}}
{{--                />--}}
{{--                <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />--}}
{{--                <g fill="#fff">--}}
{{--                    <g id="d">--}}
{{--                        <g id="c">--}}
{{--                            <g id="e">--}}
{{--                                <g id="b">--}}
{{--                                    <path--}}
{{--                                        id="a"--}}
{{--                                        d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"--}}
{{--                                    />--}}
{{--                                    <use xlink:href="#a" y="420" />--}}
{{--                                    <use xlink:href="#a" y="840" />--}}
{{--                                    <use xlink:href="#a" y="1260" />--}}
{{--                                </g>--}}
{{--                                <use xlink:href="#a" y="1680" />--}}
{{--                            </g>--}}
{{--                            <use xlink:href="#b" x="247" y="210" />--}}
{{--                        </g>--}}
{{--                        <use xlink:href="#c" x="494" />--}}
{{--                    </g>--}}
{{--                    <use xlink:href="#d" x="988" />--}}
{{--                    <use xlink:href="#c" x="1976" />--}}
{{--                    <use xlink:href="#e" x="2470" />--}}
{{--                </g>--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--        <!-- Dropdown -->--}}
{{--        <div--}}
{{--            class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"--}}
{{--            id="language-dropdown"--}}
{{--        >--}}
{{--            <ul class="py-1" role="none">--}}
{{--                <li>--}}
{{--                    <a--}}
{{--                        href="#"--}}
{{--                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"--}}
{{--                        role="menuitem"--}}
{{--                    >--}}
{{--                        <div class="inline-flex items-center">--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="h-3.5 w-3.5 rounded-full mr-2"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                id="flag-icon-css-us"--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                            >--}}
{{--                                <g fill-rule="evenodd">--}}
{{--                                    <g stroke-width="1pt">--}}
{{--                                        <path--}}
{{--                                            fill="#bd3d44"--}}
{{--                                            d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"--}}
{{--                                            transform="scale(3.9385)"--}}
{{--                                        />--}}
{{--                                        <path--}}
{{--                                            fill="#fff"--}}
{{--                                            d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"--}}
{{--                                            transform="scale(3.9385)"--}}
{{--                                        />--}}
{{--                                    </g>--}}
{{--                                    <path--}}
{{--                                        fill="#192f5d"--}}
{{--                                        d="M0 0h98.8v70H0z"--}}
{{--                                        transform="scale(3.9385)"--}}
{{--                                    />--}}
{{--                                    <path--}}
{{--                                        fill="#fff"--}}
{{--                                        d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"--}}
{{--                                        transform="scale(3.9385)"--}}
{{--                                    />--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                            English (US)--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a--}}
{{--                        href="#"--}}
{{--                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"--}}
{{--                        role="menuitem"--}}
{{--                    >--}}
{{--                        <div class="inline-flex items-center">--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="h-3.5 w-3.5 rounded-full mr-2"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                id="flag-icon-css-de"--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                            >--}}
{{--                                <path fill="#ffce00" d="M0 341.3h512V512H0z" />--}}
{{--                                <path d="M0 0h512v170.7H0z" />--}}
{{--                                <path fill="#d00" d="M0 170.7h512v170.6H0z" />--}}
{{--                            </svg>--}}
{{--                            Deutsch--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a--}}
{{--                        href="#"--}}
{{--                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"--}}
{{--                        role="menuitem"--}}
{{--                    >--}}
{{--                        <div class="inline-flex items-center">--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="h-3.5 w-3.5 rounded-full mr-2"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                id="flag-icon-css-it"--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                            >--}}
{{--                                <g fill-rule="evenodd" stroke-width="1pt">--}}
{{--                                    <path fill="#fff" d="M0 0h512v512H0z" />--}}
{{--                                    <path fill="#009246" d="M0 0h170.7v512H0z" />--}}
{{--                                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                            Italiano--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a--}}
{{--                        href="#"--}}
{{--                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"--}}
{{--                        role="menuitem"--}}
{{--                    >--}}
{{--                        <div class="inline-flex items-center">--}}
{{--                            <svg--}}
{{--                                aria-hidden="true"--}}
{{--                                class="h-3.5 w-3.5 rounded-full mr-2"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                id="flag-icon-css-cn"--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                            >--}}
{{--                                <defs>--}}
{{--                                    <path--}}
{{--                                        id="a"--}}
{{--                                        fill="#ffde00"--}}
{{--                                        d="M1-.3L-.7.8 0-1 .6.8-1-.3z"--}}
{{--                                    />--}}
{{--                                </defs>--}}
{{--                                <path fill="#de2910" d="M0 0h512v512H0z" />--}}
{{--                                <use--}}
{{--                                    width="30"--}}
{{--                                    height="20"--}}
{{--                                    transform="matrix(76.8 0 0 76.8 128 128)"--}}
{{--                                    xlink:href="#a"--}}
{{--                                />--}}
{{--                                <use--}}
{{--                                    width="30"--}}
{{--                                    height="20"--}}
{{--                                    transform="rotate(-121 142.6 -47) scale(25.5827)"--}}
{{--                                    xlink:href="#a"--}}
{{--                                />--}}
{{--                                <use--}}
{{--                                    width="30"--}}
{{--                                    height="20"--}}
{{--                                    transform="rotate(-98.1 198 -82) scale(25.6)"--}}
{{--                                    xlink:href="#a"--}}
{{--                                />--}}
{{--                                <use--}}
{{--                                    width="30"--}}
{{--                                    height="20"--}}
{{--                                    transform="rotate(-74 272.4 -114) scale(25.6137)"--}}
{{--                                    xlink:href="#a"--}}
{{--                                />--}}
{{--                                <use--}}
{{--                                    width="30"--}}
{{--                                    height="20"--}}
{{--                                    transform="matrix(16 -19.968 19.968 16 256 230.4)"--}}
{{--                                    xlink:href="#a"--}}
{{--                                />--}}
{{--                            </svg>--}}
{{--                            中文 (繁體)--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</aside>--}}

{{--<div class="sidebar">--}}
{{--    <!-- Sidebar user panel (optional) -->--}}
{{--    <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--        <div class="image">--}}
{{--            <img src="{{asset('dashboardtemplate/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
{{--        </div>--}}
{{--        <div class="info">--}}
{{--            <a href="/profile" class="d-block">{{ Auth::user()->name }}</a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- SidebarSearch Form -->--}}
{{--    <div class="form-inline">--}}
{{--        <div class="input-group" data-widget="sidebar-search">--}}
{{--            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-sidebar">--}}
{{--                    <i class="fas fa-search fa-fw"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Menu -->--}}
{{--    <nav class="mt-2">--}}
{{--        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">--}}
{{--            <!-- Add icons to the links using the .nav-icon class--}}
{{--                 with font-awesome or any other icon font library -->--}}
{{--            <li class="nav-item menu-open">--}}
{{--                <a href="#" class="nav-link active">--}}
{{--                    <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                    <p>--}}
{{--                        Dashboard--}}
{{--                        <i class="right fas fa-angle-left"></i>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="/issue" class="nav-link active">--}}
{{--                            <i class="fas fa-chart-pie nav-icon"></i>--}}
{{--                            <p>Issue</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="/performance" class="nav-link">--}}
{{--                            <i class="far fa-chart-bar nav-icon"></i>--}}
{{--                            <p>Performance</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                    <i class="nav-icon fas fa-th"></i>--}}
{{--                    <p>--}}
{{--                        Knowledge Menu--}}
{{--                        <i class="fas fa-angle-left right"></i>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="/categories" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Category</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="/flow_handlings" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Flow Handling</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="/macros" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Macro</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="/employees" class="nav-link">--}}
{{--                    <i class="nav-icon fas fa-user-friends"></i>--}}
{{--                    <p>--}}
{{--                        Employee Data--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                    <i class="nav-icon fas fa-table"></i>--}}
{{--                    <p>--}}
{{--                        Score Card--}}
{{--                        <i class="right fas fa-angle-left"></i>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="scorecard/agent" class="nav-link">--}}
{{--                            <i class="fas fa-chalkboard-teacher nav-icon"></i>--}}
{{--                            <p>Score Card Agent</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="scorecard/support" class="nav-link">--}}
{{--                            <i class="fas fa-chalkboard-teacher nav-icon"></i>--}}
{{--                            <p>Score Card Support</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="scorecard/my" class="nav-link">--}}
{{--                            <i class="far fa-user nav-icon"></i>--}}
{{--                            <p>My Score Card</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="/sampling/create" class="nav-link">--}}
{{--                    <i class="nav-icon fas fa-edit"></i>--}}
{{--                    <p>--}}
{{--                        Form Sampling--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--    <!-- /.sidebar-menu -->--}}
{{--</div>--}}
