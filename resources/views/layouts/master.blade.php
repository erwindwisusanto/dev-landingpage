<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dengue - Cepat Sehat</title>

    <!-- icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
        integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.svg') }}">

    <!-- fontello -->
    <link rel="stylesheet" href="{{ asset('assets/fontello/css/csehat.css') }}">

    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <x-navbar />

    {{ $slot }}

    <x-btn-float />
    <x-footer />

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
            tooltipTriggerEl));

        const baseUrl = "{{ request()->root() }}";
        const campaignName = "{{ request()->query('camp') }}";

        const visitCounter = async () => {
            const today = new Date().toISOString().split('T')[0];
            const storageKey = `page_view_${campaignName || 'root'}_${today}`;

            const yesterday = new Date();
            yesterday.setDate(yesterday.getDate() - 1);
            const lastVisitDate = yesterday.toISOString().split('T')[0];

            const dateKey = `page_view_${campaignName || 'root'}_${lastVisitDate}`;
            const LSYesterday = localStorage.getItem(dateKey);

            if (LSYesterday) {
                localStorage.removeItem(dateKey);
            }

            var counterContainer = $(".website-counter");
            var visitCount = localStorage.getItem(storageKey);

            if (visitCount) {
                visitCount = Number(visitCount) + 1;
                localStorage.setItem(storageKey, visitCount);
            } else {
                visitCount = 1;
                localStorage.setItem(storageKey, 1);
            }
            counterContainer.text(visitCount);

            const response = await $.ajax({
                url: '{{ route('visit-count') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    count: visitCount,
                    url: baseUrl,
                    campaign: campaignName,
                    source: "dengue",
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Visit count saved successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error saving visit count:', error);
                }
            });
        }


        $('.whatsapp-link').on('click', function(e) {
            e.preventDefault();
            const url = $(this).attr('href');
            const platform = "whatsapp";
            updateCounter(campaignName, platform);
            window.open(url, '_blank');
        });

        $('.telegram-link').on('click', function(e) {
            e.preventDefault();
            const url = $(this).attr('href');
            const platform = "telegram";
            updateCounter(campaignName, platform);
            window.open(url, '_blank');
        });

        const updateCounter = async (campaign, platform) => {
            try {
                campaignValid = campaign === "" ? "root": campaign;
                const storageKey = `click_counter_${campaignValid}_${platform}`;

                let clickCount = localStorage.getItem(storageKey);

                clickCount = clickCount ? Number(clickCount) + 1 : 1;

                localStorage.setItem(storageKey, clickCount);

                const response =  await $.ajax({
                    url: '{{ route("click-count") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        count: clickCount,
                        campaign: campaign,
                        platform: platform,
                        source: "dengue"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                console.log('Click count saved successfully');
            } catch (error) {
                console.error('Error saving click count:', error);
                throw error;
            }
        }

        $(document).ready(function() {
            visitCounter();
            new Swiper('.swiper-article', {
                loop: true,
                slidesPerView: 3,
                centeredSlides: true,
                spaceBetween: 6,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1.5
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 2.5,
                    },

                    // when window width is >= 640px
                    768: {
                        slidesPerView: 3.5
                    }
                }
            });

            $('.hero-banner').find('a').click(function() {
                var $href = $(this).attr('href');
                var $anchor = $($href).offset();
                var offsetValue = 100;
                $('html, body').animate({
                    scrollTop: $anchor.top - offsetValue
                }, 1000); // added duration for smooth scrolling
                return false;
            });
        });

        window.addEventListener('beforeunload', function(e) {
            navigator.sendBeacon('/destroy-session');
        });
    </script>

</body>

</html>
