@if ($paginator->hasPages())
    <style>

        .pager {
            padding-left: 0;
            margin: 20px 0;
            text-align: center;
            list-style: none
        }

        .pager li {
            display: inline
        }

        .pager li > a, .pager li > span {
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 15px
        }

        .pager li > a:focus, .pager li > a:hover {
            text-decoration: none;
            background-color: #eee
        }

        .pager .next > a, .pager .next > span {
            float: right
        }

        .pager .previous > a, .pager .previous > span {
            float: left
        }

        .pager .disabled > a, .pager .disabled > a:focus, .pager .disabled > a:hover, .pager .disabled > span {
            color: #777;
            cursor: not-allowed;
            background-color: #fff
        }

    </style>
    <ul class="pager">

        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Prethodna</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Prethodna</a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Sledeca →</a></li>
        @else
            <li class="disabled"><span>Sledeca →</span></li>
        @endif
    </ul>
@endif
