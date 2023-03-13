<div class="row">
    <div class="col-lg-6 col-sm-12 ">
        <div class="offset-2 pb-5">

            {{-- Item --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">@lang('Item')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="@lang('Specify_item_name')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Item')"
                    autocomplete="off" name="productname" id="productname" />
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Product Code</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_item_name')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="" autocomplete="off"
                    name="productname" id="productname" />
            </div>

            {{-- Sale Price --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class=""> @lang('Sale_Price')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_Sale_Price')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Sale_Price')"
                    autocomplete="off" name="sale_price" id="sale_price" />
            </div>

            {{-- Unit --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="">Purchase Price</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_product_unit')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="Purchase Price"
                    autocomplete="off" name="unit" id="unit" />
            </div>


        </div>
    </div>


    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <a class="btn btn-white btn-active-light-primary me-2">
            @lang('Discard')
        </a>
        <button class="btn btn-primary btn-save">
            <span class="btn-text">@lang('Save_Changes')</span>
            <span class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span>
        </button>
    </div>

</div>
</div>
