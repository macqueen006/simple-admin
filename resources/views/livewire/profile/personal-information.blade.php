<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                {{--                    <h5 class="text-dark font-weight-bold my-1 mr-5">Profile 1</h5>--}}
                <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted">Apps</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('profile') }}" class="text-muted">Profile</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">Personal Information</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                <!--end::Actions-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                     data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:../../../../assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path
                                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path
                                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                            fill="#000000"></path>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                   data-placement="right" title="" data-original-title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-text">
															<span
                                                                class="label label-xl label-inline label-light-success">Customer</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-text">
															<span
                                                                class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-text">
															<span
                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-text">
															<span
                                                                class="label label-xl label-inline label-light-primary">Member</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    {{--    @if($success)--}}
    <div class="container">

    </div>
{{--@endif--}}
<!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px">
                    <!--begin::Profile Card-->
                   <livewire:profile.profilecard />
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <form class="form" wire:submit.prevent="dispatchInfo">
                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch">
                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                    <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
                                </div>
                                <div class="card-toolbar">

                                <span class="px-4 pt-2 text-muted"
                                      x-data="{ open : false}"
                                      x-init="
                                      @this.on('notify-saved', () => {
                                       setTimeout(() => { open = false }, 2500 );
                                       open = true;
                                      })"
                                      x-ref="this"
                                      style="display: none"
                                      x-show.transition.out.duration.1000ms="open"
                                >saved !!!</span>

                                    <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                    <div wire:ignore
                                         x-data x-init="
                                         FilePond.registerPlugin(FilePondPluginImagePreview);
                                         FilePond.create($refs.input)
                                         FilePond.setOptions({
                                         server: {
                                         process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                         @this.upload('newAvatar', file, load, error, progress)
                                         },
                                         revert: (filename, load, error) => {
                                         @this.removeUpload('newAvatar', filename, load )
                                         }
                                                 }
                                            });"
                                         class="col-lg-9 col-xl-6">
                                        <input type="file" name="filepond" wire:model="newAvatar" x-ref="input">
                                    </div>

                                </div>


{{--                                    <div class="col-lg-9 col-xl-6">--}}
{{--                                        @if($newAvatar)--}}
{{--                                            <div class="image-input image-input-outline image-input-empty"--}}
{{--                                                 style="background-image: url({{ $newAvatar->temporaryUrl() }})">--}}
{{--                                                @else--}}
{{--                                                    <div class="image-input image-input-outline image-input-empty"--}}
{{--                                                         style="background-image: url({{ auth()->user()->avatarUrl() }})">--}}
{{--                                                        @endif--}}
{{--                                                        <div class="image-input-wrapper"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>--}}
{{--                                            </div>--}}
{{--                                    </div>--}}
                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>--}}
                                    {{--                                        <div class="col-lg-9 col-xl-6">--}}
{{--                                    <input wire:model="newAvatar" id="file" style="display: none" name="filepond"--}}
{{--                                           class="form-control form-control-lg form-control-solid" type="file">--}}
                                    {{--                                            <label for="file" style="cursor: pointer"--}}
                                    {{--                                                   class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"><i--}}
                                    {{--                                                    class="fa fa-pen icon-sm text-muted"></i></label>--}}
                                    {{--                                            @error('newAvatar')--}}
                                    {{--                                            <div>--}}
                                    {{--                                                <span class="text-sm text-danger">{{ $message }}</span>--}}
                                    {{--                                            </div>@enderror--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input wire:model.lazy="name"
                                                   class="form-control form-control-lg form-control-solid" type="text">
                                            @error('name') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input wire:model.lazy="lastname"
                                                   class="form-control form-control-lg form-control-solid" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">About</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <textarea wire:model.lazy="about" class="form-control form-control-solid"
                                                      id="" cols="100" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-phone"></i>
																	</span>
                                                </div>
                                                <input type="text" value="+234586945683"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Phone">
                                            </div>
                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-at"></i>
																	</span>
                                                </div>
                                                <input wire:model.lazy="email" type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Address1</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input wire:model.lazy="address1" type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Address 1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Address2</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input wire:model.lazy="address2" type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Address 2">
                                            </div>
                                        </div>
                                    </div>
{{--                                </div>--}}
                                <!--end::Body-->
                </form>
                <!--end::Form-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Profile Personal Information-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>


