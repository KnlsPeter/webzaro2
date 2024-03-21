<header class='bg-white sticky top-0 shadow'>
        <div class='mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8'>
            <div class='flex h-16 items-center justify-between'>
                <div class='md:flex md:items-center md:gap-12'>
                    <a class='block text-teal-600' href='index.php'>
                        <div class='text-3xl font-bold'>SkinCare</div>
                    </a>
                </div>

                <div class='hidden md:block'>
                    <nav aria-label='Global'>
                        <ul class='flex items-center gap-6 text-sm'>
                            <li>
                                <a class='text-gray-500 transition hover:text-gray-500/75' href='/server/blog.html'> Blog </a>
                            </li>

                            <li>
                                <a class='text-gray-500 transition hover:text-gray-500/75' href='#'> Összetevők </a>
                            </li>

                            
                            
                        </ul>
                    </nav>
                </div>

                <div class='flex items-center gap-4'>
                    <div class='sm:flex sm:gap-4'>
                    <?php
                    if (isset($_SESSION['username'])) {
                        
                        echo "<a class='rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow' href='index.php?prog=profil.php'>
          {$_SESSION['username']}
      </a>
      <a class='rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow'
          ' href='index.php?prog=logout.php'>
          Logout
      </a>";
                    } else {
                        echo "<a class='rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow'
            ' href='index.php?prog=login.php'>
            Bejelentkezés
        </a>
        <a class='rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow'
            ' href='index.php?prog=register.php'>
            Regisztráció
        </a>";
                    }
                    ?>
                        
                        </div>
                    </div>

                    <div class='block md:hidden'>
                        <button class='rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75'>
                            <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24'
                                stroke='currentColor' stroke-width='2'>
                                <path stroke-linecap='round' stroke-linejoin='round' d='M4 6h16M4 12h16M4 18h16' />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>