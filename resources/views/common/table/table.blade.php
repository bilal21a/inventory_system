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
                    <td><input type="checkbox" class=" check" style="font-size: 20px"></td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td><a href="{{ route('edit_customer') }}"><i class="bi bi-pen"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class=" check" style="font-size: 20px"></td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td><a href="{{ route('edit_customer') }}"><i class="bi bi-pen"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class=" check" style="font-size: 20px"></td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td><a href="{{ route('edit_customer') }}"><i class="bi bi-pen"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class=" check" style="font-size: 20px"></td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td><a href="{{ route('edit_customer') }}"><i class="bi bi-pen"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class=" check" style="font-size: 20px"></td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem, ipsum.</td>
                    <td><a href="{{ route('edit_customer') }}"><i class="bi bi-pen"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
