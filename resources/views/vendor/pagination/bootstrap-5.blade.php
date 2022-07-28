@if ($paginator->hasPages())
    <div class="row">
        <div class="col-xxl-12">
            <div class="basic-pagination wow fadeInUp text-center mt-20" data-wow-delay=".2s">
                <ul>
                {{-- Previous Page Link --}}
                    <li>
                        <a href="{{ $paginator->previewPageUrl() }}">
                            <i class="arrow_left"><</i>
                        </a>
                    </li>
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active">
                                        <a href="{{ $url }}">
                                            <span>2</span>
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
    @end

