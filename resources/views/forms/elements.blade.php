@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Form Elements</h4>
               <div class="breadcrumb-action justify-content-center flex-wrap">
                  <div class="action-btn">
                     <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                           <span class="input-icon icon-left">
                           <span data-feather="calendar"></span>
                           </span>
                           <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                           <span class="input-icon icon-right">
                           <span data-feather="chevron-down"></span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-download"></i> Export
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <span class="dropdown-item">Export With</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-print"></i> Printer</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-pdf"></i> PDF</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-text"></i> Google Sheets</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-csv"></i> CSV</a>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-share"></i> Share
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <span class="dropdown-item">Share Link</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-facebook"></i> Facebook</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-twitter"></i> Twitter</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-google"></i> Google</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-feed"></i> Feed</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-instagram"></i> Instagram</a>
                     </div>
                  </div>
                  <div class="action-btn">
                     <a href="" class="btn btn-sm btn-primary btn-add">
                     <i class="la la-plus"></i> Add New</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form-element">
         <div class="row">
            <div class="col-lg-12">
               <div class="card card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Form Group in Grid</h6>
                  </div>
                  <div class="card-body py-md-25">
                     <form action="#">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="a1" class="il-gray fs-14 fw-500 align-center">One of Three
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a1" placeholder="One of Three Columns">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="a2" class="il-gray fs-14 fw-500 align-center">One of Three
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a2" placeholder="One of Three Columns">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="a3" class="il-gray fs-14 fw-500 align-center">One of Three
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a3" placeholder="One of Three Columns">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="a4" class="il-gray fs-14 fw-500 align-center">One of Four
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4" placeholder="One of Four Columns">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="a5" class="il-gray fs-14 fw-500 align-center">One of Four
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a5" placeholder="One of Four Columns">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="a6" class="il-gray fs-14 fw-500 align-center">One of Four
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a6" placeholder="One of Four Columns">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="a7" class="il-gray fs-14 fw-500 align-center">One of Four
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a7" placeholder="One of Four Columns">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="a8" class="il-gray fs-14 fw-500 align-center">One of Two
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a8" placeholder="One of Two Columns">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="a9" class="il-gray fs-14 fw-500 align-center">One of Two
                                 Columns</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a9" placeholder="One of Two Columns">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- ends: .card -->
            </div>
            <div class="col-lg-6">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Form Control</h6>
                        </div>
                        <div class="card-body pb-md-30">
                           <form action="#">
                              <div class="form-group">
                                 <label for="a10" class="il-gray fs-14 fw-500 align-center">Email Address</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a10" placeholder="username@email.com">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1" class="il-gray fs-14 fw-500 align-center">Example
                                 Select</label>
                                 <select class="form-control px-15" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Example
                                 multiple select</label>
                                 <div class="atbd-select ">
                                    <select name="select-tag" id="select-tag" class="form-control " multiple="multiple">
                                       <option value="01">Option 1</option>
                                       <option value="02">Option 2</option>
                                       <option value="03">Option 3</option>
                                       <option value="04">Option 4</option>
                                       <option value="05">Option 5</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group form-element-textarea mb-20">
                                 <label for="exampleFormControlTextarea1" class="il-gray fs-14 fw-500 align-center">Example
                                 textarea</label>
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="card card-horizontal card-default card-md mb-4">
                        <div class="card-header">
                           <h6>HTML5 Inputs</h6>
                        </div>
                        <div class="card-body py-md-30">
                           <div class="horizontal-form">
                              <form action="#">
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Text</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="inputName" placeholder="Duran Clayton">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="element-text" class=" col-form-label color-dark fs-14 fw-500 align-center">Email
                                       Address</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="email" class="form-control ih-medium ip-light radius-xs b-light px-15" id="element-text" placeholder="username@email.com">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="element-text2" class=" col-form-label color-dark fs-14 fw-500 align-center">URL</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="url" class="form-control ih-medium ip-light radius-xs b-light px-15" id="element-text2" placeholder="https://strikingdash-react-admin-dashboard-template">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="element-text3" class=" col-form-label color-dark fs-14 fw-500 align-center">Phone</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="number" class="form-control ih-medium ip-light radius-xs b-light px-15" id="element-text3" placeholder="017123456789">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="element-text4" class=" col-form-label color-dark fs-14 fw-500 align-center">Password</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="password" class="form-control ih-medium ip-light radius-xs b-light px-15" id="element-text4">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="element-text5" class=" col-form-label color-dark fs-14 fw-500 align-center">Number</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="number" class="form-control ih-medium ip-light radius-xs b-light px-15" id="element-text5" placeholder="123">
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="datepicker7" class=" col-form-label color-dark fs-14 fw-500 align-center">Datetime</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="position-relative">
                                          <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker7" placeholder="01/10/2021 12:00 AM">
                                          <a href="#"><span data-feather="calendar"></span></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="datepicker8" class=" col-form-label color-dark fs-14 fw-500 align-center">Date</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="position-relative">
                                          <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker8" placeholder="01/10/2021">
                                          <a href="#"><span data-feather="calendar"></span></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="datepicker" class=" col-form-label color-dark fs-14 fw-500 align-center">Month</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="position-relative">
                                          <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker" placeholder="January 20, 2018">
                                          <a href="#"><span data-feather="calendar"></span></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="datepicker9" class=" col-form-label color-dark fs-14 fw-500 align-center">Week</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="position-relative">
                                          <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker9" placeholder="Week 2, 2021">
                                          <a href="#"><span data-feather="calendar"></span></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender mb-20">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="#time-picker" class=" col-form-label color-dark fs-14 fw-500 align-center">Time</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="time-picker">
                                          <div class="form-group mb-0">
                                             <div class="input-container icon-right position-relative w-100 color-light ">
                                                <span class="input-icon icon-right">
                                                <span data-feather="clock"></span>
                                                </span>
                                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15 color-light" id="time-picker" placeholder="12:00 AM">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row form-group-calender mb-20">
                                    <div class="col-sm-3 d-flex aling-items-center">
                                       <label for="#time-picker" class=" col-form-label color-dark fs-14 fw-500 align-center">Color</label>
                                    </div>
                                    <div class="col-sm-9">
                                       <div class="color-picker">
                                          <div class="form-group mb-0">
                                             <div class="input-container icon-right position-relative w-100 color-light ">
                                                <input type="color" class="form-control ih-medium ip-light radius-xs b-light px-15 color-light" id="favcolor" value="#5F63F2">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- ends: .card -->
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Sizes</h6>
                        </div>
                        <div class="card-body">
                           <form action="#">
                              <div class="form-group">
                                 <label for="a10" class="il-gray fs-14 fw-500 align-center">Large Input</label>
                                 <input type="text" class="form-control ih-large ip-light radius-xs b-light px-15" id="a10" placeholder=".form-control.lg">
                              </div>
                              <div class="form-group">
                                 <label for="a10" class="il-gray fs-14 fw-500 align-center">Default Input</label>
                                 <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a10" placeholder="Default input">
                              </div>
                              <div class="form-group">
                                 <label for="a10" class="il-gray fs-14 fw-500 align-center">Small Input</label>
                                 <input type="text" class="form-control ih-small ip-light radius-xs b-light px-15" id="a10" placeholder=".form-control.sm">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Form Control</h6>
                        </div>
                        <div class="card-body">
                           <div class="form-group form-element-textarea">
                              <label for="exampleFormControlTextarea1" class="il-gray fs-14 fw-500 align-center">Example
                              basic</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                           <div class="form-group form-element-textarea">
                              <label for="exampleFormControlTextarea1" class="il-gray fs-14 fw-500 align-center">Unresizable
                              Textarea</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Sizes</h6>
                        </div>
                        <div class="card-body">
                           <div class="form-group select-px-15">
                              <label for="countryOption" class="il-gray fs-14 fw-500 align-center">Example
                              Select</label>
                              <select class="form-control px-15" id="countryOption">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="select-2" class="il-gray fs-14 fw-500 align-center">Disable
                              Select</label>
                              <div class="atbd-select disabled ">
                                 <select name="select-2" id="select-2" class="form-control  ih-medium ip-light radius-xs b-light px-15" disabled="">
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group select-px-15">
                              <label for="tag2" class="il-gray fs-14 fw-500 align-center">Example
                              multiple select</label>
                              <div class="atbd-select ">
                                 <select name="select-tag2" id="select-tag2" class="form-control " multiple="multiple">
                                    <option value="01">Option 1</option>
                                    <option value="02">Option 2</option>
                                    <option value="03">Option 3</option>
                                    <option value="04">Option 4</option>
                                    <option value="05">Option 5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="select-3" class="il-gray fs-14 fw-500 align-center">Disable
                              multiple select</label>
                              <div class="atbd-select disabled ">
                                 <select name="select-2" id="select-3" class="form-control  ih-medium ip-light radius-xs b-light px-15" disabled="">
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                    <option value="01">Option 1</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="card  card-default card-md mb-4">
                        <div class="card-header">
                           <h6>File Browser</h6>
                        </div>
                        <div class="card-body pb-md-40 pt-md-30">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label pl-15" for="customFile">Browse</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="card  card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Checkboxes and Radios</h6>
                        </div>
                        <div class="card-body form-element-radioChecks">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                       <input class="checkbox" type="checkbox" id="check-un1">
                                       <label for="check-un1">
                                       <span class="checkbox-text">
                                       Uncheck
                                       </span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="mb-3">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                       <input class="checkbox" type="checkbox" id="check-un3" checked>
                                       <label for="check-un3">
                                       <span class="checkbox-text">
                                       Checked
                                       </span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="checkbox-list">
                                    <div class="checkbox-list__single mb-3">
                                       <div class="checkbox-theme-default custom-checkbox disabled ">
                                          <input class="checkbox" type="checkbox" id="check-5">
                                          <label for="check-5">
                                          <span class="checkbox-text">
                                          Disabled Unchecked
                                          </span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="checkbox-list__single">
                                       <div class="checkbox-theme-default custom-checkbox disabled ">
                                          <input class="checkbox" type="checkbox" id="check-4" checked>
                                          <label for="check-4">
                                          <span class="checkbox-text">
                                          Disabled checked
                                          </span>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <div class="radio-theme-default custom-radio ">
                                       <input class="radio" type="radio" name="radio-default" value=0 id="radio-un2">
                                       <label for="radio-un2">
                                       <span class="radio-text">Uncheck</span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="mb-3">
                                    <div class="radio-theme-default custom-radio ">
                                       <input class="radio" type="radio" name="radio-default" value=0 id="radio-un4" checked>
                                       <label for="radio-un4">
                                       <span class="radio-text">Checked</span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="mb-3">
                                    <div class="radio-theme-default custom-radio disabled ">
                                       <input class="radio" type="radio" name="radio-default" value=0 id="radio-2">
                                       <label for="radio-2">
                                       <span class="radio-text">Disabled Unchecked</span>
                                       </label>
                                    </div>
                                 </div>
                                 <div>
                                    <div class="radio-theme-default custom-radio disabled ">
                                       <input class="radio" type="radio" name="radio-default2" value="0" id="radio-3" checked="">
                                       <label for="radio-3">
                                       <span class="radio-text">Disabled Checked</span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection