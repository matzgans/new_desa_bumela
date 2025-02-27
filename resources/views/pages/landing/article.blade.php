<x-landing-layout>
    <div class="mt-28 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Artikel Desa <span class="text-black">{{ config('app.name') }}
            </span>
        </h1>
        <p class="my-5 text-gray-500 lg:px-96">
            {{ $content->artikel }}
        </p>
        <div class="flex flex-wrap justify-center gap-4 lg:mx-52" id="article-list">
            @foreach ($articles as $article)
                <div
                    class="flex max-w-sm flex-col rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                    <a href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                        <img class="h-96 w-full rounded-t-lg object-cover"
                            src="{{ asset('article/thumb/' . $article->thumbnail) }}" alt="{{ $article->title }}" />
                    </a>
                    <div class="flex flex-grow flex-col text-wrap p-5 text-start">
                        <a href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                            <h5
                                class="mb-2 min-h-[3rem] text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $article->title }}
                            </h5>
                            <p class="mb-2 font-light tracking-tight text-gray-900 dark:text-white">
                                {{ $article->created_at }}
                            </p>
                        </a>
                        <p class="mb-3 flex-grow font-normal text-gray-700 dark:text-gray-400">
                            {{ Str::limit($article->content, 100) }}
                        </p>
                        <a class="mt-auto inline-flex items-center rounded-lg bg-primary px-3 py-2 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-primary dark:hover:bg-primary dark:focus:ring-blue-800"
                            href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                            Baca Selengkapnya
                            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $articles->links('vendor.pagination.tailwind') }}

</x-landing-layout>
