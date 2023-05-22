<header class="d-flex justify-content-between container">
    <div class="pt-3 pb-3">
        <img src="images/dc-logo.png" alt="">
    </div>
    <ul class="mb-0 d-flex align-items-center gap-4 text-uppercase">
        @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'fans', 'news', 'shop'] as $link)
        <li class="d-flex align-items-center">
            <a class="text-decoration-none" href="">{{ $link }}</a>
        </li>
        @endforeach
    </ul>
</header>

<style lang="scss" scoped>
    header {
        height: 90px;
    }
    img {
        width: 60px;
    }
    li {
        border-bottom: 5px solid transparent;
        height: 100%;

        a {
            font-weight: 600;
            color: black;
            font-size: 1.2rem;
        }

        a:hover {
            color: #0282f9;
        }

        &:hover {

           border-bottom: 5px solid #0282f9 ;

        }
    }
    </style>
