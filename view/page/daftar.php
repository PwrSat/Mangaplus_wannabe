@extends('page.layout')

@section('content')
    <div class="container">
        {{-- isi konten disini ya --}}
        <div class="styles-maincontainer">
            <div class="module-mangalist">
                <div class="module-header">
                    <h1 class="module-title module-title-2">Daftar Manga</h1>
                    <nav class="module-toggle">
                        <ul>
                            <li class="module-toggleitem">
                                <a href="www.google.com" aria-current="page"
                                    class="router-link-exact-active MangaList-module_linkActive_2FFDQ">Semua</a>
                            </li>
                            <li class="module-toggleitem">
                                <a href="/manga_list/hot" class="">Paling Dilihat</a>
                            </li>
                            <li class="module-toggleitem">
                                <a href="/manga_list/updated" class="">Baru</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @php $i=1; @endphp
                @foreach ($mangas as $manga)
                    <div class="title-wrapper">
                        <div class="title-module">
                            <a href="{{route ('page.titles', ['id' => $manga->id])}}" class="all-title">
                              <img class="all-title-image" src="../assets/manga-cover/{{ $manga->cover }}">
                                <div class="all-title-lang">
                                    <span title="English" class="">{{$manga->bahasa}}</span>
                                </div>
                                <p class="title-judul">{{ $manga->title }}</p>
                                <p class="title-author">{{ $manga->author_id }}</p>
                            </a>
                        </div>
                    </div>
                    @php $i++; @endphp
                @endforeach



            </div>
        </div>




    </div>
@endsection
