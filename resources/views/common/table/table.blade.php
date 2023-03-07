<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="{{ $tableName }}" class="data-table nowrap hover dataTable no-footer w-100" role="grid">
            <thead>
                <tr role="row">
                    @foreach ($tableData as $data)
                        @if ($data == 'delete_btn')
                            <th><button class="btn btn-primary delete_all">Delete </button></th>
                        @else
                            <th class="text-muted text-small text-uppercase">{{ __($data) }}</th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
