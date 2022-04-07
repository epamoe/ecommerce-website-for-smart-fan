<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{asset('backend/style.a49749f4fb5cff923e10.css')}}" rel="stylesheet">
</head>

<body class="gm bf hy ys" :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ page: 'dashboard-main', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex ot lq">

        <!-- Sidebar -->
        <div>
            <div class="th tm bg-slate-900 pb nb tec tei wi wf"
                :class="sidebarOpen ? 'bv' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>
            <div id="sidebar"
                class="flex fh tp nb tb tk zq ten ter tek fe ot cr ttn ta uk teg ttg 2xl:!w-64 ap pa va wo wf wc"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
                @keydown.escape.window="sidebarOpen = false" x-cloak="lg">
                <div class="flex fg iv gu jm"> <button class="tec text-slate-500 xv"
                        @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="tc">Close sidebar</span> <svg class="ur oo db" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg> </button> <a class="block" href="index.html"> <svg width="32" height="32"
                            viewBox="0 0 32 32">
                            <defs>
                                <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                    <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#A5B4FC" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                    <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#38BDF8" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                            <path
                                d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                                fill="#4F46E5"></path>
                            <path
                                d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                                fill="url(#logo-a)"></path>
                            <path
                                d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                                fill="url(#logo-b)"></path>
                        </svg> </a> </div>
                <div class="la">
                    <div>
                        <h3 class="gb gq text-slate-500 g_ ga"> <span class="hidden tea ttv 2xl:hidden gp ur"
                                aria-hidden="true">•••</span> <span class="tec ttd 2xl:block">Pages</span> </h3>
                        <ul class="im">
                            <li class="me vg rounded-sm ib wj"
                                :class="{ 'bg-slate-900': page.startsWith('dashboard-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('dashboard-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('dashboard-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu"
                                                    :class="page.startsWith('dashboard-') &amp;&amp; '!text-indigo-500'"
                                                    d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-600'"
                                                    d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-200'"
                                                    d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Dashboard</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'dashboard-main' &amp;&amp; '!text-indigo-500'"
                                                href="index.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Main</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'dashboard-analytics' &amp;&amp; '!text-indigo-500'"
                                                href="analytics.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Analytics</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'dashboard-fintech' &amp;&amp; '!text-indigo-500'"
                                                href="fintech.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Fintech</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj"
                                :class="{ 'bg-slate-900': page.startsWith('ecommerce-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('ecommerce-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('ecommerce-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu"
                                                    :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                                <path class="db bo"
                                                    :class="page.startsWith('ecommerce-') &amp;&amp; '!text-indigo-600'"
                                                    d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                                <path class="db ys"
                                                    :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-500'"
                                                    d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">E-Commerce</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-customers' &amp;&amp; '!text-indigo-500'"
                                                href="customers.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Customers</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-orders' &amp;&amp; '!text-indigo-500'"
                                                href="orders.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Orders</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-invoices' &amp;&amp; '!text-indigo-500'"
                                                href="invoices.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Invoices</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-shop' &amp;&amp; '!text-indigo-500'"
                                                href="shop.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Shop</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-shop-2' &amp;&amp; '!text-indigo-500'"
                                                href="shop-2.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Shop 2</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-product' &amp;&amp; '!text-indigo-500'"
                                                href="product.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Single Product</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-cart' &amp;&amp; '!text-indigo-500'"
                                                href="cart.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-cart-2' &amp;&amp; '!text-indigo-500'"
                                                href="cart-2.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart 2</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'ecommerce-cart-3' &amp;&amp; '!text-indigo-500'"
                                                href="cart-3.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart 3</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="pay.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Pay</span> </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj"
                                :class="{ 'bg-slate-900': page.startsWith('community-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('community-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('community-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys"
                                                    :class="page.startsWith('community-') &amp;&amp; 'text-indigo-500'"
                                                    d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('community-') &amp;&amp; 'text-indigo-300'"
                                                    d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Community</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-tabs' &amp;&amp; '!text-indigo-500'"
                                                href="users-tabs.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Users - Tabs</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-tiles' &amp;&amp; '!text-indigo-500'"
                                                href="users-tiles.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Users - Tiles</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-profile' &amp;&amp; '!text-indigo-500'"
                                                href="profile.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Profile</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-feed' &amp;&amp; '!text-indigo-500'"
                                                href="feed.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Feed</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-forum' &amp;&amp; '!text-indigo-500'"
                                                href="forum.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Forum</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-forum-post' &amp;&amp; '!text-indigo-500'"
                                                href="forum-post.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Forum - Post</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-meetups' &amp;&amp; '!text-indigo-500'"
                                                href="meetups.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Meetups</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'community-meetups-post' &amp;&amp; '!text-indigo-500'"
                                                href="meetups-post.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Meetups - Post</span>
                                            </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('finance-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('finance-'))">
                                <a class="block ya xw ci wr wu"
                                    :class="page.startsWith('finance-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu"
                                                    :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                                </path>
                                                <path class="db bo"
                                                    :class="page.startsWith('finance-') &amp;&amp; '!text-indigo-500'"
                                                    d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-600'"
                                                    d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Finance</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'finance-cards' &amp;&amp; '!text-indigo-500'"
                                                href="credit-cards.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cards</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'finance-transactions' &amp;&amp; '!text-indigo-500'"
                                                href="transactions.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Transactions</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'finance-transaction-details' &amp;&amp; '!text-indigo-500'"
                                                href="transaction-details.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Transaction
                                                    Details</span> </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('job-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('job-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('job-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db bo"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-600'"
                                                    d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-500'"
                                                    d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-300'"
                                                    d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z">
                                                </path>
                                            </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Job
                                                Board</span> </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'job-listing' &amp;&amp; '!text-indigo-500'"
                                                href="job-listing.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Listing</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'job-post' &amp;&amp; '!text-indigo-500'"
                                                href="job-post.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Job Post</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'job-company' &amp;&amp; '!text-indigo-500'"
                                                href="company-profile.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Company
                                                    Profile</span> </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('tasks-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('tasks-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('tasks-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys"
                                                    :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-500'"
                                                    d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                                <path class="db ys"
                                                    :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-500'"
                                                    d="M1 1h22v23H1z"></path>
                                                <path class="db yu"
                                                    :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-300'"
                                                    d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Tasks</span> </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'tasks-kanban' &amp;&amp; '!text-indigo-500'"
                                                href="tasks-kanban.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Kanban</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'tasks-list' &amp;&amp; '!text-indigo-500'"
                                                href="tasks-list.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">List</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'messages' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'messages' &amp;&amp; 'hover--text-slate-200'"
                                    href="messages.html">
                                    <div class="flex items-center fg">
                                        <div class="ad flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys"
                                                    :class="page === 'messages' &amp;&amp; 'text-indigo-500'"
                                                    d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page === 'messages' &amp;&amp; 'text-indigo-300'"
                                                    d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Messages</span>
                                        </div>
                                        <div class="flex ah r_"> <span
                                                class="inline-flex items-center justify-center oy gb gk yo hb v_ rounded">4</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="inbox.html">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys" :class="page === 'inbox' &amp;&amp; 'text-indigo-500'"
                                                d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                            <path class="db yu" :class="page === 'inbox' &amp;&amp; 'text-indigo-300'"
                                                d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z">
                                            </path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Inbox</span>
                                    </div>
                                </a> </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'calendar' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'calendar' &amp;&amp; 'hover--text-slate-200'"
                                    href="calendar.html">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys"
                                                :class="page === 'calendar' &amp;&amp; 'text-indigo-500'"
                                                d="M1 3h22v20H1z"></path>
                                            <path class="db yu"
                                                :class="page === 'calendar' &amp;&amp; 'text-indigo-300'"
                                                d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Calendar</span>
                                    </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'campaigns' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'campaigns' &amp;&amp; 'hover--text-slate-200'"
                                    href="campaigns.html">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys"
                                                :class="page === 'campaigns' &amp;&amp; 'text-indigo-500'"
                                                d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z">
                                            </path>
                                            <path class="db yu"
                                                :class="page === 'campaigns' &amp;&amp; 'text-indigo-300'"
                                                d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z">
                                            </path>
                                        </svg> <span
                                            class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Campaigns</span> </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('settings-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('settings-'))">
                                <a class="block ya xw ci wr wu"
                                    :class="page.startsWith('settings-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys"
                                                    :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'"
                                                    d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'"
                                                    d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'"
                                                    d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'"
                                                    d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Settings</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-account' &amp;&amp; '!text-indigo-500'"
                                                href="settings.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">My Account</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-notifications' &amp;&amp; '!text-indigo-500'"
                                                href="notifications.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">My
                                                    Notifications</span> </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-apps' &amp;&amp; '!text-indigo-500'"
                                                href="connected-apps.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Connected Apps</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-plans' &amp;&amp; '!text-indigo-500'"
                                                href="plans.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Plans</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-billing' &amp;&amp; '!text-indigo-500'"
                                                href="billing.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Billing &amp;
                                                    Invoices</span> </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'settings-feedback' &amp;&amp; '!text-indigo-500'"
                                                href="feedback.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Give Feedback</span>
                                            </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('utility-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('utility-'))">
                                <a class="block ya xw ci wr wu"
                                    :class="page.startsWith('utility-') &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <circle class="db yu"
                                                    :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'"
                                                    cx="18.5" cy="5.5" r="4.5"></circle>
                                                <circle class="db ys"
                                                    :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'"
                                                    cx="5.5" cy="5.5" r="4.5"></circle>
                                                <circle class="db ys"
                                                    :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'"
                                                    cx="18.5" cy="18.5" r="4.5"></circle>
                                                <circle class="db yu"
                                                    :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'"
                                                    cx="5.5" cy="18.5" r="4.5"></circle>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Utility</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-changelog' &amp;&amp; '!text-indigo-500'"
                                                href="changelog.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Changelog</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-roadmap' &amp;&amp; '!text-indigo-500'"
                                                href="roadmap.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Roadmap</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-faqs' &amp;&amp; '!text-indigo-500'"
                                                href="faqs.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">FAQs</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-empty-state' &amp;&amp; '!text-indigo-500'"
                                                href="empty-state.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Empty State</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-404' &amp;&amp; '!text-indigo-500'"
                                                href="404.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">404</span> </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'utility-kb' &amp;&amp; '!text-indigo-500'"
                                                href="knowledge-base.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Knowledge Base</span>
                                            </a> </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="gb gq text-slate-500 g_ ga"> <span class="hidden tea ttv 2xl:hidden gp ur"
                                aria-hidden="true">•••</span> <span class="tec ttd 2xl:block">More</span> </h3>
                        <ul class="im">
                            <li class="me vg rounded-sm ib wj" x-data="{ open: false }"> <a
                                    class="sidebar-expander-link block ya xw wr wu"
                                    :class="open &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                                <path class="db yu" d="M15 12L8 6v5H0v2h8v5z"></path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Authentication</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="signin.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Sign In</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="signup.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Sign up</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="reset-password.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Reset Password</span>
                                            </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" x-data="{ open: false }"> <a
                                    class="sidebar-expander-link block ya xw wr wu"
                                    :class="open &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys"
                                                    d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z">
                                                </path>
                                                <path class="db yu"
                                                    d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Onboarding</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="onboarding-01.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 1</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="onboarding-02.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 2</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="onboarding-03.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 3</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                href="onboarding-04.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 4</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj"
                                :class="{ 'bg-slate-900': page.startsWith('component-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('component-'))"> <a
                                    class="sidebar-expander-link block ya xw wr wu"
                                    :class="open &amp;&amp; 'hover--text-slate-200'" href="#0"
                                    @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <circle class="db ys"
                                                    :class="page.startsWith('component-') &amp;&amp; 'text-indigo-500'"
                                                    cx="16" cy="8" r="8"></circle>
                                                <circle class="db yu"
                                                    :class="page.startsWith('component-') &amp;&amp; 'text-indigo-300'"
                                                    cx="8" cy="16" r="8"></circle>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Components</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf"> <svg
                                                class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }"
                                                viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg> </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-button' &amp;&amp; '!text-indigo-500'"
                                                href="component-button.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Button</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-form' &amp;&amp; '!text-indigo-500'"
                                                href="component-form.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Input Form</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-dropdown' &amp;&amp; '!text-indigo-500'"
                                                href="component-dropdown.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Dropdown</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-alert' &amp;&amp; '!text-indigo-500'"
                                                href="component-alert.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Alert &amp;
                                                    Banner</span> </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-modal' &amp;&amp; '!text-indigo-500'"
                                                href="component-modal.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Modal</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-pagination' &amp;&amp; '!text-indigo-500'"
                                                href="component-pagination.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Pagination</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-tabs' &amp;&amp; '!text-indigo-500'"
                                                href="component-tabs.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Tabs</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-breadcrumb' &amp;&amp; '!text-indigo-500'"
                                                href="component-breadcrumb.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Breadcrumb</span>
                                            </a> </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-badge' &amp;&amp; '!text-indigo-500'"
                                                href="component-badge.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Badge</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-avatar' &amp;&amp; '!text-indigo-500'"
                                                href="component-avatar.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Avatar</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-tooltip' &amp;&amp; '!text-indigo-500'"
                                                href="component-tooltip.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Tooltip</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-accordion' &amp;&amp; '!text-indigo-500'"
                                                href="component-accordion.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Accordion</span> </a>
                                        </li>
                                        <li class="rx wj"> <a class="block yu hover--text-slate-200 wr wu ci"
                                                :class="page === 'component-icons' &amp;&amp; '!text-indigo-500'"
                                                href="component-icons.html"> <span
                                                    class="text-sm gk ttl ttb 2xl:opacity--100 wf">Icons</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gi hidden tel 2xl:hidden justify-end sm">
                    <div class="me vg"> <button @click="sidebarExpanded = !sidebarExpanded"> <span class="tc">Expand /
                                collapse sidebar</span> <svg class="ur oo db kj" viewBox="0 0 24 24">
                                <path class="yu" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z">
                                </path>
                                <path class="ys" d="M3 23H1V1h2z"></path>
                            </svg> </button> </div>
                </div>
            </div>
        </div>

        <!-- Content area -->
        <div class="td flex fh ac ce ct">

            <!-- Site header -->
            <header class="tv tk bg-white cx border-slate-200 ng">
                <div class="vd jd tto">
                    <div class="flex items-center fg op sn">
                        <div class="flex"> <button class="text-slate-500 hover--text-slate-600 tec"
                                @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
                                :aria-expanded="sidebarOpen"> <span class="tc">Open sidebar</span> <svg class="ur oo db"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg> </button> </div>
                        <div class="flex items-center lu">
                            <div x-data="{ searchOpen: false }"> <button
                                    class="uu of flex items-center justify-center hy xl wr wu rounded-full"
                                    :class="{ 'hw': searchOpen }"
                                    @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
                                    aria-controls="search-modal"> <span class="tc">Search</span> <svg class="ue on"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500"
                                            d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z">
                                        </path>
                                        <path class="db yu"
                                            d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z">
                                        </path>
                                    </svg> </button>
                                <div class="th tm bg-slate-900 pb nm wi" x-show="searchOpen"
                                    x-transition:enter="wr wh wf" x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="bv" x-transition:leave="wr wh wa"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" aria-hidden="true"
                                    x-cloak=""></div>
                                <div id="search-modal" class="th tm nm lq flex fd nn rw justify-center fe vd jd"
                                    role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="wr wc wf"
                                    x-transition:enter-start="opacity-0 a_" x-transition:enter-end="bv ax"
                                    x-transition:leave="wr wc wf" x-transition:leave-start="bv ax"
                                    x-transition:leave-end="opacity-0 a_" x-cloak="">
                                    <div class="bg-white lj ai oq ok rounded by" @click.outside="searchOpen = false"
                                        @keydown.escape.window="searchOpen = false">
                                        <form class="cx border-slate-200">
                                            <div class="td"> <label for="modal-search" class="tc">Search</label> <input
                                                    id="modal-search" class="oq cw ks bl fu vm mh mk" type="search"
                                                    placeholder="Search Anything…" x-ref="searchInput"> <button
                                                    class="tp tm tg kp" type="submit" aria-label="Search"> <svg
                                                        class="ue on ap db yu kv ix mr-2" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z">
                                                        </path>
                                                        <path
                                                            d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z">
                                                        </path>
                                                    </svg> </button> </div>
                                        </form>
                                        <div class="mr v_">
                                            <div class="it wj">
                                                <div class="gb g_ yu gq v_ in">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Form Builder - 23 hours on-demand video</span>
                                                        </a> </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Access Mosaic on mobile and TV</span> </a>
                                                    </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Product Update - Q4 2021</span> </a> </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Master Digital Marketing Strategy course</span>
                                                        </a> </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Dedicated forms for products</span> </a> </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z">
                                                                </path>
                                                            </svg> <span>Product Update - Q4 2021</span> </a> </li>
                                                </ul>
                                            </div>
                                            <div class="it wj">
                                                <div class="gb g_ yu gq v_ in">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z">
                                                                </path>
                                                            </svg> <span><span
                                                                    class="gk text-slate-800 kg">Messages</span> -
                                                                Conversation / … / Mike Mills</span> </a> </li>
                                                    <li> <a class="flex items-center vc text-slate-800 xw xh rounded kp"
                                                            href="#0" @click="searchOpen = false"
                                                            @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z">
                                                                </path>
                                                            </svg> <span><span
                                                                    class="gk text-slate-800 kg">Messages</span> -
                                                                Conversation / … / Eva Patrick</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="td inline-flex" x-data="{ open: false }"> <button
                                    class="uu of flex items-center justify-center hy xl wr wu rounded-full"
                                    :class="{ 'hw': open }" aria-haspopup="true" @click.prevent="open = !open"
                                    :aria-expanded="open"> <span class="tc">Notifications</span> <svg class="ue on"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500"
                                            d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z">
                                        </path>
                                        <path class="db yu"
                                            d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z">
                                        </path>
                                    </svg>
                                    <div class="tp tk tw uf oc pr cy ht rounded-full"></div>
                                </button>
                                <div class="am nv tp tq tw ip _l u_ bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv vd">Notifications</div>
                                    <ul>
                                        <li class="cx border-slate-200 wz"> <a class="block vg vd xo" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">📣 <span class="gk text-slate-800">Edit
                                                        your information in a swipe</span> Sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Feb 12, 2021</span> </a> </li>
                                        <li class="cx border-slate-200 wz"> <a class="block vg vd xo" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">📣 <span class="gk text-slate-800">Edit
                                                        your information in a swipe</span> Sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Feb 9, 2021</span> </a> </li>
                                        <li class="cx border-slate-200 wz"> <a class="block vg vd xo" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">🚀<span class="gk text-slate-800">Say
                                                        goodbye to paper receipts!</span> Sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Jan 24, 2020</span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="td inline-flex" x-data="{ open: false }"> <button
                                    class="uu of flex items-center justify-center hy xl wr wu rounded-full"
                                    :class="{ 'hw': open }" aria-haspopup="true" @click.prevent="open = !open"
                                    :aria-expanded="open"> <span class="tc">Info</span> <svg class="ue on"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500"
                                            d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z">
                                        </path>
                                    </svg> </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv me">Need help?</div>
                                    <ul>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <rect y="3" width="12" height="9" rx="1"></rect>
                                                    <path d="M2 0h8v2H2z"></path>
                                                </svg> <span>Documentation</span> </a> </li>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <path
                                                        d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z">
                                                    </path>
                                                </svg> <span>Support Site</span> </a> </li>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0"
                                                @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <path
                                                        d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z">
                                                    </path>
                                                </svg> <span>Contact us</span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="ut oo hw">
                            <div class="td inline-flex" x-data="{ open: false }"> <button
                                    class="inline-flex justify-center items-center kp" aria-haspopup="true"
                                    @click.prevent="open = !open" :aria-expanded="open"> <img class="uu of rounded-full"
                                        src="images/user-avatar-32.png" width="32" height="32" alt="User">
                                    <div class="flex items-center ci"> <span class="ci r_ text-sm gk km">Acme
                                            Inc.</span> <svg class="w-3 h-3 ap rq db yu" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg> </div>
                                </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="mm mv me rx cx border-slate-200">
                                        <div class="gk text-slate-800">Acme Inc.</div>
                                        <div class="gb text-slate-500 gz">Administrator</div>
                                    </div>
                                    <ul>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me"
                                                href="settings.html" @click="open = false" @focus="open = true"
                                                @focusout="open = false">Settings</a> </li>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me"
                                                href="signin.html" @click="open = false" @focus="open = true"
                                                @focusout="open = false">Sign Out</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <div class="vd jd tto vv oq ar ri">

                    <div class="td py va jp rounded-sm lq ry">
                        <div class="tp tw tk sk s_ pointer-events-none hidden tnn" aria-hidden="true"> <svg width="319"
                                height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                        <stop stop-color="#A5B4FC" offset="0%"></stop>
                                        <stop stop-color="#818CF8" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                        <stop stop-color="#4338CA" offset="0%"></stop>
                                        <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="rotate(64 36.592 105.604)">
                                        <mask id="welcome-d" fill="#fff">
                                            <use xlink:href="#welcome-a"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z">
                                        </path>
                                    </g>
                                    <g transform="rotate(-51 91.324 -105.372)">
                                        <mask id="welcome-f" fill="#fff">
                                            <use xlink:href="#welcome-e"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-f)"
                                            d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                    <g transform="rotate(44 61.546 392.623)">
                                        <mask id="welcome-h" fill="#fff">
                                            <use xlink:href="#welcome-g"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-h)"
                                            d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                </g>
                            </svg> </div>
                        <div class="td">
                            <h1 class="gg zj text-slate-800 font-bold rx">Good afternoon, Acme Inc. 👋</h1>
                            <p>Here is what’s happening with your projects today:</p>
                        </div>
                    </div>
                    <div class="_y js jn ry">
                        <ul class="flex flex-wrap justify-center jr ry _a lf si">
                            <li> <a class="block" href="#0"> <img class="uo oa rounded-full" src="images/user-36-01.jpg"
                                        width="36" height="36" alt="User 01"> </a> </li>
                            <li> <a class="block" href="#0"> <img class="uo oa rounded-full" src="images/user-36-02.jpg"
                                        width="36" height="36" alt="User 02"> </a> </li>
                            <li> <a class="block" href="#0"> <img class="uo oa rounded-full" src="images/user-36-03.jpg"
                                        width="36" height="36" alt="User 03"> </a> </li>
                            <li> <a class="block" href="#0"> <img class="uo oa rounded-full" src="images/user-36-04.jpg"
                                        width="36" height="36" alt="User 04"> </a> </li>
                            <li> <button
                                    class="flex justify-center items-center uo oa rounded-full bg-white border border-slate-200 hover--border-slate-300 text-indigo-500 bw wr wu r_">
                                    <span class="tc">Add new user</span> <svg class="ue on db" viewBox="0 0 16 16">
                                        <path
                                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                        </path>
                                    </svg> </button> </li>
                        </ul>
                        <div class="sq fa _j fm ji fy">
                            <div class="td inline-flex" x-data="{ open: false }"> <button
                                    class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600"
                                    aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open"> <span
                                        class="tc">Filter</span><wbr> <svg class="ue on db" viewBox="0 0 16 16">
                                        <path
                                            d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z">
                                        </path>
                                    </svg> </button>
                                <div class="am nv tp tq tb tg jz qe uq bg-white border border-slate-200 mp rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv vd">Filters</div>
                                    <ul class="rw">
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Direct VS
                                                    Indirect</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Real Time
                                                    Value</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Top
                                                    Channels</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Sales VS Refunds</span>
                                            </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Last Order</span> </label>
                                        </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Total Spent</span> </label>
                                        </li>
                                    </ul>
                                    <div class="vg me ck border-slate-200 hq">
                                        <ul class="flex items-center fg">
                                            <li> <button
                                                    class="btn-xs bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">Clear</button>
                                            </li>
                                            <li> <button class="btn-xs hb xs yo" @click="open = false"
                                                    @focusout="open = false">Apply</button> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="td"> <input
                                    class="datepicker tn mf text-slate-500 hover--text-slate-600 gk kn oz"
                                    placeholder="Select dates" data-class="flatpickr-right">
                                <div class="tp tm tg flex items-center pointer-events-none"> <svg
                                        class="ue on db text-slate-500 ml-3" viewBox="0 0 16 16">
                                        <path
                                            d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z">
                                        </path>
                                    </svg> </div>
                            </div> <button class="btn hb xs yo"> <svg class="ue on db bh ap" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Add View</span> </button>
                        </div>
                    </div>

                    <!-- Cards -->
                    <div class="sq ff fb">

                        <!-- Line chart (Acme Plus) -->
                        <div class="flex fh nk _s ttk bg-white by rounded-sm border border-slate-200">
                            <div class="mn gn">
                                <header class="flex fg fd in"> <img src="images/icon-01.svg" width="32" height="32"
                                        alt="Icon 01">
                                    <div class="td inline-flex" x-data="{ open: false }"> <button
                                            class="yu xm rounded-full" :class="{ 'hy text-slate-500': open }"
                                            aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="tc">Menu</span> <svg class="uu of db" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg> </button>
                                        <div class="am nv tp tq tw ae bg-white border border-slate-200 ms rounded by lq iu"
                                            @click.outside="open = false" @keydown.escape.window="open = false"
                                            x-show="open" x-transition:enter="wr wh wf fe"
                                            x-transition:enter-start="opacity-0 aw" x-transition:enter-end="bv ax"
                                            x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                            x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 1</a> </li>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 2</a> </li>
                                                <li> <a class="gk text-sm yl xb flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Remove</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="gx g_ text-slate-800 in">Acme Plus</h2>
                                <div class="gb g_ yu gq rx">Sales</div>
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">$24,780</div>
                                    <div class="text-sm g_ yo mi hk rounded-full">+49%</div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-01" width="389" height="128"></canvas> </div>
                        </div>
                        <!-- Line chart (Acme Advanced) -->
                        <div class="flex fh nk _s ttk bg-white by rounded-sm border border-slate-200">
                            <div class="mn gn">
                                <header class="flex fg fd in"> <img src="images/icon-02.svg" width="32" height="32"
                                        alt="Icon 02">
                                    <div class="td inline-flex" x-data="{ open: false }"> <button
                                            class="yu xm rounded-full" :class="{ 'hy text-slate-500': open }"
                                            aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="tc">Menu</span> <svg class="uu of db" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg> </button>
                                        <div class="am nv tp tq tw ae bg-white border border-slate-200 ms rounded by lq iu"
                                            @click.outside="open = false" @keydown.escape.window="open = false"
                                            x-show="open" x-transition:enter="wr wh wf fe"
                                            x-transition:enter-start="opacity-0 aw" x-transition:enter-end="bv ax"
                                            x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                            x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 1</a> </li>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 2</a> </li>
                                                <li> <a class="gk text-sm yl xb flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Remove</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="gx g_ text-slate-800 in">Acme Advanced</h2>
                                <div class="gb g_ yu gq rx">Sales</div>
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">$17,489</div>
                                    <div class="text-sm g_ yo mi hj rounded-full">-14%</div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-02" width="389" height="128"></canvas> </div>
                        </div>
                        <!-- Line chart (Acme Professional) -->
                        <div class="flex fh nk _s ttk bg-white by rounded-sm border border-slate-200">
                            <div class="mn gn">
                                <header class="flex fg fd in"> <img src="images/icon-03.svg" width="32" height="32"
                                        alt="Icon 03">
                                    <div class="td inline-flex" x-data="{ open: false }"> <button
                                            class="yu xm rounded-full" :class="{ 'hy text-slate-500': open }"
                                            aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="tc">Menu</span> <svg class="uu of db" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg> </button>
                                        <div class="am nv tp tq tw ae bg-white border border-slate-200 ms rounded by lq iu"
                                            @click.outside="open = false" @keydown.escape.window="open = false"
                                            x-show="open" x-transition:enter="wr wh wf fe"
                                            x-transition:enter-start="opacity-0 aw" x-transition:enter-end="bv ax"
                                            x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                            x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 1</a> </li>
                                                <li> <a class="gk text-sm ys xy flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Option 2</a> </li>
                                                <li> <a class="gk text-sm yl xb flex mt me" href="#0"
                                                        @click="open = false" @focus="open = true"
                                                        @focusout="open = false">Remove</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="gx g_ text-slate-800 in">Acme Professional</h2>
                                <div class="gb g_ yu gq rx">Sales</div>
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">$9,962</div>
                                    <div class="text-sm g_ yo mi hk rounded-full">+29%</div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-03" width="389" height="128"></canvas> </div>
                        </div>
                        <!-- Bar chart (Direct vs Indirect) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Direct VS Indirect</h2>
                            </header>
                            <div id="dashboard-card-04-legend" class="mn vm">
                                <ul class="flex flex-wrap"></ul>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-04" width="595" height="248"></canvas> </div>
                        </div>
                        <!-- Line chart (Real Time Value) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp flex items-center">
                                <h2 class="g_ text-slate-800">Real Time Value</h2>
                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true"
                                    @mouseleave="open = false"> <button class="block" aria-haspopup="true"
                                        :aria-expanded="open" @focus="open = true" @focusout="open = false"
                                        @click.prevent=""> <svg class="ue on db yu" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z">
                                            </path>
                                        </svg> </button>
                                    <div class="nv tp tz ne fe ag">
                                        <div class="bg-white border border-slate-200 vf rounded by lq in" x-show="open"
                                            x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 ak"
                                            x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                            x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="gb gp co">Built with <a class="bu" @focus="open = true"
                                                    @focusout="open = false" href="https://www.chartjs.org/"
                                                    target="_blank">Chart.js</a></div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="mn vm">
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2 ye">$<span
                                            id="dashboard-card-05-value">57.81</span></div>
                                    <div id="dashboard-card-05-deviation" class="text-sm g_ yo mi rounded-full"></div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-05" width="595" height="248"></canvas> </div>
                        </div>
                        <!-- Doughnut chart (Top Countries) -->
                        <div class="flex fh nk _s ttk bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Top Countries</h2>
                            </header>
                            <div class="ad flex fh justify-center">
                                <div> <canvas id="dashboard-card-06" width="389" height="260"></canvas> </div>
                                <div id="dashboard-card-06-legend" class="mn gs mc">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>
                        <!-- Table (Top Channels) -->
                        <div class="nk tt_ bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Top Channels</h2>
                            </header>
                            <div class="vf">
                                <div class="lz">
                                    <table class="av oq">
                                        <thead class="gb gq yu hq rounded-sm">
                                            <tr>
                                                <th class="vc">
                                                    <div class="g_ gh">Source</div>
                                                </th>
                                                <th class="vc">
                                                    <div class="g_ gp">Visitors</div>
                                                </th>
                                                <th class="vc">
                                                    <div class="g_ gp">Revenues</div>
                                                </th>
                                                <th class="vc">
                                                    <div class="g_ gp">Sales</div>
                                                </th>
                                                <th class="vc">
                                                    <div class="g_ gp">Conversion</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm gk lg lw">
                                            <tr>
                                                <td class="vc">
                                                    <div class="flex items-center"> <svg class="ap mr-2 _f" width="36"
                                                            height="36" viewBox="0 0 36 36">
                                                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                                                            <path
                                                                d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"
                                                                fill="#FFF"></path>
                                                        </svg>
                                                        <div class="text-slate-800">Github.com</div>
                                                    </div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">2.4K</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yg">$3,877</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">267</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yj">4.7%</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vc">
                                                    <div class="flex items-center"> <svg class="ap mr-2 _f" width="36"
                                                            height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1DA1F2" cx="18" cy="18" r="18"></circle>
                                                            <path
                                                                d="M26 13.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H10c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                                                fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800">Twitter</div>
                                                    </div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">2.2K</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yg">$3,426</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">249</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yj">4.4%</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vc">
                                                    <div class="flex items-center"> <svg class="ap mr-2 _f" width="36"
                                                            height="36" viewBox="0 0 36 36">
                                                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                            <path
                                                                d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18z"
                                                                fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800">Google (organic)</div>
                                                    </div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">2.0K</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yg">$2,444</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">224</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yj">4.2%</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vc">
                                                    <div class="flex items-center"> <svg class="ap mr-2 _f" width="36"
                                                            height="36" viewBox="0 0 36 36">
                                                            <circle fill="#4BC9FF" cx="18" cy="18" r="18"></circle>
                                                            <path
                                                                d="M26 14.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C14 19.9 13.4 15 12 15c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z"
                                                                fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800">Vimeo.com</div>
                                                    </div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">1.9K</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yg">$2,236</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">220</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yj">4.2%</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vc">
                                                    <div class="flex items-center"> <svg class="ap mr-2 _f" width="36"
                                                            height="36" viewBox="0 0 36 36">
                                                            <circle fill="#0E2439" cx="18" cy="18" r="18"></circle>
                                                            <path
                                                                d="M14.232 12.818V23H11.77V12.818h2.46zM15.772 23V12.818h2.462v4.087h4.012v-4.087h2.456V23h-2.456v-4.092h-4.012V23h-2.461z"
                                                                fill="#E6ECF4"></path>
                                                        </svg>
                                                        <div class="text-slate-800">Indiehackers.com</div>
                                                    </div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">1.7K</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yg">$2,034</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp">204</div>
                                                </td>
                                                <td class="vc">
                                                    <div class="gp yj">3.9%</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Line chart (Sales Over Time) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp flex items-center">
                                <h2 class="g_ text-slate-800">Sales Over Time (all stores)</h2>
                            </header>
                            <div class="mn vm">
                                <div class="flex flex-wrap fg fv">
                                    <div class="flex fd">
                                        <div class="text-3xl font-bold text-slate-800 mr-2">$1,482</div>
                                        <div class="text-sm g_ yo mi hj rounded-full">-22%</div>
                                    </div>
                                    <div id="dashboard-card-08-legend" class="ad r_ rx">
                                        <ul class="flex flex-wrap justify-end"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-08" width="595" height="248"></canvas> </div>
                        </div>
                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp flex items-center">
                                <h2 class="g_ text-slate-800">Sales VS Refunds</h2>
                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true"
                                    @mouseleave="open = false"> <button class="block" href="#0" aria-haspopup="true"
                                        :aria-expanded="open" @focus="open = true" @focusout="open = false"
                                        @click.prevent=""> <svg class="ue on db yu" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z">
                                            </path>
                                        </svg> </button>
                                    <div class="nv tp tz ne fe ag">
                                        <div class="at bg-white border border-slate-200 vf rounded by lq in"
                                            x-show="open" x-transition:enter="wr wh wf fe"
                                            x-transition:enter-start="opacity-0 ak" x-transition:enter-end="bv ax"
                                            x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                            x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="text-sm">Sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit.</div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="mn vm">
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">+$6,796</div>
                                    <div class="text-sm g_ yo mi hj rounded-full">-34%</div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-09" width="595" height="248"></canvas> </div>
                        </div>
                        <!-- Card (Recent Activity) -->
                        <div class="nk ttx bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Recent Activity</h2>
                            </header>
                            <div class="vf">
                                <div>
                                    <header class="gb gq yu hq rounded-sm g_ vc">Today</header>
                                    <ul class="rp">
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hb rd rk"> <svg
                                                    class="uo oa db text-indigo-50" viewBox="0 0 36 36">
                                                    <path
                                                        d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">Nick
                                                            Mark</a> mentioned <a class="gk text-slate-800"
                                                            href="#0">Sara Smith</a> in a new post</div>
                                                    <div class="ap lk r_"> <a class="gk text-indigo-500 xd"
                                                            href="#0">View<span class="hidden _g"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap pr rd rk"> <svg class="uo oa db yk"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_">The post <a class="gk text-slate-800" href="#0">Post
                                                            Name</a> was removed by <a class="gk text-slate-800 xk"
                                                            href="#0">Nick Mark</a></div>
                                                    <div class="ap lk r_"> <a class="gk text-indigo-500 xd"
                                                            href="#0">View<span class="hidden _g"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hk rd rk"> <svg class="uo oa db yc"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">Patrick
                                                            Sullivan</a> published a new <a class="gk text-slate-800"
                                                            href="#0">post</a></div>
                                                    <div class="ap lk r_"> <a class="gk text-indigo-500 xd"
                                                            href="#0">View<span class="hidden _g"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <header class="gb gq yu hq rounded-sm g_ vc">Yesterday</header>
                                    <ul class="rp">
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hx rd rk"> <svg class="uo oa db y_"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">240+</a>
                                                        users have subscribed to <a class="gk text-slate-800"
                                                            href="#0">Newsletter #1</a></div>
                                                    <div class="ap lk r_"> <a class="gk text-indigo-500 xd"
                                                            href="#0">View<span class="hidden _g"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hb rd rk"> <svg
                                                    class="uo oa db text-indigo-50" viewBox="0 0 36 36">
                                                    <path
                                                        d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_">The post <a class="gk text-slate-800" href="#0">Post
                                                            Name</a> was suspended by <a class="gk text-slate-800 xk"
                                                            href="#0">Nick Mark</a></div>
                                                    <div class="ap lk r_"> <a class="gk text-indigo-500 xd"
                                                            href="#0">View<span class="hidden _g"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card (Income/Expenses) -->
                        <div class="nk ttx bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Income/Expenses</h2>
                            </header>
                            <div class="vf">
                                <div>
                                    <header class="gb gq yu hq rounded-sm g_ vc">Today</header>
                                    <ul class="rp">
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap pr rd rk"> <svg class="uo oa db yk"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">Qonto</a>
                                                        billing</div>
                                                    <div class="ap lx r_"> <span
                                                            class="gk text-slate-800">-$49.88</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hk rd rk"> <svg class="uo oa db yc"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk"
                                                            href="#0">Cruip.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="ap lx r_"> <span class="gk yg">+249.88</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hk rd rk"> <svg class="uo oa db yc"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">Notion
                                                            Labs Inc</a></div>
                                                    <div class="ap lx r_"> <span class="gk yg">+99.99</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hk rd rk"> <svg class="uo oa db yc"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk" href="#0">Market Cap
                                                            Ltd</a></div>
                                                    <div class="ap lx r_"> <span class="gk yg">+1,200.88</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap hw rd rk"> <svg class="uo oa db yu"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M21.477 22.89l-8.368-8.367a6 6 0 008.367 8.367zm1.414-1.413a6 6 0 00-8.367-8.367l8.367 8.367zM18 26a8 8 0 110-16 8 8 0 010 16z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center cx hp text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk"
                                                            href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="ap lx r_"> <span
                                                            class="gk text-slate-800 ba">+$99.99</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex v_">
                                            <div class="uo oa rounded-full ap pr rd rk"> <svg class="uo oa db yk"
                                                    viewBox="0 0 36 36">
                                                    <path
                                                        d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z">
                                                    </path>
                                                </svg> </div>
                                            <div class="ad flex items-center text-sm vg">
                                                <div class="ad flex fg">
                                                    <div class="l_"><a class="gk text-slate-800 xk"
                                                            href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="ap lx r_"> <span
                                                            class="gk text-slate-800">-$49.88</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </main>

        </div>

    </div>

    <script src="{{asset('backend/main.f640b348fcfd37dfcd91.js')}}"></script>

    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script>
    <script>console.log("%cImportant!", "color: blue; font-size: x-large"); console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script>
    <script>const pagesList = [{ "name": "Dashboard", "url": "https://preview.cruip.com/mosaic/index.html", "active": true }, { "name": "Analytics", "url": "https://preview.cruip.com/mosaic/analytics.html", "active": false }, { "name": "Fintech", "url": "https://preview.cruip.com/mosaic/fintech.html", "active": false }, { "name": "Customers", "url": "https://preview.cruip.com/mosaic/customers.html", "active": false }, { "name": "Orders", "url": "https://preview.cruip.com/mosaic/orders.html", "active": false }, { "name": "Invoices", "url": "https://preview.cruip.com/mosaic/invoices.html", "active": false }, { "name": "Shop", "url": "https://preview.cruip.com/mosaic/shop.html", "active": false }, { "name": "Shop 2", "url": "https://preview.cruip.com/mosaic/shop-2.html", "active": false }, { "name": "Single Product", "url": "https://preview.cruip.com/mosaic/product.html", "active": false }, { "name": "Cart", "url": "https://preview.cruip.com/mosaic/cart.html", "active": false }, { "name": "Cart 2", "url": "https://preview.cruip.com/mosaic/cart-2.html", "active": false }, { "name": "Cart 3", "url": "https://preview.cruip.com/mosaic/cart-3.html", "active": false }, { "name": "Pay", "url": "https://preview.cruip.com/mosaic/pay.html", "active": false }, { "name": "Campaigns", "url": "https://preview.cruip.com/mosaic/campaigns.html", "active": false }, { "name": "Users Tabs", "url": "https://preview.cruip.com/mosaic/users-tabs.html", "active": false }, { "name": "Users Tiles", "url": "https://preview.cruip.com/mosaic/users-tiles.html", "active": false }, { "name": "Profile", "url": "https://preview.cruip.com/mosaic/profile.html", "active": false }, { "name": "Feed", "url": "https://preview.cruip.com/mosaic/feed.html", "active": false }, { "name": "Forum", "url": "https://preview.cruip.com/mosaic/forum.html", "active": false }, { "name": "Forum Post", "url": "https://preview.cruip.com/mosaic/forum-post.html", "active": false }, { "name": "Meetups", "url": "https://preview.cruip.com/mosaic/meetups.html", "active": false }, { "name": "Meetups Post", "url": "https://preview.cruip.com/mosaic/meetups-post.html", "active": false }, { "name": "Cards", "url": "https://preview.cruip.com/mosaic/credit-cards.html", "active": false }, { "name": "Transactions", "url": "https://preview.cruip.com/mosaic/transactions.html", "active": false }, { "name": "Transaction Details", "url": "https://preview.cruip.com/mosaic/transaction-details.html", "active": false }, { "name": "Jobs Listing", "url": "https://preview.cruip.com/mosaic/job-listing.html", "active": false }, { "name": "Jobs Post", "url": "https://preview.cruip.com/mosaic/job-post.html", "active": false }, { "name": "Company Profile", "url": "https://preview.cruip.com/mosaic/company-profile.html", "active": false }, { "name": "Kanban", "url": "https://preview.cruip.com/mosaic/tasks-kanban.html", "active": false }, { "name": "Tasks List", "url": "https://preview.cruip.com/mosaic/tasks-list.html", "active": false }, { "name": "Messages", "url": "https://preview.cruip.com/mosaic/messages.html", "active": false }, { "name": "Inbox", "url": "https://preview.cruip.com/mosaic/inbox.html", "active": false }, { "name": "Calendar", "url": "https://preview.cruip.com/mosaic/calendar.html", "active": false }, { "name": "Applications", "url": "https://preview.cruip.com/mosaic/applications.html", "active": false }, { "name": "My Account", "url": "https://preview.cruip.com/mosaic/settings.html", "active": false }, { "name": "My Notifications", "url": "https://preview.cruip.com/mosaic/notifications.html", "active": false }, { "name": "Connected Apps", "url": "https://preview.cruip.com/mosaic/connected-apps.html", "active": false }, { "name": "Plans", "url": "https://preview.cruip.com/mosaic/plans.html", "active": false }, { "name": "Billing & Invoices", "url": "https://preview.cruip.com/mosaic/billing.html", "active": false }, { "name": "Give Feedback", "url": "https://preview.cruip.com/mosaic/feedback.html", "active": false }, { "name": "Changelog", "url": "https://preview.cruip.com/mosaic/changelog.html", "active": false }, { "name": "Roadmap", "url": "https://preview.cruip.com/mosaic/roadmap.html", "active": false }, { "name": "FAQs", "url": "https://preview.cruip.com/mosaic/faqs.html", "active": false }, { "name": "Empty State", "url": "https://preview.cruip.com/mosaic/empty-state.html", "active": false }, { "name": "Page Not Found", "url": "https://preview.cruip.com/mosaic/404.html", "active": false }, { "name": "Knowledge Base", "url": "https://preview.cruip.com/mosaic/knowledge-base.html", "active": false }, { "name": "Sign in", "url": "https://preview.cruip.com/mosaic/signin.html", "active": false }, { "name": "Sign up", "url": "https://preview.cruip.com/mosaic/signup.html", "active": false }, { "name": "Reset password", "url": "https://preview.cruip.com/mosaic/reset-password.html", "active": false }, { "name": "Onboarding 1", "url": "https://preview.cruip.com/mosaic/onboarding-01.html", "active": false }, { "name": "Onboarding 2", "url": "https://preview.cruip.com/mosaic/onboarding-02.html", "active": false }, { "name": "Onboarding 3", "url": "https://preview.cruip.com/mosaic/onboarding-03.html", "active": false }, { "name": "Onboarding 4", "url": "https://preview.cruip.com/mosaic/onboarding-04.html", "active": false }, { "name": "Button", "url": "https://preview.cruip.com/mosaic/component-button.html", "active": false }, { "name": "Input Form", "url": "https://preview.cruip.com/mosaic/component-form.html", "active": false }, { "name": "Dropdown", "url": "https://preview.cruip.com/mosaic/component-dropdown.html", "active": false }, { "name": "Alert & Banner", "url": "https://preview.cruip.com/mosaic/component-alert.html", "active": false }, { "name": "Modal", "url": "https://preview.cruip.com/mosaic/component-modal.html", "active": false }, { "name": "Pagination", "url": "https://preview.cruip.com/mosaic/component-pagination.html", "active": false }, { "name": "Tabs", "url": "https://preview.cruip.com/mosaic/component-tabs.html", "active": false }, { "name": "Breadcrumb", "url": "https://preview.cruip.com/mosaic/component-breadcrumb.html", "active": false }, { "name": "Badge", "url": "https://preview.cruip.com/mosaic/component-badge.html", "active": false }, { "name": "Avatar", "url": "https://preview.cruip.com/mosaic/component-avatar.html", "active": false }, { "name": "Tooltip", "url": "https://preview.cruip.com/mosaic/component-tooltip.html", "active": false }, { "name": "Accordion", "url": "https://preview.cruip.com/mosaic/component-accordion.html", "active": false }, { "name": "Icons", "url": "https://preview.cruip.com/mosaic/component-icons.html", "active": false }]; if (window != top) { window.parent.postMessage(pagesList, "https://cruip.com") };</script>
</body>

</html>