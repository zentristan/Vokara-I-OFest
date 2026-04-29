<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vokara</title>
    <!-- Icon Website -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="{{ asset('css/RegisterPage.css') }}">
    <!-- Jakarta Plus Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- Outfit Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!-- Cormant Garamound -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/ef1f748698.js" crossorigin="anonymous"></script>
</head>
<section>

</section>

<body class="flex justify-center items-center min-h-screen">
    <section class="w-full max-w-xl px-4">
        <div class="container m-auto">
            <div class="page-choosing-category min-h-40 ">
                <div class="logo-section">
                    <img src="{{ asset('images/fav.png') }}" alt="Vokara Logo" class="logo-image-single mx-auto">
                </div>
                <div class="heading-section">
                    <h2 class="header-choosing-register text-center my-1">Pilih Ingin Mendaftar Menjadi Apa?</h2>
                </div>
                <div class="form-choose-section flex-col justify-center">
                    <div class="grid grid-cols-1">
                        <div class="role-category-card w-full gap-5 flex justify-between items-center" data-role="talenta" onclick="selectRole(this)">
                            <div class="w-90">
                                <i class="fa-solid fa-graduation-cap mb-3" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h4 class="header-card">Saya Talenta, <span class="description-card">Ingin Menambahkan Portfolio</span></h4>
                            </div>
                            <i class="radio-icon fa-regular fa-circle-dot" style="color: rgb(224, 242, 236); font-size: 1.5rem;"></i>
                        </div>
                        <div class="role-category-card w-full gap-5 flex justify-between items-center" data-role="klien" onclick="selectRole(this)">
                            <div>
                                <i class="fa-solid fa-briefcase mb-3" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h4 class="header-card">Saya Klien, <span class="description-card">Ingin Mencari Jasa Untuk Di Pekerjakan</span></h4>
                            </div>
                            <i class="radio-icon fa-regular fa-circle-dot" style="color: rgb(224, 242, 236); font-size: 1.5rem;"></i>
                        </div>
                        <div class="role-category-card w-full gap-5 flex justify-between items-center" data-role="mentor" onclick="selectRole(this)">
                            <div>
                                <i class="fa-solid fa-book-open mb-3" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h4 class="header-card">Saya Mentor, <span class="description-card">Ingin Mendampingi Talenta</span></h4>
                            </div>
                            <i class="radio-icon fa-regular fa-circle-dot" style="color: rgb(224, 242, 236); font-size: 1.5rem;"></i>
                        </div>
                        <button type="submit" id="btn-pilih" class="daftar-submit-button w-full my-5 disabled" onclick="proceed()">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let selectedRole = null;

        function selectRole(card) {
            document.querySelectorAll('.role-category-card').forEach(c => {
                c.classList.remove('selected');
                const icon = c.querySelector('.radio-icon');
                icon.classList.remove('fa-solid');
                icon.classList.add('fa-regular');
            });

            card.classList.add('selected');
            const selectedIcon = card.querySelector('.radio-icon');
            selectedIcon.classList.remove('fa-regular');
            selectedIcon.classList.add('fa-solid');

            selectedRole = card.dataset.role;
            document.getElementById('btn-pilih').classList.remove('disabled');
        }

        function proceed() {
            if (!selectedRole) return;
            window.location.href = "/register/form?role=" + selectedRole;
        }
    </script>
    <script src="{{ asset('js/RegisterPage.js') }}"></script>
</body>

</html>