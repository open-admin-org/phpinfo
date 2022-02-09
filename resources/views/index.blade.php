
    @foreach($info as $name => $section)

        <div class="card">
            <div class="box-header">
                <h3 class="box-title">{!! $name !!}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped php-info-table">
                    <tbody>

                    @foreach ($section as $key => $val)
                        @if (is_a($val, 'Illuminate\Support\Collection'))
                            <tr>
                                <td>{!! $key !!}</td>
                                <td class="phpinfo-v">{!! $val[0] !!}</td>
                                <td>{!! $val[1] !!}</td>
                            </tr>
                        @elseif(is_array($val))
                            <tr>
                                <td>{!! $key !!}</td>
                                <td class="phpinfo-v">{!! $val[0] !!}</td>
                                <td>{!! $val[1] !!}</td>
                            </tr>
                        @elseif(is_string($key))
                            <tr>
                                <td>{!! $key !!}</td>
                                <td class="phpinfo-v">{!! $val !!}</td>
                                <td></td>
                            </tr>
                        @else
                            <tr>
                                <td>{!! $val !!}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    @endforeach


<style>

    .card{
        margin-bottom:1.5rem;
    }

    .box-title{
        padding:1rem 0.75rem 0.5rem 0.75rem;
    }

    .phpinfo-v {
        overflow-x: auto;
        word-wrap: break-word;
        word-break: break-all;
    }

    .php-info-table {
        width:100%;
    }

    .php-info-table tr td{
        width:33%;
        white-space: normal;
    }
</style>