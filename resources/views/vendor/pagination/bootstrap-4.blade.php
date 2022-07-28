@if ($paginator->hasPages())
    <div class="row">
        <div class="col-xxl-12">
            <div class="basic-pagination wow fadeInUp text-center mt-20" data-wow-delay=".2s">
                <ul>
                    {{-- Previous Page Link --}}
                    @if($paginator->onFirstPage())
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <i class="arrow_left"><</i>
                        </a>
                    </li>
                    @endif
                    @foreach ($elements as $element)

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active">
                                        <a href="{{ $url }}">
                                            <span>{{ $page }}</span>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}">
                                            <span>{{ $page }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}">
                            <i class="arrow_right">></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endif

